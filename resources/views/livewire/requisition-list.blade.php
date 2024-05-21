<div>
    <x-record-list :records="$records">
        <table class="table table-bordered w-100">
            <thead>
                <tr class="table-primary">
                    <th>SL</th>
                    <th>Title</th>
                    <th>Number</th>
                    <th>Date</th>
                    <th>Total Items</th>
                    <td>Created At</td>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($records as $key => $record)
                <tr>
                    <td>{{ ++$key }}</td>
                    <td>{{$record->title}}</td>
                    <td>{{$record->number}}</td>
                    <td>{{$record->date}}</td>
                    <td>{{$record->details->count()}}</td>
                    <td>{{$record->created_at}}</td>
                    <td>
                        <a href="{{route('requisition.show', $record->id)}}"
                            class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1">
                            <i class="mdi mdi-eye"></i>
                        </a>
                        <button wire:click="toggleApprove({{$record->id}})"
                            class="btn btn-sm btn-{{$record->is_approved ? 'danger' : 'info'}} btn-rounded waves-effect waves-light mb-2 me-1">
                            <i class="fas fa-check"></i>
                        </button>
                        <a href="{{route('requisition.edit', $record->id)}}"
                            class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                            <i class="mdi mdi-pencil"></i>
                        </a>
                        <a href="{{route('purchase-order.create', $record->id)}}"
                            class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                            <i class="fas fa-arrow-circle-right"></i>
                        </a>
                        <button type="button" class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2"
                            wire:click="confirmDelete({{$record->id}})">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </x-record-list>
</div>