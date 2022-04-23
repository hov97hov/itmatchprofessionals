<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use App\Models\SocialLink;

class FooterController extends Controller
{
    public function footerItem($id)
    {
        $footerItem = Footer::where('id', $id)->first();

        $footer = Footer::query()->get();

        $footerSocial = SocialLink::query()->get();

        return view('footer.footer-item', ['footerItem' => $footerItem, 'footer' => $footer, 'social' => $footerSocial]);
    }
}
