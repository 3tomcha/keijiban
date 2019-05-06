@include('layouts/header')
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
      <div class="col-md-8 mx-auto" style="height:6rem;margin-top:2rem;">
        <a href="/rooms/{{$room->id}}">
        <h1>{{$room->title}}</h1><br>
        {{$room->body}}
        </a>
      </div>
    @endforeach
  </div>
</div>
<style>
.wrapper{
  max-width: 1200px;
}
</style>
</body>
</html>
