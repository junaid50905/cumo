@extends('layouts.master')
@section('title')
@lang('translation.Tabs_&_Accordions')
@endsection
@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <div class="card__search__box">
                    <div class="row">
                        <form action="{{ route('assessment-tools.search') }}"
                            method="GET">
                            @csrf
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="search_id" placeholder="Search by ID (000001)" required>
                                <input type="hidden" name="tool_id" id="tool_id" value="{{ $category_id }}">
                                <div class="input-group-append">
                                    <button class="btn btn-success" type="submit">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <h4>{{ $checklistTitle }}</h4>
                <div class="card__data__box">
                    <div class="field__data mt-2">
                        <table class="table table-striped table-hover table-bordered border-info table-sm">
                            <thead>
                                <tr class="table-primary">
                                    <th>Total score may indicate</th>
                                    <th>Count</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($formattedData as $data)
                                    <tr>
                                        <td>{{ $data['label'] }}</td>
                                        <td>{{ $data['count'] }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr class="table-primary">
                                    <td colspan="5" class="text-center fw-bold">
                                        <div>
                                            @if ($maxCountGroup)
                                                <p><strong>Most Frequent Answer:</strong> {{ $maxCountGroup['label'] }} (Count: {{ $maxCountGroup['count'] }})</p>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection