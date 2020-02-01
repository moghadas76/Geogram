<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Login Service</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="css/style.css">
</head>
<body  style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/91.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">

  
        <header>
          <!-- Navbar -->
          <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
            <div class="container">
              <a class="navbar-brand" href="#">
                <strong>Geogram</strong>
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="index.html">Signup
                      <span class="sr-only">(current)</span>
                    </a>
                  
                </ul>
                <form class="form-inline">
                  <div class="md-form my-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                  </div>
                </form>
              </div>
            </div>
          </nav>
          <!-- Navbar -->
          <!-- Full Page Intro -->
          
              <!-- Content -->
             
                <!--Grid row-->
                <div class="row  mt-4">
                
                  <!--Grid column-->
                  <div class="container">
                   
                  <!--Grid column-->
                  <!--Grid column-->
                  <div class="col-md-9 col-xl-5 mb-4">
                    <!--Form-->
                    
                    <div class="card wow fadeInRight" data-wow-delay="0.3s" style="margin-top:30%">
                      <div class="card-body">
                        <!--Header-->
                        <div class="text-center">
                        <?php
                        if(isset($_GET['Message'])){
                        ?>
                  <div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin-top: 10%;">
                  
                    <?php
                        echo $_GET['Message'];
                        ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  
                  </div>
                  <?php } ?>
                          <h3 class="white-text">
                            <i class="fas fa-user white-text"></i> Login</h3>
                          <hr class="hr-light">
                        </div>
                        <!--Body-->
                        <form  action="signin.php" method="POST">
                          <div class="md-form">
                            <i class="fas fa-user prefix white-text active"></i>
                            <input type="text" id="form3" class="white-text form-control" name="username">
                            <label for="form3" class="active" >Your User name</label>
                          </div>
                          
                          <div class="md-form">
                            <i class="fas fa-lock prefix white-text active"></i>
                            <input type="password" id="form4" name="password" class="white-text form-control">
                            <label for="form4" >Your password</label>
                          </div>
                          <div class="text-center mt-4">
                            <button class="btn btn-indigo" id="login_btn">Sign in</button>
                            <hr class="hr-light mb-3 mt-4">
                            <div class="inline-ul text-center">
                            </form>  
                            </div>
                        </div>
                      </div>
                    </div>
                    <!--/.Form-->
                  
                <!--Grid row-->
              </div>
              <!-- Content -->
            </div>
            <!-- Mask & flexbox options-->
          </div>
          <!-- Full Page Intro -->
        </header>
        <!-- Main navigation -->
        <!--Main Layout-->
        <main>
          <div class="container">
            <!--Grid row-->
            
            <!--Grid row-->
          </div>
        </main>
        <!--Main Layout-->

  
  <!-- End your project here-->

  <!-- jQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript">
  
    
  </script>

</body>
</html>
