<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to New Mansoura Hospital</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="background-style.css">
    <style>
        /* Force no background on logo image */
        img[src="images/hospital-logo.png"] {
            background: transparent !important;
            border: none !important;
            box-shadow: none !important;
            outline: none !important;
        }

        .logo-container {
            background: transparent;
            padding: 0;
            margin: 0;
            border: none;
            box-shadow: none;
        }

        .welcome-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            text-align: center;
            padding: 20px;
            position: relative;
            z-index: 1;
        }
        .logo {
            max-width: 150px;
            margin-bottom: 30px;
            background: transparent;
            border: none;
            box-shadow: none;
            filter: drop-shadow(0 0 10px rgba(0, 0, 0, 0.2));
            object-fit: contain;
        }
        .welcome-title {
            font-size: 3.5rem;
            margin-bottom: 20px;
            font-weight: 600;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
            color: white;
        }
        .welcome-subtitle {
            font-size: 1.8rem;
            margin-bottom: 40px;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
            color: white;
        }
        .btn-welcome {
            padding: 12px 30px;
            font-size: 1.2rem;
            margin: 10px;
            border-radius: 50px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: all 0.3s;
        }
        .btn-welcome:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }
        .btn-login {
            background-color: #fff;
            color: #3931af;
            border: none;
        }
        .btn-login:hover {
            background-color: #f8f9fa;
            color: #3931af;
        }
        .btn-register {
            background-color: transparent;
            color: white;
            border: 2px solid white;
        }
        .btn-register:hover {
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
        }
        .animation-container {
            margin-top: 20px;
        }
        @keyframes float {
            0% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-15px);
            }
            100% {
                transform: translateY(0px);
            }
        }
        .floating-image {
            animation: float 3s ease-in-out infinite;
            max-width: 200px;
        }
    </style>
</head>
<body>
    <div class="welcome-container animated fadeInUp">
        <div class="logo-container" style="background: transparent;">
            <img src="images/hospital-logo.png" alt="hospital logo" class="logo">
        </div>
        <h1 class="welcome-title">NEW MANSOURA HOSPITAL</h1>
        <p class="welcome-subtitle">Your Health is Our Priority</p>
        
        <div class="btn-group">
            <a href="login.php" class="btn btn-welcome btn-login">Login</a>
            <a href="index.php" class="btn btn-welcome btn-register">Register</a>
        </div>
        
        <div class="animation-container">
            <img src="images/ambulance1.png" alt="ambulance" class="floating-image">
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html> 