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
		h5{
			font-size: 21px;
			margin: 0 0 0 15px;
		}
		select{
			padding: 10px;
			width: 40%;
			margin: 10px 0 0 15px;
		}
	</style>
</head>
<body>
	<h3>Ubah Content :</h3>
	<form method="post" action="{{route('home.update', $model->id)}}">
		@csrf
		<input type="hidden" name="_method" value="PATCH">
		 <input type="text" name="boards" value="{{$model->name}}">
		<button type="submit">Ubah</button>
	</form>
	<br>
	<h5>Relasikan Board :</h5>
	<form method="post" action="{{route('boardMember.store', $model->id)}}">
		@csrf
		<select name="boardMember">
			@foreach($User as $tampil)
				<option value="{{$tampil->id}}">{{$tampil->username}}</option>
			@endforeach
		</select>
			<button type="submit">Submit</button>
	</form>
</body>
</html>
@endsection