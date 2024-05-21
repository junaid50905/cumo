<div>
  <x-record-list :records="$records">
    <div class="row">
      <div class="table-responsive">
        <table class="table table-bordered w-100">
          <thead>
            <tr class="table-primary">
                <th>Department</th>
                <th>Name</th>
                <th>Designation</th>
                <th>Joining Date</th>
                <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($records as $record)
              <tr>
                <td>{{ $record->dep->department_name  ??''}}</td>
                <td>{{ $record->student->name ?? ''}}</td>
                <td>{{ $record->designation}}</td>
                <td>{{ $record->joining_date}}</td>
                <td>
                  <a href="{{route('reporting-memo.show', $record->id)}}"
                    class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1">
                    <i class="mdi mdi-eye"></i>
                  </a>
                   
                  <button type="button" wire:click="toggleApprove({{$record->id}})"
                    class="btn btn-sm btn-{{$record->is_approved ? 'danger' : 'info'}} btn-rounded waves-effect waves-light mb-2 me-1">
                    <i class="fas fa-check"></i>
                  </button>

                  <a href="{{ route('reporting-memo.edit', $record->id) }}" target="_blank"
                      rel="noopener noreferrer"
                      class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                      <i class="mdi mdi-pencil"></i>
                  </a>

                    <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                      <i class="bx bx-dollar"></i>
                    </button>
                    <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                      <i class="fas fa-arrow-circle-right"></i>
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
  </x-record-list>
</div>
