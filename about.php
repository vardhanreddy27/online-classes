
<?php
include('config.php');
$login_button = '';
//This $_GET["code"] variable value received after user has login into their Google Account redirct to PHP script then this variable value has been received
if(isset($_GET["code"]))
{
 //It will Attempt to exchange a code for an valid authentication token.
 $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);

 //This condition will check there is any error occur during geting authentication token. If there is no any error occur then it will execute if block of code/
 if(!isset($token['error']))
 {
  //Set the access token used for requests
  $google_client->setAccessToken($token['access_token']);

  //Store "access_token" value in $_SESSION variable for future use.
  $_SESSION['access_token'] = $token['access_token'];

  //Create Object of Google Service OAuth 2 class
  $google_service = new Google_Service_Oauth2($google_client);

  //Get user profile data from google
  $data = $google_service->userinfo->get();

  //Below you can find Get profile data and store into $_SESSION variable
  if(!empty($data['given_name']))
  {
   $_SESSION['user_first_name'] = $data['given_name'];
  }

  if(!empty($data['family_name']))
  {
   $_SESSION['user_last_name'] = $data['family_name'];
  }

  if(!empty($data['email']))
  {
   $_SESSION['user_email_address'] = $data['email'];
  }

  if(!empty($data['gender']))
  {
   $_SESSION['user_gender'] = $data['gender'];
  }

  if(!empty($data['picture']))
  {
   $_SESSION['user_image'] = $data['picture'];
  }
 }
}

//This is for check user has login into system by using Google account, if User not login into system then it will execute if block of code and make code for display Login link for Login using Google account.
if(!isset($_SESSION['access_token']))
{
 //Create a URL to obtain user authorization
 $login_button = '<a href="'.$google_client->createAuthUrl().'"><img src="sign-in-with-google.png" /></a>';
}

?>
<!DOCTYPE html>
<html lang="en">
<head><script>
    history.pushState(null, null, null);
    window.addEventListener('popstate', function () {
        history.pushState(null, null, null);
    });
</script>
  <meta charset="utf-8">
  <title>EduSkills - Tutor Online Courses & LMS Multipurpose HTML template</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="vendors/jquery-nice-select/nice-select.css">
  <link rel="stylesheet" href="vendors/OwlCarousel2/owl.carousel.min.css">
  <link rel="stylesheet" href="vendors/magnific-popup/css/magnific-popup.css">
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">   
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <style>
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>
</head>
<body id="top">
 <!-- signup-modal -->
  <div class="modal fade rounded" id="signup-modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-secondary font-weight-600">Register now</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body p-3 p-sm-4">
            <form method="POST" action="register.php?page=aabout"class="row">
                    <div class="form-group mb-20 col-12">
                        <label class="text-secondary h6 mb-2" for="fname">Your Name*</label>
                        <input class="form-control shadow-none rounded-sm" type="text" placeholder="Jack" name="name"  id="name" required>
                    </div>
                    <div class="form-group mb-20 col-12">
                        <label class="text-secondary h6 mb-2" for="pnumber">Phone Number*</label>
                        <input class="form-control shadow-none rounded-sm" type="text" placeholder="Phone Number"  name="number"  required>
                    </div>
                    <div class="form-group mb-20 col-12">
                        <label class="text-secondary h6 mb-2" for="email2">Email Address*</label>
                        <input class="form-control shadow-none rounded-sm" type="email" placeholder="jack@email.com"  name="email" id="email" required>
                    </div>
                
                    <div class="form-group mb-20 col-12">
                        <label class="text-secondary h6 mb-2" for="password">Password*</label>
                        <input class="form-control shadow-none rounded-sm"type="password" id="Password" name="password" required>
                    </div>
                    <div class="form-group mb-20 col-12">
                        <label class="text-secondary h6 mb-2" for="confirm_password">Retype Password*</label>
                        <input class="form-control shadow-none rounded-sm"id="ConfirmPassword" name="confpassword"  type="password" required>
                        <div style="margin-top: 7px;" id="CheckPasswordMatch"></div>

