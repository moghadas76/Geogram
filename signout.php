
<?php
$expire=time()-3600;
setcookie("username", "ali", $expire);
setcookie("signedin", "0", $expire);
header('Location: login.php');
?>
