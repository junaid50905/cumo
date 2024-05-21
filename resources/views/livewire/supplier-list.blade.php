<div>
    <x-record-list :records="$records">
        <div class="row">
            <div class="table-responsive">
                <table class="table w-100 table-bordered">
                    <thead>
                        <tr class="table-primary">
                            <th> Name</th>
                            <th> Address</th>
                            <th> Log</th>
                            <th> Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($records as $record)
                        <tr>
                            <td>{{ $record->name }}</td>
                            <td>{{ $record->address }},{{ $record->address_two }}</td>
                            <td>{{ $record->created_at }}</td>
                            <td>
                                <a href="{{ route('supplier.edit', $record) }}" target="_blank"
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
        </div> <!-- end row -->
    </x-record-list>
</div>