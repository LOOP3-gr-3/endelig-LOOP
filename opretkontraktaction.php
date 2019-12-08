<?php
if(isset($_POST['submit'])){
    $beloeb =  $_POST[dropdownbeloeb];
    $rente =  $_POST[dropdownrente];
    $loebetid =  $_POST[dropdownloebetid];
    $kontraktbrud = $_POST[dropdownkontraktbrud];
    $laantageremail =  $_POST[laantageremail];
    $errorEmpty = false;
    $errorEmail = false;
    if(empty($beloeb)||empty($rente)||empty($loebetid)||empty($kontraktbrud)){
        echo "<span>Udfyld alle felter</span>";
        $errorEmpty = true;
    }
    elseif(!filter_var($laantageremail, FILTER_VALIDATE_EMAIL)){
        echo "<span>Det indtastede er ikke en valid Emailadresse</span>";
        $errorEmail = true;
    }
}
   else{
       echo 'Der er sket en fejl! Prøv igen.';
   }
function get_post($con, $var) {
    return mysqli_real_escape_string($con, $_POST[$var]);
}
?>
<script>
var $errorEmpty = "<?php echo $errorEmpty; ?> ";
var $errorEmpty = "<?php echo $errorEmail; ?> ";
    if($errorEmpty == true){
        $("#dropdownbeloeb, #dropdownrente, #dropdownloebetid, #kontraktbrud, #laantageremail");
    }
    if($errorEmail == true){
        $("#laantageremail");
    }
    if($errorEmail == false && $errorEmpty = false){
        $("#dropdownbeloeb, #dropdownrente, #dropdownloebetid, #kontraktbrud, #laantageremail").val("");
    }
</script>