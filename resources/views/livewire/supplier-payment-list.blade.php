<div>

    <x-record-list :records="$records">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr class="table-primary">
                        <th>Supplier</th>
                        <th>Project</th>
                        <th>Date</th>
                        <th>Payment Method</th>
                        <th>Total Payment</th>
                        <th>Reference</th>
                        <th>Account</th>
                        <th>Check No.</th>
                        <th>Log</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>

                    {{-- @dd($records); --}}
                    @foreach($records as $record)
                    <tr>
                        <td>{{ $record->supplier_id }}</td>
                        <td>{{ $record->payment->project_id }}</td>
                        <td>{{ $record->date }}</td>
                        <td>{{ $record->payment->method }}</td>
                        <td>{{ $record->payment->amount }}</td>
                        <td>{{ $record->payment->user_id }}</td>
                        <td>{{ $record->payment->history->info->bank_account_id }}</td>
                        <td>{{ $record->payment->history->info->cheque_id }}</td>
                        <td>{{ $record->created_at }}</td>
                        <td>
                            <a href="{{route('supplier-payment.show', $record->id)}}" type="button"
                                class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2">
                                <i class=" fas fa-eye"></i>
                            </a>
                            <button type="button" wire:click="toggleApprove({{$record->id}})"
                                class="btn btn-sm btn-{{$record->is_approved ? 'danger' : 'info'}} btn-rounded waves-effect waves-light mb-2 me-1">
                                <i class="fas fa-check"></i>
                            </button>
                            <a href="{{route('supplier-payment.edit', $record->id)}}" type="button"
                                class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                <i class="mdi mdi-pencil"></i>
                            </a>
                            <button type="button"
                                class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2"
                                wire:click="confirmDelete({{$record->id}})">
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