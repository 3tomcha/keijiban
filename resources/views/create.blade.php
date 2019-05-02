@include('layouts/header')
<h1>ルーム新規作成ページ</h1>
<form class="" action="/rooms/" method="post">
  @csrf
部屋のタイトル<input type="text" name="title" value=""><br>
本文<textarea name="body"></textarea><br>
正解（パスワード）<input type="text" name="password" value=""><br>
<input type="submit" name="" value="送信">
</form>
</body>
</html>
