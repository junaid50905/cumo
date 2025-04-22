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
                        <form action="">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Search by ID (000001)"
                                    aria-label="Search by ID (000001)" aria-describedby="button-addon2">
                                <button class="btn btn-success" type="button" id="button-addon2">Button</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card__data__box">
                    <div class="field__data mt-2">
                        <table class="table table-hover">
                            <thead>
                                <tr class="table-primary">
                                    <th>Name
                                        <span>
                                            <i class="dripicons-arrow-thin-down"></i>
                                            <i class="dripicons-arrow-thin-up"></i>
                                        </span>
                                    </th>
                                    <th class="text-start">Tools</th>
                                    <th class="text-start">Main_Teacher</th>
                                    <th class="text-start">Assist_Teacher</th>
                                    <th class="text-start">Assesment_Date</th>
                                    <th class="text-start">Start</th>
                                    <th class="text-start">End</th>
                                    <th class="text-start">Status</th>
                                    <th class="text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($appointments->isEmpty())
                                    <tr>
                                        <td colspan="9" class="text-center">No pending appointments found.</td>
                                    </tr>
                                @else
                                    @php $tool_id = null; @endphp
                                    @foreach ($appointments as $appointment)
                                        @foreach ($appointment->event_calendars as $event)
                                            <tr>
                                                <td><a href="{{ route('student.profile', 1) }}">({{ $appointment->student_id }}){{ $appointment->name }}</a></td>
                                                <td>
                                                    @foreach ($appointment->assessmentCategories as $category)
                                                        <p>{{ $category->name }}</p>
                                                        @php $tool_id = $category->id; @endphp
                                                    @endforeach
                                                </td>
                                                <td>
                                                    @foreach ($appointment->event_calendars as $event)
                                                        <p>{{ $event->main_teacher->name ?? 'N/A' }}</p>
                                                    @endforeach
                                                </td>
                                                <td>
                                                    @foreach ($appointment->event_calendars as $event)
                                                        <p>{{ $event->assistant_teacher->name ?? 'N/A' }}</p>
                                                    @endforeach
                                                </td>
                                                <td>
                                                    @foreach ($appointment->event_calendars as $event)
                                                        <p>{{ $event->event_date ?? 'N/A' }}</p>
                                                    @endforeach
                                                </td>
                                                <td>
                                                    @foreach ($appointment->event_calendars as $event)
                                                        <p>{{ $event->event_start_time ?? 'N/A' }}</p>
                                                    @endforeach
                                                </td>
                                                <td>
                                                    @foreach ($appointment->event_calendars as $event)
                                                        <p>{{ $event->event_end_time ?? 'N/A' }}</p>
                                                    @endforeach
                                                </td>
                                                <!-- <td>{{ $event->event_date }}</td>
                                                <td>{{ $event->event_start_time }}</td>
                                                <td>{{ $event->event_end_time }}</td> -->
                                                <td>
                                                    @foreach ($appointment->assessmentCategories as $category)
                                                        <p>{{ $category->pivot->status }}</p>
                                                    @endforeach
                                                </td>
                                                <td class="d-flex align-items-center justify-content-end">
                                                    <a href="{{ route('assessment-checklist.search', ['tool_id' => $tool_id, 'search_id' => $appointment->id]) }}"
                                                        rel="noopener noreferrer"
                                                        class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1"
                                                        title="Start">
                                                        <i class="mdi mdi-cog"></i>
                                                    </a>
                                                    <!-- <a href="{{ route('assessment-tools.show', $appointment->id) }}"
                                                        rel="noopener noreferrer"
                                                        class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1"
                                                        title="View">
                                                        <i class="mdi mdi-eye"></i>
                                                    </a> -->
                                                    <button type="button" wire:click="confirmDelete({{ $appointment->id }})"
                                                        class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2 me-1"
                                                        title="delete">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                        <div>
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-end">
                                    {{ $appointments->links() }}
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



