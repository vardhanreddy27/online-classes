<?php
include 'dbconnect.php';
if(isset($_POST['submit'])){
$email=$_POST["email"];
$password=$_POST["password"];
$result = mysqli_query($conn,"SELECT * FROM user_details WHERE email='$email' and password = '$password'");
$count  = mysqli_num_rows($result);
$page=$_POST["page"];

    if($count==0) {
		echo "Invalid Username or Password!";
		
} 

else {
		echo "You are successfully authenticated!";

$sql = "SELECT * FROM user_details WHERE email='$email'";
if ($result=mysqli_query($conn,$sql))
  {
  
  //Fetch one and one row
  
  while ($row=mysqli_fetch_row($result))
    {

    $email= $row[1];

    }


                $cookie_name="suser";
                $cookie_value=$email;
                setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
                
  
}


mysqli_close($conn);
$page=$_REQUEST['page'];

                header("Location: $page.php");
                

	}
}

?>