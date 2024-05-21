<div class="w-100" {{ $attributes->merge(['class' => "wrapper_$name"]) }}>
    <select class="form-select ch   @error($name) is-invalid @enderror" name="{{$name}}" id="{{$id}}" {{$required}}
        {{$multiple}} {{$wireModel}} {{ $disabled }}>
        <option value="">--Select--</option>
        @foreach($records as $key => $record)
        @php($val = $record->id ?? $key)
        <option value="{{$val}}" {{ old($name) ? (old($name)==$val ? 'selected' : '' ) : ($isSelected($val) ? 'selected'
            : '' )}}>
            {{$targetColumn ? $record->$targetColumn : ($record->name ?? $record)}} {{$additional ? '(' .
            $record->{$additional} . ')' : ''}}
        </option>
        @endforeach
    </select>
    {{-- @error($name)<span style="color: red">{{$message}}</span>@enderror --}}
</div>
