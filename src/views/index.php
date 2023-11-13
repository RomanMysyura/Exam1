<!DOCTYPE html>
<html lang="en">

<head>
    <title>Excursió sorpresa</title>
    <?php require 'libs.php'; ?>
    <script src="js/scripts.js"></script>
</head>

<body>
    <?php require "menu.php"; ?>
    
    

    <div class="d-none d-md-block"> <!-- This will hide the slider on screens smaller than 'md' (medium) -->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100 imgslider" src="/img/36729910553_30e2f74d6f_k.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 imgslider" src="/img/49639837947_bb98d51e39_k.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 imgslider" src="/img/341237419038_4723e12a_m.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    </div>
    </div>
    <a href="index.php?r=subscribe"><button type="button" class="btninsripcio">Inscripció a la excursió</button></a>


    <h4 class="text-center text-uppercase fw-bold mt-4 mb-4">Benvinguts a la nostra emocionant sortida!</h4>
    <p class="text-center">Estem encantats d'anunciar una inesperada oportunitat d'aventura que ha sorgit després del
        notable esforç dels estudiants de DAW. Amb l'alegria de compartir aquesta experiència, hem creat una pàgina
        d'inici única que no només us proporcionarà tots els detalls de la sortida, sinó que també capturarà l'esperit
        de l'aventura mitjançant un encantador carrusel de fotografies amb llicència Creative Commons. Exploreu el
        nostre contingut i deixeu-vos inspirar per les imatges que us preparem amb tot el nostre afecte.</p>


        <div class="container">
  <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#cookieModal">
    Mirar cookies
  </button>  
</div>

<div class="modal fade modalcookie" id="cookieModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="notice d-flex justify-content-between align-items-center">
          <div class="cookie-text">Aquesta web utilitza cookies</div>
          <div class="buttons d-flex flex-column flex-lg-row">
            <a href="#a" class="btn btn-success btn-sm" data-dismiss="modal">Acceptar</a>
            <a href="#a" class="btn btn-secondary btn-sm" data-dismiss="modal">Llegir mes</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



</body>

</html>