<div>
    <x-record-list :records="$records">
        <table class="table table-bordered w-100">
            <thead>
                <tr class="table-primary">

                    <th>PO ID</th>
                    <th>Project</th>
                    <th>Items</th>
                    <th>Date</th>
                    <th class="nowrap">action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($records as $record)
                <tr>
                    <td>{{$record->invoice_no}}</td>
                    <td>{{$record->requisition->project->title}}</td>
                    <td>{{$record->details->count()}}</td>
                    <td>{{$record->date}}</td>
                    <td>
                        <a href="{{route('purchase-order.show', $record->id)}}" type="button"
                            class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1">
                            <i class="mdi mdi-eye"></i>
                        </a>
                        <button wire:click="toggleApprove({{$record->id}})"
                            class="btn btn-sm btn-{{$record->is_approved ? 'danger' : 'info'}} btn-rounded waves-effect waves-light mb-2 me-1">
                            <i class="fas fa-check"></i>
                        </button>
                        {{-- <a href="{{route('purchase-order.return', $record->id)}}" type="button"
                            class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                            <i class="fas fa-backward"></i>
                        </a> --}}
                        <button type="button" wire:click="confirmDelete({{$record->id}})"
                            class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </x-record-list>
    <!-- end row -->
</div>