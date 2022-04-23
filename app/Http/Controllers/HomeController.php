<?php

namespace App\Http\Controllers;

use App\Models\BannerText;
use App\Models\Footer;
use App\Models\SignUp;
use App\Models\SocialLink;
use App\Services\SearchJobService;

class HomeController extends Controller
{
    private $searchJobService;

    public function __construct(SearchJobService $searchJobService)
    {
        $this->searchJobService = $searchJobService;
    }

    /**
     * @throws \Exception
     */
    public function index()
    {
        $vacancies = $this->searchJobService->list();
        $footer = Footer::query()->get();
        $footerSocial = SocialLink::query()->get();
        $bannerText = BannerText::query()->get();
        $SignUp = SignUp::query()->orderBy('id', 'DESC')->limit(1)->get();

        return view('content.index', [
            'vacancies' => $vacancies,
            'footer' => $footer,
            'social' => $footerSocial,
            'banner' => $bannerText,
            'signUp' => $SignUp
        ]);
    }
}
