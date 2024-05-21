<div class="tab-pane" id="product_details_list" role="tabpanel">
    <x-record-list :records="$records">
        <div class="p-0 table-responsive border-0">
            <table class="table table-bordered w-100">
                <thead>
                    <tr>
                        <th>Warehouse</th>
                        <th>Date</th>
                        <th>Note</th>
                        <th>Is Approved</th>
                        <th>Log</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($records as $record )
                    <tr>
                        <td>{{ $record->warehouse->title }}</td>
                        <td>{{ $record->date }}</td>
                        <td><small>{{ $record->note }}</small></td>
                        <td>{{ $record->is_approved ? 'YES' : 'NO'}}</td>
                        <td><small>{{ $record->created_at }}</small></td>
                        <td>
                            <a href="{{route('stock-assign.show', $record->id)}}" type="button"
                                class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1">
                                <i class="mdi mdi-eye"></i></a>
                            <button type="button" wire:click="toggleApprove({{$record->id}})"
                                class="btn btn-sm btn-{{$record->is_approved ? 'danger' : 'info'}} btn-rounded waves-effect waves-light mb-2 me-1">
                                <i class="fas fa-check"></i>
                            </button>
                            <a href="{{route('stock-assign.edit', $record->id)}}" type="button"
                                class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                <i class="mdi mdi-pencil"></i>
                            </a>
                            {{-- <a href="#" type="button"
                                class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                <i class="fas fa-arrow-circle-right"></i>
                            </a> --}}
                            <button type="button" wire:click="confirmDelete({{$record->id}})"
                                class="btn btn-sm m-1 btn-danger btn-rounded waves-effect waves-light">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div> <!-- end col -->
    </x-record-list>
</div>