  <?php


  session_start();

  //it means that there is at least one product
  if(isset($_SESSION['cart'])){

      $products_array_ids = array_column($_SESSION['cart'], "product_id"); // [id.. 55,88,90..]
 
      //chech if product has already been added to the cart or not
      if(!in_array($_POST['products_id'],$products_array_ids)){
        //add product to cart
        $products_id = $_POST['products_id'];

        $products_array = array(
                          'product_id'=>$products_id,
                          'product_name'=>$_POST['product_name'],
                          'product_price'=>$_POST['product_price'],
                          'product_image'=>$_POST['product_image'],
                          'product_special_offer'=>$_POST['product_special_offer'],
                          'product_quantity'=>$_POST['product_quantity']
        );

          $_SESSION['cart']['product_id'] = $products_array;
          // [4=>[],55=>[]]
  }else{
       
    
        echo "<script>alert('Product was already been added to cart')</script>";
            
  }
  
 }


  
  ?>


 
 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FURNITURE TO GO</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- FONT AWSOME CDN LINK -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <!-- CSS LINK  -->
    <link rel="stylesheet" href="assets/css/style.css">


</head>

<!--Navbar -->

<nav class="navbar navbar-expand-lg py-3 fixed-top navbar-light">
    <div class="container">
        <a href="index.html"><img class="logo" src="assets/imgs/FurnitureToGo-logo.jpg"></a>
        <h2 class="brand"></h2>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse nav-buttons" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">HOME</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="about.html">ABOUT</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="products.html">PRODUCTS</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="contact.html">CONTACT</a>
                </li>


                <li class="nav-item">
                    <a href="cart.html"> <i class="fa-solid fa-cart-shopping"></i></a>
                </li>

                <li class="nav-item">
                    <a href="account.html"><i class="fa-solid fa-user"></i></a>
                </li>

            </ul>
        </div>
    </div>
</nav>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<!-- CART SECTION -->

<section class="cart container mt-5 my-3 py-5">
    <div class="container mt5">
        <h2 class="font-weight-bold">YOUR CART</h2>
        <hr>
    </div>
    <table class="mt-5 pt-5">
        <tr>
            <th>PRODUCTS</th>
            <th>QUANTITY</th>
            <th>SUBTOTAL</th>
        </tr>


        <?php if(isset($_SESSION['cart'])){ ?> 

        <?php foreach($_SESSION['cart'] as $key => $value){ ?>

                <tr>
                    <!-- 1 -->
                    <td>
                        <div class="product-info">
                            <img src="<?php echo 'assets/imgs/'.$value['product_image']; ?>" alt="">
                            <div>
                                <p>BLACK LAMP</p>
                                <small><span>$</span> <?php echo $value['product_price']; ?> </small>
                                <br>
                                <form>
                                    <input type="submit" class="remove-btn" value="REMOVE">
                                </form>
                            </div>
                        </div>
                    </td>

                    <td>
                        <form>
                            <input type="number" value="<?php echo $value['product_quantity']; ?>">
                            <input type="submit" class="edit-btn" value="EDIT">
                        </form>
                    </td>

                    <td>
                        <span class="product-price">$<?php echo $value['product_price'];?></span>
                    </td>
                </tr>

        <?php } ?> 
    <?php } ?> 

    </table>

    <div class="cart-total">
        <table>
            <tr>
                <td>TOTAL</td>
                <td>$199</td>
            </tr>
        </table>
    </div>

    <div class="checkout-container">
        <form>
            <input type="submit" class="btn checkout-btn" value="CHECKOUT">
        </form>
    </div>

</section>



<!-- Footer -->
<footer class="mt-5 py-5">
    <div class="row container mx-auto pt-5">
        <div class="footer.one col-lg-3 col-md-6 col-sm-12">
            <a href="index.html"><img class="logo" src="assets/imgs/FurnitureToGo-logo.jpg "></a>
            <p class="pt-3"></p>
        </div>

        <div class="footer.one col-lg-3 col-md-6 col-sm-12">
            <p class="pb-2">QUICK LINKS</p>
            <ul class="text-uppercase">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#features">Features</a></li>
                <li><a href="#products">Products</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#review">Reviews</a></li>
            </ul>
        </div>

        <div class="footer.one col-lg-3 col-md-6 col-sm-12">
            <p class="pb-2">EXTRA LINKS</p>
            <ul class="text-uppercase">
                <li><a href="cart.html">Cart</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="#">Special offers</a></li>
            </ul>
        </div>

        <div class="footer.one col-lg-3 col-md-6 col-sm-12">
            <p class="pb-2">LOCATIONS</p>
            <ul class="text-uppercase">
                <p>AUSTRALIA</p>
                <p>US</p>
                <p>GERMANY</p>
            </ul>
        </div>

        <div class="footer.one col-lg-3 col-md-6 col-sm-12">
            <p class="pb-2">CONTACT US</p>
            <div>
                <p class="text-uppercase">Adress</p>
                <P>Via delle Terme di Tito, 72, 00184 Roma RM, Italia</P>
            </div>

            <div>
                <p class="text-uppercase">Phone</p>
                <P>+3850981111222</P>
            </div>

            <div>
                <p class="text-uppercase">Email Address</p>
                <P>user123@gmail.com</P>
            </div>
        </div>

        <div class="footer.one col-lg-3 col-md-6 col-sm-12">
            <p class="pb-2">SOCIAL MEDIA</p>
            <div class="row">

                <div class>
                    <a href="https://www.facebook.com/"><img src="assets/imgs/facebook.png" class="img-fluid w-auto h-auto m-2" alt="Facebook Link">Facebook &#xae;</a>
                </div>

                <div class>
                    <a href="https://www.youtube.com/"><img src="assets/imgs/youtube.png" class="img-fluid w-auto h-auto m-2" alt="Youtube Link">Youtube &#xae;</a>
                </div>

                <div class>
                    <a href="https://www.instagram.com/"><img src="assets/imgs/instagram.png" class="img-fluid w-auto h-auto m-2" alt="Instagram Link">Instagram &#xae;</a>
                </div>

                <div class>
                    <a href="https://www.tiktok.com/"><img src="assets/imgs/twitter.png" class="img-fluid w-auto h-auto m-2" alt="Tik-Tok Link">Tik Tok &#xae;</a>
                </div>

                <div class>
                    <a href="https://twitter.com/"><img src="assets/imgs/skype.png" class="img-fluid w-auto h-auto m-2" alt="Twitter Link">Twitter &#xae;</a>
                </div>
            </div>
        </div>
    </div>

    <div class="copyright mt-5">
        <div class="row container mx-auto">
            <div class="col-lg-3 col-md-5 col-sm-12 mb-4 text-nowrap mb-2">
                <img src="assets/imgs/paymentVisa.png" alt="">
            </div>

            <div class="col-lg-3 col-md-5 col-sm-12 mb-4">
                <p>eCommerce CHRIS ROCCO All Rights Reserved Frebruary 2023</p>
            </div>
        </div>
    </div>




    <div id="move-to-top" class="scrollToTop filling">
        <a href="index.html"><i class="fa fa-chevron-up"></i></a>
    </div>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>