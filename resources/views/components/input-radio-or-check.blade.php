<div class="row border-top py-2">
    <div class="col-xl-12 col-sm-12">
        <div class="mb-2">
            <h5 class=""><span></span> {!! $label !!}</h5>
            <div class="form-check {{$isVertical}}">
                @foreach($records as $key => $record)
                <div class="mb-2 me-5">
                    <input class="form-check-input" name="{{$name}}" type="{{$type}}" value="{{$key}}" {{$wireModel}}
                        {{count($checked) ? (in_array($key, $checked) ? 'checked' : '' ) : '' }}>
                    <label class="form-check-label">
                        {{$record}}
                    </label>
                </div>
                @endforeach
            </div>
            @if($secondaryInputLabel)
            <label for="basicpill-firstname-input">{{$secondaryInputLabel}}</label>
            <input type="text" class="form-control" {{$secondaryInputName ? "name=$secondaryInputName" : '' }}
                value="{{$secondaryInputValue}}">
            @endif
        </div>
    </div>
</div>