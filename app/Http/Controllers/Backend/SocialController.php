<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\GeneralListRequest;
use App\Http\Requests\Backend\Social\SocialStoreRequest;
use App\Http\Resources\Backend\GeneralResource;
use App\Http\Resources\Backend\Social\SocialsResource;
use App\Models\Social;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class SocialController extends Controller
{
    /**
     * Display a view
     *
     * @return View
     */
    public function index(): View
    {
        return view('backend.socials');
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

        $response = Social::query()
            ->with(['created_user'])
            ->when($search, static function ($query) use ($search) {
                $query->where('name', 'LIKE', "%$search%");
                $query->orWhere('icon', 'LIKE', "%$search%");
                $query->orWhere('url', 'LIKE', "%$search%");
            })
            ->orderByDesc('id')
            ->paginate(perPage: $per_page, page: $current_page);

        return SocialsResource::collection($response)->additional([
            'meta' => [
                'perpage' => $per_page,
                'page' => $current_page
            ]
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param SocialStoreRequest $request
     * @return JsonResponse
     */
    public function store(SocialStoreRequest $request): JsonResponse
    {
        Social::query()->create($request->validated());

        return response()->json(GeneralResource::make([
            'message' => 'New item added successfully!',
        ]));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param SocialStoreRequest $request
     * @param Social $social
     * @return JsonResponse
     */
    public function update(SocialStoreRequest $request, Social $social): JsonResponse
    {
        $social->update($request->validated());

        return response()->json(GeneralResource::make([
            'message' => 'Selected item updated successfully!',
        ]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Social $social
     * @return JsonResponse
     */
    public function destroy(Social $social): JsonResponse
    {
        $social->delete();

        return response()->json(GeneralResource::make([
            'message' => 'Selected item deleted successfully!',
        ]));
    }
}
