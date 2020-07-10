@extends('layouts.guestBook')
@section('title')
    @parent
	{{$title}}
@endsection

@section('content')
    @parent
	<div id="wrapper">
	<p>{{ session()->get('status') }}</p>
	
	<a href = '/countries/admin'>Админка</a>
	@if(isset($countries))
	<h4>Страны</h4>
	<table>
		@foreach($countries as $elem)
		<tr>
			<td><a href='/country/getCities/{{$elem->id}}'>{{$elem->name}}</a></td>
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
		</tr>
		@endforeach
	</table>
	@endif
	
	@if(isset($showplaces))
		<h4>Достопримечательности</h4>
		<table>
		@foreach($showplaces as $showplace)
		<tr>
			<td><a href='/description/{{$showplace->id}}'>{{$showplace->name}}</a></td>
		</tr>
		@endforeach
	</table>
	@endif
	
	@if(isset($description))
		<h4>Описание достопримечательности</h4>
		<p>{{$description}}</p>
	@endif
	
@endsection