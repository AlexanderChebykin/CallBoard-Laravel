@extends('layouts.guestBook')
@section('title')
    @parent
	{{$title}}
@endsection

@section('content')
    @parent
	<div id="wrapper">
	<p>{{ session()->get('status') }}</p>
	<table>
		@foreach($guestBook as $elem)
		<tr>
			<td>{{$elem->message}}</td>
			<td><a href='/guestBook/delComment/{{$elem->id}}'>удалить</a></td>
			<td><a href='/guestBook/editComment/{{$elem->id}}'>редактировать</a></td>
		</tr>
		@endforeach
	</table>
	</div>
@endsection