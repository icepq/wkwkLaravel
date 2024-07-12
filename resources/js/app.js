import './bootstrap';
import { Calendar } from '@fullcalendar/core';
import dayGridPlugin from '@fullcalendar/daygrid';
import googleCalendarPlugin from '@fullcalendar/google-calendar';
import 'fullcalendar/main.css'; // Optional if you want to include FullCalendar CSS

document.addEventListener('DOMContentLoaded', function () {
    const calendarEl = document.getElementById('calendar');
    if (calendarEl) {
        let calendar = new Calendar(calendarEl, {
            plugins: [dayGridPlugin, googleCalendarPlugin],
            googleCalendarApiKey: "AIzaSyDyXvmDlb_CbPqKNXlYnJd6za81ZPBkc2c",
            events: {
                googleCalendarId: "kiiteworld.informal@gmail.com"
            },
            timeZone: "Asia/Tokyo",
            locale: "jp",
            height: "auto",
        });
        calendar.render();
    }
});
