<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Brochure\BrochureStoreRequest;
use App\Http\Requests\Backend\Brochure\BrochureUpdateRequest;
use App\Http\Requests\Backend\GeneralListRequest;
use App\Http\Resources\Backend\Brochure\BrochuresResource;
use App\Http\Resources\Backend\GeneralResource;
use App\Models\Brochure;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileDoesNotExist;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileIsTooBig;

class BrochureController extends Controller
{
    /**
     * Display a view
     *
     * @return View
     */
    public function index(): View
    {
        return view('backend.brochures');
    }

    /**
     * Display a listing of the resource.
     *
     */
    public function list(GeneralListRequest $request): AnonymousResourceCollection
    {
        $data = $request->validated();
        $search = $data['query']['search'] ?? null;

        $per_page = $data['pagination']['perpage'] ?? 10;
        $current_page = $data['pagination']['page'] ?? 1;

        $response = Brochure::query()
            ->with(['created_user', 'media'])
            ->when($search, static function ($query) use ($search) {
                $query->where(function($query) use ($search) {
                    $query->where('title_az', 'LIKE', "%$search%");
                    $query->orWhere('title_en', 'LIKE', "%$search%");
                    $query->orWhere('title_ru', 'LIKE', "%$search%");
                });
            })
            ->orderByDesc('id')
            ->paginate(perPage: $per_page, page: $current_page);

        return BrochuresResource::collection($response)->additional([
            'meta' => [
                'perpage' => $per_page,
                'page' => $current_page
            ],
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param BrochureStoreRequest $request
     * @return JsonResponse
     */
    public function store(BrochureStoreRequest $request): JsonResponse
    {
        $brochure = Brochure::query()->create($request->validated());

        $brochure->addMediaFromRequest('image')->toMediaCollection('brochures');
        $brochure->addMediaFromRequest('file')->toMediaCollection('brochures_file');

        return response()->json(GeneralResource::make([
            'message' => 'New item added successfully!',
        ]));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param BrochureUpdateRequest $request
     * @param Brochure $brochure
     * @return JsonResponse
     */
    public function update(BrochureUpdateRequest $request, Brochure $brochure): JsonResponse
    {
        $brochure->update($request->validated());

        if($request->hasFile('image') && $request->file('image')?->isValid()) {
            try {
                $brochure->clearMediaCollection();
                $brochure->addMediaFromRequest('image')->toMediaCollection('brochures');
            } catch (FileDoesNotExist|FileIsTooBig) {
                return response()->json(GeneralResource::make([
                    'message' => 'Selected item updated successfully but image cannot be updated!',
                ]));
            }
        }

        if($request->hasFile('file') && $request->file('file')?->isValid()) {
            try {
                $brochure->clearMediaCollection();
                $brochure->addMediaFromRequest('file')->toMediaCollection('brochures_file');
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
     * @param Brochure $brochure
     * @return JsonResponse
     */
    public function destroy(Brochure $brochure): JsonResponse
    {
        $brochure->delete();

        return response()->json(GeneralResource::make([
            'message' => 'Selected item deleted successfully!',
        ]));
    }
}
