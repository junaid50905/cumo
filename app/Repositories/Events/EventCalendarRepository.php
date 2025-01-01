<?php

namespace App\Repositories\Events;

use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Events\EventCalendar;
use App\Models\Payments\AppointmentPayment;
use App\Models\Appointments\Appointment;
use App\Traits\CommonFunctionTrait;

class EventCalendarRepository extends BaseRepository
{
    use CommonFunctionTrait;

    protected string $model = EventCalendar::class;

    public function getToolList($toolType)
    {
        $modelClass = "App\\Models\\Assessments\\" . $toolType;

        if (class_exists($modelClass)) {
            $tools = $modelClass::orderBy('name', 'ASC')->get();
            return $tools;
            // dd($tools);
        } else {
            dd("The provided tool type is not valid.");
        }
    }

    public function getToolSubList($toolSubType)
    {
        $modelClass = "App\\Models\\Assessments\\" . $toolSubType;

        if (class_exists($modelClass)) {
            $assessmentToolsSubCategoriesCollection = $modelClass::orderBy('name', 'ASC')->get();
            $tools = $assessmentToolsSubCategoriesCollection->pluck('name', 'id')->toArray();
            return $tools;
            // dd($tools);
        } else {
            dd("The provided tool type is not valid.");
        }
    }

    public function getSpecificUserEventCalendarList($eventType, $userId){
        $events = $this->model::select(
                        'event_calendars.*',
                        'appointments.name as appointment_name',
                        'main_teachers.name as main_teacher_name',
                        'assistant_teachers.name as assistant_teacher_name'
                    )
                    ->where('event_calendars.appointment_id', $userId)
                    ->where('event_calendars.event_type', $eventType)
                    ->join('appointments', 'event_calendars.appointment_id', '=', 'appointments.id')
                    ->leftJoin('users as main_teachers', 'event_calendars.main_teacher_id', '=', 'main_teachers.id')
                    ->leftJoin('users as assistant_teachers', 'event_calendars.assistant_teacher_id', '=', 'assistant_teachers.id')
                    ->get()
                    ->map(function ($event) {
                        $event->event_medium_type_updated = $event->event_medium_type ? $this->mapEventMediumTypeToText($event->event_medium_type) : null;
                        $event->event_type_updated = $event->event_type ? $this->mapEventTypeToText($event->event_type) : null;
                        $event->event_status_updated = $event->event_status ? $this->mapEventStatusToText($event->event_status) : null;
                        return $event;
                    });

            // dd($events);
    
        return $events;
    }

    public function getAllEventCalendarList($eventType = null, $appointmentId = null)
    {
        $query = $this->model::select(
            'event_calendars.*',
            'appointments.name as appointment_name',
            'main_teachers.name as main_teacher_name',
            'assistant_teachers.name as assistant_teacher_name'
        )
        ->join('appointments', 'event_calendars.appointment_id', '=', 'appointments.id')
        ->leftJoin('users as main_teachers', 'event_calendars.main_teacher_id', '=', 'main_teachers.id')
        ->leftJoin('users as assistant_teachers', 'event_calendars.assistant_teacher_id', '=', 'assistant_teachers.id')
        ->orderBy('event_calendars.event_date', 'desc');

        if ($eventType) {
            $query->where('event_calendars.event_type', $eventType);
        }

        if ($appointmentId) {
            $query->where('event_calendars.appointment_id', $appointmentId);
        }

        $events = $query->get();
        $eventsData = [];

        foreach ($events as $event) {
            $eventDate = date('Y-m-d', strtotime($event->event_date));

            if (!isset($eventsData[$eventDate])) {
                $eventsData[$eventDate] = [];
            }

            $eventsData[$eventDate][] = [
                'id' => $event->id,
                'title' => $event->event_title,
                'startTime' => $event->event_start_time,
                'endTime' => $event->event_end_time,
                'mediumType' => $event->event_medium_type ? $this->mapEventMediumTypeToText($event->event_medium_type) : 'Offline',
                'status' => $event->event_status ? $this->mapEventStatusToText($event->event_status) : 'Pending',
                'appointmentName' => $event->appointment_name,
                'mainTeacherName' => $event->main_teacher_name,
                'assistantTeacherName' => $event->assistant_teacher_name
            ];
        }

        $eventsDataJson = json_encode($eventsData, JSON_PRETTY_PRINT);

        return $eventsDataJson;
    }

