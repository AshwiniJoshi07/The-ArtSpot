<!DOCTYPE html>
<html>
<head>
	<title>The ArtSpot |Admin Page</title>
	<link href="assets/img/p/fi.jpg" rel="icon">
	<link rel="stylesheet" type="text/css" href="admin.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital@1&display=swap" rel="stylesheet">
</head>
<body>
	<h1 style="text-align: center;">USER DATA</h1>
	<a href="logout.php">
		<button id="log" style="position: relative;
	bottom: 65px;
	left: 1250px;
       }">Log Out </button>
	</a>
	
	<?php 
	include 'configure.php';

	$result = mysqli_query($con,"select * from userr");

	echo "<table border='1'>
	<tr>
	<th>Name</th>
	<th>Email</th>
	<th>Mobile</th>
	</tr>";

	while($row = mysqli_fetch_array($result))
    {
    echo "<tr>";
    echo "<td>" . $row['username'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['mobile'] . "</td>";
    echo "</tr>";
    }
    echo "</table>";
    
	 ?>
	<table>
		
	</table>

</body>
</html>