<?php
namespace App\Repositories;
use App\Constracts\RatingRepository;
use App\Models\Rating;
use App\Repositories\AbstractRepositoryEloquent;

class RatingRepositoryEloquent extends AbstractRepositoryEloquent implements RatingRepository
{
	public function model()
	{
		return new Rating;
	}
}