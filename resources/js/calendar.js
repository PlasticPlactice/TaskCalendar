import '../css/calendar.css';

const CreateButton = document.getElementById('create-button');
const EditButton = document.getElementById('edit-button');

document.addEventListener("DOMContentLoaded", function () {
    const calendarEl = document.getElementById("calendar");

    const calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: "dayGridMonth",
        locale: "ja",
        selectable: true,
        events: [
            {
                title: "イベント1",
                start: "2025-05-20",
            },
        ],
        dateClick: function (info) {
            CreateButton.hidden = false;
            EditButton.hidden = false;
        },
    });

    calendar.render();
});
