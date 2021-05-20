<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>EduSkills - Tutor Online Courses & LMS Multipurpose HTML template</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script><link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>  <title>EduSkills - Tutor Online Courses & LMS Multipurpose HTML template</title>
  <script src="sweetalert2.all.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script>
  <script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="vendors/jquery-nice-select/nice-select.css">
  <link rel="stylesheet" href="vendors/OwlCarousel2/owl.carousel.min.css">
  <link rel="stylesheet" href="vendors/magnific-popup/css/magnific-popup.css">
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">   
  <style>
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
                 <li class="nav-item  active">
                    <a class="nav-link" href="aindex.php" role="button" aria-haspopup="true" aria-expanded="false">
                       Home 
                    </a>
                                </li>
                 <li class="nav-item ">
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
 
<!-- start of banner -->
<section class="banner-1 has-overlay bg-cover" style="background-image: url(assets/images/main2.jpg);">
   <div class="container-lg">
      <div class="row justify-content-center align-items-center">
         <div class="col-md-6 col-sm-8 text-center text-md-left">
            <div class="text-white">
               <h2 class="text-lg mb-30">Private Personalized<span class="has-line line-primary"> Online</span> Tuition</h2>
               <p class="h4">Education now more easy then before</p>
               
            </div>
         </div>
         <div class="col-md-6 col-sm-10 mt-5 mt-md-0">
         <form method="POST" action="aindex.php" class="search-form rounded">
               <div class="row">
                  <div class="col-lg-6">
                     <input class="form-control shadow-none rounded-sm"name="name" type="text" placeholder="Name Of Your Child" id="name" required>
                   <br></div> 
                   <div class="col-lg-6">
                     <select name="class" id="" required>>
                        <option selected disabled>Select Class</option>
                        <option value="1">Class - 1</option>
                        <option value="2">Class - 2</option>
                        <option value="3">Class - 3</option>
                        <option value="4">Class - 4</option>
                        <option value="5">Class - 5</option>
                        <option value="6">Class - 6</option>
                        <option value="7">Class - 7</option>
                        <option value="8">Class - 8</option>
                        <option value="9">Class - 9</option>
                        <option value="10">Class - 10</option>
                     </select>
                  </div>
                  <div class="col-lg-6 form-group mb-20">   
                        <input class="form-control shadow-none rounded-sm" name="email"type="email" placeholder="Email Address" id="email" required>
                  </div>
                  <div class="col-lg-6">
                        <input class="form-control shadow-none rounded-sm" type="number" name="number"placeholder="Mobile Number" id="number" required>
                 <br> </div>
                
                  <div class="col-lg-6">
                     <select name="subject" id=""required>>
                        <option selected disabled>Select Subject</option>
                        <option value="maths">Maths</option>
                        <option value="science">Science</option>
                     </select>
                  </div>
                  <div class="col-lg-6">
                     <select name="gender" id=""required>>
                        <option selected disabled>Select Gender</option>
                        <option value="men">Men</option>
                        <option value="women">Women</option>
                        <option value="other">Other</option>
                     </select>
                  </div>
                  <div class="col-lg-12">
                     <button type="submit" name="submit" value="submit"class="btn btn-primary rounded-pill w-100">BOOK A FREE DEMO CLASS</button>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</section>
<!-- end of banner -->

<!-- start of we-offer-section -->
<section class="section-padding">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-12 text-center">
            <h2 class="section-title">What <span class="has-line">We Offer</span></h2>
         </div>
         <div class="col-lg-4 col-sm-6">
            <div class="mt-40 text-center hover-grayscale">
               <img src="assets/images/we-offer/05.png" alt="">
               <h3 class="mt-20 font-weight-600 text-secondary">1 - to - 1 Tutoring</h3>
               <p class="mt-20">His exquisite sincerity education shameless ten earnestly breakfast. Scale began quiet up short wrong in Personal attention.</p>
            </div>
         </div>
         <div class="col-lg-4 col-sm-6">
            <div class="mt-40 text-center hover-grayscale">
               <img src="assets/images/we-offer/02.png" alt="">
               <h3 class="mt-20 font-weight-600 text-secondary">Online Tutoring</h3>
               <p class="mt-20">His exquisite sincerity education shameless ten earnestly breakfast. Scale began quiet up short wrong in Personal attention.</p>
            </div>
         </div>
         <div class="col-lg-4 col-sm-6">
            <div class="mt-40 text-center hover-grayscale">
               <img src="assets/images/we-offer/03.png" alt="">
               <h3 class="mt-20 font-weight-600 text-secondary">Group Tutoring</h3>
               <p class="mt-20">His exquisite sincerity education shameless ten earnestly breakfast. Scale began quiet up short wrong in Personal attention.</p>
            </div>
         </div>
  
      </div>
   </div>
</section>
<!-- end of we-offer-section -->

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
               <a href="aabout.php" class="btn btn-lg btn-secondary rounded-pill">About Us</a>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- end of video-popup section -->