    public function getSchedulePendingList($sortBy, $sortType, $eventType, $paymentStatus = null){
        try {
            $query = AppointmentPayment::leftJoin('appointments', 'appointment_payments.appointment_id', '=', 'appointments.id')
                    ->select(
                        'appointments.id as appointment_id',
                        'appointments.student_id',
                        'appointments.name',
                        'appointments.created_at as appointment_date',
                        'appointments.phone_number',
                        'appointments.interview_status',
                        'appointments.assessment_status',
                        'appointment_payments.*'
                    );

            if ($eventType !== null) {
                $query->where('appointment_payments.income_type', $eventType);
            }
    
            if ($paymentStatus !== null) {
                $query->where('appointment_payments.payment_status', $paymentStatus);
            }

            $allPayments = $query->orderBy("appointment_payments.{$sortBy}", $sortType)->get();

            $allPayments->each(function ($item) {
                $item->income_type_updated = $item->income_type ? $this->mapIncomeTypeToText($item->income_type) : null;
                $item->payment_status_updated = $item->payment_status ? $this->mapPaymentStatusToText($item->payment_status) : null;
            });

            // dd($allPayments);

            return $allPayments;
        } catch (\Throwable $th) {
            // Log error with better context (optional)
            \Log::error('Error fetching payment data: ' . $th->getMessage(), [
                'sortBy' => $sortBy,
                'sortType' => $sortType,
                'eventType' => $eventType,
                'paymentStatus' => $paymentStatus,
            ]);
            
            // Flash a warning message and return
            Session::flash('alert', [
                'type' => 'warning', 
                'title' => 'Failed!', 
                'message' => 'Something went wrong: ' . $th->getMessage()
            ]);
            return redirect()->back();
        }
    }

    public function statusUpdated($appointmentId = null, $mainTeacherId = null, $assistantTeacherId = null, $eventType = null, $eventStatus = 1, $id = null){
        // dd($appointmentId, $mainTeacherId, $assistantTeacherId, $eventType);
        $query = $this->model::query();
        
        if ($appointmentId !== null) {
            $query->where('appointment_id', $appointmentId);
        }

        if ($mainTeacherId !== null) {
            $query->where('main_teacher_id', $mainTeacherId);
        }

        if ($assistantTeacherId !== null) {
            $query->where('assistant_teacher_id', $assistantTeacherId);
        }

        if ($eventType !== null) {
            $query->where('event_type', $eventType);
        }

        if ($appointmentId !== null && $mainTeacherId !== null && $assistantTeacherId !== null && $eventType !== null) {
            $updatedRows = $query->update(['event_status' => $eventStatus]);
            
            return true;
        } else {
            // If not all parameters were provided, return a message indicating no update was performed
            return response()->json(['message' => 'Not all parameters were provided. No updates were made.']);
        }
    }

    private function mapEventMediumTypeToText($eventMediumType)
    {
        // dd($eventMediumType);
        switch ($eventMediumType) {
            case 1:
                return 'Online';
            case 2:
                return 'Offline';
            default:
                return null;
        }
    }

    private function mapEventTypeToText($eventType)
    {
        // dd($eventType);
        switch ($eventType) {
            case 1:
                return 'Interview';
            case 2:
                return 'Assessment';
            case 3:
                return 'Observation';
            default:
                return null;
        }
    }

    private function mapEventStatusToText($eventStatus)
    {
        switch ($eventStatus) {
            case 1:
                return 'Pending';
            case 2:
                return 'Processing';
            case 3:
                return 'Cancel';
            case 4:
                return 'Completed';
            default:
                return null;
        }
    }

}