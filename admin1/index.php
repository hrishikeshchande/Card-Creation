<?php
include('session.php');
if(!isset($_SESSION['login_admin'])){
header("location: login.php"); 
}
?>

<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Card Creator</title>
    <link rel="icon" href="img/logo.jpg">
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-11">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href=""> <label style="color:blue;"><h1><b>Card Creator</b></h1></label> </a>
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
								<li class="nav-item">
                                    <a class="nav-link" href="signup.php">SignUp For New Admin</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="logout.php">Welcome Admin:<?php echo $login_session; ?></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="logout.php">Log Out</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

<section class="shipping_details section_padding">
        <div class="container ">
            <div class="row "style="margin-top:-70px;">
                <div class="col-lg-7 col-sm-6">
                    <div class="single_shopping_details">
                        <img src="img/icon/icon_1.png" alt="">
                        <h4>Get All Register Detail</h4>
                        <p>Click on Button to get all register user detail</p>
						<div class="row align-items-center" style=" margin-top:30px;"onclick="window.location.href='getuserdata.php'">
							<button type="start_create" name="start_create" class="btn_3" style="width:300px; height:50px;">
								Start Creating
							</button>
						</div>
                    </div>
                </div>
                <div class="col-lg-5 col-sm-6">
                    <div class="single_shopping_details">
                        <img src="img/icon/icon_2.png" alt="">
                        <h4>Get Who Contact With Us</h4>
                        <p>Click on Button to get all Contact With Us</p>
						<div class="row align-items-center" style=" margin-top:30px;"onclick="window.location.href='getcontactdata.php'">
							<button type="start_create" name="start_create" class="btn_3" style="width:300px; height:50px;">
								Start Creating
							</button>
						</div>
                    </div>
                </div>
                
            </div>
        </div>
		<div class="container">
            <div class="row">
                <div class="col-lg-7 col-sm-6">
                    <div class="single_shopping_details">
                        <img src="img/icon/icon_1.png" alt="">
                        <h4>Get Detail Of Plan Card's</h4>
                        <p>Click on Button to get all Plan Card's detail</p>
						<div class="row align-items-center" style=" margin-top:30px;"onclick="window.location.href='getplancarddata.php'">
							<button type="start_create" name="start_create" class="btn_3" style="width:300px; height:50px;">
								Start Creating
							</button>
						</div>
                    </div>
                </div>
                <div class="col-lg-5 col-sm-6">
                    <div class="single_shopping_details">
                        <img src="img/icon/icon_2.png" alt="">
                        <h4>Get Detail Of Image Card's</h4>
                        <p>Click on Button to get all Image Card's detail</p>
						<div class="row align-items-center" style=" margin-top:30px;"onclick="window.location.href='getimgcarddata.php'">
							<button type="start_create" name="start_create" class="btn_3" style="width:300px; height:50px;">
								Start Creating
							</button>
						</div>
                    </div>
                </div>
                
            </div>
        </div>
		<div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single_shopping_details">
                        <img src="img/icon/icon_2.png" alt="">
                        <h4>Get Detail Of Upload Image Card's</h4>
                        <p>Click on Button to get all Upload Image Card's detail</p>
						<div class="row align-items-center" style=" margin-top:30px;"onclick="window.location.href='getuploadimgdata.php'">
							<button type="start_create" name="start_create" class="btn_3" style="width:300px; height:50px;">
								Start Creating
							</button>
						</div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>


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