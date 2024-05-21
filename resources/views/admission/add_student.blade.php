@extends('layouts.master')

@section('title')
    @lang('translation.Starter_Page')
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/custom/custom_step_form/custom_step.css') }}">
@endsection
@section('content')

<p>After route and controller -> Add Student Blade</p>
 <livewire:admission-add-student/>

@endsection
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets/custom/custom_step_form/custom_step.js') }}"></script>
    <script>
        $(document).ready(function() {
            $(".hide").hide();
            $("#container").click(function() {
                $(".hide").toggle();
            });
        });
    </script>
@endsection
