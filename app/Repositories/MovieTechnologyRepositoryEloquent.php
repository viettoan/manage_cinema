<?php
namespace App\Repositories;
use App\Constracts\MovieTechnologyRepository;
use App\Models\MovieTechnology;
use App\Repositories\AbstractRepositoryEloquent;

class MovieTechnologyRepositoryEloquent extends AbstractRepositoryEloquent implements MovieTechnologyRepository
{
	public function model()
	{
		return new MovieTechnology;
	}
}