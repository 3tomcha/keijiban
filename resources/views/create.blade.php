@include('layouts/header')
<div class="row">
  <div class="col-md-8 mx-auto mt-4">
    <h1>ルーム新規作成ページ</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif
    <form class="" action="/rooms/" method="post">
      @csrf
      部屋のタイトル<input type="text" name="title" value=""><br>
      本文<textarea name="body"></textarea><br>
      正解（パスワード）<input type="text" name="password" value=""><br>
      <input type="submit" name="" value="送信">
    </form>
  </div>
</div>
</body>
</html>
