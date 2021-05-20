
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

if(!isset($_SESSION['access_token']))
{
 $login_button = '<a href="'.$google_client->createAuthUrl().'">nnnnn</a>';
}

?>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title></title>
  <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
  
 </head>
 <body>
  
   <?php
   if($login_button == '')
   {
//    echo '<img src="'.$_SESSION["user_image"].'" class="img-responsive img-circle img-thumbnail" />';

    $name=$_SESSION['user_first_name'];
    $email=$_SESSION['user_email_address'];
    include 'dbconnect.php';
    $result = mysqli_query($conn,"SELECT * FROM user_details WHERE email='$email'");
    $count  = mysqli_num_rows($result);
    if($count==0) {
        $sql = "insert into user_details(name,email) values('$name','$email')";

        if($conn->query($sql) === TRUE)
        {     header("Location: googlelogin.php?page=$email");
        }
            
    } 
   else {
    header("Location: googlelogin.php?page=$email");
   }}
   else
   {
    echo '<div align="center">'.$login_button . '</div>';
   }
   ?>
   
 </body>
</html>