
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/materialize.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/jquery.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="./js/materialize.min.js"></script>
    <title>Login</title>
    <script type="text/javascript">


    </script>
  </head>
  <body style="background-color:#222831">

    <div class="container">
        <div id="login" >
          <div class="row">
            <div class="row"></div>
            <div class="col l3"></div>
            <div class="col s12 m7 l6">
              <div class="card login-box-shadow" style="background-color:#393E46">
                <div class="card-content">
                  <form class="" action="login.php" method="post">
                    <div class="row">
                      <div class="input-field col s12">
                        <input id="username" type="text" class="validate" name="username">
                        <label for="username">Username</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s12">
                        <input id="password" type="password" class="validate" name="password">
                        <label for="password">Password</label>
                      </div>
                    </div>
                    <div class="row">
                      <input class="btn waves-effect waves-light right" type="submit" value="Login">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>

  </body>
</html>
