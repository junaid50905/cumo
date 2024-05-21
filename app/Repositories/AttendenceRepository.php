<?php

namespace App\Repositories;


use App\Models\Attendence;

class AttendenceRepository extends BaseRepository
{
    protected string $model = Attendence::class;

    public function getListData($perPage, $search)
    {
        return $this->model::with('details.employee')->when($search, function ($query) use ($search) {
            $query->where("address", "like", "%$search%")
                ->orWhere("email", "like", "%$search%")
                ->orWhere("phone", "like", "%$search%")
                //                  ->orWhere('student.name', 'like', "%$search%")
            ;
        })->latest()->paginate($perPage);
    }

    public function getMonthData($perPage,$yearMonth)
    {

        $year = explode("-", $yearMonth['month']);
        dd($year);
        return $this->model::with('details.employee')
            ->whereMonth('attendenceDate',$year[1])
            ->whereYear('attendenceDate',$year[0])
            ->latest()->paginate($perPage);
    }

    public function getDateData($perPage)
    {
        return $this->model::with('details.employee')
            ->whereDate('attendenceDate', '=', date('Y-m-d'))
            ->latest()->paginate($perPage);
    }

}