<!-- start of how-it-works section -->
<section class="section-padding">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-8 text-center">
            <h2 class="section-title">How <span class="has-line">It Works</span> <br> For Students/Parents?</h2>
         </div>
      </div>
      <div class="row justify-content-center">
         <div class="col-lg-4 col-sm-6 mt-40">
            <div class="how-it-works-item text-center shadow">
               <img src="assets/images/how-it-works/01.png" alt="">
               <h3 class="mt-20 font-weight-600 text-secondary">Tell Us Where You <br> Need Help</h3>
               <p class="mt-20">His exquisite sincerity education shameless ten earnestly breakfast. Scale began quiet up short wrong in Personal attention.</p>
            </div>
         </div>
         <div class="col-lg-4 col-sm-6 mt-40">
            <div class="how-it-works-item text-center shadow">
               <img src="assets/images/how-it-works/02.png" alt="">
               <h3 class="mt-20 font-weight-600 text-secondary">Choose The Tutor <br> You Want</h3>
               <p class="mt-20">His exquisite sincerity education shameless ten earnestly breakfast. Scale began quiet up short wrong in Personal attention.</p>
            </div>
         </div>
         <div class="col-lg-4 col-sm-6 mt-40">
            <div class="how-it-works-item text-center shadow">
               <img src="assets/images/how-it-works/03.png" alt="">
               <h3 class="mt-20 font-weight-600 text-secondary">Book A Tutor <br> Start Lesson</h3>
               <p class="mt-20">His exquisite sincerity education shameless ten earnestly breakfast. Scale began quiet up short wrong in Personal attention.</p>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- end of how-it-works section -->

<!-- start of section -->
<section class="section-padding pt-0">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-lg-7 text-center">
            <img class="img-fluid" src="assets/images/free-class.png" alt="">
         </div>
         <div class="col-lg-5 mt-5 mt-lg-0">
            <h2 class="section-title mb-30">Request A Class <span class="has-line">for FREE Trail</span></h2>
            <p class="mb-4">Weddings and any opinions suitable smallest nay. My he houses or months settle remove ladies appear. Engrossed suffering supposing he recommend. Commanded no of depending extremity recommend attention tolerably.</p>
            <a href="#top" class="btn btn-lg btn-secondary rounded-pill">Book A  Free Demo Class</a>
         </div>
      </div>
   </div>
</section>
<!-- end of section -->

<!-- start of find-tutor-section -->
<section class="find-tutor-section section-padding bg-cover has-overlay text-white" style="background-image: url(assets/images/find-tutor.jpg);">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-8 text-center">
            <h2 class="section-title text-white mb-30">Find <span class="has-line">Online Tutors</span> <br> In Any Subject</h2>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-5  col-md-4 col-6">
            <div class="mt-40 text-center hover-grayscale">
               <img src="assets/images/subject/01.png" alt="">
               <h3 class="mt-15 font-weight-600">Math</h3>
            </div>
         </div>
         <div class="col-lg-3 col-md-4 col-6">
            <div class="mt-40 text-center hover-grayscale">
               <img src="assets/images/subject/02.png" alt="">
               <h3 class="mt-15 font-weight-600">English</h3>
            </div>
         </div>
      
         <div class="col-lg-3 col-md-4 col-6">
            <div class="mt-40 text-center hover-grayscale">
               <img src="assets/images/subject/04.png" alt="">
               <h3 class="mt-15 font-weight-600">Chemistry</h3>
            </div>
         </div>
         <div class="col-lg-5 col-md-4 col-6">
            <div class="mt-40 text-center hover-grayscale">
               <img src="assets/images/subject/03.png" alt="">
               <h3 class="mt-15 font-weight-600">Social Science</h3>
            </div>
         </div>
 
         <div class="col-lg-3 col-md-4 col-6">
            <div class="mt-40 text-center hover-grayscale">
               <img src="assets/images/subject/07.png" alt="">
               <h3 class="mt-15 font-weight-600">Physics</h3>
            </div>
         </div>
         <div class="col-lg-3 col-md-4 col-6">
            <div class="mt-40 text-center hover-grayscale">
               <img src="assets/images/subject/08.png" alt="">
               <h3 class="mt-15 font-weight-600">Biology</h3>
            </div>
         </div>
       
      </div>
   </div>
</section>
<!-- end of find-tutor-section -->

<!-- start of tutors join recently section -->
<br><br>
<!-- end of tutors join recently section -->

