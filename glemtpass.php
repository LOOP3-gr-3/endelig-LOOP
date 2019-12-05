<!--https://www.youtube.com/watch?v=JQkhoBxyOjM du er nået til 16:00-->
<?php 
require_once('conn.php');
if(isset($_POST['email'])){ 
    $con = new mysqli(host:'localhost', username: 'mutuum', password:'mutuum1',database:'mpw_dk');
  $email = $con -> real_escape_string($_POST['email']);
  $sql = $con->query(query: "SELECT id FROM users WHERE email ='$email'");
    if ($sql->num_rows > 0){
        
    }else
        exit(json_encode(array("status" =>0, "msg" => "'Venligst, tjek dine inputs igen!'")));
    
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Projektgruppe 3">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-md-offset-3" align="center">
                <img src="images/logo.png"><br><br>
                <input class="form-control" id="email" placeholder="Din email adresse"><br>
                <input type="button" class="btn btn-primary" value="Reset Password">
                <br>
                <br>
                <p id="response"></p>
            </div>
        </div> 
    </div> 
<script  src="http://code.jquery.com/jquery-3.4.1.min.js"  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="  crossorigin="anonymous"></script>
     <script type="text/javascript">

         var email = $("#email");
         
          
    $(document).ready(function() {
        $('.btn-primary').on('click', function() {
            if (email.val() != "") {
                email.css('border', '1px solid green')
                }
            
            $.ajax({
                url:'forgotPassword.php',
                method:'POST',
                dataType: 'json'
                data:{
                    email:  email.val()
                }, succes: function (response){
                   if (!response.sucess)
                       $("#response").html(response.msg).css('color', "red");
                }
            })
            else
                email.css('border', '1px solid red')
    });
    });
    </script>
</body>
</html>