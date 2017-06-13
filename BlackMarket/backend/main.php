
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

    <title>Login</title>
    <script type="text/javascript">
      $(document).ready(function() {
        $('.carousel').carousel({dist:0});
        window.setInterval(function(){$('.carousel').carousel('next')}, 6000)
      });

    </script>
  </head>
  <body style="background-color:#222831">
    <?php include 'layouts/nav-bar.php'; ?>
    <div class="row"></div>
    <div class="container">
      <div class="carousel carousel-slider center" data-indicators="true">

        <a class="carousel-item" href="#one!"><img src="http://lorempixel.com/800/400/food/1"></a>
        <a class="carousel-item" href="#two!"><img src="http://lorempixel.com/800/400/food/2"></a>
        <a class="carousel-item" href="#three!"><img src="http://lorempixel.com/800/400/food/3"></a>
        <a class="carousel-item" href="#four!"><img src="http://lorempixel.com/800/400/food/4"></a>
        <a class="carousel-item" href="#five!"><img src="http://lorempixel.com/800/400/food/3"></a>

      </div>
    </div>
      <div class="row" id="products"></div>

    <script src="js/amadata.js"></script>
<script type="text/javascript">

    $('.carousel.carousel-slider').carousel({fullWidth: true});
</script>

  </body>
</html>
