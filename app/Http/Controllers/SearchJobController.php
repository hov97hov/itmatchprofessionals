<?php

namespace App\Http\Controllers;

use App\Services\ContactUsService;
use App\Services\SearchJobService;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;

class SearchJobController extends Controller
{
    private $searchJobService;

    public function __construct(SearchJobService $searchJobService)
    {
        $this->searchJobService = $searchJobService;
    }

    /**
     * @throws \Exception
     */
    public function search(Request $request): array
    {
        return $this->searchJobService->searchJobService($request);
    }

    /**
     * @throws \Exception
     */
    public function list(): LengthAwarePaginator
    {
        $vacancies = $this->searchJobService->list();

        return $vacancies;
    }
}
