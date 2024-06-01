
    <div {{ $attributes->merge(['class' => 'w-100']) }}>
        <input type="{{$type}}" {{ $readOnly }} name="{{ $name }}" @if ($type==='number' ) min="0"
            oninput="validity.valid||(value='');" @endif
            class="@if ($type==='checkbox' ) form-check-input @else form-control @endif @error($name) is-invalid @enderror"
            {{-- id="{{$inputId}}" --}} @if ($type==='checkbox' and $value) checked @else value="{{ $value }}" @endif
            placeholder="{{ $placeholder }}" {{$wireModel}} {{$required}} @if($min) min="{{$min}}" @endif>
        {{-- @if(!is_array($name))
        @error($name)<span style="color: red">{{$message}}</span>@enderror
        @endif --}}
    </div>
