<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Setting\SettingUpdateRequest;
use App\Http\Resources\Backend\GeneralResource;
use App\Http\Resources\Backend\Setting\SettingsResource;
use App\Models\Setting;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileDoesNotExist;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileIsTooBig;

class SettingController extends Controller
{
    /**
     * Display a view
     *
     * @return View
     */
    public function index(): View
    {
        return view('backend.settings');
    }

    /**
     * Display a listing of the resource.
     *
     */
    public function list(): SettingsResource
    {
        $response = Setting::query()
            ->where('id', 1)
            ->with(['updated_user'])
            ->first();

        return new SettingsResource($response);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param SettingUpdateRequest $request
     * @return JsonResponse
     */
    public function update(SettingUpdateRequest $request): JsonResponse
    {
        $settings = Setting::query()->find(1);

        $settings->update($request->validated());

        if($request->hasFile('logo') && $request->file('logo')?->isValid()) {
            try {
                $settings->clearMediaCollection();
                $settings->addMediaFromRequest('logo')->toMediaCollection('settings')->setCustomProperty('permission', '777');
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
}
