<?php
// Retrieve form data

    if(isset($_POST["btn"]))
    {
$name = $_POST["name"];
$address = $_POST["address"];
$number=$Post_["order"];
$email = $_POST["email"];
$order = $_POST["order"];

// Database connection details

// Create a connection
$con = mysqli_connect("localhost:3306","root","","deliverydb");
mysqli_select_db($con,"deliverydb");

if(mysqli_connect_error()){
    echo "failed";
    exit();
}echo "connection sucess correct<br>";




$sql= "INSERT INTO delivery(name,address,number,email,order) values('$name','$address','$number','$email','$order')";
        $ret = mysqli_query($con,$sql);


        echo "No of records inserted: $ret <br>";


    }
    else{
        echo "not inserted"

    }
    mysqli_close($con);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styls.css">
	<title>Green Land's</title>

</head>
<body>
	<header id="dilivery">
		<div class="wrapper">
			<div class="logo">
				<a href="file:///E:/wamp64/www/project/home.html"><img src="IMG-20220909-WA0003.png"></a>
			</div>
			<ul class="nav-area">
				<li><a href="file:///E:/wamp64/www/project/home.html">Home</a></li>
				<li><a href="file:///E:/wamp64/www/project/about.html">About</a></li>
				<li><a href="file:///E:/wamp64/www/project/services.html">Services</a></li>
				<li><a href="file:///E:/wamp64/www/project/food_drinks.html">Food & Drinks</a></li>
				<li><a href="file:///E:/wamp64/www/project/contact.html">Contact</a></li>
				<li><a href="file:///E:/wamp64/www/project/shop.html">Shop</a></li>
			</ul>
		</div>
		<div class="font"><br><br><br><br><br><br><br>
			<form name="frm" method="post"action="#">
				
			<div id="name">
				<table>
					<tr>
					<td><label><h2 class="name">Customer Name</h2></label></td>
					<td><label><input type="text" class="name" name="name"></label></td>
				</tr>
			
				
					<tr>
				<td><label><h2 class="address">Customer Address</h2></label></td>
				<td><label><input type="text" class="address" name="address"></label></td>
			</tr>
			
				<tr>
				<td><label><h2 class="number">Customer Number</h2></label></td>
				<td><label><input type="text" class="number" name="number"></label></td>
          </tr>
      
          <tr>
				<td><label><h2 class="email">Customer Email</h2></label></td>
				<td><label><input type="text" class="email" name="email"></label></td>
			</tr>
			<tr>

				<td><label><h2 class="order">Order ID</h2>
				<td><label><input type="text" class="order" name="order"></label></td>
			</tr>
</table>
<br><br><br><br>
				<input type="submit" name="btn" value="Submit">

		
	</form>
		</div>
	</header>

	

</body>
</html>
