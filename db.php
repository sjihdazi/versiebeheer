<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uren_registratie";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * FROM registratie";
$result = $conn->query($sql);

if(isset($_POST['save'])){
    $sql = "INSERT INTO registratie (onderwerp, comment, uren)
    VALUES ('".$_POST["onderwerp"]."','".$_POST["comment"]."','".$_POST["uren"]."')";

    $result = mysqli_query($conn,$sql);
}
?>
	



