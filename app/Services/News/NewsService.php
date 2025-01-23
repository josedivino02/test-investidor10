<?php

namespace App\Services\News;

use App\Repositories\News\NewsRepositoryInterface;
use Illuminate\Support\Str;

class NewsService
{
    public function __construct(protected NewsRepositoryInterface $newsRepository)
    {
    }

    public function getAllNews(?string $search)
    {
        return $this->newsRepository->getAllWithSearch($search);
    }

    public function create(array $data)
    {
        $data['slug'] = Str::slug($data['title']);
        $data['status'] = 'published';

        return $this->newsRepository->create($data);
    }
}