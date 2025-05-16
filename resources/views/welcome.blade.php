<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>カレンダー</title>
  @vite('resources/js/calendar.js')
  @vite('resources/css/calendar.css')
  <!-- FullCalendarのCSS -->
  <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.css" rel="stylesheet">
  <!-- FullCalendarのJS -->
  <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <style>
    
  </style>
</head>
<body>
  <div class="container flex">
    <div>
      <h1 class="text-center">📅 カレンダー</h1>
      <div id="calendar"></div>
    </div>

    <div>
      <h1>🔔通知</h1>
      <div id="notification"></div>
    </div>
  </div>
  






  <script src="../js/calendar.js"></script>
</body>
</html>
