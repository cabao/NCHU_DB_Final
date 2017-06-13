
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
          <div class="row"></div>
          <div class="col l4"></div>
          <div class="col s12 m7 l6">
            <div class="card">
              <div class="card-content">
                <form class="" action="pro-update.php" method="post">
                  <input id="idd" type="text" name="idd" style="display:none">

                  <div class="row">
                    <div class="input-field col s12">
                      <input id="name" type="text" class="validate" name="name"  >
                      <!-- <label class="active" for="username">Username</label> -->
                    </div>
                  </div>

                  <div class="row">
                    <div class="input-field col s12">
                      <input id="description" type="textarea" class="validate" name="description" >
                      <!-- <label class="active" for="password">Password</label> -->
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <input id="price" type="text" class="validate" name="price">
                      <!-- <label class="active" for="username">Username</label> -->
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <input id="image" type="text" class="validate" name="image" >
                      <!-- <label class="active" for="password">Password</label> -->
                    </div>
                  </div>
                  <div class="row">
                    <input class="btn waves-effect waves-light right" type="submit" value="Update">
                  </div>
                </form>
              </div>

            </div>
          </div>
        </div>
      </div>

    <script>
      var strUrl = location.search;
      var getPara, ParaVal;
      var aryPara = [];
      var imgData ;

      if (strUrl.indexOf("?") != -1) {
        var getSearch = strUrl.split("?");
        getPara = getSearch[1].split("&");
        for (i = 0; i < getPara.length; i++) {
          ParaVal = getPara[i].split("=");
          aryPara.push(ParaVal[0]);
          aryPara[ParaVal[0]] = ParaVal[1];
        }
      }

      $(function() {
        $.ajax({
          url: 'api-pro.php', //the script to call to get data
          data: "", //you can insert url argumnets here to pass to api.php for example "id=5&parent=6"
          dataType: 'json', //data format
          success: function(data) //on recieve of reply
          {
            document.getElementById("idd").value = data[ParaVal[1]-1].id;

            document.getElementById("name").value = data[ParaVal[1]-1].name;
            document.getElementById("description").value = data[ParaVal[1]-1].description;

            document.getElementById("price").value = data[ParaVal[1]-1].price;
            document.getElementById("image").value = data[ParaVal[1]-1].image;
            // document.getElementById("order").value = data[ParaVal[1]].id;

            // imgData = data[ParaVal[1]].image;
          }
        });
      });
</script>


  </body>
</html>
