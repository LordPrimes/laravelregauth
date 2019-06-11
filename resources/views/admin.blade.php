<form action="{{route('create')}}" method="POST">
    {!! csrf_field() !!}
<input type="text" name="title">
<br>
<input type="text" name="price" placeholder="число">
<br>
<input type="text" name="desccription">
<br>
<input type='hidden' name='status' value="0">
<input type="text" name="count" placeholder="число">

<br>
<input type="submit" value="создать товар">
</form>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@foreach ($data as $item)
  
<form action="{{route('update')}}" method="POST">
    {!! csrf_field() !!}
    <input type="hidden" name="id" value="{{$item->id}}"> 
     <textarea name="edit">{{$item->desccription}} </textarea> 
     <input type="submit" value="редактировать">
</form>
@endforeach