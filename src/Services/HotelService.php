<?php

namespace App\Services;




use App\Repositories\Interfaces\HotelRepositoryInterface;

final class HotelService extends ServiceCore
{

    public function __construct(
        private readonly HotelRepositoryInterface $hotelRepository
    ) {}

    public function indexData()
    {
        return $this->hotelRepository->all();
    }

}