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
            alert(info.dateStr + " がクリックされました");
        },
    });

    calendar.render();
});
