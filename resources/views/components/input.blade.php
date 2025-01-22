<div class="form-group">
    <label for="{{ $id }}">{{ $label }}</label>

    @if ($type === 'textarea')
        <textarea id="{{ $id }}" name="{{ $name }}" {{ $attributes }}>{{ old($name, $value) }}</textarea>
    @else
        <input type="{{ $type }}" id="{{ $id }}" name="{{ $name }}"
            value="{{ old($name, $value) }}" {{ $attributes }}>
    @endif

    @error($name)
        <span class="error">{{ $message }}</span>
    @enderror
</div>
