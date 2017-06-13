<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
  if($_SESSION['user'] == null)
      header('Location: index.php');


?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="./css/materialize.css">
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/jquery.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="./js/materialize.js"></script>
    <script src="vendors/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="vendors/sweetalert/dist/sweetalert.css">

    <title>Black Market</title>
    <script type="text/javascript">
      $(document).ready(function() {
        $('.carousel').carousel({dist:0});
        window.setInterval(function(){$('.carousel').carousel('next')}, 6000)
      });
function carouselHeight() {
    $('.carousel.carousel-slider').each(function() {
        var newHeight = $(this).find('.carousel-item img').height();
        var origStyle = $(this).attr('style');
        $(this).attr('style', origStyle+'; height: '+newHeight+'px !important');
    });
}
    </script>
  </head>
  <body style="background-color:#222831">
    <?php include 'layouts/nav-bar.php'; ?>
    <div class="row"></div>
    <div class="container">
      <div class="carousel carousel-slider center" data-indicators="true">

        <a class="carousel-item" href="#one!"><img src="images/4.jpg"width="1024" height="500"></a>
        <a class="carousel-item" href="#two!"><img src="images/2.jpg" width="1024" height="500"></a>
        <a class="carousel-item" href="#three!"><img src="images/3.jpg"width="1024" height="500"></a>
        <a class="carousel-item" href="#four!"><img src="images/5.jpg"width="1024" height="500"></a>


      </div>
    </div>
      <div class="row" id="products"></div>

    <script src="js/amadata.js"></script>
<script type="text/javascript">

    $('.carousel.carousel-slider').carousel({fullWidth: true});
$(window).resize(function(){carouselHeight();});

</script>

  </body>
</html>
