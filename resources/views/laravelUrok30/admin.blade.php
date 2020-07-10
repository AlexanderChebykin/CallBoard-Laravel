@extends('layouts.guestBook')
@section('title')
    @parent
	{{$title}}
@endsection

@section('content')
    @parent
	<div id="wrapper">
	<p>{{ session()->get('status') }}</p>
	
	<a href = '/countries'>Главная</a>
	@if(isset($countries))
	<h4>Страны</h4>
	<table>
		@foreach($countries as $elem)
		<tr>
			<td><a href='/country/getCities/{{$elem->id}}'>{{$elem->name}}</a></td>
			<td><a href='/country/edit/{{$elem->id}}'>редактировать</a></td>
			<td><a href='/country/delete/{{$elem->id}}'>удалить</a></td>
		</tr>
		@endforeach
	</table>
	@endif
	
	@if(isset($cities))
		<h4>Города</h4>
		<table>
		@foreach($cities as $city)
		<tr>
			<td><a href='/showplaces/{{$city->id}}'>{{$city->name}}</a></td>
			<td><a href='/city/edit/{{$city->id}}'>редактировать</a></td>
			<td><a href='/city/delete/{{$city->id}}'>удалить</a></td>
		</tr>
		@endforeach
	</table>
	@endif
	
	@if(isset($showplaces))
		<h4>Достопримечательности</h4>
		<table>
		@foreach($showplaces as $showplace)
		<tr>
			<td>{{$showplace->name}}</td>
			<td><a href='/showplace/edit/{{$showplace->id}}'>редактировать</a></td>
			<td><a href='/showplace/delete/{{$showplace->id}}'>удалить</a></td>
		</tr>
		@endforeach
	</table>
	@endif
	
	@if(isset($description))
		<h4>Описание достопримечательности</h4>
		<p>{{$description}}</p>
	@endif
	
	<h4>Добавить новую достопримечательность</h4>
	<div id="form">
			<form action='' method='post'>
				{{ csrf_field() }} 
				<input  type = 'text' name = 'country' class="form-control" placeholder="Страна"><br><br>
				<input  type = 'text' name = 'city' class="form-control" placeholder="Город"><br><br>
				<input  type = 'text' name = 'showplace' class="form-control" placeholder="Название достопримечательности"><br><br>
				<textarea name = 'description' class="form-control" placeholder="Описание"></textarea><br><br>
				<input type = 'submit' name = 'submit' class="btn btn-info btn-block">
			</form>
		</div>
	
@endsection