<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactUsRequest;
use App\Models\BannerText;
use App\Models\ContactInfo;
use App\Models\Footer;
use App\Models\SocialLink;
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
        $footer = Footer::query()->get();
        $footerSocial = SocialLink::query()->get();
        $bannerText = BannerText::query()->get();
        $contactInfo = ContactInfo::query()->orderBy('id', 'DESC')->limit(1)->get();

        return view('contact.index', ['footer' => $footer, 'social' => $footerSocial, 'banner' => $bannerText, 'contactInfo' => $contactInfo]);
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
