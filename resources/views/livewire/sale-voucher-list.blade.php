<div class="row">
    <x-record-list :records="$records">
        <table class="table w-100">
            <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Project
                        {{-- <span><i class="dripicons-arrow-thin-down"></i><i
                                class="dripicons-arrow-thin-up"></i></span>--}}
                    </th>
                    <th>Customer</th>
                    <th>Date</th>
                    <th>Warehouse</th>
                    <th>Amount</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($records as $record)
                <tr>
                    <td>{{ $records->firstItem() + $loop->index }}</td>
                    <td>{{$record->project->title}}</td>
                    <td>{{optional($record->creator)->name}}</td>
                    <td>{{$record->date}}</td>
                    <td>{{$record->saleIncome && $record->saleIncome->warehouse ? $record->saleIncome->warehouse->title
                        : ''}}</td>
                    <td>{{$record->amount}}</td>
                    <td>
                        <a href="{{route('sale-voucher.show', $record->id)}}" type="button"
                            class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1">
                            <i class="mdi mdi-eye"></i>
                        </a>
                        <a href="{{route('sale-voucher.edit', $record->id)}}" type="button"
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
</div> <!-- end col -->