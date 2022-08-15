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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <style rel="stylesheet">

      #card{
          width: 400px;
          height: 250px;
          border: 1px solid;
		  margin-top:50px;
          padding: 10px;
      /**padding here makes the text fit box better.*/
           }
      .background{
          background: #eee;
          padding:30px;
          margin-bottom: 30px;
      }
      /*Matches the <div class="col-sm-12 col col-md-6 BACKGROUND">*/

    </style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> 
	<script src="https://files.codepedia.info/files/uploads/iScripts/html2canvas.js"> </script> 
		<script> 
		$(document).ready(function() { 
			var element = $("#card"); 
			var getCanvas; 

			$("#Preview").on('click', function() { 
				html2canvas(element, { 
					onrendered: function(canvas) { 
						$("#previewImage").append(canvas); 
						getCanvas = canvas; 
					} 
				}); 
			}); 

			$("#btn-Convert-Html2Image").on('click', function() { 
				var imgageData = 
					getCanvas.toDataURL("image/png"); 
				var newData = imgageData.replace( 
				/^data:image\/png/, "data:application/octet-stream"); 
			
				$("#btn-Convert-Html2Image").attr( 
				"download", "plan card.png").attr( 
				"href", newData); 
			}); 
		}); 
	</script> 
	
		<script>

    function printCompany() {
        document.getElementById("outputCompany").innerHTML = inputCompany.value;
    }

    function printMessage(){
        document.getElementById("outputMessage").innerHTML = inputMessage.value;
    }
    function changeBG(){
      var bgColor = document.getElementById("inputBG").value;
      document.getElementById("card").style.background = bgColor;
        }

    function changeText(){
        var textColor = document.getElementById("inputText").value;

        document.getElementById("card").style.color = textColor;  
    ////    text color is .color
    }

    function TextAlign(selected_id) {
        document.getElementById("card").className = selected_id;

    }
    function printname(){
        document.getElementById("outputName").innerHTML= inputName.value;
    }
    function printjob(){
        document.getElementById("outputJob").innerHTML= inputJob.value;
    }
    function printEmail(){
        document.getElementById("outputEmail").innerHTML= "Email: " + inputEmail.value;
    }
    function printTelephone(){
        document.getElementById("outputPhone").innerHTML= "Tel: " + inputTel.value;
    }

    function formSubmit(){
        if (!inputName.value){
            alert("Please complete all required sections");
        }
    }
    function formReset(){
        window.location.reload();
    }
    </script>
</head>