</div>
                    <div class="form-group col-12">
                        <button class="btn btn-primary w-100 rounded-sm" type="submit" name="submit" value="submit">Sign Up</button>
                    </div><div class="text-center form-group mb-20 col-12">or</div>
                    <div class="text-center btn form-control " style="font-size:large;">
                            <?php if(!isset($_SESSION['access_token']))
{
 $login_button = '<a style="color: #001B61;" href="'.$google_client->createAuthUrl().'">    <img style="height:30px;width:30px;"src="assets/images/courses/google.png" alt="logo">&nbsp&nbsp&nbsp&nbsp SignUp With Google</a>';
}

if($login_button == '')
{
 echo '<h3><b>Name :</b> '.$_SESSION['user_first_name'].'</h3>';
}
else
{
 echo '<div align="">'.$login_button . '</div>';
}
?>
                         </div>
                </form>
            </div>
        </div>
    </div>
  </div>
  <!-- signup-modal -->

  <!-- signin-modal -->
  <div class="modal fade rounded" id="signin-modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mx-auto" style="max-width:400px">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-secondary font-weight-600">Welcome back</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body p-3 p-sm-4">
               <ul class="nav nav-pills nav-justified tab-nav" id="myTab" role="tablist">
                  <li class="nav-item" role="presentation">
                     <a class="nav-link active" id="guardian-tab" data-toggle="tab" href="#guardian" role="tab" aria-controls="guardian" aria-selected="true"><img src="assets/images/tutor.png" class="mr-2" alt="" style="height:45px"> Login as<br>Guardian</a>
                  </li>
                  <li class="nav-item" role="presentation">
                     <a class="nav-link" id="tutor-tab" data-toggle="tab" href="#tutor" role="tab" aria-controls="tutor" aria-selected="false"><img src="assets/images/guardian.png" class="mr-2" alt="" style="height:45px"> Login as<br>Tutor</a>
                  </li>
               </ul>
               <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="guardian" role="tabpanel" aria-labelledby="guardian-tab">
                     <form method="POST"action="glogin.php?page=aabout" class="row">
                     <div class="text-center btn form-control " style="font-size:large;">
                            <?php if(!isset($_SESSION['access_token']))
{
 $login_button = '<a style="color: #001B61;" href="'.$google_client->createAuthUrl().'">    <img style="height:30px;width:30px;"src="assets/images/courses/google.png" alt="logo">&nbsp&nbsp&nbsp&nbsp Login With Google</a>';
}

if($login_button == '')
{
 echo '<h3><b>Name :</b> '.$_SESSION['user_first_name'].'</h3>';
}
else
{
 echo '<div align="">'.$login_button . '</div>';
}
?>
                         </div><div class="text-center form-group mb-20 col-12">or</div><br><div class="form-group mb-20 col-12">
                             <label class="text-secondary h6 font-weight-600 mb-2" for="email">Email Address*</label>
                             <input class="form-control shadow-none rounded-sm" type="email"name="email" id="email" required>
                         </div>
                         <div class="form-group mb-20 col-12">
                             <label class="text-secondary h6 font-weight-600 mb-2" for="passwordSignIn">Password*</label>
                             <input class="form-control shadow-none rounded-sm"name="password" type="password" id="passwordSignIn" required>
                         </div>
                         <div class="form-group col-12">
                             <button class="btn btn-primary w-100 rounded-sm" type="submit" name="submit" value="submit">Sign In</button>
                         </div>
                     </form>
                  </div>
                  <div class="tab-pane fade" id="tutor" role="tabpanel" aria-labelledby="tutor-tab">
                     <form method="POST"action="tlogin.php?page=index" class="row">
                         <div class="form-group mb-20 col-12">
                             <label class="text-secondary h6 font-weight-600 mb-2" for="email">Email Address*</label>
                             <input class="form-control shadow-none rounded-sm" type="email" id="email" required>
                         </div>
                         <div class="form-group mb-20 col-12">
                             <label class="text-secondary h6 font-weight-600 mb-2" for="passwordSignIn">Password*</label>
                             <input class="form-control shadow-none rounded-sm" type="password" id="passwordSignIn" required>
                         </div>
                         <div class="form-group col-12">
                             <button class="btn btn-primary w-100 rounded-sm" type="submit">Sign In</button>
                         </div>
                     </form>
                  </div>
               </div>
            </div>
        </div>
    </div>
  </div>
  <!-- signin-modal -->
