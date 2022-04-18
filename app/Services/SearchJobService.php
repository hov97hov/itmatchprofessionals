<?php

namespace App\Services;

use App\Models\Vacancy;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

/**
 * Class AddressService
 * @package App\Services\Address
 */
class SearchJobService
{

    /**
     * @throws \Exception
     */
    public function searchJobService($data): array
    {
        return Vacancy::query()->where('title', 'like', '%' . $data->search . '%')->where('work_type', 'like', '%' . $data->selectType . '%')->get()->toArray();

    }

    /**
     * @throws \Exception
     */
    public function list(): LengthAwarePaginator
    {
        return Vacancy::query()->paginate(10);

    }

}






