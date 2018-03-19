<?php
namespace App\Repositories;
use App\Constracts\TimeRepository;
use App\Models\time;
use App\Repositories\AbstractRepositoryEloquent;

class TimeRepositoryEloquent extends AbstractRepositoryEloquent implements TimeRepository
{
	public function model()
	{
		return new Time;
	}
}