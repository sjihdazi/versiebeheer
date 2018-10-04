<?php include "db.php"; ?>

<!DOCTYPE HTML>

<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Versiebeheer</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>

	<body>
	<div class='backdrop'>
		<div class='container'>
			<form action="./" method="post"> 
				<label id="first">Onderwerp:</label><br/>
				<input type="text" name="onderwerp"><br/>

				<label id="first">Comment</label><br/>
				<input type="text" name="comment"><br/>

				<label id="first">Gewerkte Uren</label><br/>
				<input type="text" name="uren"><br/>

				<button type="submit" name="save">save</button>
			</form>
		</div>
	</div>
	<div class='backdropright'>
		<div class='container'>
			<table>
			<?php
				if ($result->num_rows > 0) {
				    // output data of each row
				    while($row = $result->fetch_assoc()) {
				        echo "<tr><td>Onderwerp: " . $row["onderwerp"]. "</td></tr><tr><td>Comment: " . $row["comment"]. "</td></tr><tr><td>Gewerkte Uren: " . $row["uren"]. "<hr></td></tr>";
				    }
				} else {
				    echo "0 results";
				}
				$conn->close();
			?>
			</table>
		</div>
	</div>

</body>

</html>