<div class="row">
    <x-record-list :records="$records">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-borderd w-100">
                            <thead>
                                <tr class="table-primary">
                                    <th>Name</th>
                                    <th>Number</th>
                                    <th>Start Page</th>
                                    <th>End Page</th>
                                    <th>Creation Date</th>
                                    <th>Is Finished</th>
                                    <th>Remaining Page</th>
                                    <th>Log</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $records as $record)
                                <tr>
                                    <td>{{ $record->title }}</td>
                                    <td>{{ $record->page_no }}</td>
                                    <td>{{ $record->start_page }}</td>
                                    <td>{{ $record->end_page }}</td>
                                    <td>{{ $record->created_at }}</td>
                                    <td>{{ $record->ss }}</td>
                                    <td>{{ $record->ss }}</td>
                                    <td>{{ $record->created_at }}</td>
                                    <td>
                                        <button type="button" wire:click="toggleIsInvalid({{$record->id}})"
                                            class="btn btn-sm btn-{{$record->is_invalid ? 'danger' : 'info'}} btn-rounded waves-effect waves-light mb-2 me-1">
                                            <i class="fas fa-check"></i>
                                        </button>
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
            </div>
        </div> <!-- end col -->
    </x-record-list>
</div> <!-- end row -->
