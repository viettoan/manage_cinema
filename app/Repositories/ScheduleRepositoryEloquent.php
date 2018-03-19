<?php
namespace App\Repositories;
use App\Constracts\ScheduleRepository;
use App\Models\Schedule;
use App\Repositories\AbstractRepositoryEloquent;

class ScheduleRepositoryEloquent extends AbstractRepositoryEloquent implements ScheduleRepository
{
	public function model()
	{
		return new Schedule;
	}
}