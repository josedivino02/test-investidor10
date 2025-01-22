<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNewsRequest;
use App\Models\Category;
use App\Models\News;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    public function index(Request $request): View
    {
        $search = $request->input('search');

        $news = News::query()
            ->when($search, function ($queryBuilder) use ($search) {
                $queryBuilder
                    ->where('title', 'LIKE', "%{$search}%")
                    ->orWhereHas('category', function ($categoryQuery) use ($search) {
                        $categoryQuery->where('name', 'LIKE', "%{$search}%");
                    });
            })
            ->get();

        return view('news.index', compact('news'));
    }

    public function create(): View
    {
        $categories = Category::pluck("name", "id")
            ->toArray();
        return view("news.create", compact("categories"));
    }

    public function store(StoreNewsRequest $request): RedirectResponse
    {
        $request->validated();

        News::create([
            "title"             => $request->title,
            "subtitle"          => $request->subtitle,
            "slug"              => Str::slug($request->title),
            "content"           => $request->content,
            "category_id"       => $request->category,
            "date_published"    => $request->date_published,
            "status"            => "published"
        ]);

        return redirect()
            ->route("news.index")
            ->with(
                "success",
                "A Notícia foi cadastrada com sucesso!"
            );
    }
}