@extends('layout')
@section('content')
<div class="container">
<div class="row">
<div class="col-md-6 col-md-offset-3">
<ul class="list-group">
@foreach($card->notes as $note)
<li class="list-group-item">
<a href="">{{$note->text}}</a>
<a href="/delete/{{$note->id}}" style="float: right">Delete</a>
<a href="/edit/{{$note->id}}" style="float: right">Edit</a>
</li>
@endforeach
</ul>

</div>
</div>



<div class="row">
<div class="col-md-6 col-md-offset-3">
<form method="post" action="/add/{{$card->id}}" class="form-group">
{{ csrf_field() }}
	<textarea type="text" name="text" class="form-control"></textarea> 
	<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
@stop