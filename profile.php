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
</style><script src="sweetalert2.all.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script>
<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">
    <meta charset="utf-8">
    <title>EduSkills - Tutor Online Courses & LMS Multipurpose HTML template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <script src="sweetalert2.all.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script>
  <script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css"> <link href="assets/css/style.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script><link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>  <title>EduSkills - Tutor Online Courses & LMS Multipurpose HTML template</title>
  <script src="sweetalert2.all.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script>
  <script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css"> <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
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
  </head><?php include 'dbconnect.php';
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
     {$child=$row[5];
      $pass=$row[3];
      if($pass==""){
         $pass="enter password";
     }
        if($child==""){
          $child="enter child name";
          }
      $name1= $row[0];
      $email=$row[1];
      $number=$row[2];
      if($number==""){
         $number="enter number";
      }
    
      $password=$row[3];
      $address=$row[4];
      
      if($address==""){
      $address="enter address";
      }
 //  echo $name1;
      }
   }
}
?>  <?php
include 'dbconnect.php';

if(isset($_POST['submit'])){
$name=$_POST["name"];
$number=$_POST["number"];
$address=$_POST["address"];
$pass=$_POST["pass"];
$child=$_POST["child"];
$sql = "UPDATE user_details set number='$number',child='$child',password='$pass',address='$address' WHERE email='$email'";
if($conn->query($sql) === TRUE)
{
    ?>
    <script>
  function hi(){
   Swal.fire(
  'UPDATED',
  '',
  'success'
)}
hi();
</script>
    
    <?php 

  }

else{

}
$conn->close();
}else{}
?>
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
                 <li class="nav-item active">
                    <a class="nav-link" href="acontact.php">Contact Us</a>
                 </li>
                 <li class="nav-item">
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
  </header>
  <div class="container">
  <br>
    <div class="container">
    <div class="row">
    <div class="col-sm-6">
   <h4 style="padding: 20px;"> Profile</h4>
    </div>
    <div class="col-sm-6" style="text-align:right;">
    <h4><input id="myButton" type="button"  value="Edit" style="border-radius: 100px;
    border: brown;
    padding: 10px 30px 10px;"/></h4></div>    </div> <BR>
  <form method="POST" action="profile.php">

  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <input type="text" readonly="readonly"name="name"placeholder="<?php echo$name1;?>" class="form-control" />
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        <input value="<?php echo$child;?>"placeholder="<?php echo$child;?>" name="child" id="1myInput"  type="text"  readonly="readonly" class="form-control" />
      </div>
    </div>
  </div>
  <!-- Text input -->
  <div class="form-outline mb-4">
    <input type="number"name="number"value="<?php echo$number;?>"placeholder="<?php echo$number;?>"id="2myInput"   readonly="readonly"class="form-control" />
  </div><!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" placeholder="<?php echo $email;?>" class="form-control"disabled/>
  </div>
  <!-- Text input -->
  <div class="form-outline mb-4">
    <input type="text" id="3myInput"name="address"value="<?php echo$address;?>" placeholder="<?php echo $address;?>"  readonly="readonly" class="form-control" />
  </div>
  <!-- Number input -->
  <div class="form-outline mb-4">
    <input type="password" id="4myInput" name="pass" value="<?php echo $pass;?>" placeholder="<?php echo $pass;?>"  readonly="readonly"class="form-control" />
  </div>
  <!-- Submit button -->
  <button type="submit"name='submit' class="btn btn-primary btn-block mb-4"id="myInput"readonly="readonly">UPDATE</button>
</form><script>document.getElementById('myButton').onclick = function() {
    document.getElementById('myInput').removeAttribute('readonly');
    document.getElementById('2myInput').removeAttribute('readonly');
    document.getElementById('3myInput').removeAttribute('readonly');
    document.getElementById('4myInput').removeAttribute('readonly');
    document.getElementById('1myInput').removeAttribute('readonly');
};
</script></div>
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
   </div></div>
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
<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"></script>
</body>
</html>