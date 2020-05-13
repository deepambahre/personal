<?php
error_reporting(0);
require('header.php');
session_start();
/*if(!isset($_SESSION['Username']))
{
	header('location:index.php');
	
}*/

?>

<html>
<head>
<title>Indorii Medical Store</title>
<link rel="stylesheet" type="text/css" href="CSS/careers.css"
</head>
<body background="images/line_glare_light_color_background_hd-wallpaper-45215.jpg">
<div id="right">


<div class="dropdown" align="left">
<button class="dropbtn">Returns and Refunds Policy</button>
  <div class="dropdown-content">
    <a href="#">
    <ul><p>At Inodrii Medical Store, we do our best to ensure that you are completely satisfied with our products. We understand that returns may be necessary in some cases. And we are happy to offer you peace of mind when you are not fully satisfied with the purchase and want to return back the products to us. You may return the ordered item(s), or any item(s) included in the order, within 7 days of the arrival of your order. You may receive a full refund based on the conditions listed below:</p>

<p>Please note: Inodrii Medical Store 'Returns Policy' may vary depending on the specific nature of the products.</p>

<p><b>Refunds Possible If the Item(s) You Received:</b></p>

    <p><li>is different from the ones you ordered;</li></p>
    <p><li>are lost or damaged during transit;</li></p>
    <p><li>is past its expiry date;</li></p>
    <p><li>is a defective item.</li></p>

<p><b>Returns NOT Eligible If the Item(s) You Ordered:</b></p>

    <p><li>is without original packing/accessories.</li></p>
    <p><li>falls under the following product categories: Oral care (toothbrushes, toothpastes), Women care (sanitary napkins, breast relievers) and other Personal hygiene products;</li></p>
    <p><li>is used or tampered with.</li></p>
    </ul>
</a>
  </div>
</div>

<center>
<nav>
<a href="index2.php" class="btn btn-default"><font size="3" color="#009966">Home</font></a>
<a href="about.php" class="btn btn-default"><font size="3" color="#009966">AboutUs</font></a>
<a href="product.php" class="btn btn-default"><font size="3" color="#009966">Product</font></a>
<a href="contact.php" class="btn btn-default"><font size="3" color="#009966">ContactUs</font></a>
<a href="careers.php" class="btn btn-default"><font size="3" color="#009966">Careers</font></a>
<a href="help.php" class="btn btn-default"><font size="3" color="#009966">Help</font></a>
</nav>

</center>

   <div class="dropdown1">
  <button class="dropbtn1">Shipping Information</button>
  <div class="dropdown-content1">
    <a href="#">
    <p><b>What are the delivery charges?</b></p>
<p>Delivery charges are been charged based on order and not on individual product. The delivery charges vary depending on pin-codes. Moreover Cash on Delivery would attract additional convenience charges subject to minimum order value.</p>

<p><b>What is the probable delivery time?</b></p>
<p>After confirmation of order it takes minimum 72 to 96 hours. We are trying to reduce to the best possible to delivery faster.</p>

    <p><b>Do you deliver international orders?</b></p>
    <p>Currently, we do not process international deliveries. You may place the order from any part of the world, but the shipping address should be in India.</p>
<p><b>Pricing Information</b></p>
<p>Merapharmacy aims to offer exact product and pricing information, but there can be typographical errors. The price of a product cannot be confirmed until the order is made. If the product is listed with incorrect information or prices, we have the right to cancel or refuse any orders placed for the product unless the product has been dispatched already. If the product is wrongly priced, we may contact you for instructions and inform you about cancellation. Unless the ordered product has been dispatched, the offer will not be considered as accepted and Merapharmacy has the right to improve the price of the product and contact you for more instructions with the contact details or email id provided by you during registration, or even cancel the order and inform you about the same.</p>

    <p><b>Cancellation;</b></p>
    <p>There can be a few orders that we cannot accept and need to cancel. The right of cancellation is at our sole discretion for some reason. The situations that can lead to cancellation include limited quantity available for purchase, product errors and inaccuracies, wrong pricing information, problems located by the credit or fraud avoidance department. Added information or verifications might be required before we accept any order. We will contact you if the whole or a part of your order is canceled or if added information is needed for accepting your order. If the order is canceled after your account has been charged, the money will be transferred back into your account.</p>
 </a>
  </div>
</div>


  <div id="track">
<form action="" method="post"
<table>
<caption><h1 style="background-color:#009966"><font color="#FFFFFF">Track Order</font></h1></caption>
<td> <input type="text" name="TrackOrder" placeholder="Track Your Order" required>
<input type="submit" name="submit" value="Submit">
</table>
</form>
</div>


</div>
</body>
</html>
<?php require('footer.php');?>
