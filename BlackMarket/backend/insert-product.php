
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

    <title>商品管理</title>
    <script type="text/javascript">
      $(document).ready(function() {

      });

    </script>
  </head>
  <body style="background-color:#222831">

    <nav class="top-nav">
      <div class="container">
        <div class="nav-wrapper"><a class="page-title center" style="margin-left:15%">商品管理</a></div>
      </div>
    </nav>
    <?php include 'layouts/side-bar.php'; ?>




   <div class="row">

      <div class="col l4"></div>
      <div class="col s12 m7 l4">
        <div class="card">
          <div class="card-content">
            <form class="" action="./new-pro.php" method="post">
              <div class="row">
                <div class="input-field col s12">
                  <input id="name" type="text" class="validate" name="name" >
                  <label for="name">Name</label>
                </div>
              </div>

              <div class="row">
                <div class="input-field col s12">
                  <input id="description" type="text" class="validate" name="description">
                  <label for="description">Description</label>
                </div>
              </div>

              <div class="row">
                <div class="input-field col s12">
                  <input id="price" type="text" class="validate" name="price">
                  <label for="price">Price</label>
                </div>
              </div>

              <div class="row">
                <div class="input-field col s12">
                  <input id="image" type="text" class="validate" name="image">
                  <label for="image">Image</label>
                </div>
              </div>
              <div class="row">
                <input class="btn waves-effect waves-light right" type="submit" value="  OK  ">

              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

  </body>
</html>
