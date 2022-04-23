<?php

namespace App\Http\Controllers;

use App\Models\BannerText;
use App\Models\Footer;
use App\Models\Services;
use App\Models\SocialLink;
use App\Services\ServicesService;
class ServicesController extends Controller
{
    private $servicesService;

    public function __construct(ServicesService $servicesService)
    {
        $this->servicesService = $servicesService;
    }

    public function index()
    {
        $services = $this->servicesService->list();

        $footer = Footer::query()->get();
        $footerSocial = SocialLink::query()->get();
        $bannerText = BannerText::query()->get();

        return view('services.index', ['services' => $services, 'footer' => $footer, 'social' => $footerSocial, 'banner' => $bannerText]);
    }

    /**
     * @param $id
     * @return void
     */
    public function item($id)
    {
        $service = Services::where('id', $id)->first();
        $footer = Footer::query()->get();
        $footerSocial = SocialLink::query()->get();

       return view('services.service-item', ['service' => $service, 'footer' => $footer, 'social' => $footerSocial]);
    }
}
