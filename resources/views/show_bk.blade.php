@include('layouts/header')

<?php dd($room)?>
<a href="/">トップに戻る</a>
<div class="wrapper mx-auto bg-white">

  <div class="row">

    <div class="col-md-8 mx-auto" style="height:6rem;margin-top:2rem;">
      <h1>{{$room->title}}</h1>
    </div>
    <div class="col-md-8 bg-secondary mx-auto" style="height:6rem;margin-top:2rem;">
      1.<br>
      2019年4月17日<br>
      欅坂の平手ちゃん可愛い
    </div>
    <div class="col-md-8 bg-secondary mx-auto" style="height:6rem;margin-top:2rem;">
      2.<br>
      2019年4月17日<br>
      本当に可愛いね
    </div>
    <div class="col-md-8 bg-secondary mx-auto" style="height:6rem;margin-top:2rem;">
      <form class="" action="index.html" method="post">
        <input type="text" name="" value="" style="width:100%;height:100%" placeholder="書き込む">
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
