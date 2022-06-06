<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\GeneralListRequest;
use App\Http\Requests\Backend\Partner\PartnerStoreRequest;
use App\Http\Requests\Backend\Partner\PartnerUpdateRequest;
use App\Http\Resources\Backend\GeneralResource;
use App\Http\Resources\Backend\Partner\PartnersResource;
use App\Models\Partner;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileDoesNotExist;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileIsTooBig;

class PartnerController extends Controller
{
    /**
     * Display a view
     *
     * @return View
     */
    public function index(): View
    {
        return view('backend.partners');
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

        $response = Partner::query()
            ->with(['created_user', 'media'])
            ->when($search, static function ($query) use ($search) {
                $query->where(function($query) use ($search) {
                    $query->where('name', 'LIKE', "%$search%");
                    $query->orWhere('url', 'LIKE', "%$search%");
                });
            })
            ->orderByDesc('id')
            ->paginate(perPage: $per_page, page: $current_page);

        return PartnersResource::collection($response)->additional([
            'meta' => [
                'perpage' => $per_page,
                'page' => $current_page
            ]
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param PartnerStoreRequest $request
     * @return JsonResponse
     */
    public function store(PartnerStoreRequest $request): JsonResponse
    {
        $partner = Partner::query()->create($request->validated());

        $partner->addMediaFromRequest('image')->toMediaCollection('partners');

        return response()->json(GeneralResource::make([
            'message' => 'New item added successfully!',
        ]));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param PartnerUpdateRequest $request
     * @param Partner $partner
     * @return JsonResponse
     */
    public function update(PartnerUpdateRequest $request, Partner $partner): JsonResponse
    {
        $partner->update($request->validated());

        if($request->hasFile('image') && $request->file('image')?->isValid()) {
            try {
                $partner->clearMediaCollection();
                $partner->addMediaFromRequest('image')->toMediaCollection('partners');
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
     * @param Partner $partner
     * @return JsonResponse
     */
    public function destroy(Partner $partner): JsonResponse
    {
        $partner->delete();

        return response()->json(GeneralResource::make([
            'message' => 'Selected item deleted successfully!',
        ]));
    }
}
