<!DOCTYPE html>
<html><head><style>





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
                 <li class="nav-item active">
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
 
 
 <!-- start of blogs -->
 <section class="pb-fix">
            <main>
             <div class="container">
               <h5 class="text-center pricing-table-subtitle"> </h5>
               <h1 class="text-center pricing-table-title" style="color:black;">Select Your Plan</h1>
               <div class="row">
                 <div class="col-md-4">
                   <div class="card pricing-card pricing-plan-basic">
                     <div class="card-body">
                       <i class="mdi mdi-cube-outline pricing-plan-icon"></i>
                       <p class="pricing-plan-title">3 MONTHS</p>
                       <h3 class="pricing-plan-cost ml-auto"style="color:">Rs 10,000</h3>
                       <ul class="pricing-plan-features">
                         <li>Unlimited conferences</li>
                         <li>100 participants max</li>
                         <li>Custom Hold Music</li>
                         <li>10 participants max</li>
                       </ul>
                       <a href="#!" class="btn pricing-plan-purchase-btn">Purchase</a>
                     </div>
                   </div>
                 </div>
                 <div class="col-md-4">
                   <div class="card pricing-card pricing-card-highlighted  pricing-plan-pro">
                     <div class="card-body">
                         <i class="mdi mdi-trophy pricing-plan-icon"></i>
                       <p class="pricing-plan-title">6 MONTHS</p>
                       <h3 class="pricing-plan-cost ml-auto">Rs 20,000</h3>
                       <ul class="pricing-plan-features">
                         <li>Unlimited conferences</li>
                         <li>100 participants max</li>
                         <li>Custom Hold Music</li>
                         <li>10 participants max</li>
                       </ul>
                       <a href="#!" class="btn pricing-plan-purchase-btn">Purchase</a>
                     </div>
                   </div>
                 </div>
                 <div class="col-md-4">
                   <div class="card pricing-card pricing-plan-enterprise">
                     <div class="card-body">
                       <i class="mdi mdi-wallet-giftcard pricing-plan-icon"></i>
                       <p class="pricing-plan-title">1 YEAR</p>
                       <h3 class="pricing-plan-cost ml-auto">Rs 30,000</h3>
                       <ul class="pricing-plan-features">
                         <li>Unlimited conferences</li>
                         <li>100 participants max</li>
                         <li>Custom Hold Music</li>
                         <li>10 participants max</li>
                       </ul>
                       <a href="#!" class="btn pricing-plan-purchase-btn">Purchase</a>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
           </main>
 
 </section>
 <!-- end of blogs -->
 <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <!-- start of footer -->
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