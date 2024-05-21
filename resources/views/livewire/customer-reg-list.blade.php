<div>
    <x-record-list :records="$records">
        <div class="table-responsive">
            <table class="table w-100 table-bordered">
                <thead>
                    <tr class="table-primary">
                        <th>Name</th>
                        <th>Type</th>
                        <th>Mobile</th>
                        <th>DOB</th>
                        <th>City</th>
                        <th>Phone1</th>
                        <th>Email</th>
                        <th>Credit Allow</th>
                        <th>Limit</th>
                        <th>Due</th>
                        <th>Log</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($records as $record)
                        <tr>
                            <td>{{ $record->name}}</td>
                            <td>{{ $record->select}}</td>
                            <td>{{ $record->mobile}}</td>
                            <td>{{ $record->address_1}}</td>
                            <td>{{ $record->city}}</td>
                            <td>{{ $record->phone_1}}</td>
                            <td>{{ $record->email}}</td>
                            <td>unknown</td>
                            <td>unknown</td>
                            <td>unknown</td>
                            <td>{{ $record->created_at}}</td>
                            {{-- <td>{{ $record->advance}}</td> --}}
                            <td>
                                <a href="{{ route('customer-reg-list.show', $record->id) }}" target="_blank"
                                    rel="noopener noreferrer"
                                    class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1">
                                    <i class="mdi mdi-eye"></i>
                                </a>
                                <button type="button" wire:click="toggleApprove({{ $record->id }})"
                                    class="btn btn-sm btn-{{ $record->is_approved ? 'danger' : 'info' }} btn-rounded waves-effect waves-light mb-2 me-1">
                                    <i class="fas fa-check"></i>
                                </button>

                                <a href="{{ route('customer-reg-list.edit', $record->id) }}" target="_blank"
                                    rel="noopener noreferrer"
                                    class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                    <i class="mdi mdi-pencil"></i>
                                </a>
                                {{-- <button type="button"
                                    class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                    <i class="bx bx-dollar"></i>
                                </button>
                                <button type="button"
                                    class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                    <i class="fas fa-arrow-circle-right"></i>
                                </button> --}}
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
