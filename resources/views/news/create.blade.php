<x-layout title="Cadastro de Notícias">
    <div>
        <h1>Cadastro de Notícias</h1>

        <x-form class="form-container" :action="route('news.store')" method="POST">
            <x-input name="title" id="title" label="Título" type="text" required />
            <x-input name="subtitle" id="subtitle" label="Subtítulo" type="text" />
            <x-input name="content" id="content" label="Conteúdo" type="textarea" />
            <x-input name="date_published" id="date_published" label="Data de Publicação" type="datetime-local" />
            <x-input name="category" id="category" label="Categoria" type="select" :options="$categories" required />

            <x-slot name="submit">
                <x-button.primary type="submit">Cadastrar</x-button.primary>
            </x-slot>
        </x-form>
    </div>
</x-layout>
