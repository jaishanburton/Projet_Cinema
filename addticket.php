<!DOCTYPE HTML>

<?php
$user = 'root';
$password = ''; //To be completed if you have set a password to root
$database = 'a&hcinema'; //To be completed to connect to a database. The database must exist.
$port =3306; //Default must be NULL to use default port
$mysqli = new mysqli('localhost', $user, $password, $database, $port);

$ticketid = (rand(1, 10000));
$ticketval = 0;
$tickettype = 0;
$ticketamount = 0;
$ticketname = 0;
$var = 0;

echo "<br><br><br><br><br><br>";

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

if(isset($_POST['AgeTicket'])) {
    $type = $_POST['AgeTicket'];
} else {
    $type = 0;
}
if(isset($_POST['NumberOfTicket'])) {
    $amount = $_POST['NumberOfTicket'];
} else {
    $amount = 0;
}
if(isset($_POST['Dates'])) {
    $date = $_POST['Dates'];
} else {
    $date = 0;
}
$hour = $_POST['HourOfTicket'];
$name = $_POST['FilmTicket'];

if ($type==0)
{
    echo "Please enter the type of the tickets.<br>";
    $var++;
}
if ($date==0)
{
    echo "Please enter a date for the tickets.<br>";
    $var++;
}
if ($amount==0)
{
    echo "Please enter the number of tickets.<br>";
    $var++;
}
if ($hour==0)
{
    echo "Please enter a session time.<br>";
    $var++;
}

if ($var==0)
{
    if ($type==1)
    {
        $ticketval=25;
        $tickettype = "Adult Ticket";
    }
    else if ($type==2)
    {
        $ticketval=15;
        $tickettype = "Child Ticket";
    }
    else if ($type==3)
    {
        $ticketval=20;
        $tickettype = "Student Ticket";
    }
    else if ($type==4)
    {
        $ticketval=18;
        $tickettype = "Senior Ticket";
    }

    if ($name==1)
    {
        $ticketname="JOKER";
    }
    else if ($name==2)
    {
        $ticketname="SPIDERMAN : NO WAY HOME";
    }
    else if ($name==3)
    {
        $ticketname="THE BATMAN";
    }
    else if ($name==4)
    {
        $ticketname="AVANGERS : ENDGAME";
    }
    else if ($name==5)
    {
        $ticketname="PIRATE OF THE CARIBBEAN : THE CURSE OF THE BLACK PEARL";
    }
    else if ($name==6)
    {
        $ticketname="FAST & FURIOUS 9";
    }
    else if ($name==7)
    {
        $ticketname="BLACK ADAM";
    }
    else if ($name==8)
    {
        $ticketname="SONIC 2 : THE HEDGEHOG";
    }
    else if ($name==9)
    {
        $ticketname="007 : NO TIME TO DIE";
    }

    $valpanier = $valpanier + ($ticketval * $amount);
    $sql = "UPDATE `panier` SET `panierval` = '$valpanier'";
    $result = $mysqli->query($sql);

    $sql = "INSERT INTO panierinfo (ticketid, ticketamount, tickettype, ticketname, ticketdate, tickethour, ticketprice, ticketbuy, userid) VALUES ('$ticketid', '$amount', '$tickettype', '$ticketname', '$date', '$hour', '$ticketval', '0', '0')";
    $result = $mysqli->query($sql);

    echo "Your Tickets has been Add to the Basket.";
}
$mysqli->close();
?>

<html>

<head>
<script type="text/javascript" src="functions.js"></script>
<link rel="stylesheet" type="text/css" href="lesfonts.css">
<link rel="stylesheet" type="text/css" href="filmresume.css">
<title>A&H CINEMA - ADD TICKETS</title>
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

	<br><br><br><br>

  
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
