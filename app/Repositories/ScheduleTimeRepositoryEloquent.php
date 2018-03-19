<?php
namespace App\Repositories;
use App\Constracts\ScheduleTimeRepository;
use App\Models\ScheduleTime;
use App\Repositories\AbstractRepositoryEloquent;

class ScheduleTimeRepositoryEloquent extends AbstractRepositoryEloquent implements ScheduleTimeRepository
{
	public function model()
	{
		return new ScheduleTime;
	}
}