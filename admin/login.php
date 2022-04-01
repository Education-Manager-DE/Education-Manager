<?php session_start(); 
if(isset($_POST['Submit'])){
$logins = array('admin' => 'admin','admin2' => 'admin2','admin3' => 'admin3','admin4' => 'admin4');
$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
$Password = isset($_POST['Password']) ? $_POST['Password'] : '';
if (isset($logins[$Username]) && $logins[$Username] == $Password){
$_SESSION['UserData']['Username']=$logins[$Username];
header("location:index.php");
exit;
} else {
$msg="<span style='color:red'>Invalid Login Details</span>";
}
}
?>
<form action="" method="post" name="Login_Form">
  <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="Table">
    <?php if(isset($msg)){?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <tr>
      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
    </tr>
    <?php } ?>
    <tr>
      <td colspan="2" align="left" valign="top"><h3>Education-Manager Admin Login</h3></td>
    </tr>
    <tr>
      <td align="right" valign="top">Benutzername:</td>
      <td><input name="Username" type="text" class="Input"></td>
    </tr>
    <tr>
      <td align="right">Passwort:</td>
      <td><input name="Password" type="password" class="Input"></td>
    </tr>
    <tr>
      <td> </td>
      <td><input name="Submit" type="submit" value="Login" class="Button3"></td>
    </tr>
  </table>
</form>