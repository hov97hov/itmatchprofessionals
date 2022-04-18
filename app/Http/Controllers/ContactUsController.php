<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactUsRequest;
use App\Services\ContactUsService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class ContactUsController extends Controller
{
    private $contactUsService;

    public function __construct(ContactUsService $contactUsService)
    {
        $this->contactUsService = $contactUsService;
    }

    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('contact.index');
    }

    /**
     * @param ContactUsRequest $request
     * @return bool
     * @throws \Exception
     */
    public function sendContactMail(ContactUsRequest $request): bool
    {
        $data = $request->validated();

        return $this->contactUsService->sendContactMail($data);


    }

}
