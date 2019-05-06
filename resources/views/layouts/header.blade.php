<!DOCTYPE html>
<html lang="ja">
<head>
  <link rel="stylesheet" href="/css/app.css">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script src="/js/app.js"></script>
  <title></title>
</head>
<body>
  <header class="bg-white">
    <div class="navbar navbar-light container mx-auto">
      <a href="/">526ちゃんねる</a>
        <a href="/rooms/create">ルームを新しく作る</a>
    </div>
  </header>
<style media="screen">
  header div{
    height: 5rem;
    overflow: hidden;
  }
  header a[href="/"]{
  font-family: fantasy;
    font-weight: 800;
    font-size: 1.5em;
    color: black;
  }
</style>
