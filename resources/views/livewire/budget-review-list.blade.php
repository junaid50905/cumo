<div>
    <x-record-list :records="$records">
        <table id="datatable" class="table table-bordered dt-responsive w-100 ">
            <thead>
                <tr class="table-primary">
                    <th>Project</th>
                    <th>Budget Name</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Requested Amount</th>
                    <th>Approved Amount</th>
                    <th>Status</th>
                    <th >Is sent for approval</th>
                    <th>Note</th>
                    <th>Log</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($records as $record)
                    <tr>
                        <td>{{ $record->project_id }}</td>
                        <td>{{ $record->name }}</td>
                        <td>{{ $record->startdate }}</td>
                        <td>{{ $record->enddate }}</td>
                        <td>{{ $record->enddate }}</td>
                        <td>{{ $record->enddate }}</td>
                        <td>{{ $record->isactive }}</td>
                        <td>{{ $record->note }}</td>
                        <td>{{ $record->enddate }}</td>
                        <td>{{ $record->created_at }}</td>
                        <td>
                            <a href="{{ route('budget-review.edit', $record->id) }}" target="_blank"
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
    </x-record-list>
</div>
