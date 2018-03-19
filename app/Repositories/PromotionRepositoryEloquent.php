<?php
namespace App\Repositories;
use App\Constracts\PromotionRepository;
use App\Models\Promotion;
use App\Repositories\AbstractRepositoryEloquent;

class PromotionRepositoryEloquent extends AbstractRepositoryEloquent implements promotionRepository
{
	public function model()
	{
		return new Promotion;
	}
}