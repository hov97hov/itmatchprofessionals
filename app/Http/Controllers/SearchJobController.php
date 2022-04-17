<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchJobController extends Controller
{
    public function search(Request $request)
    {
        dd($request->all());
    }
}
