<div class="mb-3">
    <label for="{{ $id }}" class="form-label">{{ $label }}</label>
    @if ($type === 'textarea')
        <textarea id="{{ $id }}" name="{{ $name }}"
        @error($name) {{ $attributes->merge(['class' => 'form-control is-invalid']) }} @else 
        {{ $attributes->merge(['class' => 'form-control']) }} @enderror>{{ old($name) }}</textarea>
    @else
        <input type="{{ $type }}" id="{{ $id }}" name="{{ $name }}" value="{{ old($name) }}"
        @error($name) {{ $attributes->merge(['class' => 'form-control is-invalid']) }} @else 
        {{ $attributes->merge(['class' => 'form-control']) }} @enderror>
    @endif
    @error($name)
    <div class="invalid-feedback d-block">
        {{ $message }}
    </div>
    @enderror
</div>