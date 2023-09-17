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
<title>A&H CINEMA - CART</title>
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

	<?php
	$need=0;
	$user = 'root';
    $password = ''; //To be completed if you have set a password to root
    $database = 'a&hcinema'; //To be completed to connect to a database. The database must exist.
    $port =3306; //Default must be NULL to use default port
    $mysqli = new mysqli('localhost', $user, $password, $database, $port);

    if ($mysqli->connect_error) {
        die('Connect Error (' . $mysqli->connect_errno . ') '
                . $mysqli->connect_error);
    }
    $sql = "SELECT ticketid, ticketamount, tickettype, ticketname, ticketdate, tickethour, ticketprice, ticketbuy, userid FROM panierinfo";
    $result = $mysqli->query($sql);
    
    if ($result->num_rows > 0) 
    {
        // output data of each row
        while($row = $result->fetch_assoc())
        {
			if ($row["ticketbuy"]==0)
			{
				if ($need==0)
				{
					echo "Here are all the tickets in the basket.<br><br>";
				}
				echo $row["ticketamount"] . " " . $row["tickettype"] . "<br>Number #" . $row["ticketid"] . "<br>Film : " . $row["ticketname"] . "<br>Date : " . $row["ticketdate"] . "<br>Hour : " . $row["tickethour"] . "h<br>Price (/units) : " . $row["ticketprice"];
				echo "<br><br><br>";
				$need=1;
			}
		}
		if($need==1)
		{
			?><form name="MyForm" action="deletetickets.php" method="post"><form action="">Select a Ticket Id to remove : <input type="text" name="TicketId"> <input type="Submit" value="Delete a ticket"></form><?php
			?><br><br><form name="MyForm" action="paymentuser.php" method="post"><form action=""><input type="Submit" value="Payment as a Client"></form><?php
			?><br><br><form name="MyForm" action="payement.html" method="post"><form action=""><input type="Submit" value="Payment as a Guest"></form><?php
			echo "<br><br><br>";
		}
		if ($need==0)
		{
			echo "The basket is empty.<br><br>";
			?>
			<button><A href="http://localhost/A&H Cinema - PHP/A&H CINEMA - Home.php">Home Page</A></button>
			<?php			
			echo "<br><br><br>";	
		}
	}
	else
	{
		echo "The basket is empty.<br><br>";
		?>
		<button><A href="http://localhost/A&H Cinema - PHP/A&H CINEMA - Home.php">Home Page</A></button>
		<?php			
		echo "<br><br><br>";	
	}
    $mysqli->close();
    ?>

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
