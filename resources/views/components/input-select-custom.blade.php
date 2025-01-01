<div class="w-100" {{ $attributes->merge(['class' => "wrapper_$name"]) }}>
    <select class="form-select @error($name) is-invalid @enderror" name="{{$name}}" id="{{$id}}" {{$required}}
        {{$multiple}} {{$wireModel}} {{ $disabled }} {{$onChange ? "onchange=$onChange" : '' }}>
        <option selected disabled>--{{$firstLabel}}--</option>
        @foreach($records as $key => $record)
            @php($val = is_array($record) ? $record['id'] : $record->id)
            <option value="{{$val}}" {{ old($name) ? (old($name) == $val ? 'selected' : '' ) : ($isSelected($val) ? 'selected' : '' )}}>
                {{$targetColumn ? (is_array($record) ? $record[$targetColumn] : $record->$targetColumn) : ($record['name'] ?? $record)}} {{$additional ? '(' . (is_array($record) ? $record[$additional] : $record->$additional) . ')' : ''}}
            </option>
        @endforeach
    </select>
    {{-- @error($name)<span style="color: red">{{$message}}</span>@enderror --}}
</div>
