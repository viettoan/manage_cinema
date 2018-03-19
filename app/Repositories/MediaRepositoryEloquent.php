<?php
namespace App\Repositories;
use App\Constracts\MediaRepository;
use App\Models\Media;
use App\Repositories\AbstractRepositoryEloquent;

class MediaRepositoryEloquent extends AbstractRepositoryEloquent implements MediaRepository
{
	public function model()
	{
		return new Media;
	}
}