<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>My Cart</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<div>
	 <div>
		<h1 class="text-center">My Cart</h1>
	 </div>
	 <div class="col-lg-9">
		<table class="table">
        <thead class="text-center">
          <tr>
            <th scope="col">Serial No.</th>
            <th scope="col">Item Name</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody class="text-center">
     	<?php 
    	$total=0;
    	if (isset($_SESSION['cart'])) 
    	{
  	 	  foreach ($_SESSION['cart'] as $key => $value) 
  	    	{
  	    		$sr=$key+1;
  	 		$total=$total+$value['Price']; 
  	 		echo "
  	 		<tr>
              <td>$sr</td>
              <td>$value[Item_name]</td>
              <td>$value[Price]</td>
              <td><input class='text-center' type='text' value='$value[Quantity]' min='1' max='10'></td>
              <td>
              <form action='manage.php' method='POST'>
              <button name='remove_item' class='btn btn-sm  btn-outline-danger'>REMOVE</button>
              <input type='hidden' name='Item_name' value='$value[Item_name]'>
              </form>
              </td>
            </tr>
            ";
  	 	    }
    	 } 

    	?>
    
        </body>
        </table>
        <div class="col-lg-4" style="position: relative; left: 1000px;bottom: 180px;">
		<div class="border bg-light rounded p-4">
			<h4>Total:</h4>
	     	<h5 class="text-right"><?php echo $total ?></h5>
	     	<a href="payment.php"><button class="btn btn-sm border-info bg-info">Make A Payment</button></a>
		</div>
	 </div>
	 </div>
	 
	</div>
</body>
</html>