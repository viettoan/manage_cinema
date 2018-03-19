<?php
namespace App\Repositories;
use App\Constracts\BookingRepository;
use App\Models\Booking;
use App\Repositories\AbstractRepositoryEloquent;

class BookingRepositoryEloquent extends AbstractRepositoryEloquent implements BookingRepository
{
	public function model()
	{
		return new Booking;
	}
}