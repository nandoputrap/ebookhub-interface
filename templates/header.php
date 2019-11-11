<!--  -->


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ebookhub</title>

    <!-- ALL CSS HERE  -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">


    <!-- ALL FONTS HERE -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
    <!-- <link rel="stylesheet" href="css/docs.theme.min.css"> -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- <link rel="stylesheet" href="css/owl.theme.default.min.css"> -->

    <!-- ALL JS HERE -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.4.1.js"></script>
    <script src="js/custom.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  </head>

  <body>

    <!-- Begin navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <a class="navbar-brand" href="index.php"><img alt="Ebookhub.id" src="images/logo.png" class="img-responsive" /></a>

        </div>

        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#about">Kategori</a></li>
            <li><a href="shop.php">Shop</a></li>

            <li>

              <form class="navbar-form" role="search">
                  <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search" name="q">
                      <div class="input-group-btn">
                          <button class="btn btn-default hidden-xs" type="submit">Cari</button>
                      </div>
                  </div>
              </form>
            </li>

            <li> <a data-toggle="modal" href="#myModal">Masuk</a> </li>
          </ul>
        </div>

        <!-- Trigger the modal with a button -->
<!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button> -->

<!-- Modal -->

      </div>
    </nav>
    <!-- End navigation -->

    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <div class="modal-title">
              <h1 class="text-center">Masuk ke Akun Ebookhub</h1>
            </div>

            <div class="modal-form text-center input-login">
              <input type="email" class="form-control" placeholder="Masukkan alamat e-mail...">
              <input type="password" class="form-control" placeholder="Masukkan kata sandi...">
              <button type="button" class="btn btn-primary btn-block btn-ebookhub">Masuk</button>
            </div>
          </div>

          <div class="modal-footer">
            <div class="row">
              <div class="col-md-12 text-center">
                <h4>ATAU</h4>
              </div>

              <div class="login-social">
                <div class="col-md-6">
                  <button type="button" class="btn btn-primary btn-block btn-fb"> <i class="fa fa-facebook"></i>&nbsp;&nbsp;Facebook</button>
                </div>

                <div class="col-md-6">
                  <button type="button" class="btn btn-primary btn-block btn-google"> <i class="fa fa-google"></i>&nbsp;&nbsp;Google</button>
                </div>
              </div>

              <div class="col-md-12 text-center">
                <div class="belum-daftar">
                  <a href="#">Lupa password?</a>

                  <p>Belum punya akun? Daftar di <a href="register.php">sini</a> </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- <h1>Masuk ke Akun Ebookhub</h1> -->

      </div>
    </div>
