<?php

namespace App\Repositories;

use App\Models\LeaveApplication;

class LeaveApplicationRepository extends BaseRepository
{   
    protected string $model = LeaveApplication::class;
    
    public function getListData($perPage, $search)
    {
        return $this->model::with('details')->when($search, function ($query) use ($search) {
            $query->where("type", "like", "%$search%")
                    ->orWhere("start_date", "like", "%$search%")
                    ->orWhere("end_date", "like", "%$search%")
                    ->orWhere("duration", "like", "%$search%")
                    ->orWhere("is_houe", "like", "%$search%")
                    ->orWhere("avl_time", "like", "%$search%")
                    ->orWhere("half_day", "like", "%$search%")
                    ->orWhere("hour", "like", "%$search%")
                    ->orWhere("reason", "like", "%$search%")
                    ->orWhere("employee_id", "like", "%$search%")
                    ->orWhere("duration_in_days", "like", "%$search%")
                    ->orWhere("support_employee_id", "like", "%$search%")
                    ->orWhere("duration_in_hours", "like", "%$search%")
                    ->orWhere("address_at_leave", "like", "%$search%")
                    ->orWhere("phone_at_leave", "like", "%$search%")
                    ->orWhere("available_leave_ttachment", "like", "%$search%")
                    ->orWhere("leave_type_id", "like", "%$search%");
        })->latest()->paginate($perPage);
    }

    public function getLeaveApplicationWithSpecifyingRelation()
    {
        return $this->model::specifyingRelation()->get();
    }
}
