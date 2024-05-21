<div>
    <div class="table-responsive">
        <table class="table w-100 table-bordered">
          <thead>
            <tr class="table-primary">
              <th>Activity</th>
              <th>Tasks</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($records as $activity)
            <tr>
              <td>{{$activity->title}}</td>
              <td>
                @if($activity->task->isEmpty() === false)
                  @foreach($activity->task as $task)
                   <div>{{$task->title}}</div>
                  @endforeach
                @endif
              </td>
              <td>
                <!-- <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1" data-bs-toggle="modal" data-bs-target=".material-callects-modal-xl-view">
                  <i class="mdi mdi-pencil"></i>
                </button> -->
                <a href="{{route('task-activity-edit', $activity->id)}}" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1"><i class="mdi mdi-pencil"></i></a>
                <button type="button" class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2">
                  <i class="fas fa-trash-alt"></i>
                </button>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
</div>
