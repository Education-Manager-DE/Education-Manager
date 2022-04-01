<?php
if(isset($_POST["submit"]))
{
    require 'class/class.phpmailer.php';
    $mail = new PHPMailer;
    $mail->IsSMTP();      
    $mail->Host = 'mail.lima-city.de';  
    $mail->Port = '465';       
    $mail->SMTPAuth = true;       
    $mail->Username = 'info@julianzillner.de';   
    $mail->Password = 'JulianZillner2006';     
    $mail->SMTPSecure = 'ssl';       
    $mail->From = $_POST["email"];     
    $mail->FromName = $_POST["name"];    
    $mail->AddCC($_POST["email"], $_POST["name"]); 
    $mail->WordWrap = 50;       
    $mail->IsHTML(true);      
    $mail->Subject = $_POST["subject"];   
    $mail->Body = $_POST["message"];    
  if($mail->Send())        
  {
      echo "<span style='color: green'>E-Mail erfolgreich verschickt!</span>";
  }
  else
  {
      echo "<span style='color: red'>Fehler!</span>";
  }
}

?>