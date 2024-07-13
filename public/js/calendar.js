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
                listWeek: {
                    buttonText: 'list week',
                    duration: { days: 7 } // 1週間分の予定を表示するように設定
                }
            },
            initialView: 'listWeek',
            navLinks: true,
            editable: true,
            dayMaxEvents: true,
            events: {
                googleCalendarApiKey: '####',
                googleCalendarId: '####',
                className: 'gcal-event' // Google Calendar eventsのクラス名（任意）
            }
        });

        calendar.render();
    } else {
        console.error('Calendar element not found');
    }
});
