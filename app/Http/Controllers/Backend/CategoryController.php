<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Category\CategoryListRequest;
use App\Http\Requests\Backend\Category\CategoryStoreRequest;
use App\Http\Requests\Backend\Category\CategoryUpdateRequest;
use App\Http\Resources\Backend\Category\CategoriesResource;
use App\Http\Resources\Backend\GeneralResource;
use App\Models\Category;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileDoesNotExist;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileIsTooBig;

class CategoryController extends Controller
{
    /**
     * Display a view
     *
     * @return View
     */
    public function index(): View
    {
        return view('backend.categories');
    }

    /**
     * Display a listing of the resource.
     *
     */
    public function list(CategoryListRequest $request): AnonymousResourceCollection
    {
        $data = $request->validated();
        $search = $data['query']['search'] ?? null;
        $parent_id = $data['query']['parent_id'] ?? null;

        $per_page = $data['pagination']['perpage'] ?? 10;
        $current_page = $data['pagination']['page'] ?? 1;

        $response = Category::query()
            ->with(['created_user', 'parent', 'media'])
            ->when($parent_id, static function ($query) use ($parent_id) {
                $query->where('parent_id', $parent_id);
            })
            ->when($search, static function ($query) use ($search) {
                $query->where(function($query) use ($search) {
                    $query->where('name_az', 'LIKE', "%$search%");
                    $query->orWhere('name_en', 'LIKE', "%$search%");
                    $query->orWhere('name_ru', 'LIKE', "%$search%");
                    $query->orWhere('description_az', 'LIKE', "%$search%");
                    $query->orWhere('description_en', 'LIKE', "%$search%");
                    $query->orWhere('description_ru', 'LIKE', "%$search%");
                });
            })
            ->orderByDesc('id')
            ->paginate(perPage: $per_page, page: $current_page);

        $parents = Category::query()
            ->whereNull('parent_id')
            ->select('id', 'name_en as title')
            ->get();

        return CategoriesResource::collection($response)->additional([
            'meta' => [
                'perpage' => $per_page,
                'page' => $current_page
            ],
            'parents' => $parents
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CategoryStoreRequest $request
     * @return JsonResponse
     */
    public function store(CategoryStoreRequest $request): JsonResponse
    {
        $category = Category::query()->create($request->validated());

        $category->addMediaFromRequest('image')->toMediaCollection('categories');

        return response()->json(GeneralResource::make([
            'message' => 'New item added successfully!',
        ]));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CategoryUpdateRequest $request
     * @param Category $category
     * @return JsonResponse
     */
    public function update(CategoryUpdateRequest $request, Category $category): JsonResponse
    {
        $category->update($request->validated());

        if($request->hasFile('image') && $request->file('image')?->isValid()) {
            try {
                $category->clearMediaCollection();
                $category->addMediaFromRequest('image')->toMediaCollection('categories');
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
     * @param Category $category
     * @return JsonResponse
     */
    public function destroy(Category $category): JsonResponse
    {
        $category->delete();

        return response()->json(GeneralResource::make([
            'message' => 'Selected item deleted successfully!',
        ]));
    }
}
