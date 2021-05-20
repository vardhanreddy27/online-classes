<?php
include 'dbconnect.php';
if(isset($_POST['submit'])){
$name=$_POST["name"];
$email=$_POST["email"];
$number=$_POST["number"];
$password=$_POST["password"];
$sql = "insert into user_details(name,email,number,password) values('$name','$email','$number','$password')";
$page=$_REQUEST['page'];

if($conn->query($sql) === TRUE)
{
    
$sql = "SELECT * FROM user_details WHERE email='$email'";
if ($result=mysqli_query($conn,$sql))
  {
  while ($row=mysqli_fetch_row($result))
    {
    $usn= $row[1];
    }
    $cookie_name="suser";
    $cookie_value=$email;
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
    $page=$_REQUEST['page'];
    header("Location: $page.php");

  }else{

    }
}
else{
    echo "error".$conn->error;
}
$conn->close();
}
?>