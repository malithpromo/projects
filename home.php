<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/Banner-Heading-Image-images.css">
    <link rel="stylesheet" href="assets/css/Navbar-Right-Links-Dark-icons.css">
    <script src="js/bootstrap.js"></script>
    <!--for animated images in category-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="css/style_for_anim_img.css">
    <!--end-->
    <!--slider-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="assets/css/styles_slider.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="assets/js/script.min.js"></script>
    <!--end-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <title>Navbar</title>
    <style>
        .navbar {
            font-weight: bold;
        }

        .background_ {
            background-image: url(src_images/bg3.jpg);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        .serch {
            width: 150px;
        }
    </style>

</head>
<?php
?>

<body>

    <!--Header-->
    <div class="background_">
        <nav class="navbar navbar-light navbar-expand-lg" style="background-color:#87CBB9">
            &ensp;
            <a href="" class="navbar-brand"><img src="src_images/logo new.png" style="width:50px; height:50px;">&ensp;Vestario</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#nav_tings"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse " id="nav_tings">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="home.php" class="nav-link active">Home</a></li>
                    <li class="nav-item"><a href="#link-to-category" class="nav-link">Categories</a></li>
                    <li class="nav-item"><a href="cart.php" class="nav-link">Cart</a></li>
                    <li class="nav-item"><a href="design.php" class="nav-link">Customize Products</a></li>
                    <li class="nav-item"><a href="wishlist.php" class="nav-link">Wishlist</a></li>
                    <?php
                    session_start();
                    if (isset($_SESSION['customerId'])) {
                        $cu_name = $_SESSION['customerName'];
                    ?>
                        <li class="nav-item dropdown" >
                            <a class="nav-link dropdown-toggle btn btn-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-user-circle-o" style="color:black; font-size:20px"></i> Hello,<?php echo $cu_name ?>!
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="user.php">Profile</a>
                                <a class="dropdown-item" href="payment.php">Pay</a>
                                <a class="dropdown-item" href="check.php">Order Summary</a>
                            <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php">LogOut</a>
                            </div>
                        </li>
                        <!-- <li class="nav-item"><a href="logout.php" class="nav-link"></a></li> -->
                        
                    <?php } else { ?>
                        <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
                    <?php }
                    ?>

                </ul>
            </div>
        </nav>
        <!--header finish-->

        <!--search-->
        <div class="container mt-5  mx-auto d-block">
            <div class="row">
                <div class="col-12">
                    <form class="form-inline my-2 my-lg-0 d-flex" action="<?php echo $_SERVER['PHP_SELF'];  ?>" method="post">
                        <input class="form-control mr-sm-2 bar" type="search" placeholder="Search" aria-label="Search" name="search">
                        &ensp;
                        <button class="btn btn-outline-dark my-2 my-sm-0 serch" type="submit" name="submit">Search Items</button>
                    </form>
                </div>
            </div>
        </div>
        <br>


        <!-- Start: Simple Slider -->
        <div class="simple-slider">
            <!-- Start: Slideshow -->
            <div class="swiper-container">
                <!-- Start: Slide Wrapper -->
                <div class="swiper-wrapper">
                    <!-- Start: Slide -->
                    <div data-aos="fade" class="swiper-slide" style="background: url(src_images/men.jpg);">
                    <a href="#" class="btn btn-primary" style="display:block; width:10%; margin: auto; margin-top: 240px;">click here</a>
                    </div>
                    <!-- End: Slide -->
                    <!-- Start: Slide -->
                    <div data-aos="fade" class="swiper-slide" style="background: url(&quot;https://cdn.bootstrapstudio.io/placeholders/1400x800.png&quot;);">
                    
                    </div>
                    <!-- End: Slide -->
                </div>
                <!-- End: Slide Wrapper -->
                <!-- Start: Pagination -->
                <div class="swiper-pagination">
                </div>
                <!-- End: Pagination -->
                <!-- Start: Previous -->
                <div class="swiper-button-prev">
                </div>
                <!-- End: Previous -->
                <!-- Start: Next -->
                <div class="swiper-button-next">
                </div>
                <!-- End: Next -->
            </div>
            <!-- End: Slideshow -->
        </div>
        <!-- End: Simple Slider -->


        <!--start search engine code-->
        <?php
        include "classes/DbConnector.php";
        if (isset($_POST['submit'])) {
            $ae_item = $_POST['search'];
            if (empty($_POST['search'])) {
                $message = "Enter Valid Product to search"; ?>
                <div class="container" style="width:fit-content;">
                    <div class="row" style="border-left: 4px solid red; background-color:#ff9999;">
                        <div class="col-12">
                            <?php echo $message; ?>
                        </div>
                    </div>
                </div>
                <?php
            } else {
                $dbcon = new DbConnector();
                $con = $dbcon->getConnection();
                $query = "SELECT * FROM product WHERE product_name LIKE '$ae_item%' ";
                $pstmt = $con->prepare($query);
                $pstmt->execute();
                $rs = $pstmt->fetchAll(PDO::FETCH_ASSOC);
                foreach ($rs as $row) { ?>
                    <div class="container">
                        <br>
                        <form action="cart.php?cart=<?php echo $row['product_id']; ?>" method="post">
                            <div class="row" style="border-left: 4px solid black; background-color:whitesmoke;">
                                <div class="col-12 col-sm-6 col-md-4">
                                    <br>
                                    <p class="text-center lead"><b><?php echo $row['product_name'] ?></b></p>
                                    <img src="img/<?php echo $row['photo']; ?>" height="100" alt="picture 1" style="height:250px;" class="mx-auto d-block img-fluid">
                                    <h5 class="text-center">Rs.<?php echo $row['price'] ?> </h5> <br>
                                    <br>
                                </div>

                                <div class="col-sm-6 col-md-4">
                                    <br>
                                    <p class="lead"><?php echo $row['discription'] ?></p> <br>
                                    <h5 class="text-center">Size</h5>
                                    <form>
                                        <div class="row">
                                            <div class="col-12 col-md-2" style="border: 1px solid green">
                                                <h6>Stock</h6>
                                                <input type="radio" name="size" value="<?php echo $row['size'] ?>" checked="checked" />
                                                <br>
                                                <?php echo $row['size'] ?>
                                            </div>
                                            <div class="col-md-2 ">
                                                <br>
                                                <input type="radio" name="size" value="S" />
                                                <br>
                                                S
                                            </div>
                                            <div class="col-md-2">
                                                <br>
                                                <input type="radio" name="size" value="M" />
                                                <br>
                                                M
                                            </div>
                                            <div class="col-md-2">
                                                <br>
                                                <input type="radio" name="size" value="L" />
                                                <br>
                                                L
                                            </div>
                                            <div class="col-md-2">
                                                <br>
                                                <input type="radio" name="size" value="XL" />
                                                <br>
                                                XL
                                            </div>
                                            <div class="col-md-2">
                                                <br>
                                                <input type="radio" name="size" value="XXL" />
                                                <br>
                                                XXL
                                            </div>
                                        </div>
                                </div>

                                <div class="col-sm-6 col-md-4 pt-5" style="text-align: center;">

                                    <button class="btn btn-outline-success">Add to Cart</button>
                                    <!-- <a href= class="btn btn-outline-success"> Add to Cart </a> -->
                        </form>
                        <br><br>
                        <form action="payment.php?pay=<?php echo $row['product_id']; ?>" method="post">
                            <button class="btn btn-primary">Place Order</button>
                        </form>
                        <br><br>

                        <form action="wishlist.php?wishlist=<?php echo $row['product_id']; ?>" method="post">
                            <button class="btn btn-outline-warning" title="Add to wishlist"><i class="fa fa-heart-o"></i></button><br><br>
                        </form>
                    </div>

    </div>
    </div>
<?php }
            }
        }
?>
<!--end search engine code-->
<div id="link-to-category">
    <section class="py-4 py-xl-5">
        <div class="container" style="border-left: 4px solid cyan;">
            <div class="bg-light border rounded border-0 border-dark overflow-hidden">
                <div class="row g-0">
                    <div class="col-md-6 text-center mt-5">
                        <div class="text-dark p-4 p-md-5 ">
                            <h2 class="fw-bold text-dark mb-3"><strong>Men Collection</strong></h2>
                            <p class="mb-4">We provide best quality products for you</p>
                            <div class="my-3"><a class="btn  btn-lg me-2" role="button" href="men.php" style="background:#87CBB9 ;">Goto Collection</a></div>
                        </div>
                    </div>
                    <div class="col-md-6 order-first order-md-last" style="height:350px;">
                        <div class="container-img" style="min-height: 350px;">
                            <img src="Anim/chino pants blue.png" />
                            <!-- <img src="Anim/Slim Fit T-Shirt.png"/> -->
                            <img src="Anim/crew neck t shirt.png" />
                            <!-- <img src="Anim/classic pants.png"/> -->
                            <img src="Anim/Oxford Short.png" />
                            <!-- <img class="w-100 h-100 fit-cover" src="src_images/men.jpg"> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<div id="link-to-category">
    <section class="py-4 py-xl-5">
        <div class="container" style="border-right: 4px solid cyan;">
            <div class="bg-light border rounded border-0 border-dark overflow-hidden">
                <div class="row g-0">
                    <div class="col-md-6 " style="height: 350px;">
                        <div class="container-img" style="min-height: 350px;">
                            <img src="Anim/Slim Fit T-Shirt.png" />
                            <img src="Anim/classic pants.png" />
                            <img src="Anim/Traveler Pant .png" />
                            <!-- <img class="w-100 h-100 fit-cover" src="src_images/men.jpg"> -->
                        </div>
                        <!-- <img class="w-100 h-100 fit-cover" src="src_images/women.jpg"> -->
                    </div>
                    <div class="col-md-6 order-first order-md-last">
                        <div class="text-dark p-4 p-md-5 text-center mt-5">
                            <h2 class="fw-bold text-dark mb-3"><strong>Women Collections</strong></h2>
                            <p class="mb-4">We provide best quality products for you</p>
                            <div class="my-3"><a class="btn btn-lg me-2" role="button" href="women.php" style="background:#87CBB9;"><span style="color: var(--bs-btn-hover-color);">Goto Collection</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


<br><br>
</div>





<!-- fotter -->
<hr>
<div class="container-fluid back">
    <div class="row">
        <div class="col-12 col-md-3">
            <img src="src_images/logo new.png" style="width:200px; height:200px;">
        </div>
        <div class="col-md-3">
            <a href="contactus.php">
                <h6>Contact us</h6>
            </a>
            <a href="#" class="fa fa-facebook"></a>&ensp;&ensp;
            <a href="#" class="fa fa-google"></a>&ensp;&ensp;
            <br><br>
            <a href="mailto:sanjayakasun44@gmail.com" class="d-flex" style="Text-decoration:none;"><span class="material-symbols-outlined">mail</span>vestario@gmail.com</span>&ensp;</a>
            <a href="#" class="d-flex" style="Text-decoration:none;"><span class="material-symbols-outlined">call</span>&ensp;0712209112</a>
            <a href="#" class="d-flex" style="Text-decoration:none;"><span class="material-symbols-outlined">call</span>&ensp;0113456987</a>
        </div>
        <div class="col-md-3">
            <h6>
                Services
            </h6>
            <ul>
                <a href="design.php" style="text-decoration:none; color:black">
                    <li>Customize products</li>
                </a>
                <a href="#link-to-category" style="text-decoration:none; color:black">
                    <li>Order Clothes</li>
                </a>
                <a href="review.php" style="text-decoration:none; color:black">
                    <li>Review</li>
                </a>
                <!-- <a href="" style="text-decoration:none; color:black"><li></li></a> -->
                <!-- <a href="" style="text-decoration:none; color:black">
                        <li>Help</li>
                    </a> -->
            </ul>
        </div>
        <div class="col-md-3">
            <h6>
                Location
            </h6>
            <p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d990.4842255938223!2d79.96344996947397!3d6.777534431309632!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae24fd7781fbd17%3A0x36b8c930439bdc4f!2sVestario!5e0!3m2!1sen!2slk!4v1693714871562!5m2!1sen!2slk" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </p>
        </div>
    </div>
</div>
<hr>
<div class="container-fluid back">
    <div class="row">
        <div class="col-12 col-md-6">
            <h6>This site is protected by Google Privacy Policy and Terms of Service apply.</h6>
        </div>
        <div class="col-md-6">
            <h6 class="text-center">&copy;2023 VESTARIO Technologies</h6>
        </div>
    </div>
</div>
<hr>
<hr>

<!--end of footer-->

</body>

</html>