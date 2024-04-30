<?php

shuffle($product_shuffle);

//request method post
if($_SERVER['REQUEST_METHOD']=="POST"){
  if(isset($_POST['top_sale_submit'])){
    //call method addToCart
  $Cart->addToCart($_POST['user_id'],$_POST['item_id']);
  }
  
}
?>

<!--Top Sale  -->
<section id="top-sale">
          <div class="container py-5">
            <h4 class="font-rubik font-size-20">Top Sale</h4>
            <hr>
            <!-- Owl Carousel -->
            <div class="owl-carousel owl-theme">
                <?php foreach($product_shuffle as $item) {?>
              <div class="item py-2 mx-5">
                <section id="product1">
                  <div class="pro-container">
                      <div class="pro">
                        <a href="<?php printf('%s?item_id=%s','product.php',$item['item_id']);?>"><img src="<?php echo $item['item_image']?? "./assets/products/1.1.png"; ?>" class="image-fluid" alt="Image Not Found"></a>
                          <div class="des text-center">
                              <span id="sp">BookShopee</span>
                              <h5><?php echo $item['item_name']?? "Unknown"; ?></h5>
                              <div class="price">
                                <h4>₹<?php echo $item['item_price']?? '0'; ?></h4>
                              </div>
                          </div>
                          <form method="post">
                            <input type="hidden" name="item_id" value="<?php echo $item["item_id"]??'1';?>">
                            <input type="hidden" name="user_id" value="<?php echo 1;?>">
                            <?php
                            if(in_array($item['item_id'],$Cart->getCartId($product->getData('cart')) ?? [])){
                            
                              echo '<button style="border:none;" type="submit" disabled name="top_sale_submit"><i class="fa-solid fa-check cart"></i></button>';

                            }
                            else{
                              echo '<button style="border:  none;" type="submit" name="top_sale_submit"><i class="fas fa-bag-shopping cart"></i></button>';
                            }
                            ?>

                          </form>
                      </div>
                  </div>
              </section>
              </div>
              <?php } // closing for each functions ?>
            </div>
            <!--! Owl Carousel -->
            
          </div>
        </section>
        <!--!Top Sale  -->