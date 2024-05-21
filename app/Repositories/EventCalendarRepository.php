<?php

namespace App\Repositories;

use App\Models\EventCalendar;

class EventCalendarRepository extends BaseRepository
{
    protected string $model = EventCalendar::class;

    public function getListData($perPage, $search)
    {
        return $this->model::when($search, function ($query) use ($search) {
            $query->where("address", "like", "%$search%")
                ->orWhere("email", "like", "%$search%")
                ->orWhere("phone", "like", "%$search%");
        })->latest()->paginate($perPage);
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

    public function getAllEventCalendarList($eventType)
    {
        $events = $this->model::where('event_type', $eventType)->get();
        // dd($events);
        $eventsData = [];

        // Iterate through each event
        foreach ($events as $event) {
            $eventDate = date('Y-m-d', strtotime($event->event_date));

            // Create a new entry for the event date if it doesn't exist
            if (!isset($eventsData[$eventDate])) {
                $eventsData[$eventDate] = [];
            }

            // Add event details to the events array for the specific date
            $eventsData[$eventDate][] = [
                'id' => $event->id,
                'title' => $event->event_title,
                'startTime' => $event->event_start_time,
                'endTime' => $event->event_end_time,
                'mediumType' => $event->event_medium_type ? $this->mapEventMediumTypeToText($event->event_medium_type) : 'Offline',
                'status' => $event->event_status ? $this->mapEventStatusToText($event->event_status) : 'Pending',
            ];
        }

        $eventsDataJson = json_encode($eventsData, JSON_PRETTY_PRINT);

        // dd($eventsDataJson);

        return $eventsDataJson;
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