<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Neptune - Responsive Admin Dashboard Template</title>

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link href=".././assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href=".././assets/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">
    <link href=".././assets/plugins/pace/pace.css" rel="stylesheet">


    <!-- Theme Styles -->
    <link href=".././assets/css/main.min.css" rel="stylesheet">
    <link href=".././assets/css/custom.css" rel="stylesheet">

    <link rel="icon" type="image/png" sizes="32x32" href=".././assets/images/neptune.png" />
    <link rel="icon" type="image/png" sizes="16x16" href=".././assets/images/neptune.png" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="app app-auth-sign-up align-content-stretch d-flex flex-wrap justify-content-end">
        <div class="app-auth-background">

        </div>
        <div class="app-auth-container">
            <div class="logo">
                <a href="index.html">Neptune</a>
            </div>
            <p class="auth-description">Please enter your credentials to create an account.<br>Already have an account? <a href="sign-in.html">Sign In</a></p>
            <?php session_start() ?> <!-- start a session -->
            <form action="sign_up_handler.php" method="post">
                <div class="auth-credentials m-b-xxl">
                    <label for="signUpUsername" class="form-label">Name</label>
                    <input name="name" type="name" class="form-control m-b-md <?php echo isset($_SESSION['name_error']) ? 'is-invalid' : '';  ?>" id="signUpUsername" aria-describedby="signUpUsername" placeholder="Enter Name">

                    <!-- //! show if name_error -->
                    <div class="form-text m-b-md text-danger"><?php echo $_SESSION['name_error'] ?? '' ?></div>

                    <label for="signUpEmail" class="form-label">Email address</label>
                    <input name="email" type="email" class="form-control m-b-md <?php echo isset($_SESSION['email_error']) ? 'is-invalid' : '';  ?>" id="signUpEmail" aria-describedby="signUpEmail" placeholder="example@neptune.com">
                    <!-- //! show if email_error -->
                    <div class="form-text m-b-md text-danger"><?php echo $_SESSION['email_error'] ?? '' ?></div>

                    <label for="signUpPassword" class="form-label">Password</label>
                    <input name="password" type="password" class="form-control <?php echo isset($_SESSION['password_error']) ? 'is-invalid' : '';  ?>" id="signUpPassword" aria-describedby="signUpPassword" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;">
                    <!-- //! show if password_error -->
                    <div class="form-text m-b-md text-danger"><?php echo $_SESSION['password_error'] ?? '' ?></div>

                    <label for="signUpPassword" class="form-label">Confirm Password</label>
                    <input name="c_password" type="password" class="form-control <?php echo isset($_SESSION['c_password_error']) ? 'is-invalid' : '';  ?>" id="signUpPassword" aria-describedby="signUpPassword text-danger" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;">
                    <!-- //! show if confirm_password -->
                    <div class="form-text m-b-md text-danger"><?php echo $_SESSION['c_password_error'] ?? '' ?></div>
                    <?php session_destroy() ?> <!-- removes all session data -->
                </div>

                <div class="auth-submit">
                    <input type="submit" name="submit" class="btn btn-primary" value="Sign Up" />
                </div>
            </form>
            <div class="divider"></div>
        </div>
    </div>

    <!-- Javascripts -->
    <script src=".././assets/plugins/jquery/jquery-3.5.1.min.js"></script>
    <script src=".././assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src=".././assets/plugins/perfectscroll/perfect-scrollbar.min.js"></script>
    <script src=".././assets/plugins/pace/pace.min.js"></script>
    <script src=".././assets/js/main.min.js"></script>
    <script src=".././assets/js/custom.js"></script>
</body>

</html>