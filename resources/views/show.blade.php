@include('layouts/header')
<a href="/">トップに戻る</a>
<div class="wrapper mx-auto bg-white">

  <div class="row">

    <div class="col-md-8 mx-auto" style="height:6rem;margin-top:2rem;">
      <h1>{{$room->title}}</h1>
      {{$room->body}}
      <a href="/room/1"><button type="button" name="button">入室する</button></a>
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
