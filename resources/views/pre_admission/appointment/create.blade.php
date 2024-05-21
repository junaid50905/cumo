@extends('layouts.master')
@section('title')
@lang('translation.Tabs_&_Accordions')
@endsection
@section('content')
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

#event__calendar {
    border: 1px solid #dee2e6;
    width: 100%;
    padding: 10px;
}

#event__calendar .row{
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

.interview__events__display p{
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
.interview__status__processing{
    background: blue;
    color: white;
}
.interview__status__pending{
    background: red;
    color: white;
}

.timeFromTo {
    font-size: 10px;
    font-weight: 700;
    line-height: 2px;
}

/* Custom time setup stat */
.my_custom_time_option_show {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.my_custom_time_options_div {
    border: 1px solid #c5c4c4;
    padding: 1px 5px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 10px;
    border-radius: 5px;
    width: 100%;
}

.my_custom_time_options_div select:focus {
    outline: none;
    border: none;
}

.my_custom_time_options_div select {
    border: none;
    width: 100%;
    height: 35px;
    text-align: center;
}

.my_custom_time_option_show.row {
    padding: 0;
    margin: 0;
}

input#selectedStartTime,
input#selectedEndTime {
    width: 90px;
    border: 1px solid #f7d2d2;
    border-radius: 5px;
    padding: 7px;
    background: #e9e9e9;
    font-weight: 600;
    outline: none;
}

/* Custom time setup end */
</style>
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <div class="card__data__box">
                    <form action="{{ route('appointment.store') }}" method="POST">
                        @csrf
                        <div class="field__data mt-2">
                            <div class="field__label">
                                <span>Appointment Data</span>
                            </div>
                            <div class="input__field_data mt-2">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-6 pb-3 ">
                                        <div class="row">
                                            <label for="name" class="col-md-4 col-form-label">Name<span
                                                    class="text-danger">*</span> :</label>
                                            <div class="col-md-8">
                                                <x-input-text name="name" placeholder="Student Name" required>
                                                </x-input-text>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6 pb-3">
                                        <div class="row">
                                            <label for="student_id" class="col-md-4 col-form-label">Student
                                                ID:</label>
                                            <div class="col-md-8">
                                                <input class="form-control" name="student_id" type="text"
                                                    placeholder="Student ID" value="{{ $uniqueId }}" readonly />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6 pb-3">
                                        <div class="row">
                                            <label for="father_name" class="col-md-4 col-form-label">Father
                                                Name:</label>
                                            <div class="col-md-8" id="fatherName">
                                                <x-input-text name="father_name" type="text"
                                                    placeholder="Enter Father Name"> </x-input-text>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6 pb-3">
                                        <div class="row">
                                            <label for="mother_name" class="col-md-4 col-form-label">Mother
                                                Name:</label>
                                            <div class="col-md-8" id="motherName">
                                                <x-input-text name="mother_name" type="text"
                                                    placeholder="Enter Mother Name"> </x-input-text>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6 pb-3">
                                        <div class="row">
                                            <label for="parent_email" class="col-md-4 col-form-label">Parents
                                                Email:</label>
                                            <div class="col-md-8">
                                                <x-input-text type="email" name="parent_email"
                                                    placeholder="Enter Parent's Email">
                                                </x-input-text>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6 pb-3">
                                        <div class="row">
                                            <label for="present_address" class="col-md-4 col-form-label">Present
                                                Address:</label>
                                            <div class="col-md-8">
                                                <x-input-textarea name="present_address"
                                                    placeholder="Enter Present Address" rows="1"></x-input-textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6 pb-3">
                                        <div class="row">
                                            <label for="permanent_address" class="col-md-4 col-form-label">Parmanent
                                                Address:</label>
                                            <div class="col-md-8">
                                                <x-input-textarea name="permanent_address"
                                                    placeholder="Enter Parmanent Address" rows="1">
                                                </x-input-textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6 pb-3">
                                        <div class="row">
                                            <label for="diagnosis" class="col-md-4 col-form-label">Diagonosis:</label>
                                            <div class="col-md-8">
                                                <x-input-textarea name="diagnosis" placeholder="Enter Diagnosis"
                                                    rows="1"></x-input-textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6 pb-3">
                                        <div class="row">
                                            <label for="gender" class="col-md-4 col-form-label">Gender:</label>
                                            <div class="col-md-8">
                                                <x-input-select name="gender" :records="$gender"
                                                    firstLabel="Select Gender">
                                                </x-input-select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6 pb-3">
                                        <div class="row">
                                            <label for="blood_group" class="col-md-4 col-form-label">Blood
                                                Group:</label>
                                            <div class="col-md-8">
                                                <x-input-select name="blood_group" :records="$bloodGroups"
                                                    firstLabel="Select Blood">
                                                </x-input-select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6 pb-3">
                                        <div class="row">
                                            <label for="dob" class="col-md-4 col-form-label">Date of Birth: </label>
                                            <div class="col-md-8" id="datepicker2">
                                                <x-input-text name="dob" type="date" placeholder="mm/dd/yyyy">
                                                </x-input-text>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6 pb-3">
                                        <div class="row">
                                            <label for="age" class="col-md-4 col-form-label">Age<span
                                                    class="text-danger">*</span> :</label>
                                            <div class="col-md-8">
                                                <x-input-text name="age" placeholder="Ex: 8 Months/Years" required>
                                                </x-input-text>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6 pb-3">
                                        <div class="row">
                                            <label for="phone_number" class="col-md-4 col-form-label">Parent's
                                                Contact phone<span class="text-danger">*</span> :</label>
                                            <div class="col-md-8">
                                                <x-input-text type="number" name="phone_number"
                                                    placeholder="Enter Parent's Contact Number" required>
                                                </x-input-text>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6 pb-3">
                                        <div class="row">
                                            <label for="interview_date" class="col-md-4 col-form-label">Interview
                                                Date:</label>
                                            <div class="col-md-8" id="datepicker2">
                                                <x-input-text name="interview_date" type="date" placeholder="mm/dd/yyyy"
                                                    min="{{ date('Y-m-d') }}">
                                                </x-input-text>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 d-flex">
                                        <button type="submit" class="btn btn-success w-100">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- <div class="field__data  mt-5">
                        <div class="field__label">
                            <span>Interviewer Data</span>
                        </div>
                        <div class="input__field_data">
                            <div class="button__group d-flex gap-2 justify-content-end aligns-items-center"
                                style="margin-bottom: -20px;">
                                <div class="d-flex gap-2 justify-content-end aligns-items-center">
                                    <span class="font-weight-bold">Payment: </span>
                                    <p class="btn btn-primary btn-sm">Pending</p>
                                </div>
                                <div class="d-flex gap-2 justify-content-end aligns-items-center">
                                    <span class="font-weight-bold">Interview: </span>
                                    <p class="btn btn-primary btn-sm">Pending</p>
                                </div>
                                <div class="d-flex gap-2 justify-content-end aligns-items-center">
                                    <span class="font-weight-bold">Assessment: </span>
                                    <p class="btn btn-primary btn-sm">Pending</p>
                                </div>
                            </div>
                            <hr />
                            <!-- start calendar 
                            <form action="{{route('interviewer-time-setup.interviewer')}}" method="POST">
                                @csrf

                                <input type="hidden" value="{{ $uniqueId }}" name="appointment_id" id="appointment_id">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-6 pb-3 ">
                                        <div class="row">
                                            <label for="example-search-input" class="col-md-4 col-form-label">Main
                                                Teacher Dept:</label>
                                            <div class="col-md-8">
                                                <x-input-select name="main_teacher_department" :records="$departments"
                                                    firstLabel="Select Department" :required='true'>
                                                </x-input-select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6 pb-3 ">
                                        <div class="row">
                                            <label for="example-search-input" class="col-md-4 col-form-label">Main
                                                Teacher Name:</label>
                                            <div class="col-md-8">
                                                <x-input-select-custom name="main_teacher_id" :records="$all_user" firstLabel="Select Main Teacher"
                                                    :required='true' onChange="addEventTitle()" >
                                                </x-input-select-custom>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6 pb-3 ">
                                        <div class="row">
                                            <label for="example-search-input" class="col-md-4 col-form-label">Assitant
                                                Teacher Dept:</label>
                                            <div class="col-md-8">
                                                <x-input-select name="assistant_teacher_department"
                                                    :records="$departments" firstLabel="Select Department"
                                                    :required='true'>
                                                </x-input-select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6 pb-3 ">
                                        <div class="row">
                                            <label for="example-search-input"
                                                class="col-md-4 col-form-label">Assistant Teacher Name:</label>
                                            <div class="col-md-8">
                                                <x-input-select-custom name="assistant_teacher_id" :records="$all_user" firstLabel="Select Assistant Teacher"
                                                    :required='true'>
                                                </x-input-select-custom>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- start calendar 
                                <div class="row">
                                    <div class="col-md-4">
                                        <div id="eventDetails__Calendar">
                                            <h5>Set Interview Time</h5>
                                            <div class="form-group">
                                                <label for="eventTitle">Event Title:</label>
                                                <input type="text" class="form-control" id="eventTitle"
                                                    name="event_title" required readOnly>
                                            </div>
                                            <div class="form-group">
                                                <label for="interview_medium">Interview Medium:</label>
                                                <x-input-select name="interview_medium" :records="$interview_medium"
                                                    firstLabel="Select Medium">
                                                </x-input-select>
                                            </div>
                                            <div class="form-group">
                                                <label for="event_date">Date:</label>
                                                <input type="date" class="form-control" id="event_date"
                                                    name="event_date" min="{{ date('Y-m-d') }}" required>
                                            </div>

                                            <div class="form-group">
                                                <label class="my_custom_time_options_label" for="startHour">Start
                                                    Time:</label>
                                                <div class="my_custom_time_option_show row">
                                                    <div class="my_custom_time_options_div col-sm-12 col-md-8">
                                                        <select id="startHour" onchange="updateEndTime()">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                            <option value="9">9</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                        </select>
                                                        <select id="startMinute" onchange="updateEndTime()">
                                                            <option value="00">00</option>
                                                            <option value="15">15</option>
                                                            <option value="30">30</option>
                                                            <option value="45">45</option>
                                                        </select>
                                                        <select id="startAmpm" onchange="updateEndTime()">
                                                            <option value="AM">AM</option>
                                                            <option value="PM">PM</option>
                                                        </select>
                                                    </div>
                                                    <div class="show__time__only col-sm-12 col-md-4">
                                                        <input type="text" id="selectedStartTime"
                                                            name="event_start_time" readonly>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="my_custom_time_options_label" for="startHour">End
                                                    Time:</label>
                                                <div class="my_custom_time_option_show row">
                                                    <div class="my_custom_time_options_div col-sm-12 col-md-8">
                                                        <select id="endHour">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                            <option value="9">9</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                        </select>
                                                        <select id="endMinute">
                                                            <option value="00">00</option>
                                                            <option value="15">15</option>
                                                            <option value="30">30</option>
                                                            <option value="45">45</option>
                                                        </select>
                                                        <select id="endAmpm">
                                                            <option value="AM">AM</option>
                                                            <option value="PM">PM</option>
                                                        </select>
                                                    </div>
                                                    <div class="show__time__only col-sm-12 col-md-4">
                                                        <input type="text" id="selectedEndTime" name="event_end_time"
                                                            readonly>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-grid col-6 mx-auto">
                                            <button type="submit" class="btn btn-success w-100">Save</button>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div id="calendar__div">
                                            <div id="event__calendar"></div>
                                        </div>
                                    </div>
                                </div>
                            </form> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script-bottom')

<script>
    let events = {!! json_encode($events) !!};
    
    localStorage.setItem('events', JSON.stringify(events));
    
    const storedEvents = localStorage.getItem('events');
    if (storedEvents) {
        events = JSON.parse(storedEvents);
    }
   
    let currentMonth = new Date().getMonth();
    let currentYear = new Date().getFullYear();
    let currentDate = new Date().getDate();

    // Function to render the event calendar
    function renderEventCalendar() {
        const calendarDiv = document.getElementById("event__calendar");
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
                                    <p>${event.title}</p>
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
        renderEventCalendar();
    }

    // Function to navigate to the previous month
    function prevMonth() {
        currentMonth--;
        if (currentMonth < 0) {
            currentMonth = 11;
            currentYear--;
        }
        renderEventCalendar();
    }

    // Call renderEventCalendar on page load
    window.onload = function() {
        renderEventCalendar();
    };
</script>

<script>
function addEventTitle() {
    const uniqueId = @json($uniqueId);
    let selectElement = document.getElementById('main_teacher_id');
    let selectedOptionIndex = selectElement.selectedIndex;
    let selectedOptionText = selectElement.options[selectedOptionIndex].innerText;

    document.getElementById('eventTitle').value = 'SID#' + uniqueId.split("-")[0] + '(' + selectedOptionText.split(" (")[0].replace(/\s/g, '') + ')';
}
</script>

<script>
// Function to update time
function updateTime(hourId, minuteId, ampmId, outputId) {
    var hour = document.getElementById(hourId).value;
    var minute = document.getElementById(minuteId).value;
    var ampm = document.getElementById(ampmId).value;
    var time = hour.padStart(2, '0') + ":" + minute.padStart(2, '0') + " " + ampm;
    document.getElementById(outputId).value = time;
}

// Function to update end time based on start time
function updateEndTime() {
    var startHour = parseInt(document.getElementById("startHour").value);
    var startMinute = parseInt(document.getElementById("startMinute").value);
    var startAmpm = document.getElementById("startAmpm").value;

    var endHour = startHour;
    var endMinute = startMinute + 45;
    var endAmpm = startAmpm;

    if (endMinute >= 60) {
        endHour += 1;
        endMinute -= 60;
    }

    if (endHour > 12) {
        endHour -= 12;
        endAmpm = (startAmpm === "AM") ? "PM" : "AM";
    }

    // Ensure end time is greater than start time
    if (endHour === startHour && endMinute <= startMinute) {
        endMinute = startMinute + 45;
        if (endMinute >= 60) {
            endHour += 1;
            endMinute -= 60;
        }
        if (endHour > 12) {
            endHour -= 12;
            endAmpm = (startAmpm === "AM") ? "PM" : "AM";
        }
    }

    // Ensure end time is greater than start time
    if (startHour === 12 && endHour === 1 && startAmpm === "PM") {
        endAmpm = "PM";
    }

    document.getElementById("endHour").value = endHour;
    document.getElementById("endMinute").value = endMinute.toString().padStart(2, '0');
    document.getElementById("endAmpm").value = endAmpm;

    updateTime("startHour", "startMinute", "startAmpm", "selectedStartTime");
    updateTime("endHour", "endMinute", "endAmpm", "selectedEndTime");
}

// Function to get current time
function getCurrentTime() {
    var now = new Date();
    var hour = now.getHours();
    var minute = now.getMinutes();
    var ampm = hour >= 12 ? "PM" : "AM";

    // Convert to 12-hour format
    hour = hour % 12 || 12;

    // Get the nearest minute
    if (minute >= 0 && minute < 15) {
        minute = 0;
    } else if (minute >= 15 && minute < 30) {
        minute = 15;
    } else if (minute >= 30 && minute < 45) {
        minute = 30;
    } else {
        minute = 45;
    }

    // Set start time fields with current time
    document.getElementById("startHour").value = hour.toString();
    document.getElementById("startMinute").value = minute < 10 ? "0" + minute.toString() : minute.toString();
    document.getElementById("startAmpm").value = ampm;

    // Update end time accordingly
    updateEndTime();

    // Update start time field with current time
    updateTime("startHour", "startMinute", "startAmpm", "selectedStartTime");
}

// Call getCurrentTime function to set initial start time
getCurrentTime();

// Update start time every minute
setInterval(getCurrentTime, 60000);

// Add event listeners for start time
document.getElementById("startHour").addEventListener("change", function() {
    updateEndTime();
});

document.getElementById("startMinute").addEventListener("change", function() {
    updateEndTime();
});

document.getElementById("startAmpm").addEventListener("change", function() {
    updateEndTime();
});

// Add event listeners for end time
document.getElementById("endHour").addEventListener("change", function() {
    updateTime("endHour", "endMinute", "endAmpm", "selectedEndTime");
});

document.getElementById("endMinute").addEventListener("change", function() {
    updateTime("endHour", "endMinute", "endAmpm", "selectedEndTime");
});

document.getElementById("endAmpm").addEventListener("change", function() {
    updateTime("endHour", "endMinute", "endAmpm", "selectedEndTime");
});
</script>
@endsection