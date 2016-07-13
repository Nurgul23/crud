@extends('layout')
@section('content')
<div class="container">




<div class="row">
<div class="col-md-6 col-md-offset-3">
<form method="post" action="/update/{{$note->id}}" class="form-group">
{{ csrf_field() }}
	<textarea type="text" name="text" class="form-control">{{$note->text}}</textarea> 
	<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
@stop