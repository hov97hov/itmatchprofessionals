<?php

namespace App\Http\Controllers;

use App\Services\ServicesService;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

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

        return view('services.index', ['services' => $services]);
    }
}
