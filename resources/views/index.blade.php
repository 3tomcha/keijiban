@extends('layouts.app')
@section('content')
<div class="wrapper mx-auto bg-white">
  <div class="d-flex justify-content-end">
    <form class="" action="/search" method="get">
      @csrf
      <input type="text" name="search" value="" placeholder="検索ボックス">
      <input type="submit" name="" value="検索する">
    </form>
  </div>
  <div class="row">
    @foreach ($rooms as $room)
    <div class="col-md-8 mx-auto mt-4 card py-4">
      <a href="/rooms/{{$room->id}}">
        <h1>{{$room->title}}</h1><br>
        {{$room->body}}
      </a>
    </div>
    @endforeach
  </div>
</div>
<style>
</style>
@endsection
