@extends('layout.index')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		h3{
			font-size: 33px;
			margin: 0 0 0 15px;
		}
		input{
			padding: 10px;
			width: 40%;
			margin: 15px 0 0 15px;
		}
		button{
			padding: 10px;
			background-color:  #009999;
			color: white;
			border-radius: 10px;
		}
		a{
			color: blue;
			text-decoration: none;
			font-size: 25px;
			margin: 0 0 0 15px;
		}
		a:hover{
			color: green;
		}
		.pesan{
			width: 80%;
			padding: 20px;
			box-sizing: border-box;
			margin: auto;
		}
		.pesan p{
			padding-bottom:5px; 
			font-size: 19px;
			border-bottom: 3px solid green;
			text-align: center;
			color: green;
		}
	</style>
</head>
<body>
	<div class="pesan">
		@if(Session::has('pesan'))
			<p>{{Session::get('pesan')}}</p>
		@endif
	</div>
	<h3>Edit BoardsList :</h3>
	<form method="post" action="{{route('cards.update', $model->id)}}">
		@csrf
		<input type="hidden" name="_method" value="PATCH">
		<input type="text" name="boardList" value="{{$model->name}}">
		<button type="submit">Submit</button>
	</form>
	<a href="{{route('cards.show', $model->board_id)}}">back</a>
</body>
</html>
@endsection