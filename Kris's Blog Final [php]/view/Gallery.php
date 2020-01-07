<?php require "modules/header.php";?>

<title>Gallery</title>


<!--Cover sotto navabar-->
<div class="box">
        <div class="logo-1">
                <img width="200px" alt="Web Developer MasterClass PEDacademy" src="assets/MasterClass-Web-Developer-Logotype-white-1.png">
        </div>

        <h3 class="one"><b>ÁLBUM DE FOTOS</b></h3>
        <h4 class="a"><i>Too curiosity isn't good for your healthy</i></h4>

</div>

<br>
<!-- MY CAROUSEL-->

<div class="myCarousel">

        <!-- indicators-->
        <div class="carousel slide" id="carouselCaptions" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselCaptions" data-slide-to="2"></li>
                    <li data-target="#carouselCaptions" data-slide-to="3"></li>
                </ol>

        <!-- immagini -->
        <div class="carousel-inner">

            <div class="carousel-item active">
                    <img src="assets/sicily-catania-1.jpg" class="d-block w-100" alt="Catania (Italy - Sicily)">
                        <div class="carousel-caption d-none d-md-block">
                                <h4>Catania</h4>
                                <p>Italy - <i><small>Sicily</small></i></p>
                        </div>
            </div>

            <div class="carousel-item">
                    <img src="assets/brasile-sãopaulo-2.jpg" class="d-block w-100" alt="São Paulo (Brazil)">
                        <div class="carousel-caption d-none d-md-block">
                                <h4>São Paulo</h4>
                                <p>Brazil</p>
                        </div>
            </div>

            <div class="carousel-item">
                    <img src="assets/Usa-SanFrancisco-1.jpg" class="d-block w-100" alt="San Francisco (Usa - California)">
                        <div class="carousel-caption d-none d-md-block">
                                <h4>San Francisco</h4>
                                <p>USA - <i><small>California</small></i></p>
                        </div>
            </div>

            <div class="carousel-item">
                    <img src="assets/sydney-australia-1.jpg" class="d-block w-100" alt="Sydney - Australia">
                        <div class="carousel-caption d-none d-md-block">
                                <h4>Sydney</h4>
                                <p>Australia</p>
                        </div>
            </div>

            <!-- control prev and next -->

            <a class="carousel-control-prev" href="#carouselCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#carouselCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
</div>

<?php require "modules/footer.php";?>