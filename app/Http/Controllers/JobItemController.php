<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use App\Models\SocialLink;
use App\Models\Vacancy;

class JobItemController extends Controller
{
    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index($id)
    {
        $jobItem = Vacancy::where('id', $id)->first();

        $footer = Footer::query()->get();

        $footerSocial = SocialLink::query()->get();

        return view('content.job-item', ['jobItem' => $jobItem, 'footer' => $footer, 'social' => $footerSocial]);
    }
}
