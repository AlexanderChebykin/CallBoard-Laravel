<!DOCTYPE html>
<html>
	<head>
		<title>My view</title>
	</head>
	<body>
		<p>Имя: {{$name}}</p>
		<p>Фамилия: {{$surname}}</p>
		<p class={{$class}}>Возраст: {{$age}}</p>
		
		<input value={{$value1}}>
		<input value={{$value2}}>
		<input value={{$value3}}>
		
		<p style={{$colorStyle}}> Красный абзац</p>
		<a href = {{$_href}}>{{$text}}</a>
		
		Текущая дата: {{date('d.m.y')}}
		
		<p>Имя: {{$employeeData['name']}}</p>
		<p>Возраст: {{$employeeData['age']}}</p>
		<p>Зп: {{$employeeData['salary']}}</p>
		
		<p>Количество элементов: {{count($employeeData)}}</p>
		<p>Город: {{ isset($city) ? $city : 'Default' }}</p>
		
		<p>Местоположение:</p>
		<p>Страна: {{ isset($location['country']) ? $location['country'] : 'Default' }}</p>
		<p>Город: {{ isset($location['city']) ? $location['city'] : 'Default' }}</p>
		
		<p>Год: {{ isset($year) ? $year : date('y') }}</p>
		<p>Месяц: {{ isset($month) ? $month : date('m') }}</p>
		<p>День: {{ isset($day) ? $year : date('d') }}</p>
		
		<p>Неэкранированные данные: {!! $str !!}</p>
		
		{{--Закомментированная часть--}}
		
		@php
			echo 'Чистый код на php в шаблонизаторе Blade';
			echo date('w');
		@endphp
		
		@if($weekDay ==6)
			<p>Суббота</p>
		@endif
		@if($weekDay ==7)
			<p>Воскресенье</p>
		@endif
		
		@if($weekDay ==6 or $weekDay ==7)
			<p>Сегодня выходной</p>
		@else
			<p>Сегодня рабочий день</p>
		@endif
		
		@if($monthNumber==1 or $monthNumber==2 or $monthNumber==12)
			<p>Сейчас зима</p>
		@elseif($monthNumber>=3 and $monthNumber<=5)
			<p>Сейчас весна</p>
		@elseif($monthNumber>=6 and $monthNumber<=8)
			<p>Сейчас лето</p>
		@elseif($monthNumber>=9 and $monthNumber<=11)
			<p>Сейчас осень</p>
		@else
			<p>переданный номер не соответствует ни одному месяцу</p>
		@endif
		
		@unless($age>=18)
		<p>Вы несовершеннолетний</p>
		@endunless
		
		@if(count($array)>0)
			<p>Сумма элементов массива: 
			{{array_sum($array)}}
			</p>
		@else
			<p>В массиве нет элементов</p>
		@endif
		
		<ul>
		@foreach($array as $elem)
		<li>{{pow($elem,2)}}</li>
		@endforeach
		</ul>
		
		<ul>
		@foreach($array as $elem)
		<li>{{sqrt($elem)}}</li>
		@endforeach
		</ul>
		
		<ul>
		@foreach($stringsArray as $key=>$elem)
			<li>{{$key +1}} {{$elem}}</li>
		@endforeach
		</ul>
		
		<ul>
		@foreach($array as $elem)
			@if($elem % 2 ==0)
				<li>{{$elem}}</li>
			@endif
		@endforeach
		</ul>
		
		
		@if(is_array($data))
			<ul>
			@foreach($data as $elem)
				<li>{{$elem}}</li>
			@endforeach
			</ul>		
		@endif
		
		
		@if(is_numeric($data))
			<p>{{$data}}</p>		
		@endif
		
		<table>
		@foreach($arr25 as $subArr)
				<tr>
				@foreach($subArr as $elem)
					<td>{{$elem}}</td>
				@endforeach
				</tr>
		@endforeach
		</table>
		
		<ul>
			@foreach($employees as $elem)
				<li>{{$elem['name']}} {{$elem['surname']}} {{$elem['salary']}}</li>
			@endforeach
		</ul>

		<table>
			<tr>
				@foreach($employees as $elem)
				<tr>
					<td>{{$elem['name']}}</td>
					<td>{{$elem['surname']}}</td>
					<td>{{$elem['salary']}}</td>
				</tr>
				@endforeach
		</table>	
		
		<ul>
		@foreach($stringsArray as $key=>$elem)
			<li>{{$loop->index}} {{$elem}}</li>
		@endforeach
		</ul>
		
		<ul>
		@foreach($stringsArray as $key=>$elem)
			@if($loop->first)
				<li class='first'>{{$loop->iteration}} {{$elem}}</li>
			@elseif($loop->last)
				<li class='last'>{{$loop->iteration}} {{$elem}}</li>
			@else
				<li>{{$loop->iteration}} {{$elem}}</li>
			@endif
		@endforeach
		</ul>
		
		<ul>
		@foreach($array as $elem)
			@if($loop->remaining>=3)
				<li><b>{{$elem}}</b></li>
			@else
				<li><i>{{$elem}}</i></li>
			@endif
		@endforeach
		</ul>
		
		<ul>
		@foreach($array as $elem)
			@continue($loop->iteration==2)
			@break($loop->remaining<1)
			@if($loop->remaining>=3)
				<li><b>{{$elem}}</b></li>
			@else
				<li><i>{{$elem}}</i></li>
			@endif
		@endforeach
		</ul>
		
		<ul>
		@forelse($array2 as $elem)		
				<li><b>{{$elem}}</b></li>
				@empty
					<p>В массиве нет элементов</p>
		@endforelse
		</ul>
	
		@for($i=1;$i<=10;$i++)
			<p>
				@for($j=1;$j<=10;$j++)
					{{$j}}
				@endfor
			</p>
		@endfor
	</body>
</html>
