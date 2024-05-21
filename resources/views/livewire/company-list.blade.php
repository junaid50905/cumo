<div>
    <x-record-list :records="$records">
        <div class="table-responsive">
            <table class="table w-100 table-bordered">
                <thead>
                    <tr class="table-primary">
                        <th>Name</th>
                        <th>Total Department</th>
                        <th>Manager</th>
                        <th>City</th>
                        <th>Country</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Fax</th>
                        <th>Mobile</th>
                        <th>Log</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($records as $record)
                        <tr>
                            <td>{{ $record->company_name }}</td>
                            <td>{{ $record->total_department }}</td>
                            <td>{{ $record->manager }}</td>
                            <td>{{ $record->city }}</td>
                            <td>{{ $record->country }}</td>
                            <td>{{ $record->email }}</td>
                            <td>{{ $record->phone_1 }}</td>
                            <td>{{ $record->fax }}</td>
                            <td>{{ $record->mobile }}</td>
                            <td>{{ $record->created_at }}</td>
                            <td>
                                <a href="{{ route('company.show', $record->id) }}" target="_blank"
                                    rel="noopener noreferrer"
                                    class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1">
                                    <i class="mdi mdi-eye"></i>
                                </a>
                                <button type="button" wire:click="toggleApprove({{ $record->id }})"
                                    class="btn btn-sm btn-{{ $record->is_approved ? 'danger' : 'info' }} btn-rounded waves-effect waves-light mb-2 me-1">
                                    <i class="fas fa-check"></i>
                                </button>

                                <a href="{{ route('company.edit', $record->id) }}" target="_blank"
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
