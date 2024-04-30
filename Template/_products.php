<?php
$item_id=$_GET['item_id'] ?? 1;
foreach($product->getData() as $item):
    if($item['item_id']==$item_id):

        //request method post
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['product_submit'])){
      //call method addToCart
    $Cart->addToCart($_POST['user_id'],$_POST['item_id']);
    }
    
  }
?>
<section class="container sproduct my-5 pt-5">
            <div class="row mt-5">
                <div class="col-lg-5 col-md-12 col-12">
                    <img id="mainImage" src="<?php echo $item['item_image'] ?? './assets/products/1.1.png'?>" class="img-fluid w-100 pb-1" alt="">
    
                    <!-- <div class="small-img-group">
                        <div class="small-img-col">
                            <img src="./assets/products/1.1.png" width="100%" class="small-img" alt="Image 1" onclick="changeMainImage('./assets/products/1.1.png')">
                        </div>
                        <div class="small-img-col">
                            <img src="./assets/products/2.1.png" width="100%" class="small-img" alt="Image 1" onclick="changeMainImage('./assets/products/2.1.png')">
                        </div>
                        <div class="small-img-col">
                            <img src="./assets/products/3.1.png" width="100%" class="small-img" alt="Image 1" onclick="changeMainImage('./assets/products/3.1.png')">
                        </div>
                        <div class="small-img-col">
                            <img src="./assets/products/4.1.png" width="100%" class="small-img" alt="Image 1" onclick="changeMainImage('./assets/products/4.1.png')">
                        </div>
                    </div> -->
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <h6>Home / Book</h6>
                    <h3 class="py-4"><?php echo $item['item_name']?? 'Unknown'?></h3>
                    <h2><?php echo $item['item_price']??0?></h2>
                    <medium>Size: <?php echo $item['item_size']?? 'Unknown'?></medium>
                    
                    <div class="d-flex font-rale mb-4 qty mt-3">
                      <button class="qty-up border bg-light" data-id="<?php echo $item['item_id']??'0';?>"><i class="fas fa-angle-up"></i></button>
                      <input type="text" data-id="<?php echo $item['item_id']??'0';?>" class="qty-input border pe-0 me-0" disabled value="1" placeholder="1">
                      <button data-id="<?php echo $item['item_id']??'0';?>" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                  </div>

                    <div class="d-flex">
                    <button class="btn buy-btn me-2">Proceed to Buy</button>

                    <form method="post">
                        <input type="hidden" name="item_id" value="<?php echo $item["item_id"]??'1';?>">
                        <input type="hidden" name="user_id" value="<?php echo 1;?>">
                    <?php
                    if(in_array($item['item_id'],$Cart->getCartId($product->getData('cart')) ?? [])){
                        echo '<button style="border:none;" class="btn cart-btn btn-success" type="submit" disabled name="product_submit">In the Cart</button>';
                    }
                    else{
                        echo '<button style="border:  none;" class="btn cart-btn btn-warning" type="submit" name="product_submit">Add to Cart</button>';
                    }
?>
</form>
                    </div>
                    <h4 class="mt-5 mb-4">Product Details</h4>
                    <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt id, voluptate hic praesentium neque quaerat fugiat tenetur laudantium omnis architecto quos accusamus libero doloribus non? Consectetur eveniet voluptatem aperiam nam.</span>
                </div>
            </div>
</section>
<!-- <script>
    function changeMainImage(imageSrc) {
    var mainImage = document.getElementById('mainImage');
    mainImage.src = imageSrc;
    }
</script> -->
<?php
endif;
endforeach;
?>
