<div class="w-100 {{ $attributes->get('class') }}">
    <textarea class="form-control p-1 @error($name) is-invalid @enderror" {{ $wireModel }} name="{{ $name }}"
        rows="{{ $rows }}" cols="{{ $cols }}" placeholder="{{ $placeholder }}" {{ $required }}>{{ $value }}</textarea>
    @if (!is_array($name))
        @error($name)<span style="color: red">{{ $message }}</span>@enderror
    @endif
</div>
