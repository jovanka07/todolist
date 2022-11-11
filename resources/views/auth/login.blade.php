<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		.container{
			width: 60%;
			border:1px solid grey;
			margin: 50px auto;
		}
		.judul{
			width: 100%;
			font-size: 25px;
			text-align: center;
			border-bottom: 1px solid grey;
		}
		.pesan{
			text-align: center;
			color: green;
		}
		.pesan p{
			padding-bottom:5px; 
			font-size: 19px;
			border-bottom: 3px solid green;
		}
		.content p{
			margin: 0 0 0 15px;
		}
		.content input{
			width: 90%;
			display: block;
			margin: 5px auto;
			padding: 10px;
		}
		button{
			width: 80%;
			margin:10px 0 15px 0;
			padding: 10px;
			background-color:#009999;
			color: white;
		}
		body{
			background-color: #f6f6f6;
		}
		a:hover{
			color: yellow;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="judul">
			<h3>Login</h3>
		</div>
		<div class="pesan">
			@if(Session::has('pesan'))
				<p style="color: green;">{{Session::get('pesan')}}</p>
			@endif
		</div>
		<br>
		<div class="content">
			<form method="post" action="{{url('auth/postlogin')}}">
				@csrf
				<p>Username :</p> <input type="text" name="username"><br>
				<p>Password :</p> <input type="password" name="password"><br>
				 <center><button type="submit">Login</button></center>
			</form>
		</div>
		<center><a href="{{url('auth/register')}}" style="color: blue; text-decoration: none; font-size: 18px;">Register</a></center>
		<br>
	</div>
	
	
</body>
</html>