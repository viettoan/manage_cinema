<?php
namespace App\Repositories;
use App\Constracts\TypeRepository;
use App\Models\Type;
use App\Repositories\AbstractRepositoryEloquent;

class TypeRepositoryEloquent extends AbstractRepositoryEloquent implements TypeRepository
{
	public function model()
	{
		return new Type;
	}
}