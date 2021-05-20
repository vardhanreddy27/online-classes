<?php

setcookie ("suser", "",time()-60*60*24*100, "/");
header("Location:index.php?errorMssg=".urlencode(""));


?>