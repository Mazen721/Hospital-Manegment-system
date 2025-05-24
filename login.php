<?php
include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Patient Login - New Mansoura Hospital</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="background-style.css">
    <style type="text/css">
      /* Override navbar styles */
      #mainNav.navbar {
        background-color: #3931af !important;
        background-image: none !important;
        background: #3931af !important;
        backdrop-filter: none !important;
      }
      .card {
        background: rgba(248, 249, 250, 0.85) !important;
        border-radius: 15px;
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        backdrop-filter: blur(10px);
        max-width: 500px;
        margin: 0 auto;
      }
      .login-container {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        padding: 20px;
        position: relative;
        z-index: 1;
      }
      .btn-login {
        background: linear-gradient(to right, #3931af, #00c6ff);
        border: none;
        border-radius: 50px;
        padding: 10px 20px;
        font-weight: 600;
        color: white;
        cursor: pointer;
        transition: all 0.3s;
      }
      .btn-login:hover {
        transform: translateY(-3px);
        box-shadow: 0 6px 12px rgba(0,0,0,0.1);
      }
      .login-options {
        display: flex;
        justify-content: center;
        margin-top: 30px;
      }
      .login-option {
        margin: 0 10px;
        padding: 15px;
        text-align: center;
        background: white;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        transition: all 0.3s;
        width: 120px;
        cursor: pointer;
        text-decoration: none;
        color: #333;
      }
      .login-option:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.1);
        text-decoration: none;
        color: #3931af;
      }
      .login-option i {
        font-size: 24px;
        margin-bottom: 10px;
        color: #3931af;
      }
      .form-control {
        border-radius: 50px;
        padding: 12px 20px;
        margin-bottom: 15px;
      }
      .register-link {
        margin-top: 20px;
        text-align: center;
      }
      .register-link a {
        color: #3931af;
        font-weight: 600;
        transition: all 0.3s;
      }
      .register-link a:hover {
        text-decoration: none;
        color: #00c6ff;
      }
      #inputbtn:hover {
        background: #3726a8;
      }
    </style>
  </head>
  <body>
    <!-- Fixed navbar color override -->
    <style>
      nav.navbar, .navbar, #mainNav {
        background-color: #3931af !important;
        background: #3931af !important;
        background-image: none !important;
      }
    </style>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background: #3931af !important; background-image: none !important; background-color: #3931af !important; backdrop-filter: none !important;">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="welcome.php" style="margin-top: 10px;margin-left:-65px;font-family: 'IBM Plex Sans', sans-serif;"><h4><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp NEW MANSOURA HOSPITAL</h4></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item" style="margin-right: 40px;">
              <a class="nav-link js-scroll-trigger" href="index.php" style="color: white;font-family: 'IBM Plex Sans', sans-serif;"><h6>HOME</h6></a>
            </li>
            <li class="nav-item" style="margin-right: 40px;">
              <a class="nav-link js-scroll-trigger" href="services.html" style="color: white;font-family: 'IBM Plex Sans', sans-serif;"><h6>ABOUT US</h6></a>
            </li>
            <li class="nav-item" style="margin-right: 40px;">
              <a class="nav-link js-scroll-trigger" href="contact.html" style="color: white;font-family: 'IBM Plex Sans', sans-serif;"><h6>CONTACT</h6></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="login-container">
      <div class="row">
        <div class="col-md-12">
          <div class="card animated fadeInUp">
            <div class="card-body p-5">
              <center>
                <img src="images/hospital-logo.png" alt="hospital_logo" style="width: auto; max-width: 100px; margin-bottom: 15px;">
                <h3 class="mb-4">Login to Your Account</h3>
              </center>

              <div class="login-options">
                <a href="index1.php" class="login-option">
                  <i class="fa fa-user"></i>
                  <p>Patient</p>
                </a>
                <a href="doctor-login.php" class="login-option">
                  <i class="fa fa-user-md"></i>
                  <p>Doctor</p>
                </a>
                <a href="admin-login.php" class="login-option">
                  <i class="fa fa-cog"></i>
                  <p>Admin</p>
                </a>
              </div>

              <div class="register-link">
                <p>Don't have an account? <a href="index.php">Register here</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>
</html> 