<?php

namespace App\Service;

use App\Entity\Category;
use App\Repository\ArticleRepository;
use Knp\Component\Pager\Pagination\PaginationInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\RequestStack;



class ArticleService
{
	public function __construct(
		private RequestStack $requestStatck,
		private ArticleRepository $articleRepo,
		private PaginatorInterface $paginator
	)
	{
		
	}

	public function getPaginatedArticles(?Category $category = null): PaginationInterface
	{
		$request = $this->requestStatck->getMainRequest();
		$page = $request->query->getInt('page', 1);
		$limit = 2;

		$articleQuery = $this->articleRepo->findForPagination($category);

		return $this->paginator->paginate($articleQuery, $page, $limit);
	}
}
