<div>
    <x-record-list :records="$records">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table id="" class="table table-bordered dt-responsive w-100">
                            <thead>
                                <tr>
                                    <th>Customer Type Name</th>
                                    <th>Description</th>
                                    <th>Log</th>
                                    <th>Action</th> 
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($records as $record)
                                <tr>
                                    <td>{{ $record->type_name }}</td>
                                    <td>{{ $record->description }}</td>
                                    <td>{{ $record->created_at }}</td>
                                    <td>
                                        <a href="{{ route('customer-type.edit', $record->id) }}" target="_blank"
                                            rel="noopener noreferrer"
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
                </div>
            </div> <!-- end col -->
        </div> 
    </x-record-list>
</div>
