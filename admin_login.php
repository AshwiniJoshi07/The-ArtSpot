<?php 
  session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>The ArtSpot | Admin Page</title>
     <link href="assets/img/p/fi.jpg" rel="icon">
     <link rel="stylesheet" type="text/css" href="admin.css">
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crosdisplaysorigin>
     <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@600&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital@1&=swap" rel="stylesheet">

</head>
<body style="background-image: url('https://wallpapers.com/images/file/colorful-creative-music-doodle-9t0pdvwr2oodt00d.jpg');">
	<?php
    
    if (isset($_POST['submit'])) {
      $email = $_POST['email'];
      $password = $_POST['password'];

      if ($email == "admin123@gmail.com") {
        if ($password == "bharath") {
          ?>
           <script>
             location.replace("adminh.php")
           </script>
          <?php
        }else{
          ?>
          <script>
           alert("Password Incorrect")
          </script>
          <?php
        }
      }else{
        ?>
          <script>
           alert("Invalid Email")
          </script>
          <?php
      }
    }
    ?>
	
	<div class="container" style="background-color: rgba(0 0 0 0/ 50%);
    box-shadow: 0 0 150px #333;
    border: 1px solid #333;width: 300px;height: 200px;padding: 20px 20px 30px 50px;border-radius:10px;background-color: black;">
		<div class="header">
			<h1 style="color:white;">ADMIN LOGIN</h1>

		</div>
		<div class="main">
			<form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
				<input type="email" name="email" placeholder="Email" required><br>
				<input type="password" name="password" placeholder="Password" required><br>
				<button style="border: solid;" type="submit" name="submit">
					Login
				</button>
			</form>
		</div>
		


	</div>
</body>
</html>
