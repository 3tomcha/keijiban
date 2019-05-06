@include('layouts/header')
<div class="wrapper mx-auto bg-white board-index">

  <div class="row">
<div class="col-md-8 mx-auto">
    <div>
      <h1>{{$room->title}}</h1>
    </div>
    @isset($boards)
      @foreach($boards as $board)
      <div class="bg-secondary mx-auto mt-4 p-2">
        {{$id++}}<br>
        {{$board->created_at}}<br>
        <?php echo $board->message; ?>
      </div>
      @endforeach
    @endisset
    <div class="bg-secondary mx-auto mt-5 p-2 d-flex">
      <form class="flex-fill" action="/rooms/{{$room->id}}/board/" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$room->id}}">
        <textarea name="message" class="w-100"></textarea>
        <input class="float-right" type="submit" name="" value="書き込む">
      </form>
    </div>
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
