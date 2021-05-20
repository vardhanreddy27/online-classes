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
                 <li class="nav-item active">
                    <a class="nav-link" href="learning.php">My Learnings</a>
                 </li> <li class="nav-item">
                 <div class="dropdown"><a href="" class="nav-link" ><?php echo $name1;?></a>
                    <div class="dropdown-content">
    <a href="#">profile</a> 
    <a href="logout.php">logout</a>
  </div></div>                 </li>
  </ul> </div>
        </nav>
     </div>
     
     
     <section class="bg-gray" style="padding:50px;">
   <div class="container">
            

            <div class="shadow-sm p-20 mt-4 rounded-sm bg-white d-block d-sm-flex align-items-center">
               <i class="fas fa-phone fa-2x text-primary"></i>
               <div class="ml-sm-4 mt-3 mt-sm-0">
                  <h4 class="text-secondary font-weight-600 mb-1">Course 1</h4>
                  <a href="tel:+7800123452" class="text-dark">Join Class</a></p>
                  <a href="mailto:contact@eduskill.com" class="text-dark">Videos</a></p>
               </div>
            </div>
            <div class="shadow-sm p-20 mt-4 rounded-sm bg-white d-block d-sm-flex align-items-center">
               <i class="fas fa-map-marked-alt fa-2x text-primary"></i>
               <div class="ml-sm-4 mt-3 mt-sm-0">
                  <h4 class="text-secondary font-weight-600 mb-1">Course 2</h4>
                 <a href="tel:+7800123452" class="text-dark">Join Class</a></p>
                  <a href="mailto:contact@eduskill.com" class="text-dark">Videos</a></p>
               </div>
            </div>
            <div class="shadow-sm p-20 mt-4 rounded-sm bg-white d-block d-sm-flex align-items-center">
               <i class="fas fa-user-clock fa-2x text-primary"></i>
               <div class="ml-sm-4 mt-3 mt-sm-0">
                  <h4 class="text-secondary font-weight-600 mb-1">Course 3</h4>
                  <a href="tel:+7800123452" class="text-dark">Join Class</a></p>
                  <a href="mailto:contact@eduskill.com" class="text-dark">Videos</a></p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
     
     
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