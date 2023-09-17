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
<title>A&H CINEMA - FILM - JOKER</title>
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



    <div class="gridMovieResume">
        <div class="one">
            <img src="joker2.jpg" width="404.5px" height="600px">
        </div>
        <div class="two">

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
			$sql = "SELECT movieid, moviename, moviesynopsis, movieduration, moviecasting1, moviecasting2, moviecasting3, moviecasting4, moviecasting5 FROM movie WHERE movieid=1";
			$result = $mysqli->query($sql);
			$mysqli->close();
			?>

			<?php
			if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				echo $row["moviename"] . "<br><br>" . "RESUME : " . "<br>" . $row["moviesynopsis"] . "<br><br>" . "DURATION : " . $row["movieduration"] . "min<br><br>" . "CAST : " . "<br>" . $row["moviecasting1"] . "<br>" . $row["moviecasting2"] . "<br>" . $row["moviecasting3"] . "<br>" . $row["moviecasting4"] . "<br>" . $row["moviecasting5"];
			}
			} else {
			echo "0 results";
			}
			?>
			
			<br><br><br>

			<?php
			$user = 'root';
			$password = ''; //To be completed if you have set a password to root
			$database = 'a&hcinema'; //To be completed to connect to a database. The database must exist.
			$port =3306; //Default must be NULL to use default port
			$mysqli = new mysqli('localhost', $user, $password, $database, $port);
			$amount = 0;

			if ($mysqli->connect_error) {
				die('Connect Error (' . $mysqli->connect_errno . ') '
						. $mysqli->connect_error);
			}
			$sql = "SELECT ticketid, ticketamount, tickettype, ticketname, ticketdate, tickethour, ticketprice, ticketbuy, userid FROM panierinfo";
			$result = $mysqli->query($sql);

			if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
					if(($row["ticketname"]=='JOKER')&&($row["ticketbuy"]==1))
					{
						$amount = $amount + $row["ticketamount"];
					}
				}
			}

			if ($amount!=0)
			{
				echo $amount . " tickets have been bought for this movie.<br><br>";
			}
			else
			{
				echo "No Tickets Purchased for this Movie.<br><br>";
			}
			$mysqli->close();
			?>

			<form name="MyForm" action="addticket.php" method="post">
			<form action="">
			BOOK NOW <select name="FilmTicket"><option value="1"></select>
	
			<br><br>

			<input type="date" min="2022-12-05" name="Dates"><br><br>

			<select name="AgeTicket">
				<option value="0">Select a type of ticket
				<option id="AdultTicket" value="1">Adult ticket $25
				<option id="ChildTicket" value="2">Child ticket $15
				<option id="StudentTicket" value="3">Student ticket $20
				<option id="SeniorTicket" value="4">Senior ticket $18
			</select><br><br>

			<select name="NumberOfTicket">
				<option value="0">Select a number of ticket
				<option id="nb1" value="1">Number of ticket : 1
				<option id="nb2" value="2">Number of ticket : 2
				<option id="nb3" value="3">Number of ticket : 3
				<option id="nb4" value="4">Number of ticket : 4
				<option id="nb5" value="5">Number of ticket : 5
				<option id="nb6" value="6">Number of ticket : 6
				<option id="nb7" value="7">Number of ticket : 7
			</select><br><br>

			<select name="HourOfTicket">
				<option value="0">Select an hour
				<option value="12">12h
				<option value="15">15h
				<option value="18">18h
				<option value="21">21h
			</select><br><br>

			<input type="Submit" value="Add tickets">
					
			<br><br>

        </div>
    </div>

	<br><br>

	<center>
		Trailer<br><br>
		<video autoplay loop muted plays-inline controls width="50%" height="50%"><source src="trailer joker.mp4" type="video/mp4"></video>
	</center>

	<br><br><br><br>

	<div class="gridMovieCast">
		<div class="one">
			<a href="https://en.wikipedia.org/wiki/Joaquin_Phoenix" target="_blank"><img src="Joaquin Phoenix.jpg" width="300px" height="300px"></a><br><br>
			Joaquin Phoenix
		</div>		
		<div class="two">
			<a href="https://en.wikipedia.org/wiki/Robert_De_Niro" target="_blank"><img src="Robert De Niro.webp" width="300px" height="300px"></a><br><br>
			Robert De Niro
		</div>		
		<div class="three">
			<a href="https://en.wikipedia.org/wiki/Zazie_Beetz" target="_blank"><img src="Zazie Beetz.jpg" width="300px" height="300px"></a><br><br>
			Zazie Beetz
		</div>
		<div class="four">
			<a href="https://en.wikipedia.org/wiki/Brett_Cullen" target="_blank"><img src="Brett Cullen.jpg" width="300px" height="300px"></a><br><br>
			Brett Cullen
		</div>
	</div>

	<br><br>

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
