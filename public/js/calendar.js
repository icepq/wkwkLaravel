// import { Calendar } from '@fullcalendar/core';
// import dayGridPlugin from '@fullcalendar/daygrid';
// import googleCalendarPlugin from '@fullcalendar/google-calendar';
// import 'fullcalendar/main.css'; // Optional if you want to include FullCalendar CSS
document.addEventListener('DOMContentLoaded', function () {
    var calendarEl = document.getElementById('calendar');

    if (calendarEl) {
        var calendar = new FullCalendar.Calendar(calendarEl, {
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'listDay,listWeek'
            },
            views: {
                listDay: { buttonText: 'list day' },
                listWeek: { buttonText: 'list week' }
            },
            initialView: 'listWeek',
            initialDate: '2023-01-12',
            navLinks: true,
            editable: true,
            dayMaxEvents: true
        });

        calendar.render();
    } else {
        console.error('Calendar element not found');
    }
});
