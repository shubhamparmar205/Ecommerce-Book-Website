
<?php
ob_start();
//include header php file
include("header.php");
?>

<?php
//include cart items if it is not empty 
count($product->getData('cart')) ? include ('Template/_cart-templates.php') :  include ('Template/notFound/_cart_notFound.php');

//include wishlist items if it is not empty 
count($product->getData('wishlist')) ? include ('Template/_wishlist_template.php') :  include ('Template/notFound/_wishlist_notFound.php');

//include new t-shirts php file
include("Template/_new-tshirts.php");
?>

<?php
 //include footer php file
 include("footer.php")
 ?>