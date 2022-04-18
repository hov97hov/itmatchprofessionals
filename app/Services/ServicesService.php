<?php

namespace App\Services;

use App\Models\Services;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

/**
 * Class AddressService
 * @package App\Services\Address
 */
class ServicesService
{

    /**
     * @throws \Exception
     */
    public function list(): LengthAwarePaginator
    {
        return Services::query()->paginate(15);

    }

}






