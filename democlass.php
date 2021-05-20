<?php
include 'dbconnect.php';
if(isset($_POST['submit'])){
$name=$_POST["name"];
$email=$_POST["email"];
$number=$_POST["number"];
$gender=$_POST["gender"];
$class=$_POST["class"];
$subject=$_POST["subject"];
$sql = "insert into demo_class(name,class,email,number,subject,gender) values('$name','$class','$email','$number','$subject','$gender')";
$page=$_REQUEST['page'];
if($conn->query($sql) === TRUE)
{
    
$page=$_REQUEST['page'];
header("Location: $page.php");
  }

else{
   
}
$conn->close();
}
?>