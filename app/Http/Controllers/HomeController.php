<?php

namespace App\Http\Controllers;

use App\Services\SearchJobService;
use Illuminate\Http\Request;

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

        return view('content.index', ['vacancies' => $vacancies]);
    }
}
