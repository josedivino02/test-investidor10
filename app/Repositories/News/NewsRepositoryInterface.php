<?php

namespace App\Repositories\News;

use App\Models\News;
use \Illuminate\Database\Eloquent\Collection;

interface NewsRepositoryInterface
{
    public function getAllWithSearch(?string $search): Collection;
    public function create(array $data): News;
}