<?php
//mysql_connect("localhost","root","");
//mysql_select_db("ptixiaki");
$servername = 'localhost';
$username = 'p13stav';
$password = 'FTWW45#$FC#tfgw345VW#$';
$dbname = 'p13stav';

$conn = new mysqli($servername, $username, $password, $dbname);
//http://example.com/thisScript.php?jsonGiven=
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$Username = $_POST["USERNAME"];
$Password = $_POST["PASSWORD"];
$Device = 'Android';
$Privilege = 'User';


$sql = "INSERT INTO USERS VALUES('$Username',PASSWORD('$Password'),'$Device','$Privilege')";
if ($conn->query($sql) === TRUE) {
    echo "User Created";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
