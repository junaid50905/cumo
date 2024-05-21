function eventCalendar() {
    let events = {};
    let currentMonth = new Date().getMonth();
    let currentYear = new Date().getFullYear();
    let currentDate = new Date().getDate();

    const formatTime = (timeString) => {
        const [hours, minutes] = timeString.split(":");
        let formattedHours = parseInt(hours);
        const ampm = formattedHours >= 12 ? "PM" : "AM";
        formattedHours = formattedHours % 12 || 12;
        return `${formattedHours}:${minutes} ${ampm}`;
    };

    function renderCalendar() {
        const calendarDiv = document.getElementById("calendar");
        const today = new Date(currentYear, currentMonth, 1);
        const daysInMonth = new Date(
            currentYear,
            currentMonth + 1,
            0
        ).getDate();
        const monthName = today.toLocaleString("default", {
            month: "long",
        });
        const firstDayOfMonth = new Date(currentYear, currentMonth, 1).getDay();

        calendarDiv.innerHTML = `
            <div class="calendar-header">
                <div class="d-flex align-items-center justify-content-between">
                    <button onclick="prevMonth()" class="btn btn-primary">Previous</button>
                    <h2 id="currentMonthYear">${monthName} ${currentYear}</h2>
                    <button onclick="nextMonth()" class="btn btn-primary">Next</button>
                </div>
                <div class="row">
                    <div class="col day-name">Sun</div>
                    <div class="col day-name">Mon</div>
                    <div class="col day-name">Tue</div>
                    <div class="col day-name">Wed</div>
                    <div class="col day-name">Thu</div>
                    <div class="col day-name">Fri</div>
                    <div class="col day-name">Sat</div>
                </div>
            </div>
        `;
        let date = 1;
        let isCurrentMonth = true; // Flag to track whether the current date is within the current month

        for (let i = 0; i < 6; i++) {
            const row = document.createElement("div");
            row.classList.add("row");

            for (let j = 0; j < 7; j++) {
                if (i === 0 && j < firstDayOfMonth) {
                    // Previous month's dates
                    const prevMonthDays = new Date(
                        currentYear,
                        currentMonth,
                        0
                    ).getDate();
                    const cell = document.createElement("div");
                    cell.classList.add("col", "day", "inactive"); // Added 'inactive' class
                    cell.innerHTML = `
                    <div class="day-number">${
                        prevMonthDays - (firstDayOfMonth - 1 - j)
                    }</div>
                `;
                    row.appendChild(cell);
                    isCurrentMonth = false;
                } else if (date > daysInMonth) {
                    // Next month's dates
                    const cell = document.createElement("div");
                    cell.classList.add("col", "day", "inactive"); // Added 'inactive' class
                    cell.innerHTML = `
                    <div class="day-number">${date - daysInMonth}</div>
                `;
                    row.appendChild(cell);
                    date++;
                } else {
                    // Current month's dates
                    const cell = document.createElement("div");
                    cell.classList.add("col", "day");
                    cell.innerHTML = `
                    <div class="day-number ${
                        date === currentDate && isCurrentMonth
                            ? "active-day current-date"
                            : ""
                    }">${date}</div>
                `;
                    const currentDay = `${currentYear}-${(currentMonth + 1)
                        .toString()
                        .padStart(2, "0")}-${date.toString().padStart(2, "0")}`;

                    cell.dataset.date = currentDay;

                    if (events[currentDay]) {
                        events[currentDay].forEach((event) => {
                            const eventElement = document.createElement("div");
                            eventElement.classList.add("event");
                            eventElement.textContent = `${
                                event.title
                            } - ${formatTime(event.startTime)} to ${formatTime(
                                event.endTime
                            )}`;
                            // eventElement.addEventListener("click", () => {
                            //     showEventDetails(currentDay, event);
                            // });

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

    //     function showEventDetails(date, event) {
    //         const eventDetailsDiv = document.getElementById("eventDetails");
    //         const eventDetailsContentDiv = document.getElementById("eventDetailsContent");

    //         eventDetailsContentDiv.innerHTML = `
    //     <p><strong>Title:</strong> ${event.title}</p>
    //     <p><strong>Start Time:</strong> ${formatTime(event.startTime)}</p>
    //     <p><strong>End Time:</strong> ${formatTime(event.endTime)}</p>
    //     <button onclick="deleteEvent('${date}', '${event.id}')" class="btn btn-danger">Delete</button>
    // `;
    //         eventDetailsDiv.style.display = "block";
    //     }

    function saveEvent(event) {
        event.preventDefault();
        const title = document.getElementById("eventTitle").value;
        const startTime = document.getElementById("eventStartTime").value;
        const endTime = document.getElementById("eventEndTime").value;
        const date = document.getElementById("eventDate").value;
        const eventId = `event${Date.now()}`;

        if (title && startTime && endTime && date) {
            const eventObj = {
                id: eventId,
                title,
                startTime,
                endTime,
            };

            if (!events[date]) {
                events[date] = [eventObj];
            } else {
                events[date].push(eventObj);
            }

            localStorage.setItem("events", JSON.stringify(events));

            renderCalendar();

            // Reset the form
            document.getElementById("eventTitle").value = "";
            document.getElementById("eventStartTime").value = "";
            document.getElementById("eventEndTime").value = "";
            document.getElementById("eventDate").value = "";
        }
    }

    window.onload = function () {
        const storedEvents = localStorage.getItem("events");
        if (storedEvents) {
            events = JSON.parse(storedEvents);
        }
        renderCalendar();
    };

    function nextMonth() {
        currentMonth++;
        if (currentMonth > 11) {
            currentMonth = 0;
            currentYear++;
        }
        renderCalendar();
    }

    function prevMonth() {
        currentMonth--;
        if (currentMonth < 0) {
            currentMonth = 11;
            currentYear--;
        }
        renderCalendar();
    }
}

eventCalendar();
