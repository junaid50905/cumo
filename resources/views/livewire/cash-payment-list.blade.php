<div class="tab-content p-3 text-muted">
    <x-record-list :records="$records">
        <div class="table-responsive">
            <table class="table table-bordered w-100">
                <thead>
                    <tr class="table-primary">
                        <th>Note</th>
                        <th>Project </th>
                        <th>Date</th>
                        <th>Reference</th>
                        <th>Items</th>
                        <th>Cost</th>
                        <th>VAT</th>
                        <th>Discount</th>
                        <th>Deduct</th>
                        <th>Amount</th>
                        <th>Log</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($records as $record)
                    <tr>
                        <td>{{ $record->note }}</td>
                        <td>{{ $record->project->title }}</td>
                        <td>{{-- $record-> --}}</td>
                        <td>{{-- $record-> --}}</td>
                        <td>{{-- $record-> --}}</td>
                        <td>{{-- $record-> --}}</td>
                        <td>{{-- $record-> --}}</td>
                        <td>{{-- $record-> --}}</td>
                        <td>{{-- $record-> --}}</td>
                        <td>{{ $record->amount }}</td>
                        <td>{{ $record->created_at }}</td>
                        <td>
                            <a href="{{route('direct-payment.show', $record->id)}}" type="button"
                                class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2">
                                <i class=" fas fa-eye"></i>
                            </a>
                            <button wire:click="toggleApprove({{$record->id}})"
                                class="btn btn-sm btn-{{$record->is_approved ? 'danger' : 'info'}} btn-rounded waves-effect waves-light mb-2 me-1">
                                <i class="fas fa-check"></i>
                            </button>
                            <a href="{{route('direct-payment.edit', $record->id)}}"
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