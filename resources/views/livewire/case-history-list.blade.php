<div>
    <x-record-list :records="$records">
        <div class="table-responsive">
            <table class="table w-100">
                <thead>
                    <tr>
                        <th>Collection Date</th>
                        <th>Student</th>
                        <th>Teacher</th>
                        <th>Created By</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($records as $record)
                    <tr>
                        <td>{{ $record->date }}</td>
                        <td>{{ $record->student->name }}</td>
                        <td>{{ $record->teacher->name }}</td>
                        <td>{{ $record->creator->name }}</td>
                        <td>{{ $record->created_at }}</td>
                        <td>
                            <a href="{{ route('case-history.show', $record->id) }}"
                                class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1"
                                target="_blank" rel="noopener noreferrer">
                                <i class="mdi mdi-eye"></i>
                            </a>
                            <button type="button" wire:click="toggleApprove({{$record->id}})"
                                class="btn btn-sm btn-{{$record->is_approved ? 'danger' : 'info'}} btn-rounded waves-effect waves-light mb-2 me-1">
                                <i class="fas fa-check"></i>
                            </button>
                            <a href="{{ route('case-history.edit', $record->id) }}" target="_blank"
                                rel="noopener noreferrer"
                                class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                <i class="mdi mdi-pencil"></i>
                            </a>
                            <button wire:click="confirmDelete({{$record->id}})"
                                class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2">
                                <i class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </x-record-list>
</div>