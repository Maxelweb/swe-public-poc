<?php
	
	$NAME = "US-GATEWAY-1";

	$ip = $_SERVER['SERVER_ADDR'];

	// Dettagli: https://stackoverflow.com/questions/409999/getting-the-location-from-an-ip-address
	$details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));

?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $NAME;?> - RedRoundRobin</title>
	<style type="text/css">
		
        body {font-size:10pt; color:#777777; font-family:arial; text-align:center;}
        h1 {font-size:30px; color:#555555; margin: 70px 0 50px 0;}
        p {width:320px; text-align:center; margin-left:auto;margin-right:auto; margin-top: 30px }
        div {width:480px; font-size: 12pt; text-align:center; margin-left:auto;margin-right:auto;}
        a:link {color: #34536A;}
        a:visited {color: #34536A;}
        a:active {color: #34536A;}
        a:hover {color: #34536A;}
        img{max-height: 125px; max-width: 100%;}
    
	</style>
</head>
<body>

<img src="https://www.redroundrobin.site/images/logo.png">

<h1><?php echo $NAME; ?></h1>

<h2><?php echo $ip;?></h2>

<br>
<img src="https://www.countryflags.io/<? echo $details->country;?>/flat/64.png">
<br>

<div>
	<b>Server location:</b> 

	<?php echo $details->city . ', ' . $details->region . ', ' . $details->country; ?>

</div>

<br>
<br>

<small>Gateway simulation for ThiReMa by <a href="https://www.redroundrobin.site">RedRoundRobin</a>. <a href="https://github.com/Maxelweb/swe-public-poc">More info</a> &rarr;</small>

</body>
</html>