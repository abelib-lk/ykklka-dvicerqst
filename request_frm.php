<!--Asanka B Ekanayake @2023-->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Asanka B Ekanayake">
    <meta name="generator" content="Bootstrap">
    <title>YKK - Request Forum</title>


    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        main > .container {
            padding: 60px 15px 0;
        }

        .footer {
            background-color: #f5f5f5;
        }

        .footer > .container {
            padding-right: 15px;
            padding-left: 15px;
        }

        code {
            font-size: 80%;
        }

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

</head>
  <body class="d-flex flex-column h-100">
  <header>

  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#"><img src="logo.png" alt="" width="50" height="22">LANKA</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">History</a>
        </li>
        <!--li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li-->
      </ul>
      <form class="form-inline mt-2 mt-md-0">
        <!--input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search"-->
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</button>
      </form>
    </div>
  </nav>
</header>
<!-- Begin page content -->
<main role="main" class="flex-shrink-0">
  <div class="container">
    <h1 class="mt-5">Request Device to use</h1>
    <p class="lead">Make request to use device. when you submit the system will automatically send your request to your HOD with copy to MD</p>
  
    <form class="was-validated">
  <div class="form-row">
      <div class="form-group col-md-6">
  <fieldset disabled>
      <label for="inputEmail4">Your Name</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="">
    </div></fieldset>
    <div class="form-group col-md-6">
    <fieldset disabled>
      <label for="inputPassword4">Your Department</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="">
    </div></fieldset>
  </div>

  <div class="form-group">
    <label for="validationTextarea">Reson to Request</label>
    <textarea class="form-control is-invalid" id="validationTextarea" placeholder="Required! Clearly type your reason of use" required></textarea>
  </div>

  <div class="form-check form-check-inline ">
  <input class="form-check-input is-invalid" type="checkbox" id="inlineCheckbox1" value="option1">
  <label class="form-check-label is-invalid" for="inlineCheckbox1">Digital Camera</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input is-invalid" type="checkbox" id="inlineCheckbox2" value="option2">
  <label class="form-check-label is-invalid" for="inlineCheckbox2">PenDrive</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" disabled>
  <label class="form-check-label" for="inlineCheckbox3">Portable HDD (disabled)</label>
</div>


  <!--div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div-->
  <button type="submit" class="btn btn-warning">Request Access</button>
</form>
</div>
</main>

<div></div>
<footer class="footer mt-auto py-1">
  <div class="container">
    <span class="text-muted">YKK LANKA IT &copy;2023 | 
    <?php 
    echo "Your PC: " .gethostname(); 
    $timezone = date_default_timezone_get();
    echo " | The current server timezone is: " . $timezone;
    ?></span>
  </div>
  
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>
      window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
      <script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
  </body>
</html>