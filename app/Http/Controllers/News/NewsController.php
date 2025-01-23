<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNewsRequest;
use App\Models\Category;
use App\Services\News\NewsService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function __construct(protected NewsService $newsService){}

    public function index(Request $request): View
    {
        $search = $request->input('search');

        $news = $this->newsService->getAllNews($search);

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

        $this->newsService->create($request->validated());

        return redirect()
            ->route("news.index")
            ->with(
                "success",
                "A Notícia foi cadastrada com sucesso!"
            );
    }
}