<div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body p-0">
                    <div class="row mb-3">
                        @if($title)
                        <div class="col-6">
                            <h4 class="card-title">{{$title}}</h4>
                        </div>
                        @endif
                        <div class="col-6 text-end">
                            @if($wireClick)
                            <button type="button" class="btn btn-primary waves-effect waves-light" @if($dataBsTarget)
                                data-bs-toggle="modal" data-bs-target="{{$dataBsTarget}}" @endif {{$wireClick}}
                                wire:key>
                                Add
                            </button>
                            @elseif($newEntryLink)
                            <a href="{{$newEntryLink}}">
                                <button type="button" class="btn btn-primary waves-effect waves-light">Add</button>
                            </a>
                            @elseif($dataBsTarget)
                            <button type="button" class="btn btn-primary waves-effect waves-light"
                                data-bs-toggle="modal" {{$dataBsTarget}}>Add
                            </button>
                            @endif
                        </div>
                    </div>
                    @include('elements.per-page-item-and-search')
                    @if ($records->count())
                    <div class="table-responsive">
                        {{$slot}}

                        {{$records->links()}}
                    </div>
                    @else
                    <div class="card">
                        <div class="card-body text-center">Sorry! No Record Found.</div>
                    </div>
                    @endif
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
</div>