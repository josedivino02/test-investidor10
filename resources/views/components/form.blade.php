<form action="{{ $action }}" method="{{ $method }}" {{ $attributes }}>
    @csrf

    {{ $slot }}

    <div class="form-button">
        {{ $submit }}
    </div>
</form>