<header class="bg-white shadow">
   <div class="container-lg">
      <nav class="navbar navbar-expand-xl navbar-dark px-0">
         <a class="navbar-brand" href="index.php">
            <img src="assets/images/logo-2.png" alt="" style="height:49px">
         </a>

         <button class="navbar-toggler ml-3" type="button" data-toggle="collapse" data-target="#navbarNavAlt" aria-controls="navbarNavAlt" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fas fa-bars"></span>
         </button>
         
         <div class="collapse navbar-collapse" id="navbarNavAlt">
            <ul class="navbar-nav mt-4 mt-xl-0 ml-auto">
               <li class="nav-item ">
                  <a class="nav-link" href="index.php" role="button" aria-haspopup="true" aria-expanded="false">
                     Home 
                  </a>
                              </li>
               <li class="nav-item active">
                  <a class="nav-link" href="about.php">
                     About
                  </a>
               
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="courses.php">Subjects</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="blog.php">1-on-1 Online Classes</a>
               </li>
                             <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contact Us</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#!" data-toggle="modal" data-target="#signin-modal">Sign In</a>
                  
               </li> 
            </ul>
            <div class="ml-0 ml-xl-4 mt-3 mt-xl-0 mb-3 mb-xl-0 text-center text-xl-right">
                
                  <a href="#!" class="btn btn-sm btn-blue rounded-pill" data-toggle="modal" data-target="#signup-modal">Sign Up</a>
            </div>
         </div>
      </nav>
   </div>
</header>

<!-- start of page-header -->
<section class="page-header bg-cover has-overlay" style="background-image: url(assets/images/page-header-03.jpg)">
   <div class="container">
      <div class="row">
         <div class="col-12 text-center">
            <h2 class="section-title text-white font-weight-bold mb-20">About Us</h2>
            <nav aria-label="breadcrumb">
               <ol class="breadcrumb bg-transparent justify-content-center p-0 font-weight-600 mb-0">
                  <li class="breadcrumb-item active" aria-current="page"><a href="index.php">Home</a></li>
                  <li class="breadcrumb-item">About Us</li>
               </ol>
            </nav>
         </div>
      </div>
   </div>
</section>
<!-- end of page-header -->


<!-- start of section -->
<section class="section-padding">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-lg-7 text-center">
            <img class="img-fluid rounded" src="assets/images/about-img.jpg" alt="">
         </div>
         <div class="col-lg-5 mt-5 mt-lg-0">
            <h2 class="section-title mb-30">Who <span class="has-line">We Are</span></h2>
            <p class="mb-3">Dispatched entreaties boisterous say why stimulated. Certain forbade pcture now prevent carried she sitting.</p>
            <p>Uneasy barton seeing remark happen hi has. Am possible offering contempt mr distance stronger an. Attachment excellence announcing or reasonable am on if indulgence. Exeter talked in agreed spirit no he unable do. Betrayed shutters in vicinity it unpacked in.</p>
         </div>
      </div>
   </div>
</section>
<!-- end of section -->


<!-- start of video-popup section -->
<section class="section-padding pt-0 bg-light has-white-half">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-9">
            <div class="text-center">
               <a href="https://www.youtube.com/watch?v=yD7b6R0-LQw" class="d-block has-overlay has-video-popup tansform-none">
                  <img class="img-fluid rounded" src="assets/images/video-thumb-3.jpg" alt="">
                  <img class="play-btn" src="assets/images/video-btn.png" alt="">
               </a>
               <h2 class="section-title mt-50 mb-25">What  Some Awesome Parent Says <span class="has-line">About Us</span></h2>
               <p class="mb-40">Weddings and any opinions suitable smallest nay. My he houses or months settle remove <br> ladies appear. Engrossed suffering supposing he recommend.</p>
               <a href="about.php" class="btn btn-lg btn-secondary rounded-pill">About Us</a>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- end of video-popup section -->


