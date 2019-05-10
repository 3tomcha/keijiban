@extends('layouts.app')
@section('content')
<div class="wrapper mx-auto bg-white">
  <div class="row">
    <div class="col-md-8 mx-auto mt-4 py-4">
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
      <form action="/rooms/" method="post">
        @csrf
        <div class="row mb-3">
          <div class="col-md-4">部屋のタイトル</div>
          <div class="col-md-8"><input type="text" class="w-100" name="title" value=""></div>
        </div>
        <div class="row mb-3">
          <div class="col-md-4">本文</div>
          <div class="col-md-8"><textarea class="w-100" name="body"></textarea></div>
        </div>
        <div class="row mb-3">
          <div class="col-md-4">正解（パスワード）</div>
          <div class="col-md-8"><input type="text" class="w-100" name="password" value=""></div>
        </div>
        <div class="d-flex justify-content-end">
        <input type="submit" name="" value="作成する">
      </div>
      </form>
    </div>
  </div>
</div>
@endsection
