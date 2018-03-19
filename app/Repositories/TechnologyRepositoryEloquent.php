<?php
namespace App\Repositories;
use App\Constracts\TechnologyRepository;
use App\Models\Technology;
use App\Repositories\AbstractRepositoryEloquent;

class TechnologyRepositoryEloquent extends AbstractRepositoryEloquent implements TechnologyRepository
{
	public function model()
	{
		return new Technology;
	}
}