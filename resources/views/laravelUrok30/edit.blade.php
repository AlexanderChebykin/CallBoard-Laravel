@extends('layouts.guestBook')
@section('title')
    @parent
	{{$title}}
@endsection

@section('content')
    @parent
	<div id="wrapper">
	<h4>Форма редактирования</h4>
	<div id="form">
			<form action='' method='post'>
				{{ csrf_field() }} 
				@if(isset($country))
					<input  type = 'text' name = 'country' class="form-control" value="{{$country->name}}"><br><br>
				@endif
				
				@if(isset($city))
					<input  type = 'text' name = 'city' class="form-control" value="{{$city->name}}"><br><br>
				@endif
				
				@if(isset($showplace))
					<input  type = 'text' name = 'showplace' class="form-control" value="{{$showplace->name}}"><br><br>
					<textarea name = 'description' class="form-control" value="{{$showplace->text}}"></textarea><br><br>
				@endif
				<input type = 'submit' name = 'submit' class="btn btn-info btn-block">
			</form>
		</div>
	
@endsection