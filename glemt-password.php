<?php
$page = ('Glemt password');
require_once ('includes/header.php');
if(isset($_POST["email"]) && (!empty($_POST["email"]))){
$email = $_POST["email"];
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$email = filter_var($email, FILTER_VALIDATE_EMAIL);
/* Her tjekkes der op mod serverien om mailen findes på vores server*/
if (!$email) {
   $error .="<p>Denne email findes ikke i vores system, indtast venligst en anden!</p>";
   }else{
   $sel_query = "SELECT * FROM `users` WHERE mail='".$email."'";
   $results = mysqli_query($con,$sel_query);
   $row = mysqli_num_rows($results);
   if ($row==""){
   $error .= "<p>Ingen bruger er registreret med denne mail!</p>";
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
/* Her skrives det output, som bliver vist for brugeren efter trykket "Send link" */ 
$output='<p>Kære bruger,</p>';
$output.='<p>Klik venligst på det følgende link for, at resette dit password.</p>';
$output.='<p>-------------------------------------------------------------</p>';
$output.='<p><a href="https://www.mpw.dk/reset-password.php?key='.$final_key.'&email='.$email.'&action=reset" target="_blank">
https://www.mpw.dk/reset-password.php?key='.$final_key.'&email='.$email.'&action=reset</a></p>'; 
$output.='<p>-------------------------------------------------------------</p>';
$output.='<p>Husk at kopiere hele linket ind i din browser.
Dette link vil udløbe efter 1 dag af sikkerhedsmæssige årsager.</p>';
$output.='<p>Hvis du ikke har anmodet om, at resette dit password så skal du ikke gøre yderligere. Du burde dog overveje, at logge ind på Mutuum og ændre dit password eftersom nogen måske har gættet dette.</p>';   
$output.='<p>Tak,</p>';
$output.='<p>Mutuum</p>';
$body = $output; 
$subject = "Nustil password - Mutuum";
 
$email_to = $email;
$fromserver = "resetpassword@mpw.dk"; 
require("PHPMailer/PHPMailerAutoload.php");
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host = "send.one.com"; // Enter your host here
$mail->SMTPAuth = true;
$mail->Username = "resetpassword@mpw.dk"; // Enter your email here
$mail->Password = "mutuum"; //Enter your password here
$mail->Port = 587;
$mail->IsHTML(true);
$mail->From = "resetpassword@mpw.dk";
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
<p>En email er blevet sendt til din indbakke med instruktioner om hvordan du nulstiller dit password.</p>
</div><br /><br /><br />";
 }
   }
else{
?>
<!-- Her er følgende, som er vist for brugeren - hvor brugeren skal indtaste den mail, som brugeren er oprettet med, og derefter submittes igennem "Send link". -->
<div class="container text-center">
<form method="post" action="" name="reset"><br /><br />
    <label><strong><h4>Indtast din email:</h4></strong></label><br /><br />
<input class="form-control" type="email" name="email" placeholder="skrivmail@her.dk" />
<br /><br />
<input type="submit" class="mutuumknap btn-warning btn" value="Send link"/>
</form>
    </div>
<p> </p>
<p> </p>
<p> </p>
<?php }?>
<?php
require_once('includes/footer.php');
?>