<!-- start of our vision section -->
<section class="section-padding">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-lg-5">
            <h2 class="section-title mb-30">Our <span class="has-line">Vision</span></h2>
            <p class="mb-3">Weddings and any opinions suitable smallest nay. My he houses or months settle remove ladies appear. Engrossed suffering supposing he recommend.</p>
            <p>Uneasy barton seeing remark happen hi has. Am possible offering contempt mr distance stronger an. Attachment excellence announcing or reasonable am on if indulgence. Exeter talked in agreed spirit no he unable do. Betrayed shutters in vicinity it unpacked in.</p>
         </div>
         <div class="col-lg-7 mt-5 mt-lg-0 text-center">
            <img width="49%" src="assets/images/our-vision-01.jpg" alt="">
            <img width="49%" src="assets/images/our-vision-02.jpg" alt="">
         </div>
      </div>
   </div>
</section>
<!-- end of our vision section -->


<!-- start of our map section -->
<section class="section-padding pt-0">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 text-center">
            <h2 class="section-title">You are Always <br> Welcome to <span class="has-line">Our Place</span></h2>
         </div>
      </div>
      <div class="row align-items-center">
         <div class="col-lg-12">
            <a href="#!" class="map-image" target="_blank">
               <img src="assets/images/map-img.jpg" alt="">
               <span class="map-text h4"><i class="fas fa-external-link-alt mr-2"></i> View us on Map</span>
            </a>
         </div>
      </div>
   </div>
</section>
<!-- end of our map section -->


<footer>
   <div class="container">
      
      <div class="py-3">
         <div class="row align-items-center">
            <div class="col-lg-9 text-center text-lg-left mb-4 mb-lg-0">
               <ul class="list-unstyled list-inline font-weight-500">
                  <li class="list-inline-item"><a href="index.php" class="p-2 d-block text-link">Home</a></li>
                  <li class="list-inline-item"><a href="about.php" class="p-2 d-block text-link">About</a></li>
                  <li class="list-inline-item"><a href="courses.php" class="p-2 d-block text-link">Subjects</a></li>
                  <li class="list-inline-item"><a href="blog.php" class="p-2 d-block text-link">1-on-1 Online Classes</a></li>
                  <li class="list-inline-item"><a href="contact.php" class="p-2 d-block text-link">Contact Us</a></li>
               </ul>
            </div>
            <div class="col-lg-3 text-center text-lg-right">
               <ul class="social-icons list-unstyled mr-2">
                  <li><a href="#!" class="text-link"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#!" class="text-link"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="#!" class="text-link"><i class="fab fa-instagram"></i></a></li>
                  <li><a href="#!" class="text-link pr-0"><i class="fab fa-skype"></i></a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
   <div class="footer-bottom py-3 border-top">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-lg-12 text-center mb-3 mb-lg-0">
               &copy; Copyright All Review <span class="text-primary">Edu</span>Skills
            </div>
           
         </div>
      </div>
   </div>
</footer>
<a href="#top" class="scroll-to-top">
   <span class="fas fa-chevron-up"></span>
</a>
<script>
$(document).ready(function () {
   $("#ConfirmPassword").on('keyup', function(){
    var password = $("#Password").val();
    var confirmPassword = $("#ConfirmPassword").val();
    if (password != confirmPassword)
        $("#CheckPasswordMatch").html("Password does not match !").css("color","red");
    else
        $("#CheckPasswordMatch").html("Password match !").css("color","green");
   });
});
</script>
<!-- jQuery -->
<script src="vendors/jQuery/jquery.min.js"></script>
<script src="vendors/bootstrap/bootstrap.min.js"></script>
<script src="vendors/jquery-nice-select/jquery.nice-select.min.js"></script>
<script src="vendors/OwlCarousel2/owl.carousel.min.js"></script>
<script src="vendors/counterup/waypoints.min.js"></script>
<script src="vendors/counterup/jquery.counterup.min.js"></script>
<script src="vendors/magnific-popup/js/magnific-popup.min.js"></script>

<!-- Main Script -->
<script src="assets/js/script.js"></script>

</body>

<!-- Mirrored from s7template.com/tf/eduskills/about.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Jan 2021 09:44:20 GMT -->
</html>