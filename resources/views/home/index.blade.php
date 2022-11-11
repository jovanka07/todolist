@extends('layout.index')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.box{
			width: 80%;
			display: flex;
			margin: 30px auto;
			justify-content: space-around;
			flex-wrap: wrap;
			border: 1px solid grey;
			padding: 20px;
			box-sizing: border-box;
		}
		.boards{
			width: 200px;
			background-color: #009999;
			padding: 20px;
			box-sizing: border-box;
			flex-wrap: wrap;
			margin: 0 0 20px 0;
		}
		.workshop h3{
			font-size: 33px;
			margin: 0 0 0 25px;
		}
		.workshop input{
			padding: 10px;
			width: 40%;
			margin: 15px 0 0 25px;
		}
		.workshop button{
			padding: 10px;
			background-color:  #009999;
			color: white;
			border-radius: 10px;
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
			color: green
		}
		.boards h3{
			font-size: 27px;
			text-align: center;
		}
		.a{
			width: 80%;
			background-color: #2e5cb8;
			color: white;
			text-decoration: none;
			margin: auto;
			text-align: center;
			padding: 10px;
			box-sizing: border-box;
		}
		.a a{
			color: white;
			font-size: 25px;
		}
		.boards a{
			color: white;
			text-decoration: none;
		}
		.delete button{
			width: 80%;
			background-color: #ff4d4d;
			color: white;
			padding: 10px;
			box-sizing: border-box;
		}
	</style>
</head>
<body>
	<br>
	<div class="workshop">
		<h3>Tambah Board Mu :</h3>
		<form method="post" action="{{route('home.store')}}">
			@csrf
			<input type="text" name="boards">
			<button type="submit">Tambah</button>
		</form>
	</div>

<br>
<div class="pesan">
	@if(Session::has('pesan'))
		<p>{{Session::get('pesan')}}</p>
	@endif
</div>
<br>

<div class="box">
	@foreach($model as $tampil)
			<a href="{{route('cards.show', $tampil->Boards->id)}}">
				<div class="boards">
					<h3>{{$tampil->Boards->name}}</h3>
					<br>
					@if($tampil->Boards->creator_id == Auth()->user()->id)
					<a href="{{route('home.edit', $tampil->Boards->id)}}">
						<div class="a">
							Ubah Content
						</div>
					</a>
					@endif
					<br>
					<center><div class="delete">
						<form method="post" action="{{route('home.destroy', $tampil->Boards->id)}}">
							@csrf
							<input type="hidden" name="_method" value="DELETE">
							<button type="submit">Delete</button>
						</form>
					</div></center>
				</div>
			</a>
	@endforeach
</div>
</body>
</html>
@endsection