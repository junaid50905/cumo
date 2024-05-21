@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection
@section('css')
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Utility @endslot
        @slot('title')RUN MITP @endslot
    @endcomponent
    {{-- code  --}}
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="mb-3 row">
                        <h3 class="pb-5">RUN MITPS</h3>
                    </div>
                    <div class="row pb-3">
                        <div class="col-2"></div>
                        <div class="col-2 d-flex align-items-center">
                            <label class="p-0" for="CourseName">Select Student</label>
                        </div>
                        <div class="col-5 col-md-5 ">
                            <form method="POST" action=""><input name="_token" type="hidden" value="">
                            <div class="form-group">
                                <div class="col-xs-12 col-md-9 input-group">
                                    <x-input-select name="student_id" :records="[]" />
                                </div>
                            </div>
                            </form>
                            <p class="pt-2">Recent MITP Run: 2022-05-15 by Nusrat Jahan</p>
                        </div>    
                    </div>
                    <div class="row">
                        <div class="col-2">
                        </div>
                        <div class="col-10">
                            <div class="from-group mt-2">
                                <div class="">
                                    <button type="submit" class="btn btn-info btn-rounded  text-bold text-uppercase ">Run MITP</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
@section('script')


@endsection




