<!DOCTYPE html>
<html>
<head lang="zh-CN">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no,user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="renderer" content="webkit">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title', 'Weibo App') - Laravel 入门教程</title>
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
@include('layouts._header')
<div class="container">
  <div class="offset-md-1 col-md-10">
    @include('shared._messages')
    @yield('content')
    @include('layouts._footer')
  </div>
</div>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
