<?php
namespace App\Repositories;
use App\Constracts\CinemaRepository;
use App\Models\Cinema;
use App\Repositories\AbstractRepositoryEloquent;

class CinemaRepositoryEloquent extends AbstractRepositoryEloquent implements CinemaRepository
{
	public function model()
	{
		return new Cinema;
	}
}