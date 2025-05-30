<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>カレンダー</title>
  @vite(['resources/js/calendar.js', 'resources/js/form.js'])
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
      <div id="calendar"></div>
    </div>

    <div>
      <div id="notification">
        <p class="text-center title-text">通知🔔</p>
        <div class="notification-detail">
          通知の内容
        </div>
      </div>
      <div id="form">
        <p class="text-center title-text">フォーム</p>
        <div class="">
          <button id="create-button" hidden>作成</button>
          <button id="edit-button" hidden>編集</button>
          <div class="create-edit">
            <div id="create-form" hidden>
              create
            </div>
            <div id="edit-form" hidden>
              edit
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>











  <script src="../js/calendar.js"></script>
</body>

</html>