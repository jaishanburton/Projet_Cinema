<!DOCTYPE HTML>

<?php
$user = 'root';
$password = ''; //To be completed if you have set a password to root
$database = 'a&hcinema'; //To be completed to connect to a database. The database must exist.
$port =3306; //Default must be NULL to use default port
$mysqli = new mysqli('localhost', $user, $password, $database, $port);

if ($mysqli->connect_error) {
	die('Connect Error (' . $mysqli->connect_errno . ') '
			. $mysqli->connect_error);
}
$sql = "SELECT panierval FROM panier";
$result = $mysqli->query($sql);
if ($result->num_rows > 0) 
{
	while($row = $result->fetch_assoc())
	{
		$valpanier = $row["panierval"];
	}
}
$mysqli->close();
?>

<html>

<head>
<script type="text/javascript" src="functions.js"></script>
<link rel="stylesheet" type="text/css" href="lesfonts.css">
<link rel="stylesheet" type="text/css" href="experience.css">
<title>A&H CINEMA - EXPERIENCE</title>
</head>

<body>
	<div class="barre_top">
		<div class="one"><a href="A&H CINEMA - Home.php"><img src="LOGO A&H2.jpg"></a></div>
		<div class="two"><ul><li><a href="A&H CINEMA - Home.php">Home</a></li></ul></div>
		<div class="three"><ul><li><a href="A&H CINEMA - Film.php">Film</a></li></ul></div>
		<div class="four"><ul><li><a href="A&H CINEMA - Experience.php">Experience</a></li></ul></div>
		<div class="five"><ul><li><a href="A&H CINEMA - Contact.php">Contact</a></li></ul></div>
		<div class="six"><ul><li><a href="A&H CINEMA - My account.php">My account</a></li></ul></div>
		<div class="seven"><ul><li><a href="A&H CINEMA - Cart.php">Cart : $<?php echo $valpanier; ?></span></a></li></ul></div>
	</div>

    <br><br><br><br><br>

	<center><video autoplay loop muted plays-inline width="50%" height="50%"><source src="IMAX.mp4" type="video/mp4"></video></center>

	<br><br><br>

	<center>WELCOME TO IMAX</center>
	<div class="gridMid">
		<div class="one"></div>
		<div class="two">
			The difference between seeing a film and living it<br><br>
			IMAX screens stretch from floor to ceiling and from wall to wall, creating a picture so big it feels like you're inside the film. Yet somehow you can see every detail in the stunning, high-resolution screen.<br><br>

			You also experience IMAX's heart-pounding audio. Dozens of powerful speakers, placed all around you, ensure you can hear a pin drop and be able to tell exactly where it landed.<br><br>

			Become part of the film, get caught up in the action and escape into another reality.<br><br>
		</div>
		<div class="three"></div>
	</div>

    <br><br><br><br><br>

	<center>IMAX EXPERIENCE</center>
	<div class="gridMid2">
		<div class="one"></div>
		<div class="two">
			Huge screens<br><br>
			IMAX takes the larger-than-life film experience and makes it even bigger and better. The monster-sized picture extends out of sight at every corner to fill your vision.<br><br>
			It's all around you, drawing you into the action until you're part of the film.<br><br>
			<center><img src="screen.jpg"></center>
		</div>
		<div class="three">
			Massive sound<br><br>
			Experience the performance of IMAX's incredible speakers.<br><br>
			Feel the bass of an explosion vibrate through your whole body while also tuning into every subtle sound, every note, every pin drop.<br><br>
			<center><img src="sound.jpg"></center>
		</div>
		<div class="four"></div>
	</div>

    <br><br><br><br><br>

	<center>WELCOME TO DOLBY CINEMA</center>
	<div class="gridMid1">
		<div class="one"></div>
		<div class="two">
			Experience movies for the first time.<br><br>
			Only Dolby Cinema can provide you with a truly unique and transformative experience, helping you connect so deeply with the story, you'll feel like you're stepping into the characters lives.<br><br>
			Discover how Dolby Cinema unlocks the emotional impact of every film, allowing you to see the subtle details and ultravivid colors of Dolby Vision, and hear the immersive sound of Dolby Atmos. Dolby Cinema is specially designed to elevate every type of movie experience: from big blockbusters, to arthouse films, and everything in between. You won't want to experience movies any other way.<br><br>
			There's the movies. Then there's Dolby Cinema.
		</div>
		<div class="three"></div>
	</div>

    <br><br><br><br><br>

	<center>DOLBY EXPERIENCE</center>
	<div class="gridMid2">
		<div class="one"></div>
		<div class="two">
			Ultravivid picture of Dolby Vision<br><br>
			Dolby Vision brings the characters to life with darker darks, brighter brights, and a remarkable color range you can't get anywhere else.<br><br>
			Open your eyes to everything you've been missing with remarkable picture quality, incredible brightness, and colors beyond your imagination.<br><br>
			<center><img src="salle.jpg" width="100%" height="100%"></center>
		</div>
		<div class="three">
			Immersive sound of Dolby Atmos<br><br>
			Dolby Atmos offers sound in incredible clarity that actually moves all around you, bringing you deeper into the story.<br><br>
			Sound has never sounded this good. Feel a deeper connection to the stories you love with sound that moves all around you with breathtaking realism.<br><br>
			<center><img src="dolby.jpg" width="100%" height="100%"></center>
		</div>
		<div class="four"></div>
	</div>

	<div class="copyrightZone">
		<div class="one"></div>
	
		<div class="two">
			<img src="LOGO A&H.jpg" width=150em height=150em><br>
			Copyright &#174; A&H CINEMA 2022
		</div>
		
		<div class="three"></div>
	</div>	

</body>
</html>
