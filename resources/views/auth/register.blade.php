<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		.container{
			margin: 50px auto;
			width: 80%;
			border:1px solid grey;
			background-color: #f1f1f1;
		}
		.judul{
			width: 100%;
			box-sizing: border-box;
			border-bottom: 1px solid grey;
			text-align: center;
			font-size: 25px;
		}
		.pesan{
			text-align: center;
			color: green;
		}
		.pesan p{
			font-size: 19px;
			border-bottom: 3px solid green;
		}
		.content100 p{
			margin: 0 0 0 15px;
		}
		.content100 input{
			width: 90%;
			display: block;
			margin: 5px auto;
			padding: 10px;
		}
		.content-flex{
			display: flex;
			justify-content: space-around;
		}
		.flex1 {
			width: 35%;
		}
		.flex1 input{
			width: 100%;
			padding: 10px;
			margin: 5px 0 0 0;
		}
		.flex2 {
			width: 35%;
		}
		.flex2 input{
			width: 100%;
			padding: 10px;
			margin: 5px 0 0 0;
		}
		button{
			width: 80%;
			margin:10px 0 15px 0;
			padding: 10px;
			background-color:  #009999;
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
		<div class="judul"><h3>Register</h3></div>
		<br>
		<div class="content">
			<form method="post" action="{{url('auth/postRegister')}}">
				@csrf
				<div class="content100">
					<p>First Name :</p> <input type="text" name="first_name" placeholder="Input First Name"><br>
					<p>Last Name :</p> <input type="text" name="last_name" placeholder="Input Last Name"><br>
				</div>
				<div class="content-flex">
					<div class="flex1">
						Username : <input type="text" name="username" placeholder="Input Username"><br>
					</div>
					<div class="flex2">
						Password <input type="password" name="password" placeholder="Input Password"><br>
					</div>
				</div>
				<center><button type="submit">Register</button></center>
				<br>
				<center><a href="{{url('auth')}}" style="color: blue; text-decoration: none; font-size: 18px;">Login Now</a></center>
				<br>
		</form>
		</div>
	</div>
	
	
</body>
</html>