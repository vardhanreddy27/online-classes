<!DOCTYPE html>
<html lang="en">
<head><style>





.dropdown {
  position: relative;
  display: inline-block;
 
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 100%;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;text-align: center;
  padding: 12px 16px; 
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style><?php include 'dbconnect.php';
$cookie_name = "suser";
 if(!isset($_COOKIE[$cookie_name])) {
    // echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    // echo "Cookie '" . $cookie_name . "' is set!<br>";
$name=$_COOKIE[$cookie_name];
$sql="SELECT * FROM user_details WHERE email='$name'";
if ($result=mysqli_query($conn,$sql))
{
   while ($row=mysqli_fetch_row($result))
     {
      $name1= $row[0];
 //  echo $name1;
      }
   }
}

?>
    <meta charset="utf-8">
    <title>EduSkills - Tutor Online Courses & LMS Multipurpose HTML template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <link href="assets/css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/pricing-plan.css">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="vendors/jquery-nice-select/nice-select.css">
    <link rel="stylesheet" href="vendors/OwlCarousel2/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/magnific-popup/css/magnific-popup.css">
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">
 
  </head>
  
 <body id="top">
  
    <header class="bg-white shadow">
     <div class="container-lg">
        <nav class="navbar navbar-expand-xl navbar-dark px-0">
           <a class="navbar-brand" href="aindex.php">
              <img src="assets/images/logo-2.png" alt="" style="height:49px">
           </a>
  
           <button class="navbar-toggler ml-3" type="button" data-toggle="collapse" data-target="#navbarNavAlt" aria-controls="navbarNavAlt" aria-expanded="false" aria-label="Toggle navigation">
              <span class="fas fa-bars"></span>
           </button>
           
           <div class="collapse navbar-collapse" id="navbarNavAlt">
              <ul class="navbar-nav mt-4 mt-xl-0 ml-auto">
                 <li class="nav-item dropdown">
                    <a class="nav-link" href="aindex.php" role="button" aria-haspopup="true" aria-expanded="false">
                       Home 
                    </a>
                                </li>
                 <li class="nav-item active">
                    <a class="nav-link" href="aabout.php">
                       About
                    </a>
                 
                 </li>
                 <li class="nav-item">
                    <a class="nav-link" href="acourses.php">Subjects</a>
                 </li>
                 <li class="nav-item">
                    <a class="nav-link" href="ablog.php">1-on-1 Online Classes</a>
                 </li>
                 <li class="nav-item">
                    <a class="nav-link" href="acontact.php">Contact Us</a>
                 </li>
                 <li class="nav-item">
                    <a class="nav-link" href="learning.php">My Learnings</a>
                 </li> <li class="nav-item">
                 <div class="dropdown"><a href="" class="nav-link" ><?php echo $name1;?></a>
                    <div class="dropdown-content">
    <a href="profile.php">profile</a> 
    <a href="logout.php">logout</a>
  </div></div>                 </li>
  </ul> </div>
        </nav>
     </div>
  </header>
 <!-- start of page-header -->
 
 <!-- end of page-header -->
 
<!-- start of page-header -->
<section class="page-header bg-cover has-overlay" style="background-image: url(assets/images/page-header-03.jpg)">
   <div class="container">
      <div class="row">
         <div class="col-12 text-center">
            <h2 class="section-title text-white font-weight-bold mb-20">About Us</h2>
            <nav aria-label="breadcrumb">
              
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
               <a href="#!" class="btn btn-lg btn-secondary rounded-pill">About Us</a>
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
                  <li class="list-inline-item"><a href="aindex.php" class="p-2 d-block text-link">Home</a></li>
                  <li class="list-inline-item"><a href="aabout.php" class="p-2 d-block text-link">About</a></li>
                  <li class="list-inline-item"><a href="acourses.php" class="p-2 d-block text-link">Subjects</a></li>
                  <li class="list-inline-item"><a href="ablog.php" class="p-2 d-block text-link">1-on-1 Online Classes</a></li>
                  <li class="list-inline-item"><a href="acontact.php" class="p-2 d-block text-link">Contact Us</a></li>
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

</html>