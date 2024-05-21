<div>
    <x-record-list :records="$records"> 
      
          <div class="table-responsive">
            <table class="table table-bordered w-100">
              <thead>
                <tr class="table-primary">
                    <th>Requisition For</th>
                    <th>Job Title</th>
                    <th>Department</th>
                    <th>Vacancy For</th>
                    <th>When Required</th>
                    <th>Last Date</th>
                    <th>Requested By</th>
                    <th>Log</th>
                    <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($records as $record)
                  <tr>
                      <td>{{ $record->requisition_for ? "Staff" : "Employee" }}</td>
                      <td>{{$record->job_title}}</td>
                      <td>{{ $record->department->department_name  ??''}}</td>
                      <td>{{$record->vacancy_for}}</td>
                      <td>{{$record->when_required}}</td>
                      <td>{{$record->updated_at}}</td>
                      <td>{{$record->requested_by->name ?? ''}}</td>
                      <td></td>
                      <td>
                          <a type="button" href="{{ route('employee-requisition.show', $record->id) }}" target="_blank" 
                            class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1" >
                            <i class="mdi mdi-eye"></i>
                          </a>
                          <button type="button" wire:click="toggleApprove({{ $record->id }})"
                            class="btn btn-sm btn-{{ $record->is_approved ? 'danger' : 'info' }} btn-rounded waves-effect waves-light mb-2 me-1">
                            <i class="fas fa-check"></i>
                          </button>
                          <a href="{{ route('employee-requisition.edit', $record->id) }}" target="_blank"
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
          <div class="row">
            <div class="col-sm-12 col-md-6">
              Showing 1 to 2 of 2 entries
            </div>
            <div class="col-sm-12 col-md-6 text-end">
              <nav>
                <ul class="pagination" style="justify-content: end;">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item active">
                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        
  </x-record-list>
</div>
