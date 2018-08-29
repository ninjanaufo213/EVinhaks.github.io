<head>
		<title>Vinh deep try insert database</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<style>
		body{
			margin: 0;
			padding: 0;
			border: none;
			height: 100%;
		}
		.subpvda{
			margin-top: 0;
			background-color:#535E64;
			height: 100%;
			float: left;
			width: 25%;
			border: none;
		}
		.subpvda li{
			width: 100%;
			font-size: 1.75vw;
			color: #E9E7DD;
			z-index: 2;
			margin: 0;
			list-style: none;
			letter-spacing: 0.5px;
			padding: 5px 5px;
			
		}
		.subpvda2{
			float:right;
			height: 100%;
			width: 75%;
			background-color: #01A18D;
		}

		.ads{
			background-color: #535E64;
			color:#fff;
		}
		.subpvda li a:hover{
			background-color: #85929E;
			color:#fff;
			border: none;
		}
		.inputsp{
			transition: all 0.5s;
			font-family:  "Roboto",sans-serif;
			font-size: 15px;
			font-weight: 600;
			background-color: #34495E;
			color:#fff;
		}
		.blue{
			color:#2471A3;
		}
		.inputsp::placeholder{

			font-weight: none;
			color:#2471A3;
		}
		.inputsp:focus{
			border-radius: 25px;
		}
		.white{
			color:#fff;
		}
		.nav-tabs > li.active > a{
			color:#fff;
			border: none;
			background-color: #148F77;
		}
		.nav-tabs > li.active > a:focus{
			color:#fff;
			border: none;
			background-color: #148F77;
		}
		#section1 {padding-top:50px;height:100%;color: #000; background-color: #CDCFD4;}
		#section2 {padding-top:50px;height:100%;color: #000; background-color: #CDCFD4;}
		#section3 {padding-top:50px;height:100%;color: #000; background-color: #CDCFD4;}
	</style>
	</head>
	
		<ul class="subpvda nav nav-tabs" style="">
			<li id="posts" class="active dvs"> <a data-toggle="tab" href="insert.php" onclick="window.location='insert.php'" class="ads "> Post thằng dùng</a></li>
			<li id="watch" > <a data-toggle="tab" href="list_user.php" class="ads" onclick="window.location='list_user.php'">Xem thằng dùng</a></li>
		</ul>