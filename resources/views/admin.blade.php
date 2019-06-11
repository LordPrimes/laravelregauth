<form action="{{route('create')}}" method="POST">
    {!! csrf_field() !!}
<input type="text" name="title">
<br>
<input type="text" name="price">
<br>
<input type="text" name="desccription">
<br>
<input type="text" name="count">
<br>
<input type="text" name="seo_url">
<br>
<input type="submit" value="создать товар">
</form>