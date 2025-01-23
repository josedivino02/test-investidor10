<div class="form-group">
    <label for="{{ $id }}">{{ $label }}</label>

    @if ($type === 'textarea')
        <textarea id="{{ $id }}" name="{{ $name }}" {{ $attributes }}>{{ old($name, $value) }}</textarea>
    @elseif ($type === 'select')
        <select id="{{ $id }}" name="{{ $name }}" {{ $attributes }}>
            <option value="" disabled selected>Selecione uma opção</option>
            @foreach ($options as $optionValue => $optionLabel)
                <option value="{{ $optionValue }}" {{ old($name, $value) == $optionValue ? 'selected' : '' }}>
                    {{ $optionLabel }}
                </option>
            @endforeach
        </select>
    @else
        <input type="{{ $type }}" id="{{ $id }}" name="{{ $name }}"
            placeholder="{{ $placeholder }}" value="{{ old($name, $value) }}" {{ $attributes }}>
    @endif

    @error($name)
        <span class="error">{{ $message }}</span>
    @enderror
</div>
