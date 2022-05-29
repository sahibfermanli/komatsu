<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\GeneralListRequest;
use App\Http\Requests\Backend\Service\ServiceStoreRequest;
use App\Http\Resources\Backend\GeneralResource;
use App\Http\Resources\Backend\Service\ServicesResource;
use App\Models\Service;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class ServiceController extends Controller
{
    /**
     * Display a view
     *
     * @return View
     */
    public function index(): View
    {
        return view('backend.services');
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

        $response = Service::query()
            ->with(['created_user'])
            ->when($search, static function ($query) use ($search) {
                $query->where('name_az', 'LIKE', "%$search%");
                $query->orWhere('name_en', 'LIKE', "%$search%");
                $query->orWhere('name_ru', 'LIKE', "%$search%");
                $query->orWhere('description_az', 'LIKE', "%$search%");
                $query->orWhere('description_en', 'LIKE', "%$search%");
                $query->orWhere('description_ru', 'LIKE', "%$search%");
            })
            ->orderByDesc('id')
            ->paginate(perPage: $per_page, page: $current_page);

        return ServicesResource::collection($response)->additional([
            'meta' => [
                'perpage' => $per_page,
                'page' => $current_page
            ]
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ServiceStoreRequest $request
     * @return JsonResponse
     */
    public function store(ServiceStoreRequest $request): JsonResponse
    {
        Service::query()->create($request->validated());

        return response()->json(GeneralResource::make([
            'message' => 'New item added successfully!',
        ]));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ServiceStoreRequest $request
     * @param Service $service
     * @return JsonResponse
     */
    public function update(ServiceStoreRequest $request, Service $service): JsonResponse
    {
        $service->update($request->validated());

        return response()->json(GeneralResource::make([
            'message' => 'Selected item updated successfully!',
        ]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Service $service
     * @return JsonResponse
     */
    public function destroy(Service $service): JsonResponse
    {
        $service->delete();

        return response()->json(GeneralResource::make([
            'message' => 'Selected item deleted successfully!',
        ]));
    }
}