<body>
    <!--::header part start::-->
    <!-- <header class="main_menu home_menu" style="background-color:white;  height:80px;">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-11">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href=""> <label style="color:blue; margin-top:-20px;"><h1><b>Card Creator</b></h1></label> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <br><br>
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent"style=" margin-left:200px;">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_1"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Card Demo
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                        <a class="dropdown-item" href="imgcard demo.php">Image card's</a>
                                        <a class="dropdown-item" href="img card upload demo.php">Upload Image for card's</a>
                                        <a class="dropdown-item" href="freecard demo.php">Free Move card's</a>
                                        
                                    </div>
                                </li>
                                
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_3"
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
    </header> -->
    <header class="main_menu home_menu">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-11">
                    <nav class="navbar navbar-expand-lg navbar-light" >
                        <a class="navbar-brand mb-sm-5" href=""> <label style="color:blue;"><h1><b>Card Creation</b></h1></label> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <br><br>
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" style="margin-left:20%;" id="navbarSupportedContent">
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
                                        <a class="dropdown-item" href="imgcard demo.php">Image card's</a>
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
    <section class="breadcrumb breadcrumb_bg" style="background-color:#E9F0FA;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <p>Home / Plan card's</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!-- new arrival part here -->
    <section class="shipping_details section_padding" style="margin-top:-50px; background-color:#F6F7F9 ;">
	    <!-- <label style="color:black; margin-bottom:30px; margin-top:-200px; margin-left:450px;"><h1><b><u>Create Your Plan Card</u></b></h1></label> -->
	  <label style="margin-left:30%; margin-top:-7%"><h1><b><u>Create Your Plan Card</u></b></h1></label>	
    <div class="container-fluid">
		<div class="row">
		<div class="col-sm-12 col-md-6" style="margin-left:50px;">
            <div id="card">

              <h3 id="outputCompany">Company Name</h3>
              <p id="outputMessage" class="small">Company Message</p><hr>
              <p id="outputName" class="small">Your Name</p>
              <p id="outputJob" class="small">Job Title</p>
              <p id="outputEmail" class="small">Email:</p>
              <p id="outputPhone" class="small">Tel:</p>

            </div>
          </div>
		  

       <div class="col-sm-12 col-md-6 background" style="margin-left:-180px;">
         <form id="CardInfo" action="carddata.php" method="POST" class="form-horizontal">
           <div class="form-group">
            <label for="inputCompany" class="col-sm-3 control-label">Company Name:</label>
            <div class="col-sm-9">
            <input type="text" class="form-control" id="inputCompany" onkeyUp="printCompany()" name="companyname">
            </div>
          </div>
	

          <div class="form-group">
            <label for="inputCompany" class="col-sm-3 control-label">Company Message:</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="inputMessage" onkeyup="printMessage()"name="companymessage">
            </div>
          </div>

          <div class="form-group">
            <label  for="inputBG" class="col-sm-3 control-label">Background Color:</label>
            <div class="col-sm-9">
              <input type="color" class="form-control" id="inputBG" value="#ffb74d" onchange="changeBG()">
            </div>
          </div>


            <div class="form-group">
              <label  for="inputText" class="col-sm-3 control-label">Text Color:</label>
              <div class="col-sm-9">
                <input type="color" class="form-control" id="inputText" value="#262626" onchange="changeText()">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3 control-label">Text Align:</label>
                  <div class="col-sm-9">
                    <input type="button" class="btn btn-info" value="Left" id="text-left" onclick="TextAlign(this.id)">
                    <input type="button" class="btn btn-info" value="Center" id="text-center" onclick="TextAlign(this.id)">
                    <input type="button" class="btn btn-info" value="Right" id="text-right" onclick="TextAlign(this.id)">
                  </div>
                </div>


              <div class="form-group">
                <label  for="inputName" class="col-sm-3 control-label">Your Name:</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="inputName" onkeyup="printname()"name="yourname">
                </div>
              </div>

              <div class="form-group">
                <label  for="inputJob" class="col-sm-3 control-label">Job Title:</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="inputJob" onkeyup="printjob()"name="jobtitle">
                </div>
              </div>

              <div class="form-group">
                <label  for="inputEmail" class="col-sm-3 control-label">Email:</label>
                <div class="col-sm-9">
                  <input type="email" class="form-control" id="inputEmail" onkeyup="printEmail()"name="email">
                </div>
              </div>

              <div class="form-group">
                <label  for="inputTel" class="col-sm-3 control-label">Telephone Number:</label>
                <div class="col-sm-9">
                  <input type="tel" class="form-control" id="inputTel" maxlength="10" pattern="[6-9]{1}[0-9]{9}" onkeyup="printTelephone()"name="mob">
                </div>
              </div>


              <!-- <div class="form-group">
                <div class="col-sm-3 col-sm-offset-3">
                  <input type="Submit"  name="Submit" onclick="formSubmit()" value="Submit" class="btn btn-success">
                </div>

                <div class="col-sm-3">
                  <input type="reset" onclick="formReset()" value="Reset" name="Reset"onclick="alert('Reset Form Successfully')">
                </div>
              </div> -->

              <div class="container-fluid">
              <div class="row">
		         <div class=" col-sm-12 col-md-6" style="margin-left:50px;">
			         <label style="color:black; margin-left:-5px;"><h2><b><u>Preview </u></b></h2></label>
			        </div>

		          <div class=" col-sm-12 col-md-6 background" style="margin-left:-180px;">
			        <div class="form-group">
                         <div class="col-sm-3 col-sm-offset-3">
				     	    <input id="Preview" type="button" value="Preview" />
                         </div>
                 <div class="col-sm-3 ml-lg-5">
				    <a id="btn-Convert-Html2Image" href="#"> Download </a> 
                </div>
            </div>
			<div id="previewImage"></div>
		        </div>
                </div>

                <div class="form-group">
                <div class="col-sm-3 col-sm-offset-3">
                  <input type="Submit"  name="Submit" onclick="formSubmit()" value="Submit" class="btn btn-success">
                </div>

                <div class="col-sm-3">
                  <input type="reset" onclick="formReset()" value="Reset" name="Reset"onclick="alert('Reset Form Successfully')">
                </div>
              </div>
            </form>
        </div>
	 </div>
	 
	 <!-- <div class="container-fluid">
	   <div class="row">
		  <div class="col-sm-12 col-md-6" style="margin-left:50px;">
			  <label style="color:black; margin-left:30px;"><h2><b><u>Preview Card:</u></b></h2></label>
			</div>
		  <div class="col-sm-12 col-md-6 background" style="margin-left:-180px;">
			  
			<div class="form-group">
                <div class="col-sm-3 col-sm-offset-3">
				     	<input id="Preview" type="button" value="Preview" />
                </div>

                <div class="col-sm-3">
				    <a id="btn-Convert-Html2Image" href="#"> Download </a> 
                </div>
            </div>
			  
			<div id="previewImage"></div>
			 
		</div>
   </div> -->


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
	<footer class="footer_part1" style="background-color:gray; height:45x;">
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