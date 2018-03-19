<?php
namespace App\Repositories;
use App\Constracts\CinemaSystemRepository;
use App\Models\CinemaSystem;
use App\Repositories\AbstractRepositoryEloquent;

class CinemaSystemRepositoryEloquent extends AbstractRepositoryEloquent implements CinemasystemRepository
{
	public function model()
	{
		return new CinemaSystem;
	}
}