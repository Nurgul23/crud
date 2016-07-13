@extends('layout')
@section('title')
Form
@stop
@section('content')
<div class="container">
<div class="row">
<div class="col-md-6 col-md-offset-3">
<ul class="list-group">
@foreach($y as $x)
<li class="list-group-item"><a href="/show/{{$x->id}}">{{$x->title}}</a></li>
@endforeach
</ul>

</div>
</div>



<div class="row">
<div class="col-md-6 col-md-offset-3">
<form method="post" action="/" class="form-group">
{{ csrf_field() }}
	<textarea type="text" name="title" class="form-control"></textarea> 
	<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
@stop