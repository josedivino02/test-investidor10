<x-layout title="Cadastro de Categoria">
    <div>
        <h1>Cadastro de Categoria</h1>

        <x-form class="form-container" :action="route('categories.store')" method="POST">
            @if (session('success'))
                <div class="message">
                    {{ session('success') }}
                </div>
            @endif

            <x-input name="name" id="name" label="Nome" type="text" required />
            <x-input name="description" id="description" label="Descrição" type="textarea" />

            <x-slot name="submit">
                <x-button.primary type="submit">Cadastrar Categoria</x-button.primary>
            </x-slot>
        </x-form>
    </div>
</x-layout>
