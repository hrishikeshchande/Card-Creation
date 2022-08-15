<?php
include('session.php');
if(!isset($_SESSION['login_user'])){
header("location: login.php"); 
}
?>

<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Card Creation</title>
    <link rel="icon" href="img/images.jpg">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/all.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
	<style>
.imgcontainer {
  position: relative;
  padding: 50px;
  transition: transform .5s;
}

.image1 {
  opacity: 1;
  display: block;
  transition: .5s ease;
  backface-visibility: hidden;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.imgcontainer:hover .image1{
  opacity: 0.8;
  -ms-transform: scale(1.5); /* IE 9 */
  -webkit-transform: scale(1.5); /* Safari 3-8 */
  transform: scale(1.5); 
}

.imgcontainer:hover .middle {
  opacity: 1;
}

.text {
  background-color: #2B7CF1;
  color: white;
  font-size: 16px;
  padding: 16px 32px;
}
</style>
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu" style="background-color:white;">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-11">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href=""> <label style="color:blue;"><h1><b>Card Creation</b></h1></label> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <br><br>
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdown_1"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Card Demo
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                        <a class="dropdown-item" href="plancard demo.php">Plane card's</a>
                                        <a class="dropdown-item" href="img card upload demo.php">Upload Image for card's</a>
                                        <a class="dropdown-item" href="freecard demo.php">Free Move card's</a>
                                        
                                    </div>
                                </li>
                                
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdown_3"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Account
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                        <a class="dropdown-item" href=""><?php echo $login_session; ?></a>
                                        <a class="dropdown-item" href="logout.php">Log Out</a>
                                    </div>
                                </li>
                                
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.php">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <p>Home / Image Card's List</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!-- new arrival part here -->
    <section class="shipping_details section_padding" style="margin-top:-50px; background-color:#F6F7F9 ;">
		<label style="color:black; margin-bottom:30px; margin-left:100px;"><h1><b><u>Select The Card's</u></b></h1></label>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-12">
                    <div class="single_instgram_photo">
						<div class="imgcontainer">
                        <img src="img/card/1.jpg" alt="" class="image1" style="height:230px; width:500px; box-shadow: 10px 10px 5px grey;">
							<div class="middle">
								<p style="color:black; font-size:20px;">Click Here To Edit With This Image</p>
								<a href="imgcard/img1.php"><div class="text">Edit</div></a>
							</div>
						</div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="single_instgram_photo">
						<div class="imgcontainer">
                       <img src="img/card/18.jpg" alt="" class="image1" style="height:230px; width:500px;box-shadow: 10px 10px 5px grey;">
							<div class="middle">
								<p style="color:white; font-size:20px;">Click Here To Edit With This Image</p>
								<a href="imgcard/img18.php"><div class="text">Edit</div></a>
							</div>
						</div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="single_instgram_photo">
						<div class="imgcontainer">
                         <img src="img/card/5.jpg" alt="" class="image1" style="height:230px; width:500px;box-shadow: 10px 10px 5px grey;">
								<div class="middle">
								<p style="color:black; font-size:20x;">Click Here To Edit With This Image</p>
								<a href="imgcard/img5.php"><div class="text">Edit</div></a>
							</div>
						  </div>
                    </div>
                </div>
            </div>
        </div>
		
		<div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-12">
                    <div class="single_instgram_photo">
						<div class="imgcontainer">
                        <img src="img/card/6.jpg" alt="" class="image1" style="height:230px; width:500px;box-shadow: 10px 10px 5px grey;">
							<div class="middle">
								<p style="color:black; font-size:20px;">Click Here To Edit With This Image</p>
								<a href="imgcard/img6.php"><div class="text">Edit</div></a>
							</div>
						</div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="single_instgram_photo">
						<div class="imgcontainer">
                       <img src="img/card/9.jpg" alt="" class="image1" style="height:230px; width:500px;box-shadow: 10px 10px 5px grey;">
							<div class="middle">
								<p style="color:white; font-size:20px;">Click Here To Edit With This Image</p>
								<a href="imgcard/img9.php"><div class="text">Edit</div></a>
							</div>
						</div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="single_instgram_photo">
						<div class="imgcontainer">
                         <img src="img/card/10.jpg" alt="" class="image1" style="height:230px; width:500px;box-shadow: 10px 10px 5px grey;">
								<div class="middle">
								<p style="color:black; font-size:20px;">Click Here To Edit With This Image</p>
								<a href="imgcard/img10.php"><div class="text">Edit</div></a>
							</div>
						  </div>
                    </div>
                </div>
            </div>
        </div>
		
		<div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-12">
                    <div class="single_instgram_photo">
						<div class="imgcontainer">
                       <img src="img/card/13.jpg" alt="" class="image1" style="height:230px; width:500px;box-shadow: 10px 10px 5px grey;">
							<div class="middle">
								<p style="color:white; font-size:20px;">Click Here To Edit With This Image</p>
								<a href="imgcard/img13.php"><div class="text">Edit</div></a>
							</div>
						</div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="single_instgram_photo">
						<div class="imgcontainer">
                       <img src="img/card/17.jpg" alt="" class="image1" style="height:230px; width:500px;box-shadow: 10px 10px 5px grey;">
							<div class="middle">
								<p style="color:white; font-size:20px;">Click Here To Edit With This Image</p>
								<a href="imgcard/img17.php"><div class="text">Edit</div></a>
							</div>
						</div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="single_instgram_photo">
						<div class="imgcontainer">
                         <img src="img/card/23.jpg" alt="" class="image1" style="height:230px; width:500px;box-shadow: 10px 10px 5px grey;">
								<div class="middle">
								<p style="color:black; font-size:20px;">Click Here To Edit With This Image</p>
								<a href="imgcard/img23.php"><div class="text">Edit</div></a>
							</div>
						  </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- new arrival part end -->

    <!--::footer_part start::-->
       <footer class="footer_part">
        <div class="container">
            <div class="row justify-content-between">
			
                <div class="col-sm-6 col-lg-3">
                    <div class="single_footer_part">
                        <h4>Stating Creating Your Own Card</h4>
                        <div id="mc_embed_signup">
							<p>Do Sign Up for starting the creating the card. Use the feacture that we Provided you to create the card.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <div class="single_footer_part">
                        <h4>Category of Card's</h4>
                        <ul class="list-unstyled">
                            <li><a href="plancard demo.php">Plane Card</a></li>
                            <li><a href="imgcard demo.php">Image Card's</a></li>
                            <li><a href="img card upload demo.php">Upload Image for card's</a></li>
                            <li><a href="freecard demo.php">Free Move card's</a></li>
                        </ul>
                    </div>
                </div> 
                <div class="col-sm-6 col-lg-2">
                    <div class="single_footer_part">
                        <h4>Card Creation</h4>
                        <ul class="list-unstyled">
                            <li><a href="">Welcome    -<?php echo $login_session; ?></a></li>
                            <li><a href="logout.php">Log Out</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
        </div>
    </footer>
		<footer class="footer_part1" style="background-color:gray; height:38px;">
        <div class="container">
                <h5 style="font-weight: 900; text-align:center;">About Us: &emsp;&emsp; @CardCreator &emsp;&emsp;&emsp; We provide best quality,  Do Sign Up for more &emsp;&emsp;  stay conntect with us</h5>			 
        </div>
            
        </div>
    </footer>
    <!--::footer_part end::-->

    <!-- jquery plugins here-->
    <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="js/mixitup.min.js"></script>
    <!-- particles js -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <!-- slick js -->
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
</body>

</html>