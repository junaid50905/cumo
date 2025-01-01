@extends('layouts.master')
@section('title') @lang('translation.Dashboards') @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Dashboards @endslot
@slot('title') Dashboard @endslot
@endcomponent
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
.container {
    max-width: 1200px;
    /* margin: 20px auto; */
}

#eventDetails__Calendar {
    background-color: #f8f9fa;
    border: 1px solid #dee2e6;
    padding: 10px 20px;
    margin-bottom: 20px;
}

.event__calendar {
    border: 1px solid #dee2e6;
    width: 100%;
    padding: 10px;
}

.event__calendar .row {
    width: 100%;
    text-align: center;
    margin-left: 1px;
}

.calendar-header-event {
    text-align: center;
}

.calendar-header-event .d-flex.align-items-center.justify-content-between {
    border-bottom: 1px solid #d5d4d4;
    padding-bottom: 10px;
}

h2#currentMonthYear {
    font-size: 20px;
    font-weight: 800;
}

.my-event-day {
    border: 1px solid #dee2e6;
    padding: 5px 3px;
    height: auto;
    position: relative;
}

.my-event-day-number {
    font-size: 18px;
    font-weight: bold;
}

.my-event-day-name {
    font-size: 14px;
    font-weight: bold;
    margin-bottom: 5px;
}

.my-event {
    background-color: #f0f0f0;
    cursor: pointer;
    margin-bottom: 5px;
    padding: 2px 7px;
    border-radius: 5px;
    border: 1px solid #c7c7c7;
    text-align: start;
    font-size: 12px;
    font-weight: 500;
}

.inactive {
    color: #cfcfd0;
    background-color: #edf2f7;
}

/* Style for current date */
.current-date {
    background-color: #3856ec !important;
    color: #fff !important;
    text-align: center;
}

.interview__events__display {
    line-height: 14px;
}

.interview__events__display p {
    line-height: 14px;
    text-align: center;
    padding: 0;
    margin: 0;
    padding: 1px 2px;
    border-radius: 5px;
}

.interview__status__completed {
    background: green;
    color: white;
}

.interview__status__processing {
    background: blue;
    color: white;
}

.interview__status__pending {
    background: red;
    color: white;
}

.timeFromTo {
    font-size: 10px;
    font-weight: 700;
    line-height: 2px;
}

</style>

<div class="row">
    <div class="col-xl-12">
        <div class="row">
            <div class="col-md-4">
                <div class="card mini-stats-wid">
                    <div class="card-body flex-grow-1">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-muted fw-medium mb-2">Appointments</p>
                                <h4 class="mb-0">1,235</h4>
                            </div>
                            
                            <div class="flex-shrink-0 align-self-center">
                                <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                                    <span class="avatar-title text-white">
                                        <i class="bx bx-archive-in font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-light text-center mt-auto w-100 border-top">
                        <a href="{{ route('appointment.index') }}" class="btn w-100">View appointment list</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mini-stats-wid">
                    <div class="card-body flex-grow-1">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-muted fw-medium mb-2">Interview Schedule</p>
                                <h4 class="mb-0">1,235</h4>
                            </div>
                            
                            <div class="flex-shrink-0 align-self-center">
                                <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                                    <span class="avatar-title text-white">
                                        <i class="bx bx-archive-in font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-light text-center mt-auto w-100 border-top">
                        <a href="{{ route('event_schedule_list', $event_type = 1 ) }}" class="btn w-100">View interview schedule list</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mini-stats-wid">
                    <div class="card-body flex-grow-1">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-muted fw-medium mb-2">Assessment Schedule</p>
                                <h4 class="mb-0">1,235</h4>
                            </div>
                            
                            <div class="flex-shrink-0 align-self-center">
                                <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                                    <span class="avatar-title text-white">
                                        <i class="bx bx-archive-in font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-light text-center mt-auto w-100 border-top">
                        <a href="{{ route('event_schedule_list', $event_type = 2 ) }}" class="btn w-100">View assessment schedule list</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row mt-5">
            <div class="field__data">
                <div class="field__label">
                    <span>Intervew Schedule List</span>
                </div>
                <div class="input__field_data mt-3">
                    <div class="row">
                        <div class="card">
                            <div id="calendar__div">
                                <div class="event__calendar" id="interview__calendar"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="field__data">
                <div class="field__label">
                    <span>Assessment Schedule List</span>
                </div>
                <div class="input__field_data mt-3">
                    <div class="row">
                        <div class="card">
                            <div id="calendar__div">
                                <div class="event__calendar" id="assessment__calendar"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
</div>
<!-- end row -->


@endsection


@section('script')
<script>
let interviewEvents = {!! json_encode($interviewEvents) !!};
let assessmentEvents = {!! json_encode($assessmentEvents) !!};

// console.log(interviewEvents);

localStorage.setItem('interviewEvents', JSON.stringify(interviewEvents));
localStorage.setItem('assessmentEvents', JSON.stringify(assessmentEvents));

