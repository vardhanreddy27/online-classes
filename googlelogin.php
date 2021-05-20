<?php
include 'dbconnect.php';
$email=$_REQUEST["page"];
$result = mysqli_query($conn,"SELECT * FROM user_details WHERE email='$email'");
$count  = mysqli_num_rows($result);
    if($count==0) {
		
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

                header("Location: aindex.php");
                

	}

?>