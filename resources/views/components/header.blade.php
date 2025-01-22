<header>
    <div class="logo">LOGO</div>
    <nav>
        <a href="{{ route('categories.create') }}">Cadastrar Categorias</a>
        <a href="{{ route('news.create') }}">Cadastrar Notícias</a>
        <a href="{{ route('news.index') }}">Exibir Notícias</a>
    </nav>
    <form action="{{ route('news.index') }}" method="GET" class="search-form">
        <div class="search-container">
            <input type="text" name="search" placeholder="Buscar..." class="search-input">
            <button type="submit" class="search-button">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </form>

</header>
