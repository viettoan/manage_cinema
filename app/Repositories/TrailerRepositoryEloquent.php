<?php
namespace App\Repositories;
use App\Constracts\TrailerRepository;
use App\Models\Trailer;
use App\Repositories\AbstractRepositoryEloquent;

class TrailerRepositoryEloquent extends AbstractRepositoryEloquent implements TrailerRepository
{
	public function model()
	{
		return new Trailer;
	}
}