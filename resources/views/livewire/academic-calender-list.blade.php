<div>
    <x-record-list :records="$records">
        <div class="table-responsive">
            <table class="table w-100 table-bordered">
                <thead>
                    <tr class="table-primary">
                        <th>Event Name</th>
                        <th>Event Type</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Label</th>
                        <th>Duration</th>
                        <th>Log</th>
                        <th>Action</th>1
                    </tr>
                </thead>
                <tbody>
                    @foreach ($records as $record)
                        <tr>
                            <td>{{ $record->event_name }}</td>
                            <td>{{ $record->event_type }}</td>
                            <td>{{ $record->start_date }}</td>
                            <td>{{ $record->end_date }}</td>
                            <td>{{ $record->event_label }}</td>
                            <td>{{ $record->duration }}</td>
                            <td>{{ $record->created_at }}</td>
                            <td>
                                <a href="{{ route('academic-calender.edit', $record->id) }}" target="_blank"
                                    rel="noopener noreferrer"
                                    class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                    <i class="mdi mdi-pencil"></i>
                                </a>
                                <button type="button" wire:click="confirmDelete({{ $record->id }})"
                                    class="btn btn-sm m-1 btn-danger btn-rounded waves-effect waves-light">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </x-record-list>
</div>
