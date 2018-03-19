<?php
namespace App\Repositories;
use App\Constracts\MovieTypeRepository;
use App\Models\MovieType;
use App\Repositories\AbstractRepositoryEloquent;

class MovieTypeRepositoryEloquent extends AbstractRepositoryEloquent implements MovieTypeRepository
{
	public function model()
	{
		return new MovieType;
	}
}