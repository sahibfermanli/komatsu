<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Slider\SliderListRequest;
use App\Http\Requests\Backend\Slider\SliderStoreRequest;
use App\Http\Requests\Backend\Slider\SliderUpdateRequest;
use App\Http\Resources\Backend\GeneralResource;
use App\Http\Resources\Backend\Slider\SlidersResource;
use App\Models\Slider;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileDoesNotExist;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileIsTooBig;

class SliderController extends Controller
{
    /**
     * Display a view
     *
     * @return View
     */
    public function index(): View
    {
        return view('backend.sliders');
    }

    /**
     * Display a listing of the resource.
     *
     */
    public function list(SliderListRequest $request): AnonymousResourceCollection
    {
        $data = $request->validated();
        $search = $data['query']['search'] ?? null;
        $is_active = $data['query']['is_active'] ?? null;

        $per_page = $data['pagination']['perpage'] ?? 10;
        $current_page = $data['pagination']['page'] ?? 1;

        $response = Slider::query()
            ->with(['created_user', 'media'])
            ->when($is_active, static function ($query) use ($is_active) {
                if ((int) $is_active === 2) {
                    $query->where('is_active', true);
                } else if ((int) $is_active === 3) {
                    $query->where('is_active', false);
                }
            })
            ->when($search, static function ($query) use ($search) {
                $query->where(function($query) use ($search) {
                    $query->where('title_az', 'LIKE', "%$search%");
                    $query->orWhere('title_en', 'LIKE', "%$search%");
                    $query->orWhere('title_ru', 'LIKE', "%$search%");
                    $query->orWhere('description_az', 'LIKE', "%$search%");
                    $query->orWhere('description_en', 'LIKE', "%$search%");
                    $query->orWhere('description_ru', 'LIKE', "%$search%");
                });
            })
            ->orderByDesc('id')
            ->paginate(perPage: $per_page, page: $current_page);

        return SlidersResource::collection($response)->additional([
            'meta' => [
                'perpage' => $per_page,
                'page' => $current_page
            ]
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param SliderStoreRequest $request
     * @return JsonResponse
     */
    public function store(SliderStoreRequest $request): JsonResponse
    {
        $slider = Slider::query()->create($request->validated());

        $slider->addMediaFromRequest('image')->toMediaCollection('sliders');

        return response()->json(GeneralResource::make([
            'message' => 'New item added successfully!',
        ]));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param SliderUpdateRequest $request
     * @param Slider $slider
     * @return JsonResponse
     */
    public function update(SliderUpdateRequest $request, Slider $slider): JsonResponse
    {
        $slider->update($request->validated());

        if($request->hasFile('image') && $request->file('image')?->isValid()) {
            try {
                $slider->clearMediaCollection();
                $slider->addMediaFromRequest('image')->toMediaCollection('sliders');
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
     * @param Slider $slider
     * @return JsonResponse
     */
    public function destroy(Slider $slider): JsonResponse
    {
        $slider->delete();

        return response()->json(GeneralResource::make([
            'message' => 'Selected item deleted successfully!',
        ]));
    }
}
