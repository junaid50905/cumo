<div>
    <x-record-list :records="$records">
        <table class="table table-bordered w-100">
            <thead>
                <tr class="table-primary">
                    <th>#</th>
                    <th>Customer</th>
                    <th>Project</th>
                    <th>Date</th>
                    <th>Cash Payment</th>
                    <th>Cheque Payment</th>
                    <th>Total Payment</th>
                    <th>Reference</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($records as $record)
                <tr>
                    <td>{{ $records->firstItem() + $loop->index }}</td>
                    <td>{{$record->customer->name}}</td>
                    <td>{{$record->income->project->title}}</td>
                    <td>{{$record->income->date}}</td>
                    <td>{{$record->income->history->info->cash}}</td>
                    <td>{{$record->income->history->info->cheque_amount}}</td>
                    <td>{{$record->income->history->info->cash + $record->income->history->info->cheque_amount }}</td>
                    <td>{{$record->note}}</td>
                    <td>
                        <a href="{{route('donation-and-other.show', $record->id)}}" type="button"
                            class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1">
                            <i class="mdi mdi-eye"></i>
                        </a>
                        <a href="{{route('donation-and-other.edit', $record->id)}}" type="button"
                            class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                            <i class="mdi mdi-pencil"></i>
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