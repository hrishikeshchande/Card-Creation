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
<style>

table {
  border-collapse: collapse;
  width: 100%;
  border-bottom: 1px solid #ddd;
}

tr:nth-child(even){background-color: #f2f2f2}
th{
  height: 50px;
  background-color: #5E9BF3;
  color: white;
  text-align: center;
}
td{
  height: 50px;
  text-align: center;
}
</style>
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
			<!-- breadcrumb start-->
		<section class="breadcrumb breadcrumb_bg">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-12">
						<div class="breadcrumb_iner">
							<div class="breadcrumb_iner_item">
								<p>Home / Get Detail Of the All Register User</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- breadcrumb start-->

<section class="shipping_details section_padding">
        <div class="container">
            <div class="row"style="margin-top:-70px;">
                <div class="col-lg-12 col-sm-6">
				
				<table>
				  <tr style="text-align:center;">
					<th>Id</th>
					<th>First name</th>
					<th>Last name</th>
					<th>Email</th>
					<th>Mob</th>
					<th>Password</th>
				 <tr>
				
                   <?php
$conn = mysqli_connect("localhost", "root", "", "project_6");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, fname, lname, email, mob, password FROM register";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"] . "</td><td>" . $row["fname"] . "</td><td>". $row["lname"]. "</td><td>"
. $row["email"]. "</td><td>". $row["mob"]. "</td><td>". $row["password"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
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