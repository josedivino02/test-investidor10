<x-layout title="Exibir Notícias">
    <div>
        @if (session('success'))
            <div class="message">
                {{ session('success') }}
            </div>
        @endif
    </div>
    <h1>TESTE</h1>
    <div class="card-container">
        @forelse ($news as $item)
            <x-card title="{{ $item->title }}" content="{{ Str::limit($item->content, 150) }}" buttonText="Acessar" />
        @empty
            <p>Nenhuma notícia encontrada.</p>
        @endforelse
    </div>
</x-layout>
