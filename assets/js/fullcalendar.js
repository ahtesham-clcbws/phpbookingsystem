
  document.addEventListener("DOMContentLoaded", function () {
    var calendarEl = document.getElementById("hostcalendar");

    var calendar = new FullCalendar.Calendar(calendarEl, {
      plugins: ["dayGrid"],
    });

    calendar.render();
  });