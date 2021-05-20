
  
    <?php 
    $servername="sql6.freemysqlhosting.net";
    $username="sql6413737";
    $password="uN9H3KbsDa";
    $dbname="sql6413737";
    $conn=new mysqli($servername,$username,$password,$dbname);
    if($conn->connect_error)
    { die("connection failed".$conn->connect_error); }
    else {  } ?>
  
