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


<!-- HOME / ABOUT US  -->

<section class="home" id="home">
    <div class="content">
        <h3>ABOUT US</h3>
        <span>FURNITURE TO GO</span>
        <br>
        <p> &#127760; Croatia, EU &#128205; Split, 21000</p>
        <p>&#9989; WE OFFER ITALIAN FURNITURE OF HIGH QUALIT,STYLISH AND ELEGANT FURNITURE PIECES MADE IN ITALIA,MILANO</p>
        <p>&#9989; THE FURNITURE OFFERED IS OFTEN MADE FROM THE FINEST MATERIALS SUCH: SOLID WOOD, LEATHER AND MARBLE.</p>
        <p></p>
        <p></p>
        <br>
        <a href="products.html"><img src="" class="img-fluid w-auto h-auto m-5"><button>SHOP NOW!</button></a>
    </div>
</section>


<!-- VIDEO + ABOUT FIRM -->

<section class="about" id="about">
    <h1 class="heading">
        <span>LET WE OFFER YOU A BEST PRODUCTS IN OUR ASORTIMAN </span>
    </h1>
    <div class="main-row">
        <div class="video-container">
            <video src="assets/imgs/Furniture-Video.mp4" loop autoplay muted></video>
            <h3>Best Products</h3>
        </div>
        <div class="content">
            <h3>WHY CHOOSE US?</h3>
            <p>&#9989; OUR COMPANY WON MANY INTERNATIONAL AWARDS &#127942; &#127941;</p>
            <p>&#9989; SHIPPING IS FREE &#128140; </p>
            <p>&#9989; YOU CAN BE CONFIDENT THAT YOU WILL RECIEVE <br> THE HELP AND SUPPORT YOU NEED &#128222; </p>
            <a href="#"><img src="" class="main-btn"><button>LEARN MORE!</button></a>
        </div>
    </div>

</section>


<!-- ICONS SECTION -->

<section class="icons-container" id="features">

    <div class="icons">
        <i class="fas fa-shopping-cart"></i>
        <div class="info">
            <h3>FREE DELIVERY</h3>
            <span>on all orders</span>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-tags"></i>
        <div class="info">
            <h3>15 DAYS RETURN</h3>
            <span>money back guarantee</span>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-gifts"></i>
        <div class="info">
            <h3>GIFTS</h3>
            <span>gifts for loved ones</span>
        </div>
    </div>

    <div class="icons">
        <i class="fa-regular fa-credit-card"></i>
        <div class="info">
            <h3>SECURE PAYMENT</h3>
            <span>protected by PayPal</span>
        </div>
    </div>
</section>




<!-- PRODUCTS SECTION -->

<section class="products" id="product">
    <h1 class="heading">LASTEST <span>PRODUCTS</span> </h1>

    <div class="box-container">

    
    <?php include("get_products.php");  ?>

    
    <?php foreach($products as $product){ ?>

        <!-- PRODUCT 1 -->
        <div class="box">
            <span class="discount"><?php echo $product['product_special_offer'];  ?>% OFF</span>
            <div class="image">
                <img src="<?php echo "assets/imgs/".$product['product_image']; ?>" alt="">
                <div class="form">
                    <form action="">
                        <input type="submit" class="cart-btn" value="ADD TO CART">
                    </form>
                </div>
            </div>
            <div class="content">
                <h3><?php echo $product['product_name']; ?></h3>
                <div class="price">$<?php echo $product['product_price']; ?> <span>$120</span></div>
            </div>
        </div>

        <?php } ?>

        

    </div>
</section>

<!-- REVIEWS SECTION -->
<section class="review" id="review">
    <h1 class="heading">COSTUMERS <span>REVIEWS</span></h1>
    <div class="box-container">

        <!-- CUSTOMER 1 -->
        <div class="box">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p>AWSOME PRODUCTS, I LIKED THOSE PRODUCTS SO MUCH.</p>
            <div class="user">
                <img src="assets/imgs/customer-1.jpg" alt="">
                <div class="user-info">
                    <h3>ANNA </h3>
                    <span>Happy customer</span>
                </div>
            </div>
            <span class="fas fa-quote-right"></span>
        </div>


        <!-- CUSTOMER 2 -->
        <div class="box">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p>AWSOME PRODUCTS, I LIKED THOSE PRODUCTS SO MUCH.</p>
            <div class="user">
                <img src="assets/imgs/customer-2.jpg" alt="">
                <div class="user-info">
                    <h3>GEORGE</h3>
                    <span>Happy customer</span>
                </div>
            </div>
            <span class="fas fa-quote-right"></span>
        </div>


        <!-- CUSTOMER 3 -->
        <div class="box">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p>AWSOME PRODUCTS, I LIKED THOSE PRODUCTS SO MUCH.</p>
            <div class="user">
                <img src="assets/imgs/customer-3.jpg" alt="">
                <div class="user-info">
                    <h3>LUCA</h3>
                    <span>Happy customer</span>
                </div>
            </div>
            <span class="fas fa-quote-right"></span>
        </div>

    </div>
</section>





<!-- CONTAT US SECTION -->

<section class="contact" id="contact">
    <h1 class="heading"><span>CONTACT US</span></h1>
    <div class="main-row">
        <div class="contact-info">
            <h3>CONTACT NUMBER: +123 456 789</h3>
            <p>CUSTOMER SERVICE: <span>customer@gmail.com</span></p>
            <p>RETURN & REFUNDS <span>returns@gmail.com</span></p>
            <p>INQUERIES <span>inqueries@gmail.com</span></p>
        </div>
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