<?php

namespace App\Repositories\News;

use App\Models\News;
use \Illuminate\Database\Eloquent\Collection;

class NewsRepository implements NewsRepositoryInterface
{
    public function getAllWithSearch(?string $search): Collection
    {
        return News::query()
            ->when($search, function ($queryBuilder) use ($search) {
                $queryBuilder
                    ->where('title', 'LIKE', "%{$search}%")
                    ->orWhereHas('category', function ($categoryQuery) use ($search) {
                        $categoryQuery->where('name', 'LIKE', "%{$search}%");
                    });
            })
            ->get();
    }

    public function create(array $data): News
    {
        return News::create($data);
    }
}