const storedInterviewEvents = localStorage.getItem('interviewEvents');
const storedAssessmentEvents = localStorage.getItem('assessmentEvents');
if (storedInterviewEvents) {
    interviewEvents = JSON.parse(storedInterviewEvents);
}

if (storedAssessmentEvents) {
    assessmentEvents = JSON.parse(storedAssessmentEvents);
}

let currentMonth = new Date().getMonth();
let currentYear = new Date().getFullYear();
let currentDate = new Date().getDate();

// Function to render the event calendar
function renderEventCalendar(calendarDivId, events) {
    const calendarDiv = document.getElementById(calendarDivId);
    const today = new Date(currentYear, currentMonth, 1);
    const daysInMonth = new Date(currentYear, currentMonth + 1, 0).getDate();
    const monthName = today.toLocaleString('default', {
        month: 'long'
    });
    const firstDayOfMonth = new Date(currentYear, currentMonth, 1).getDay();

    calendarDiv.innerHTML = `
                <div class="calendar-header-event">
                    <div class="d-flex align-items-center justify-content-between">
                        <button onclick="prevMonth()" class="btn btn-primary">Previous</button>
                        <h2 id="currentMonthYear">${monthName} ${currentYear}</h2>
                        <button onclick="nextMonth()" class="btn btn-primary">Next</button>
                    </div>
                    <div class="row">
                        <div class="col my-event-day-name">Sun</div>
                        <div class="col my-event-day-name">Mon</div>
                        <div class="col my-event-day-name">Tue</div>
                        <div class="col my-event-day-name">Wed</div>
                        <div class="col my-event-day-name">Thu</div>
                        <div class="col my-event-day-name">Fri</div>
                        <div class="col my-event-day-name">Sat</div>
                    </div>
                </div>
            `;

    let date = 1;
    let isCurrentMonth = true;

    for (let i = 0; i < 6; i++) {
        const row = document.createElement('div');
        row.classList.add('row');

        for (let j = 0; j < 7; j++) {
            if (i === 0 && j < firstDayOfMonth) {
                // Previous month's dates
                const prevMonthDays = new Date(currentYear, currentMonth, 0).getDate();
                const cell = document.createElement('div');
                cell.classList.add('col', 'my-event-day', 'inactive'); // Added 'inactive' class
                cell.innerHTML = `
                            <div class="my-event-day-number">${prevMonthDays - (firstDayOfMonth - 1 - j)}</div>
                        `;
                row.appendChild(cell);
                isCurrentMonth = false;
            } else if (date > daysInMonth) {
                // Next month's dates
                const cell = document.createElement('div');
                cell.classList.add('col', 'my-event-day', 'inactive'); // Added 'inactive' class
                cell.innerHTML = `
                            <div class="my-event-day-number">${date - daysInMonth}</div>
                        `;
                row.appendChild(cell);
                date++;
            } else {
                // Current month's dates
                const cell = document.createElement('div');
                cell.classList.add('col', 'my-event-day');

                const currentDate = new Date();
                const isCurrentDate = date === currentDate.getDate() && currentMonth === currentDate.getMonth() &&
                    currentYear === currentDate.getFullYear();
                cell.innerHTML +=
                    `<div class="my-event-day-number ${isCurrentDate ? 'active-day current-date' : ''}">${date}</div>`;

                const currentDay =
                    `${currentYear}-${(currentMonth + 1).toString().padStart(2, '0')}-${date.toString().padStart(2, '0')}`;
                cell.dataset.date = currentDay;

                if (events[currentDay]) {
                    events[currentDay].forEach(event => {
                        const eventElement = document.createElement("div");
                        eventElement.classList.add("my-event");
                        eventElement.innerHTML = `
                                    <div class="interview__events__display">
                                        <p class="interview__status__${(event.status).toLowerCase()}">${event.status}</p>
                                        <p>${event.title}<span class="timeFromTo">(${event.mediumType})</span></p>
                                        <p class="timeFromTo">${event.startTime} to ${event.endTime}</p>
                                    </div>
                                `;
                        cell.appendChild(eventElement);
                    });
                }

                row.appendChild(cell);
                date++;
                isCurrentMonth = true;
            }
        }

        calendarDiv.appendChild(row);
    }
}

// Function to navigate to the next month
function nextMonth() {
    currentMonth++;
    if (currentMonth > 11) {
        currentMonth = 0;
        currentYear++;
    }
    renderEventCalendar('interview__calendar', interviewEvents);
    renderEventCalendar('assessment__calendar', assessmentEvents);
}

// Function to navigate to the previous month
function prevMonth() {
    currentMonth--;
    if (currentMonth < 0) {
        currentMonth = 11;
        currentYear--;
    }
    renderEventCalendar('interview__calendar', interviewEvents);
    renderEventCalendar('assessment__calendar', assessmentEvents);
}

// Call renderEventCalendar on page load
window.onload = function() {
    renderEventCalendar('interview__calendar', interviewEvents);
    renderEventCalendar('assessment__calendar', assessmentEvents);
};
</script>
@endsection
