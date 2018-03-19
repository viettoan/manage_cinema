<?php
namespace App\Repositories;
use App\Constracts\MovieRepository;
use App\Models\Movie;
use App\Repositories\AbstractRepositoryEloquent;

class MovieRepositoryEloquent extends AbstractRepositoryEloquent implements MovieRepository
{
	public function model()
	{
		return new Movie;
	}
}