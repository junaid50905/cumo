@php($breadcrumb = $breadcrumbConstants::$mappings[request()->route()->getName()])
@if(count($breadcrumb))
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">{{ $breadcrumb['pageHeader'] ?? '' }}</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        @isset($breadcrumb['base'])

                            @foreach($breadcrumb['base'] as $key => $val)
                                <li class="breadcrumb-item"><a href="javascript: void(0);"> {{$key}}</a></li>
                            @endforeach

                            @if(isset($breadcrumb['items']))
                                @foreach($breadcrumb['items'] as $key => $val)
                                    <li class="breadcrumb-item active">
                                         <a href="{{$val}}">{{$key}}</a>
                                    </li>
                                @endforeach
                            @endif

                        @endisset
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endif
