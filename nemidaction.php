<?php
require_once('conn.php');
print_r($_POST);
if (isset($_POST['submit']) && isset($_POST['kontrakt_id2'])) {
	$user_id = $_SESSION['user_id'];
	$kontrakt_id = $_POST['kontrakt_id2'];
	echo $user_id . "<br><br>";
	echo $kontrakt_id;
    $query = "SELECT * FROM kontrakt WHERE kontrakt_id = '$kontrakt_id'";
    $result = mysqli_query($con, $query);
	 if(!$result) die(mysqli_error($con));
	 else {
		 $rows = mysqli_num_rows($result);
		 if($rows > 0){
			while($row = mysqli_fetch_assoc($result)) {
				$laangiver_user_id_hent = $row['laangiver_user_id'];
				echo "<h1>" . $laangiver_user_id_hent . "</h1>";
				
				$laantager_user_id_hent = $row['laantager_user_id'];
				echo "<h1>" . $laantager_user_id_hent . "</h1>";
				if ($laangiver_user_id_hent == $user_id){
                    $id2 = '2';
					$query1 = "UPDATE kontrakt SET laangiver_underskrift_id = '$id2', reg_underskrift_1 = NOW() WHERE kontrakt_id = '$kontrakt_id'";
					$result1 = mysqli_query($con, $query1);
					if(!$result1) {die(mysqli_error($con)); } else {
					echo "<script>alert('Kontrakten er nu underskrevet af dig som långiver');</script>";
					echo "<script>window.location.href = 'minside.php';</script>";
					}
				} else if ($laantager_user_id_hent == $user_id){
                    $id2 = '2';
					$query2 = "UPDATE kontrakt SET laantager_underskrift_id = '$id2',  reg_underskrift_2 = NOW() WHERE kontrakt_id = '$kontrakt_id'";
					$result2 = mysqli_query($con, $query2);
					if(!$result2) { die(mysqli_error($con)); } else {                           
					echo "<script>alert('Kontrakten er nu underskrevet af dig som låntager');</script>";
					echo "<script>window.location.href = 'minside.php';</script>";
					}
				} else die(mysqli_error($con));}
			}
    
}
}
else { 
	echo "Venligst vælg en kontrakt, som skal underskrives";
}
?>