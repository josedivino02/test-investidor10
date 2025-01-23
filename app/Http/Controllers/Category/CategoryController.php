<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Services\Category\CategoryService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
class CategoryController extends Controller
{
    public function __construct(protected CategoryService $categoryService)
    {
    }

    public function create(): View
    {
        return view("categories.create");
    }

    public function store(StoreCategoryRequest $request): RedirectResponse
    {
        $this->categoryService->createCategory($request->validated());

        return redirect()
            ->route("categories.create")
            ->with(
                "success",
                "A Categoria foi cadastrada com sucesso!"
            );
    }
}