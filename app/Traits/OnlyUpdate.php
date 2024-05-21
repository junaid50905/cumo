<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Model;

trait OnlyUpdate
{

    public function update(Model $obj, array $data): Model
    {   
        foreach ($data as $key => $val) {
            $obj->{$key} = $val;
        }
        $obj->update();
        
        return $obj;
    }
    
    public function movementUpdate(Model $obj, array $data): Model
    {   
        $all_columns = \Schema::getColumnListing('functional_movementskills');
        $exclude_columns = ['id', 'collection_date', 'teacher_id', 'student_id', 'is_approved', 'created_at'];
        $get_columns = array_diff($all_columns, $exclude_columns);
        
        foreach($get_columns as $column){
          $obj->$column = null;
        }
        $obj->update();

        foreach ($data as $key => $val) {
            $obj->{$key} = $val;
        }
        $obj->update();
        
        return $obj;
    }
}
