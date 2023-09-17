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
<title>A&H CINEMA - DELETE A CUSTOMER</title>
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

    <form name="MyForm" action="deletecustomer2.php" method="post">
	<form action=""> 
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
        $sql = "SELECT userid, username FROM user";
        $result = $mysqli->query($sql);

        if ($result->num_rows > 0) 
        {
            // output data of each row
            while($row = $result->fetch_assoc())
            {
                echo $row["userid"] . " : " . $row["username"] . "<br>";
            }
        }
        
        ?>
    Select a Customer Id : <input type="text" name="UserId"> <br><br>
	<input type="Submit" value="Delete a customer">

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
