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
<link rel="stylesheet" type="text/css" href="filmresume.css">
<title>A&H CINEMA - ADD A FILM</title>
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

	<br><br><br><br><br><br>

    <?php
	$var = 0;
	$defaut = 0;
	$defaut2 = 0;
	$id = (int) $_POST['FilmId'];
	$name = $_POST['FilmName'];
	$synopsis = $_POST['FilmSynopsis'];
	$duration = (int) $_POST['FilmDuration'];
	$actor1 = $_POST['FilmActor1'];
	$actor2 = $_POST['FilmActor2'];
	$actor3 = $_POST['FilmActor3'];
	$actor4 = $_POST['FilmActor4'];
	$actor5 = $_POST['FilmActor5'];

	if ($var == 0)
	{
		if ($id==""){
			echo("Please, enter an id for the film" . "<br>");
			$defaut++;
		}
		if ($name==""){
			echo("Please, enter a name for the film" . "<br>");
			$defaut++;
		}
		if ($synopsis==""){
			echo("Please, enter a synopsis for the film" . "<br>");
			$defaut++;
		}
		if ($duration==""){
			echo("Please, enter a duration for the film" . "<br>");
			$defaut++;
		}
		if ($actor1==""){
			echo("Please, enter a name for the 1st actor" . "<br>");
			$defaut++;
		}
		if ($actor2==""){
			echo("Please, enter a name for the 2nd actor" . "<br>");
			$defaut++;
		}	
		if ($actor3==""){
			echo("Please, enter a name for the 3rd actor" . "<br>");
			$defaut++;
		}
		if ($actor4==""){
			echo("Please, enter a name for the 4th actor" . "<br>");
			$defaut++;
		}
		if ($actor5==""){
			echo("Please, enter a name for the 5th actor" . "<br>");
			$defaut++;
		}	
	}
	
	if ($defaut == 0)
	{
		$user = 'root';
		$password = ''; //To be completed if you have set a password to root
		$database = 'a&hcinema'; //To be completed to connect to a database. The database must exist.
		$port =3306; //Default must be NULL to use default port
		$mysqli = new mysqli('localhost', $user, $password, $database, $port);

		if ($mysqli->connect_error) {
			die('Connect Error (' . $mysqli->connect_errno . ') '
					. $mysqli->connect_error);
		}
		$sql = "SELECT movieid, moviename, moviesynopsis, movieduration, moviecasting1, moviecasting2, moviecasting3, moviecasting4, moviecasting5 FROM movie";
		$result = $mysqli->query($sql);
		
		if ($result->num_rows > 0) 
		{
			// output data of each row
			while($row = $result->fetch_assoc())
			{

				if($id == $row["movieid"])
				{
					echo "Sorry, this film id is already taken.";
					$defaut2++;
					echo("<br><br>");
					?>
					<button><A href="http://localhost/A&H Cinema - PHP/addmovie.php">Go Back</A></button>
					<?php
					break;
				}
				else if($name == $row["moviename"])
				{
					echo "Sorry, this film name already exist.";
					$defaut2++;
					echo("<br><br>");
					?>
					<button><A href="http://localhost/A&H Cinema - PHP/addmovie.php">Go Back</A></button>
					<?php
					break;
				}
			}
		}

		if ($defaut2 == 0)
		{
			$sql = "INSERT INTO movie (movieid, moviename, moviesynopsis, movieduration, moviecasting1, moviecasting2, moviecasting3, moviecasting4, moviecasting5) VALUES ('$id', '$name', '$synopsis', '$duration', '$actor1', '$actor2', '$actor3', '$actor4', '$actor5')";
			$result = $mysqli->query($sql);
			echo("Film successfully added<br><br>");
			?>
			<button><A href="http://localhost/A&H Cinema - PHP/A&H CINEMA - Home.php">Home Page</A></button>
			<?php	
		}			
		$mysqli->close();
	}
	else
	{
		echo("<br><br>");
		?>
		<button><A href="http://localhost/A&H Cinema - PHP/addmovie.php">Go Back</A></button>
		<?php	
	}
	?>

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
