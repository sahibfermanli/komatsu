<?php

namespace App\Http\Controllers\Frontend;


use App\Http\Requests\Frontend\Message\StoreMessageRequest;
use App\Http\Resources\Backend\GeneralResource;
use App\Models\Message;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;

class ContactController extends BaseController
{
    public function index(): Factory|View|Application
    {
        return view('frontend.contact');
    }

    public function send_message(StoreMessageRequest $request): JsonResponse
    {
        Message::query()->create($request->validated());

        return response()->json(GeneralResource::make([
            'message' => 'Your message was successfully sent!',
        ]));
    }
}