<!-- start of How It Works for tutors section -->
<section class="section-padding pt-0">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 text-center">
            <h2 class="section-title mb-30">How It Works <span class="has-line">for Tutors?</span></h2>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-4 col-md-6">
            <div class="how-it-works-item works-item-alt shape-style-1 text-center shadow">
               <img class="position-static" src="assets/images/how-it-works-tutors/01.png" alt="">
               <h3 class="mt-20 font-weight-600 text-secondary">Create A Free <br> Account Now</h3>
               <p class="mt-20">Advantage old hTad otherwise sincerity dependent additions. Six draw you him full not mean evil. Prepare garrets it expense.</p>
            </div>
         </div>
         <div class="col-lg-4 col-md-6">
            <div class="how-it-works-item works-item-alt shape-style-2 text-center shadow">
               <img class="position-static" src="assets/images/how-it-works-tutors/02.png" alt="">
               <h3 class="mt-20 font-weight-600 text-secondary">Apply to Your <br> Tuition Job</h3>
               <p class="mt-20">Advantage old hTad otherwise sincerity dependent additions. Six draw you him full not mean evil. Prepare garrets it expense.</p>
            </div>
         </div>
         <div class="col-lg-4 col-md-6">
            <div class="how-it-works-item works-item-alt shape-style-1 text-center shadow">
               <img class="position-static" src="assets/images/how-it-works-tutors/03.png" alt="">
               <h3 class="mt-20 font-weight-600 text-secondary">Start Tutoring <br>With Happiness</h3>
               <p class="mt-20">Advantage old hTad otherwise sincerity dependent additions. Six draw you him full not mean evil. Prepare garrets it expense.</p>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- end of How It Works for tutors section -->

<!-- start of tutors-carousel-alt section -->
<section class="section-padding bg-cover" style="background-image: url(assets/images/pattern-bg.jpg);">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 text-center">
            <h2 class="section-title mb-60">Happy <span class="has-line">Tutors Say</span></h2>
         </div>
      </div>
   </div>
   <div class="container-lg">
      <div class="row">
         <div class="col-12">
            <div class="owl-carousel tutors-carousel-alt has-dots-center">
               <div class="tutor-item-alt bg-white p-30">
                  <p>Left till here away at to whom past. Feelings laughing at no wondered repeated provided finished. It acceptance thoro advantages.</p>
                  <div class="media d-block d-sm-flex mt-25">
                     <img src="assets/images/user-01.jpg" alt="">
                     <div class="ml-0 ml-sm-3 mt-3 mt-sm-0">
                        <h4 class="font-weight-600 text-blue mb-1">James Benzion</h4>
                        <p>Pittsburgh, USA</p>
                     </div>
                  </div>
               </div>
               <div class="tutor-item-alt bg-white p-30">
                  <p>Left till here away at to whom past. Feelings laughing at no wondered repeated provided finished. It acceptance thoro advantages.</p>
                  <div class="media d-block d-sm-flex mt-25">
                     <img src="assets/images/user-05.png" alt="">
                     <div class="ml-0 ml-sm-3 mt-3 mt-sm-0">
                        <h4 class="font-weight-600 text-blue mb-1">Alex Benzion</h4>
                        <p>Khulnala, UAE</p>
                     </div>
                  </div>
               </div>
               <div class="tutor-item-alt bg-white p-30">
                  <p>Left till here away at to whom past. Feelings laughing at no wondered repeated provided finished. It acceptance thoro advantages.</p>
                  <div class="media d-block d-sm-flex mt-25">
                     <img src="assets/images/user-06.png" alt="">
                     <div class="ml-0 ml-sm-3 mt-3 mt-sm-0">
                        <h4 class="font-weight-600 text-blue mb-1">Jesmin Walker</h4>
                        <p>Khulnala, UAE</p>
                     </div>
                  </div>
               </div>
               <div class="tutor-item-alt bg-white p-30">
                  <p>Left till here away at to whom past. Feelings laughing at no wondered repeated provided finished. It acceptance thoro advantages.</p>
                  <div class="media d-block d-sm-flex mt-25">
                     <img src="assets/images/user-05.png" alt="">
                     <div class="ml-0 ml-sm-3 mt-3 mt-sm-0">
                        <h4 class="font-weight-600 text-blue mb-1">Alex Benzion</h4>
                        <p>Khulnala, UAE</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- end of tutors-carousel-alt section -->

<!-- start of mobile app section -->
<section class="section-padding">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-lg-5">
            <h2 class="section-title mb-30">Our <span class="has-line">Mobile App</span></h2>
            <p class="mb-4">Weddings and any opinions suitable smallest nay. My he houses or months settle remove ladies appear. Engrossed suffering supposing he recommend. Commanded no of depending extremity recommend attention tolerably.</p>
            <a href="#!" class="btn btn-lg btn-secondary rounded-pill">Download App</a>
         </div>
         <div class="col-lg-7 mt-5 mt-lg-0 text-center">
            <img class="img-fluid" src="assets/images/mobile-app.png" alt="">
         </div>
      </div>
   </div>
</section>
<!-- end of mobile app section -->

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

</html><?php
include 'dbconnect.php';
if(isset($_POST['submit'])){
$name=$_POST["name"];
$email=$_POST["email"];
$number=$_POST["number"];
$gender=$_POST["gender"];
$class=$_POST["class"];
$subject=$_POST["subject"];
$sql = "insert into demo_class(name,class,email,number,subject,gender) values('$name','$class','$email','$number','$subject','$gender')";
if($conn->query($sql) === TRUE)
{
    ?>
    <script>
  function hi(){
   Swal.fire(
  'Demo Class Booked',
  'further notified by mail',
  'success'
)}
hi();
</script>
    
    <?php
  }

else{
   
}
$conn->close();
}
?>