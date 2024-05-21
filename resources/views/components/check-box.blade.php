<div {{ $attributes->merge(['class' => 'form-check']) }}>
    <input type="checkbox" class="form-check-input" id="{{$inputId}}" name="{{$name}}" wire:model="{{$wireModel}}"
        value="1" {{$required}} {{$checked}}>
    <label class="form-check-label" for="{{$inputId}}">{{$label}}</label>
    @error($name)<span style="color: red">{{$message}}</span>@enderror
</div>