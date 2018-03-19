<?php
namespace App\Repositories;
use App\Constracts\CommentRepository;
use App\Models\Comment;
use App\Repositories\AbstractRepositoryEloquent;

class CommentRepositoryEloquent extends AbstractRepositoryEloquent implements CommentRepository
{
	public function model()
	{
		return new Comment;
	}
}