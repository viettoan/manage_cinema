<?php
namespace App\Repositories;
use App\Constracts\CityRepository;
use App\Models\City;
use App\Repositories\AbstractRepositoryEloquent;

class CityRepositoryEloquent extends AbstractRepositoryEloquent implements CityRepository
{
	public function model()
	{
		return new City;
	}
}