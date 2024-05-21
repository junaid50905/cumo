<div class="row border-bottom py-2">
    <div class="col-xl-12 col-sm-12">
        <div class="mb-2">
            <h5 class=""><span>{{$questionSerialNo}}.&nbsp;&nbsp;</span><input type="hidden" name="{{ $name }}['question']" value="{{ $id }}" /> {!! $label !!}</h5>
            <div class="form-check {{$isVertical}}">
                <div class="row">
                    @foreach($options as $key => $option)
                    <div class="col-md-6 mb-2">
                        <div class="form-check">
                            <input id="{{ $id }}_{{ $key }}" class="form-check-input" name="{{ $name }}['answer']" type="radio"
                                value="{{ $key }}" {{ in_array($key, $checked) ? 'checked' : '' }}>
                            <label for="{{ $id }}_{{ $key }}" class="form-check-label">
                                {{ $option }}
                            </label>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
