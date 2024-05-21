<div>
    <div class="row">
        <label class="col-2 col-form-label">Journals List</label>
        <div class="col-10">
            <select class="form-select" wire:model="filter">
                <option value="">--Select--</option>
                <option value="1">Approved Journals</option>
                <option value="0">Un Approval Journals</option>
            </select>
        </div>
    </div>
    <x-record-list :records="$records">
        <div class="table-responsive">
            <table class="table table-bordered w-100">
                <thead>
                    <tr class="table-primary">
                        <th>Project</th>
                        <th>Voucher Date</th>
                        <th>Particulars</th>
                        <th>Trans Amount</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($records as $record)
                    <tr>
                        <td>{{$record->project->title}}</td>
                        <td>{{$record->voucher_date}}</td>
                        <td>{{$record->particulars}}</td>
                        <td>{{$record->transaction_amount}}</td>
                        <td>{{$record->created_at}}</td>
                        <td>
                            {{-- <button type="button" wire:click="view({{$record}})" wire:key
                                class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1"
                                data-bs-toggle="modal" data-bs-target=".modal-view"> <i
                                    class="mdi mdi-eye"></i></button> --}}
                            <a href="{{route('journal.show', $record->id)}}"
                                class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1">
                                <i class="mdi mdi-eye"></i>
                            </a>
                            <button type="button" wire:click="toggleApprove({{$record->id}})"
                                class="btn btn-sm btn-{{$record->is_approved ? 'danger' : 'info'}} btn-rounded waves-effect waves-light mb-2 me-1">
                                <i class="fas fa-check"></i>
                            </button>
                            <a href="{{route('journal.edit', $record->id)}}" type="button"
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
    </x-record-list>
</div>

@if (count($viewRecord))
<!--  View Journal -->
<div class="modal fade modal-view" tabindex="-1" role="dialog" aria-hidden="true" wire:ignore>
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-primary">Journal View</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Project</label>
                            <p class="form-control">{{ $viewRecord['project']['title'] }}</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Trans.Amount</label>
                            <p class="form-control">{{ $viewRecord['transaction_amount'] }}</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label>Vaucher date</label>
                            <p class="form-control">{{ $viewRecord['voucher_date'] }}</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="mb-3">
                            <label for="validationCustom02" class="form-label">Particulars</label>
                            <p class="form-control">{{ $viewRecord['particulars'] }}</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="validationCustom04" class="form-label">Reference</label>
                            {{-- <p class="form-control">{{ $viewRecord['reference'] }}</p> --}}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table table-bordered w-100">
                                <thead>
                                    <tr class="table-primary">
                                        <th>Acc. Number</th>
                                        <th>Acc. Particular</th>
                                        <th>Debit</th>
                                        <th>Credit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($viewRecord['details'] as $detail )
                                    <tr>
                                        <td>{{ $detail['account_no']}}</td>
                                        <td>{{ $detail['account_particulars']}}</td>
                                        <td>{{ $detail['debit']}}</td>
                                        <td>{{ $detail['credit']}}</td>
                                    </tr>
                                    @empty
                                    <tr>Empty</tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- journal form end -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal"> Close</button>
            </div>
        </div>
    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
@endif
