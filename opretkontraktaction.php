<?php
 require_once('includes/header.php');
if(!isset($_SESSION)){session_start();}
    $user_id = $_SESSION['user_id'];
 if(isset($_POST['laantageremail'])) {
        $mail = $_POST['laantageremail'];
        $query5 = "SELECT user_id FROM users WHERE mail = '$mail'";
        $result5 = mysqli_query($con, $query5);
        $row5 = mysqli_num_rows($result5);
        if($row5 > 0){
        while($row5 = mysqli_fetch_assoc($result5)){
        $mail_laantager_id = $row5['user_id'];}    
  
     if (isset($_POST['dropdownbeloeb']) && isset($_POST['dropdownrente']) && isset($_POST['dropdownloebetid']) && isset($_POST['dropdownkontraktbrud']) && isset($_POST['laantageremail'])) {
            
            $beloeb_id_upload = get_post($con, 'dropdownbeloeb');
            $rente_id_upload = get_post($con, 'dropdownrente');
            $bindingsperiode_id_upload = get_post($con, 'dropdownloebetid');
            $kontraktbrud_id_upload = get_post($con, 'dropdownkontraktbrud');
            $maanedligafdrag_upload = '1';
         
             $upload = "INSERT INTO kontrakt (beloeb_id, rente_id, bindingsperiode_id, kontraktbrud_id, laantager_user_id, laangiver_user_id, reg_underskrift_1, laangiver_underskrift_id, reg_underskrift_2, laantager_underskrift_id, maanedlig_afdrag) VALUES('$beloeb_id_upload', '$rente_id_upload', '$bindingsperiode_id_upload', '$kontraktbrud_id_upload', '$mail_laantager_id', '$user_id', CURRENT_TIMESTAMP, '1', CURRENT_TIMESTAMP, '1', '$maanedligafdrag_upload')";
             $result6 = mysqli_query($con, $upload);
             if(!$result6) die(mysqli_error($con));
             else {
              
                echo "<h2 class='text-center'>Din kontrakt er nu oprettet og klar til underskrift!</h2>";
                    ?>
                <div class="container-fluid">
                <button class="btn btn-primary blaaknap"><p>Underskriv med nem-ID her</p></button>
                    </div>
<?php
            }
         ?>

<?php
         } else {
         echo 'Udfyld alle felterne';
     }    
} 
}
function get_post($con, $var) {
    return mysqli_real_escape_string($con, $_POST[$var]);
}

 require_once('includes/footer.php');
?>