<div>
    <x-record-list :records="$records">
        <div class="table-responsive">
            <table class="table table-bordered w-100">
                <thead>
                    <tr class="table-primary">
                        <th>Name & ID
                            <span>
                                <i class="dripicons-arrow-thin-down"></i>
                                <i class="dripicons-arrow-thin-up"></i>
                            </span>
                        </th>
                        <th>DOA</th>
                        <th>DOB</th>
                        <th>B.G</th>
                        <th>Mobile#</th>
                        <th>Is A.P.A</th>
                        <th>Student Status</th>
                        <th>Log</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($records as $record)
                    <tr>
                        <td><a href="{{ route('student.profile', $record->id) }}">{{ $record->name }}</a></td>
                        <td>{{ $record->date_of_assessment }}</td>
                        <td>{{ $record->dob }}</td>
                        <td>{{ $record->blood_group }}</td>
                        <td>{{ $record->phone_number }}</td>
                        <td>{{ $record->statuss }}</td>
                        <td>{{ $record->dob }}</td>
                        <td>{{ $record->created_at }}</td>
                        <td>
                            <a href="{{ route('student.show', $record->id) }}" target="_blank" rel="noopener noreferrer"
                                class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1">
                                <i class="mdi mdi-eye"></i>
                            </a>

                            <button type="button" wire:click="toggleApprove({{ $record->id }})"
                                class="btn btn-sm btn-{{ $record->is_approved ? 'danger' : 'info' }} btn-rounded waves-effect waves-light mb-2 me-1">
                                <i class="fas fa-check"></i>
                            </button>
                            <a href="{{ route('student.edit', $record->id) }}" target="_blank" rel="noopener noreferrer"
                                class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                <i class="mdi mdi-pencil"></i>
                            </a>
                            <button type="button" wire:click="confirmDelete({{$record->id}})"
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
