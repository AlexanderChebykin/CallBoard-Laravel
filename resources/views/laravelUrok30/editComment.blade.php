@extends('layouts.guestBook')
@section('title')
    @parent
	{{$title}}
@endsection

@section('content')
    @parent
	<div id="wrapper">
		<form method='post'>
			{{ csrf_field() }} 
			<input type = 'text' name='name' value = "{{$gb->name}}" class="form-control"><br><br>
			<textarea type = 'text' name='message' class="form-control">{{$gb->message}}</textarea><br><br>
			<input type = 'submit' name = 'submit' class="btn btn-info btn-block">
		</form>
	</div>
@endsection