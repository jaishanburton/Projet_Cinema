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
	$id = (int) $_POST['UserId'];
	$userName = $_POST['UserName'];
	$userPassword = $_POST['UserPassword'];
	$firstName = $_POST['UserFirstName'];
	$lastName = $_POST['UserLastName'];
	$phoneNumber = (int) $_POST['UserPhoneNumber'];
	$mail = $_POST['UserMail'];

	if ($var == 0)
	{
		if ($id==""){
			echo("Please, enter an id for the customer" . "<br>");
			$defaut++;
		}
		if ($userName==""){
			echo("Please, enter a username for the customer" . "<br>");
			$defaut++;
		}
		if ($userPassword==""){
			echo("Please, enter a password for the customer" . "<br>");
			$defaut++;
		}
		if ($firstName==""){
			echo("Please, enter a first name for the customer" . "<br>");
			$defaut++;
		}
		if ($lastName==""){
			echo("Please, enter a last name for the customer" . "<br>");
			$defaut++;
		}
		if ($phoneNumber==""){
			echo("Please, enter a phone number for the customer" . "<br>");
			$defaut++;
		}
		if ($mail==""){
			echo("Please, enter a mail for the customer" . "<br>");
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
		$sql = "SELECT userid, username, userpassword, userfirstname, userlastname, userphonenumber, usermail FROM user";
		$result = $mysqli->query($sql);
		
		if ($result->num_rows > 0) 
		{
			// output data of each row
			while($row = $result->fetch_assoc())
			{

				if($id == $row["userid"])
				{
					echo "Sorry, this customer id is already taken.";
					$defaut2++;
					echo("<br><br>");
					?>
					<button><A href="http://localhost/A&H Cinema - PHP/addcustomer.php">Go Back</A></button>
					<?php
					break;
				}
				else if($userName == $row["username"])
				{
					echo "Sorry, this customer username already exist.";
					$defaut2++;
					echo("<br><br>");
					?>
					<button><A href="http://localhost/A&H Cinema - PHP/addcustomer.php">Go Back</A></button>
					<?php
					break;
				}
			}
		}

		if ($defaut2 == 0)
		{
			$sql = "INSERT INTO user (userid, username, userpassword, userfirstname, userlastname, userphonenumber, usermail) VALUES ('$id', '$userName', '$userPassword', '$firstName', '$lastName', '$phoneNumber', '$mail')";
			$result = $mysqli->query($sql);
			echo("Customer successfully added<br><br>");
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
		<button><A href="http://localhost/A&H Cinema - PHP/addcustomer.php">Go Back</A></button>
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
