<?php
namespace App\Repositories;
use App\Constracts\PostRepository;
use App\Models\Post;
use App\Repositories\AbstractRepositoryEloquent;

class PostRepositoryEloquent extends AbstractRepositoryEloquent implements PostRepository
{
	public function model()
	{
		return new Post;
	}
}