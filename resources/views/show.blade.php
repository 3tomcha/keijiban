@include('layouts/header')
<div class="wrapper mx-auto bg-white">

  <div class="row">

    <div class="col-md-8 mx-auto" style="height:6rem;margin-top:2rem;">
      <h1>{{$room->title}}</h1>
      {{$room->body}}
      <form class="" action="/rooms/{{$room->id}}/board/login" method="post">
        @csrf
        <input type="password" name="password" value="" placeholder="password">
        <input type="submit" name="" value="送信する">
      </form>
    </div>
  </div>
</div>
<style>
.wrapper{
  max-width: 1200px;
}
</style>
</body>
</html>
