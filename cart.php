<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<title>My Cart</title>
<?php 
$db_host = "localhost"; 
$db_username = "root";
$db_pass = "00000000";  
$db_name = "optical"; 

mysql_connect("$db_host","$db_username","$db_pass") or die ("could not connect to mysql");
mysql_select_db("$db_name") or die ("no database"); 
$dynamicList = "";
$sql = mysql_query("SELECT * FROM cart");
$productCount = mysql_num_rows($sql); 
if ($productCount > 0) 
{	
	while($row = mysql_fetch_array($sql))
	{ 
		$id = $row["id"];
		$product_name = $row["product_name"];
		$price = $row["price"];
		$dynamicList =  '<tr>
						<td width="17%" valign="top">
						<img style="border:#666 1px solid;" src="images/' . $id . '.jpg" alt="' . $product_name . '" width="232" height="111" border="1" align = "center"/>
						
						</td>
						<td width="83%" valign="top">' . $product_name . '<br />
						Rs.' . $price . '<br />
						<a href="product.php?id=' . $id . '">View Product Details</a></td>
						</tr>
						';
    }
} 
else 
{
	$dynamicList = "You have no products in cart";
}
mysql_close();
?>
</head>
<body>

<div id="mySidenav" class="sidenav">
	<a href="index.html" id="home">Home</a>	
	<a href="men.html" id="Him">For Him</a>
	<a href="women.html" id="Her">For Her</a>
	<a href="kids.html" id="Kids">For Kids</a>
	<a href="customer.html" id="contact">Contact</a>
	<a href="cart.php" id="cart">Cart</a>
</div>

  <div class="caption">
    <span class="border"><a href="index.html">VISION TECH</a></span>
  </div>
  
<div align="center" style="margin-top:12%">
	<p align="center">
	<table width="100%" cellspacing="0" cellpadding="6" style="margin-left:35%">
	<?php 
	echo $dynamicList;
	?><br />
	</table>
	</p>
	<a href="checkout.html"><input type="submit" value="Proceed to Checkout" style="font-family:sans-serif; background-color:black; color:#fff; font-size:15px"></a>
</div>

<div position = "bottom">
<footer>
		<P style="color:white;">Address: Shop No. 13, Chaura Rasta, Jaipur</P>
		<ul>
			<li class="list"><a href="#"><img class="link" src="pin.png"></li>
			<li class="list"><a href="#"><img class="link" src="twi.png"></li>
			<li class="list"><a href="#"><img class="link" src="in.png"></li>
			<li class="list"><a href="#"><img class="link" src="face.png"></li>
		</ul>
		
</footer>
</div>


</body>
</html> 