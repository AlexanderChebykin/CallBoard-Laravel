@extends('layouts.guestBook')
@section('title')
    @parent
	{{$title}}
@endsection

@section('content')
    @parent
	<div id="wrapper">
	<h1>{{$title}}</h1>
	<h1>{{trans('messages.title')}}</h1>
	<h1>@lang('messages.title')</h1>
	
	<h1>{{trans('messages.hello', array('name'=>'Юзер'))}}</h1>
	
	<h1>{{trans_choice('messages.users', 30)}}</h1>
	
	<h1>{{trans_choice('messages.people', 299)}}</h1>
	
	<h1>Сейчас в проекте используется локализация {{$locale}}</h1>
	
	<p>{{ session()->get('status') }}</p>
	
	<a href = '/guestBook/moderate'>Страница Модератора</a>
		@foreach($guestBook as $elem)
		<div class="post">
			<div class="info">
				<span class="date">{{$elem->time}}</span>
				<span class="name">{{$elem->name}}</span>
			</div>
			<div class="text">
				{{$elem->message}}
			</div>
		</div>
		@endforeach
		
		<div id="form">
			<form action='' method='post'>
				{{ csrf_field() }} 
				<input  type = 'text' name = 'name' class="form-control" placeholder="Ваше имя"><br><br>
				<textarea name = 'message' class="form-control" placeholder="Ваше сообщение"></textarea><br><br>
				<input type = 'submit' name = 'submit' class="btn btn-info btn-block">
			</form>
		</div>
	</div>
@endsection