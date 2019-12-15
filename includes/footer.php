<footer class="navbar-static-bottom container-fluid bg-white">
    <!-- Her bliver footer fastgjort til bunden af viewporten -->
    <hr class="topfooter no-margin-top" /> <!-- Dette skaber horisontal linjen på footer - / gør at den skaber en mere, når footeren er foldet ud -->
    <div class="row">
        <div class="col-xs-12 col-sm-">
            <div id="footer-collapse" class="collapse">
                <!-- class collapse er en BS, som gør kollapse footeren. ID gør at vi kan sige, hvornår det ene eller andet skal ske -->
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <?php 
                        if(!$_SESSION['user_id']) {
                            echo '
                        <h4>Kom i gang her:</h4>
                        <div>
                            <a href=opretbruger.php><button type="button" class="btn btn-warning">Opret en bruger</button></a>
                            </div>';
                        }else {
                            echo '<h4>Se din oversigt her:</h4>
                            <a href=opretbruger.php><button type="button" class="btn btn-warning">Min Side</button></a>';}
                        ?>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <h4>Om Mutuum</h4>
                        <ul>
                            <li><a href="omos.php">Mutuum</a></li>
                        </ul>
                        <h4>Juridiske Forhold</h4>
                        <ul>
                            <li><a href="handelsbetingelser.php">Vilk&#xE5;r og handelsbetingelser</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        
                    </div>
                </div>
                <hr />
            </div>
            <div class="row vertical-align">
                <div class="col-xs-12 col-sm-4 col-lg-2 col-sm-push-8 col-lg-push-10">
                    <button data-toggle="collapse" data-target="#footer-collapse" class="btn btn-block btn-warning" onclick="this.innerHTML == &quot;Luk&quot; ? this.innerHTML = &quot;Vilk&#xE5;r &amp;  Databeskyttelse&quot; : this.innerHTML = &quot;Luk&quot;;">Vilk&#xE5;r &amp; Databeskyttelse</button>
                </div>
                <div class="clearermed visible-xs"></div>
                <div class="col-xs-12 col-sm-8 col-lg-10 col-sm-pull-4 col-lg-pull-2">
                    <div class="no-margin text-center" id="footertekst">
                        <h4>Kontaktoplysninger</h4>
                        <address>
                            <p><span>MUTUUM (CVR: 44223311) </span></p>
                            <p><span class="glyphicon glyphicon-map-marker"></span>Birk Centerpark 15, 7400 Herning</p>
                            <p><span class="glyphicon glyphicon-phone"></span> +45 12345678</p>
                            <p><span class="glyphicon glyphicon-envelope"></span><a href="mailto:kontakt@mpw.dk" target="_blank"> kontakt@mutuum.dk</a></p>
                             <!-- Det her er en mailfunktion, så når brugerne klikker på mailen, vil de komme ind i en ny  -->
                        </address>
                       <br> 
                    </div>
                </div>

            </div>

        </div>
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</body>

</html>