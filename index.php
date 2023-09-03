
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Device use request system YKK Lanka">
    <meta name="author" content="Asanka B Ekanayake">
    <meta name="generator" content="Bootstrap">
    <title>YKK - Login</title>

    <!--Asanka B Ekanayake @2023-->

    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="login.css" rel="stylesheet">
  </head>
  <body>
    <form class="form-signin">
  <div class="text-center mb-4">
    <img class="mb-4" src="logo.png" alt="" width="150" height="72">
    <h1 class="h3 mb-3 font-weight-normal">YKK Lanka Device Request System</h1>
    <p>Request to use electronic media in compay enviorment. <a href="request_frm.php">Know to our infomation security policy.</a></p>
  </div>

  <div class="form-label-group">
    <input type="number" id="inputEPF" class="form-control" placeholder="My EPF No" required autofocus>
    <label for="inputEmail">Enter Your EPF</label>
  </div>

  <div class="form-label-group">
    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
    <label for="inputPassword">Secret Code</label>
  </div>

  <button class="btn btn-lg btn-primary btn-block" type="submit">Enter</button>
  <p class="mt-5 mb-3 text-muted text-center">&copy;YKK Lanka IT - 
    <?php
    $date = date('Y-m-d H:i:s');
    echo $date;
    ?>
  </p>
</form>
</body>
</html>
