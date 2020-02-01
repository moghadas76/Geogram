
<?php

$dir = 'sqlite://home/seyed/internet_engineer/Geogram/Geogram/db.sqlite3';
$dbh  = new PDO($dir) or die("cannot open the database");
echo $_POST['username'];
$query =  'SELECT COUNT(*) FROM auth_user WHERE username="'.$_POST['username'].'" AND password='.$_POST['password'].';';
echo $query;
$cnt_number = $dbh->query($query)->fetchColumn();

if($cnt_number==0){
    $Message = urlencode("No such account");
    header("Location:login.php?Message=".$Message);
}
else{
    $Message = urlencode("login was successfully");
    $expire=time()+60*60*24*7;
    setcookie("username", $_POST['username'], $expire);
    setcookie("loggedin", 1, $expire);
    header("Location:main.php?Message=".$Message);
}
