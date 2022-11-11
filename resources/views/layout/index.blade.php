<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		header{
			width: 100%;
			background-color: #f1f1f1;
			padding: 20px;
			box-sizing: border-box;
			display: flex;
			justify-content: space-around;
		}
		.nav{
			display: flex;
		}
		.nav a{
			margin: 12px 15px 0 15px;
			color: #008080;
			text-decoration: none;
			font-size: 21px;
		}
		*{
			margin: 0;
		}
		.nama p{
			border:1px solid grey;
			padding: 10px;
			box-sizing: border-box;
			border-radius: 15px;
			font-size: 21px;
			color: #669999;
		}
		.judul{
			margin: 4px 0 0 0;
		}
		.judul p{
			color: #008080;
			font-size: 33px;
		}
	</style>
</head>
<body>
	<header>
		<div class="judul">
			<p>Trulli</p>
		</div>
		<div class="nav">
			<a href="{{url('home')}}">Home</a>
			<a href="{{url('auth/logout')}}">Logout</a>
			<div class="nama">
				<p>{{Auth()->user()->first_name}} {{Auth()->user()->last_name}}</p>
			</div>
		</div>
	</header>
	@yield('content')
</body>
</html>