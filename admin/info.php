<?php session_start();
if(!isset($_SESSION['UserData']['Username'])){
header("location:login.php");
exit;
}
?>
<!doctype html>
<meta charset="utf-8">
<title>Edu-Admin</title>
<link rel="icon" type="image/png" href="../images/favicon.png" sizes="32x32">
<meta name="viewport" content="width=device-width, initial-scale=1">
<div style="padding-left:16px">
<?php
phpinfo();
?>
