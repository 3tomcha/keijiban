@include('layouts/header')

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
    @isset($boards)
      @foreach($boards as $board)
      <div class="col-md-8 bg-secondary mx-auto" style="height:6rem;margin-top:2rem;">
        1.<br>
        {{$board->updatedAt}}<br>
        {{$board->message}}
      </div>
      @endforeach
    @endisset
    <div class="col-md-8 bg-secondary mx-auto" style="height:6rem;margin-top:2rem;">
      <form class="" action="/rooms/{{$room->id}}/board/" method="post">
        @csrf
        <input type="text" name="message" value="" style="width:100%;height:100%" placeholder="書き込む">
        <input type="hidden" name="id" value="{{$room->id}}">
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
