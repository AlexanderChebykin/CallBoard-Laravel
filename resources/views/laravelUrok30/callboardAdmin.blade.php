@extends('layouts.guestBook')
@section('title')
    @parent
	{{$title}}
@endsection

@section('content')
    @parent
	<div id="wrapper">
	<p>{{ session()->get('status') }}</p>
	
	<a href = '/callboard'>Главная</a>
	
	@if(isset($adverts) and $adverts!='')
		<table>
		@foreach($adverts as $advert)
		<tr>
			<td>{{$advert->text}}</td>
			<td><a href='/callboard/delete/{{$advert->id}}'>отклонить</a></td>
		</tr>
		@endforeach
	</table>
	@endif
	
@endsection