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
<link rel="stylesheet" type="text/css" href="lesfilms.css">
<title>A&H CINEMA - FILM</title>
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

	<div class="gridMovies">
		<div class="one">
			<a href="1-joker.php"><img src="joker2.jpg" width="404.5px" height="600px"></a><br><br>
			<a href="1-joker.php"><INPUT type="submit" value="MORE INFOS"></a><br>
		</div>
		<div class="two">
			<a href="2-spiderman.php"><img src="spiderman2.jpg" width="404.5px" height="600px"></a><br><br>
			<a href="2-spiderman.php"><INPUT type="submit" value="MORE INFOS"></a><br>
		</div>
		<div class="three">
			<a href="3-the batman.php"><img src="the batman2.jpg" width="404.5px" height="600px"></a><br><br>
			<a href="3-the batman.php"><INPUT type="submit" value="MORE INFOS"></a><br>
		</div>
		<div class="four">
			<a href="4-avangers.php"><img src="avangers2.jpg" width="404.5px" height="600px"></a><br><br>
			<a href="4-avangers.php"><INPUT type="submit" value="MORE INFOS"></a><br>
		</div>
		<div class="five">
			<a href="5-pirates.php"><img src="pirates2.jpg" width="404.5px" height="600px"></a><br><br>
			<a href="5-pirates.php"><INPUT type="submit" value="MORE INFOS"></a><br>
		</div>
		<div class="six">
			<a href="6-f&f.php"><img src="f&f2.jpg" width="404.5px" height="600px"></a><br><br>
			<a href="6-f&f.php"><INPUT type="submit" value="MORE INFOS"></a><br>
		</div>
		<div class="seven">
			<a href="7-blackadam.php"><img src="blackadam2.webp" width="404.5px" height="600px"></a><br><br>
			<a href="7-blackadam.php"><INPUT type="submit" value="MORE INFOS"></a><br>
		</div>
		<div class="eight">
			<a href="8-sonic2.php"><img src="sonic2.webp" width="404.5px" height="600px"></a><br><br>
			<a href="8-sonic2.php"><INPUT type="submit" value="MORE INFOS"></a><br>
		</div>
		<div class="nine">
			<a href="9-007.php"><img src="0072.jpg" width="404.5px" height="600px"></a><br><br>
			<a href="9-007.php"><INPUT type="submit" value="MORE INFOS"></a><br>
		</div>
		<div class="ten"></div>
		<div class="eleven"><button><A href="http://localhost/A&H Cinema - PHP/allfilms.php">View All Films</A></button></div>
		<div class="twelve"></div>
	</div>

	<br><br><br>

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
