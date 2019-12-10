<?php
require_once ('includes/header.php');
if(isset($_POST["email"]) && (!empty($_POST["email"]))){
$email = $_POST["email"];
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$email = filter_var($email, FILTER_VALIDATE_EMAIL);
if (!$email) {
   $error .="<p>Invalid email address please type a valid email address!</p>";
   }else{
   $sel_query = "SELECT * FROM `users` WHERE mail='".$email."'";
   $results = mysqli_query($con,$sel_query);
   $row = mysqli_num_rows($results);
   if ($row==""){
   $error .= "<p>No user is registered with this email address!</p>";
   }
  }
   if($error!=""){
   echo "<div class='error'>".$error."</div>
   <br /><a href='javascript:history.go(-1)'>Go Back</a>";
   }else{
   $expFormat = mktime(
   date("H"), date("i"), date("s"), date("m") ,date("d")+1, date("Y")
   );
   $expDate = date("Y-m-d H:i:s",$expFormat);
   $key = md5("$email");
     $salt = rand(100,99999);
     $final_key = $key . $salt;
// Insert Temp Table
     $query = "INSERT INTO password_reset_temp VALUES ('$email', '$final_key', '$expDate')";
     $result = mysqli_query($con, $query);
     if (!$result) die(mysqli_error($con));
     else {
 
$output='<p>Dear user,</p>';
$output.='<p>Please click on the following link to reset your password.</p>';
$output.='<p>-------------------------------------------------------------</p>';
$output.='<p><a href="https://www.btechwebtech.com/password_recovery/lasse/forgot-password/reset-password.php?
key='.$final_key.'&email='.$email.'&action=reset" target="_blank">
https://www.btechwebtech.com/password_recovery/lasse/forgot-password/reset-password.php
?key='.$final_key.'&email='.$email.'&action=reset</a></p>'; 
$output.='<p>-------------------------------------------------------------</p>';
$output.='<p>Please be sure to copy the entire link into your browser.
The link will expire after 1 day for security reason.</p>';
$output.='<p>If you did not request this forgotten password email, no action 
is needed, your password will not be reset. However, you may want to log into 
your account and change your security password as someone may have guessed it.</p>';   
$output.='<p>Thanks,</p>';
$output.='<p>Your Website</p>';
$body = $output; 
$subject = "Password Recovery - Your Website";
 
$email_to = $email;
$fromserver = "resetpassword@mpw.dk"; 
require("PHPMailer/PHPMailerAutoload.php");
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host = "smtp.one.com"; // Enter your host here
$mail->SMTPAuth = true;
$mail->Username = "resetpassword@mpw.dk"; // Enter your email here
$mail->Password = "mutuum"; //Enter your password here
$mail->Port = 587;
$mail->IsHTML(true);
$mail->From = "restpassword@mpw.dk";
$mail->FromName = "Mutuum";
$mail->Sender = $fromserver; // indicates ReturnPath header
$mail->Subject = $subject;
$mail->Body = $body;
$mail->AddAddress($email_to);
if(!$mail->Send()){
echo "Mailer Error: " . $mail->ErrorInfo;
}
     }
echo "<div class='error'>
<p>An email has been sent to you with instructions on how to reset your password.</p>
</div><br /><br /><br />";
 }
   }
else{
?>
<div class="container" style="text-align:center">
<form method="post" action="" name="reset"><br /><br />
<label><strong>Indtast din email:</strong></label><br /><br />
<input type="email" name="email" placeholder="skrivmail@her.dk" />
<br /><br />
<input type="submit" value="Send link"/>
</form>
    </div>
<p> </p>
<p> </p>
<p> </p>
<?php }?>
<?php
require_once('includes/footer.php');
?>