<?php

namespace App\Http\Controllers;

use App\Models\AssignTask;
use App\Models\AssignTaskDetail;
// use App\Http\Requests\StoreAssignTaskRequest;
// use App\Http\Requests\UpdateAssignTaskRequest;
// use Illuminate\Http\Request;
// use PhpParser\Node\Expr\Assign;

class AssignTaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $data = [
            'teachers' => \App\Models\User::get()->toJson(),
            'students' => \App\Models\Student::all(),
            'assign_tasks' => AssignTask::with(['details', 'student'])->get()
        ];
        return view('program.assign-task.create', $data);
    }

    
    public function store()
    {  
        request()->validate([
            'student_id' => 'bail|required',
            'start_date' => 'bail|required',
            'end_date' => 'bail|required',
            
        ]);
        $filtered = request()->collect()->filter(function($itm){
            return gettype($itm)!='array';
        });
        
        $assignTask = AssignTask::create($filtered->toArray());
        
        $dynamic_data = request()->collect()->filter(function($itm){
            return gettype($itm)=='array';
        });
        
        foreach($dynamic_data->toArray() as $key=>$val){
            $assignTaskDetail = new AssignTaskDetail();
            $assignTaskDetail->assign_task_id = $assignTask->id;
            $assignTaskDetail->task_id = $val[0];
            $assignTaskDetail->user_id = $val[1];
            $assignTaskDetail->routine_detail_id = $val[2];
            $assignTaskDetail->comment = $val[3];
            $assignTaskDetail->save();
        }
        
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AssignTask  $assignTask
     * @return \Illuminate\Http\Response
     */
    public function show(AssignTask $assignTask)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AssignTask  $assignTask
     * @return \Illuminate\Http\Response
     */
    public function edit(AssignTask $assignTask)
    {
       $routine_id = \App\Models\Student::find($assignTask->student_id)->stage; 
       $routine_details = \App\Models\RoutineDetail::where('routine_id', $routine_id+1)->get();
       
       $teachers = \App\Models\User::get(); 

       $table = '';
       foreach($assignTask->details as $assign_task_detail){
           $routine = '<select name='.$assign_task_detail->task_id.'[]>';
            foreach($routine_details as $routine_detail){
                if($routine_detail->id == $assign_task_detail->routine_detail_id){
                  $selected = 'selected';
                }else{
                  $selected = '';
                }
                $routine.='<option '.$selected.' value='.$routine_detail->id.'>'.$routine_detail->startTime.'-'.$routine_detail->endTime.' : '.$routine_detail->work.'</option>';            
            }
            $routine.='</select>';

            $teacher_list = '<select name='.$assign_task_detail->task_id.'[]>';
            foreach($teachers as $teacher){
                if($teacher->id == $assign_task_detail->user_id){
                  $selected = 'selected';
                }else{
                  $selected = '';
                }
                $teacher_list.='<option '.$selected.' value='.$teacher->id.'>'.$teacher->name.'</option>';            
            }
            $teacher_list .= '<select>';
            
           $table .= '<tr>';
           $table .= '<td><div class="form-check form-check-info mb-3 sortable" onclick="removeSelected(this)"><i class="fa fa-minus-square px-2" aria-hidden="true" type="hidden"></i><input class="form-check-input" type="hidden" name="'.$assign_task_detail->task->id.'[]" id="'.$assign_task_detail->task->id.'" value="'.$assign_task_detail->task->id.'"><label class="form-check-label" for="formCheckcolor3" type="hidden">'.$assign_task_detail->task->title.'</label></div></td>';
           $table .= '<td>'.$teacher_list.'</td>';
           $table .= '<td>'.$routine.'</td>';
           $table .= '<td><input type="text" name='.$assign_task_detail->task_id.'[]'.' value='.$assign_task_detail->comment.'></td>';
           $table .= '</tr>';
       }

        $data = [
            'teachers' => \App\Models\User::get()->toJson(),
            'students' => \App\Models\Student::all(),
            'assign_tasks' => AssignTask::with(['details', 'student'])->get(),
            'id' => $assignTask->student_id,
            'table' => $table,
            'assignTask' => $assignTask,
            'task_ids' => $assignTask->details->pluck('task_id')
        ];
        
        return view('program.assign-task.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\StoreAssignTaskRequest  $request
     * @param  \App\Models\AssignTask  $assignTask
     * @return \Illuminate\Http\Response
     */
    public function update(AssignTask $assignTask)
    {
        $filtered = request()->collect()->filter(function($itm){
            return gettype($itm)!='array';
        });
        $model  = $filtered->toArray();
        unset($model['_token']);
        unset($model['_method']);
        AssignTask::where('id', $assignTask->id)->update($model);

        $dynamic_data = request()->collect()->filter(function($itm){
            return gettype($itm)=='array';
        });
        AssignTaskDetail::where('assign_task_id', $assignTask->id)->delete();
        foreach($dynamic_data->toArray() as $key=>$val){
            $assignTaskDetail = new AssignTaskDetail();
            $assignTaskDetail->assign_task_id = $assignTask->id;
            $assignTaskDetail->task_id = $val[0];
            $assignTaskDetail->user_id = $val[1];
            $assignTaskDetail->routine_detail_id = $val[2];
            $assignTaskDetail->comment = $val[3];
            $assignTaskDetail->save();
        }

        return redirect()->route('assign-task.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AssignTask  $assignTask
     * @return \Illuminate\Http\Response
     */
    public function destroy(AssignTask $assignTask)
    {
        $assignTask->delete();
        return back();
    }
}
