<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Product\ProductListRequest;
use App\Http\Requests\Backend\Product\ProductStoreRequest;
use App\Http\Requests\Backend\Product\ProductUpdateRequest;
use App\Http\Resources\Backend\GeneralResource;
use App\Http\Resources\Backend\Product\ProductsResource;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileDoesNotExist;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileIsTooBig;

class ProductController extends Controller
{
    /**
     * Display a view
     *
     * @return View
     */
    public function index(): View
    {
        return view('backend.products');
    }

    /**
     * Display a listing of the resource.
     *
     */
    public function list(ProductListRequest $request): AnonymousResourceCollection
    {
        $data = $request->validated();
        $search = $data['query']['search'] ?? null;
        $category_id = $data['query']['category_id'] ?? null;

        $per_page = $data['pagination']['perpage'] ?? 10;
        $current_page = $data['pagination']['page'] ?? 1;

        $response = Product::query()
            ->with(['created_user', 'category', 'media'])
            ->when($category_id, static function ($query) use ($category_id) {
                $query->where('category_id', $category_id);
            })
            ->when($search, static function ($query) use ($search) {
                $query->where(function($query) use ($search) {
                    $query->where('name_az', 'LIKE', "%$search%");
                    $query->orWhere('name_en', 'LIKE', "%$search%");
                    $query->orWhere('name_ru', 'LIKE', "%$search%");
                    $query->orWhere('model', 'LIKE', "%$search%");
                    $query->orWhere('capacity', 'LIKE', "%$search%");
                    $query->orWhere('front', 'LIKE', "%$search%");
                    $query->orWhere('travel_speed', 'LIKE', "%$search%");
                    $query->orWhere('lifting_speed', 'LIKE', "%$search%");
                    $query->orWhere('outside_turning_radius', 'LIKE', "%$search%");
                    $query->orWhere('operating_weight', 'LIKE', "%$search%");
                    $query->orWhere('engine_power', 'LIKE', "%$search%");
                });
            })
            ->orderByDesc('id')
            ->paginate(perPage: $per_page, page: $current_page);

        $categories = Category::query()
            ->select('id', 'name_en as title')
            ->get();

        return ProductsResource::collection($response)->additional([
            'meta' => [
                'perpage' => $per_page,
                'page' => $current_page
            ],
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ProductStoreRequest $request
     * @return JsonResponse
     */
    public function store(ProductStoreRequest $request): JsonResponse
    {
        $product = Product::query()->create($request->validated());

        $product->addMediaFromRequest('image')->toMediaCollection('products');

        return response()->json(GeneralResource::make([
            'message' => 'New item added successfully!',
        ]));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ProductUpdateRequest $request
     * @param Product $product
     * @return JsonResponse
     */
    public function update(ProductUpdateRequest $request, Product $product): JsonResponse
    {
        $product->update($request->validated());

        if($request->hasFile('image') && $request->file('image')?->isValid()) {
            try {
                $product->clearMediaCollection();
                $product->addMediaFromRequest('image')->toMediaCollection('products');
            } catch (FileDoesNotExist|FileIsTooBig) {
                return response()->json(GeneralResource::make([
                    'message' => 'Selected item updated successfully but image cannot be updated!',
                ]));
            }
        }

        return response()->json(GeneralResource::make([
            'message' => 'Selected item updated successfully!',
        ]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Product $product
     * @return JsonResponse
     */
    public function destroy(Product $product): JsonResponse
    {
        $product->delete();

        return response()->json(GeneralResource::make([
            'message' => 'Selected item deleted successfully!',
        ]));
    }
}
