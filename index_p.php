<?php
$page = ('MUTUUM');
require_once("includes/header.php");
?>

<style>
.container-relative {
        position: relative;
    
    }
#kunskriftfarvetilforside {
        color: white;
        text-align: center;
    }
#kuntilforsidebillede {
        max-width: 100%;
        position: fixed;
    }
/*Vi skal have fjerne margin på forsiden for kun denne*/
.kundennene {
        margin-top: none;
    }
.fixedfordenne {
        position: absolute;
        text-align: center;
    }
.majaboxeforside {
        text-align: center;
        background-color: whitesmoke;
        height:15em;
        border-style: solid;
        border-radius: 2em;
    }
    
</style>

<!--link til billede på forsiden https://unsplash.com/s/photos/teamwork--> 
<container class="container-relative no-margin">
    <div class="row">
         <div class="col-sm-12">
            <body>
                <img src="images/benjamin-sow-CB4z0uTFSYg-unsplash.jpg" id="kuntilforsidebillede">
            </body>
        </div>
        
        <div class="col-sm-12 text-center fixedfordenne">
            <br><br><br><br>
                <h1 id="kunskriftfarvetilforside">  <strong>VELKOMMEN TIL MUTUUM</strong></h1>
                <br>
        
            <p id="kunskriftfarvetilforside">Her kan du låne eller udlåne penge til lige den du ønsker</p>
            <br><br><br><br><br>
      
            <button class="btn btn-warning">OPRET BRUGER</button>
        </div>
<!--
        <div class="col-sm 11 col-lg-5 majaboxeforside">
            <p>jkrnkjfnvcsjrkfnvfrjdk</p>
        </div> 
        
        <div class="col-sm 11 col-lg-5 majaboxeforside">
             <p>iuuhiebcid</p>
        </div> 
 -->   
</div>
</container>

<?php
require_once("includes/footer.php");
?>