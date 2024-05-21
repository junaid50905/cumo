<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">{{ $pageHeader ?? '' }}</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    @isset($base)
                    <li class="breadcrumb-item"><a href="javascript: void(0);"><a href="{{$base[key($base)]}}"></a>{{key($base)}}</a></li>
                    @if(isset($sub))
                        <li class="breadcrumb-item active">
                            @foreach($sub as $key => $val)
                                 <a href="{{$val}}">{{$key}}</a> /
                            @endforeach
                        </li>
                    @endif
                    @endisset
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- end page title -->
