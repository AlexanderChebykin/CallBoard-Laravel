@extends('layouts.guestBook')
@section('title')
    @parent
	{{$title}}
@endsection

@section('content')
    @parent
	<div id="wrapper">
	<p>{{ session()->get('status') }}</p>
	
	<a href = '/admin'>Админка</a>
	<table>
		@foreach($rubrics as $elem)
		<tr>
			<td><a href='/callboard/getAdverts/{{$elem->id}}'>{{$elem->name}}</a></td>
		</tr>
		@endforeach
	</table>
	
	@if(isset($adverts) and $adverts!='')
		<h4>Объявления по рубрике</h4>
		<table>
		@foreach($adverts as $advert)
		<tr>
			<td>{{$advert->text}}</td>
		</tr>
		@endforeach
	</table>
	@endif
	
	<div id="form">
			<form action='' method='post'>
				{{ csrf_field() }} 
				<input  type = 'text' name = 'rubric' class="form-control" placeholder="Выберите рубрику"><br><br>
				<textarea name = 'advert' class="form-control" placeholder="Ваше обявление"></textarea><br><br>
				<input type = 'submit' name = 'submit' class="btn btn-info btn-block">
			</form>
		</div>
	</div>
@endsection