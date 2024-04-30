<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookShopee</title>

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">

    <!-- Owl-Carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom CSS File -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="product.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="card.css">

</head>
<body>

<?php
include("header.php");
?>

<?php 
shuffle($product_shuffle);

//request method post
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['allproduct_submit'])){
      //call method addToCart
    $Cart->addToCart($_POST['user_id'],$_POST['item_id']);
    }
    
  }

$in_cart=$Cart->getCartId($product->getData('cart'));

?>

<?php
$size=array_map(function($pro){return $pro['item_size'];},$product_shuffle);
$unique=array_unique($size);
sort($unique);
?>

<!-- start #main-site -->
    <main id="main-site">

        <!-- Special Price -->
        <section id="special-price">
            <div class="container mt-5">
              <h4 class="font-rubik font-size-20">Read your way</h4>
              <div id="filter" class="button-group text-end font-baloo font-size-16">
                <button class="btn is-checked" data-filter="*">All</button>
                <?php
                array_map(function($size){
                    printf('<button class="btn" data-filter=".%s">%s</button>',$size,$size);
                },$unique);
                ?>
              </div>
            </div>
            
            <div class="grid container">
                <?php array_map(function($item) use ($in_cart){?>
                <div class="grid-item ms-lg-5 <?php echo $item['item_size']?>">   
                    <!-- <div class="container"> -->
                    <div class="ca">
                    <div class="basicInfo">
                        <div class="title">
                            <div class="category">BookShopee</div>
                            <div class="name"><?php echo $item['item_name']?? Unknown;?></div>
                            <div class="info">New products 2024</div>
                        </div>
                        <div class="images">
                        <a href="<?php printf('%s?item_id=%s','product.php',$item['item_id']);?>"><img src="<?php echo $item['item_image']?? "./assets/products/1.1.png"; ?>" class="img-fluid" alt="Image Not Found"></a>
                        </div>
                        
                        <div class="addCard">
                        <form method="post">
                          <input type="hidden" name="item_id" value="<?php echo $item["item_id"]??'1';?>">
                            <input type="hidden" name="user_id" value="<?php echo 1;?>">
                            <?php
                            if(in_array($item['item_id'],$in_cart ?? [])){
                            
                              echo '<button style="border:none;" type="submit" disabled name="allproduct_submit"><i class="fa-solid fa-check cart"></i></button>';

                            }
                            else{
                              echo '<button style="border:  none;" type="submit" name="allproduct_submit"><i class="fas fa-shopping-cart cart"></i></button>';
                            }
                            ?>
                          </form>
                        </div>
                    </div>
                    <div class="mores">
                        <!-- <div class="stars">
                            <i class="fa-regular fa-star text-yellow"></i>
                            <i class="fa-regular fa-star text-yellow"></i>
                            <i class="fa-regular fa-star text-yellow"></i>
                            <i class="fa-regular fa-star text-yellow"></i>
                            <i class="fa-regular fa-star"></i>
                        </div> -->
                        <div class="price"><?php echo $item['item_price']??0;?></div>
                    </div>
            
                    </div>
                    <!-- </div> -->  
                </div>
           <?php },$product_shuffle)?>
            </div>
          </section>
          <!--! Special Price -->

    </main>
<!-- !start #main-site -->

<?php 
include('footer.php');
?>

</body>
</html>