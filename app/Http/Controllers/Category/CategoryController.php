<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function create(): View
    {
        return view("categories.create");
    }

    public function store(StoreCategoryRequest $request): RedirectResponse
    {
        $request->validated();

        Category::create([
            "name"          => $request->name,
            "slug"          => Str::slug($request->name),
            "description"   => $request->description,
        ]);

        return redirect()
            ->route("categories.create")
            ->with(
                "success",
                "A Categoria foi cadastrada com sucesso!"
            );
    }
}