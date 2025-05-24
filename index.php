<html>
<head>
	<title>HMS</title>
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
<link rel="stylesheet" type="text/css" href="style1.css">
<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous"> -->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<style >
     .form-control {
    border-radius: 0.75rem;
}
.navbar {
    background-color: #0062cc !important;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
}

/* Removed global background:white rules */
.register-card {
  background: #f8f9fa !important;
}
</style>

<script>
    var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('cpassword').value) {
    document.getElementById('message').style.color = '#5dd05d';
    document.getElementById('message').innerHTML = 'Matched';
  } else {
    document.getElementById('message').style.color = '#f55252';
    document.getElementById('message').innerHTML = 'Not Matching';
  }
}

function alphaOnly(event) {
  var key = event.keyCode;
  return ((key >= 65 && key <= 90) || key == 8 || key == 32);
};

function checklen()
{
    var pass1 = document.getElementById("password");  
    if(pass1.value.length<6){  
        alert("Password must be at least 6 characters long. Try again!");  
        return false;  
  }  
}

</script>

</head>

<!------ Include the above in your HEAD tag ---------->
<body style="background: -webkit-linear-gradient(left, #3931af, #00c6ff); background-size: cover;">
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background: -webkit-linear-gradient(left, #3931af, #00c6ff); background-size: cover; border: none; box-shadow: 0px 2px 5px rgba(0,0,0,0.1);">
    <div class="container" style="background: transparent !important; width: 100% !important;">
      <a class="navbar-brand js-scroll-trigger" href="welcome.php" style="margin-top: 10px;margin-left:-65px;font-family: 'IBM Plex Sans', sans-serif;"><h4><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp NEW MANSOURA HOSPITAL</h4></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item" style="margin-right: 40px;">
            <a class="nav-link js-scroll-trigger" href="welcome.php" style="color: white;font-family: 'IBM Plex Sans', sans-serif;"><h6>HOME</h6></a>
          </li>
          <li class="nav-item" style="margin-right: 40px;">
            <a class="nav-link js-scroll-trigger" href="services.html" style="color: white;font-family: 'IBM Plex Sans', sans-serif;"><h6>ABOUT US</h6></a>
          </li>
          <li class="nav-item" style="margin-right: 40px;">
            <a class="nav-link js-scroll-trigger" href="contact.html" style="color: white;font-family: 'IBM Plex Sans', sans-serif;"><h6>CONTACT</h6></a>
          </li>
          <li class="nav-item dropdown" style="margin-right: 40px;">
            <a class="nav-link dropdown-toggle" href="login.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;font-family: 'IBM Plex Sans', sans-serif;">
              <h6>LOGIN</h6>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="index1.php">Patient Login</a>
              <a class="dropdown-item" href="doctor-login.php">Doctor Login</a>
              <a class="dropdown-item" href="admin-login.php">Admin Login</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<div class="register-card-container d-flex align-items-center justify-content-center" style="min-height: 100vh;">
  <div class="card register-card shadow" style="max-width: 700px; width: 100%; margin: 100px auto; border-radius: 20px;">
    <div class="card-body p-5">
      <center>
        <img src="images/hospital-logo.png" alt="hospital_logo" style="width: auto; max-width: 100px; margin-bottom: 15px;">
        <br>
        <h3 style="margin-top: 5%">Register as Patient</h3><br>
        <form method="post" action="func2.php">
          <div class="row register-form">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="First Name *" name="fname" onkeydown="return alphaOnly(event);" required/>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Your Email *" name="email" />
              </div>
              <div class="form-group">
                <input type="password" class="form-control" placeholder="Password *" id="password" name="password" onkeyup='check();' required/>
              </div>
              <div class="form-group">
                <div class="maxl">
                  <label class="radio inline">
                    <input type="radio" name="gender" value="Male" checked>
                    <span> Male </span>
                  </label>
                  <label class="radio inline">
                    <input type="radio" name="gender" value="Female">
                    <span>Female </span>
                  </label>
                </div>
                <a href="index1.php">Already have an account?</a>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Last Name *" name="lname" onkeydown="return alphaOnly(event);" required/>
              </div>
              <div class="form-group">
                <input type="tel" minlength="10" maxlength="10" name="contact" class="form-control" placeholder="Your Phone *" />
              </div>
              <div class="form-group">
                <input type="password" class="form-control" id="cpassword" placeholder="Confirm Password *" name="cpassword" onkeyup='check();' required/><span id='message'></span>
              </div>
              <input type="submit" class="btn btn-primary" name="patsub1" onclick="return checklen();" value="Register" style="width: 100%; margin-top: 10px;"/>
            </div>
          </div>
        </form>
      </center>
    </div>
  </div>
</div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

<style>
.register-card.card.shadow {
  background: #f8f9fa !important;
}
</style>
</body>
</html>

  