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
			justify-content: space-around;
			border: 1px solid red;
			margin: auto;
			flex-wrap: wrap;
			padding: 20px;
			box-sizing: border-box;
		}
		.boardList h3{
			font-size: 33px;
			margin: 0 0 0 25px;
		}
		.boardList input{
			padding: 10px;
			width: 40%;
			margin: 15px 0 0 25px;
		}
		.boardList button{
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
		.boardList-cards{
			margin: 0 0 20px 0;
			width: 30%;
			background-color: #009999;
		}
		.boardList-cards h3{
			font-size: 27px;
			text-align: center;
			color: white;
		}
		.cards-edit{
			border-radius: 15px;
			width: 80%;
			background-color: #2e5cb8;
			color: white;
			text-decoration: none;
			margin: auto;
			text-align: center;
			padding: 10px;
			box-sizing: border-box;
		}
		.cards-edit a{
			color: white;
			font-size: 25px;
			text-decoration: none;
		}
		.delete button{
			border-radius: 15px;
			width: 80%;
			background-color: #ff4d4d;
			color: white;
			padding: 10px;
			box-sizing: border-box;
		}
		.flex{
			padding: 10px;
			box-sizing: border-box;
			border:1px solid white;
			display: flex;
			justify-content: space-between;
		}
		.flex-kanan{

		}
		.edit-cards{
			width: 100%;
			background-color: #2e5cb8;
			color: white;
			margin: 0 0 10px 0;
			padding: 5px;
			box-sizing: border-box;
		}
		.delete-cards button{
			width: 100%;
			background-color:  #ff4d4d;
			color: white;
			padding: 5px;
			box-sizing: border-box;
		}
		.tambah-cardsList{
			padding: 10px;
			box-sizing: border-box;
		}
		.tambah-cardsList input{
			width: 80%;
			padding: 5px;
			box-sizing: border-box;
		}
		.tambah-cardsList button{
			overflow: hidden;
			border-radius: 15px;
			background-color:  #2e5cb8;
			padding: 5px;
			color: white; 
		}
	</style>
</head>
<body>
	<br>
<div class="boardList">
	<h3>Tambah BoardList</h3>
	<form method="post" action="{{route('cards.store')}}">
		@csrf
		<input type="hidden" name="id" value="{{$board->id}}">
		<input type="text" name="boardList">
		<button type="submit">Tambah boardList</button>
	</form>
</div>

<br>
<div class="pesan">
	@if(Session::has('pesan'))
		<p >{{Session::get('pesan')}}</p>
	@endif
</div>
<br>

<!-- TAMPIL BOARD LIST -->
<div class="box">
@foreach($board->board_lists as $tampil)
	<div class="boardList-cards">
		<h3>{{$tampil->name}}</h3>,
<!-- EDIT BOARDS LIST -->
		<a href="{{route('cards.edit', $tampil->id)}}">
			<div class="cards-edit">
				Edit BoardsList
			</div>
		</a>
		<br>
<!-- DELETE BOARDS LIST -->
		<div class="delete">
			<form method="post" action="{{route('cards.destroy', $tampil->id)}}">
				@csrf
				<input type="hidden" name="_method" value="DELETE">
				<center><button type="submit">DELETE</button></center>
			</form>
		</div>
		<br>
<!-- DATA CARDS -->
		@foreach($tampil->Cards as $tampilList)
			<div class="flex">
				<h3>{{$tampilList->task}}</h3>

					<div class="flex-kanan">
						<!-- EDIT CARDS -->
						<a href="{{route('boardList.edit', $tampilList->id)}}">
							<div class="edit-cards">
								Edit
							</div>
						</a>
						<!-- DELETE CARDS -->
						<div class="delete-cards">
							<form method="post" action="{{route('boardList.destroy', $tampilList->id)}}">
								@csrf
								<input type="hidden" name="_method" value="DELETE">
								<button type="submit">Delete</button>
							</form>
						</div>

					</div>
			</div>
		@endforeach
		<div class="tambah-cardsList">
				<form method="post" action="{{url('boardList/store/')}}">
					@csrf
					@method('post')
					<input type="hidden" name="id" value="{{$tampil->id}}">
					<input type="text" name="cards" placeholder="Tambah CardList">
					<button type="submit">Tambah</button>
				</form>
		</div>
	</div>
@endforeach
</div>

</body>
</html>
@endsection