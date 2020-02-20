<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- mobile first -->

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!-- my CSS-->
    <link rel="stylesheet" href="CSS/recipe_css.css">
    <link rel="stylesheet" href="CSS/login.css">

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <a href="homePage.php">
                    <img src="image/fud-hub_logo_ns.jpg" alt="fud-hub_logo" id="logo">
                </a>
                <hr>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-5 form">
                <h1>Fub-Hub</h1>
                <form method="POST" action="auth.php">
                    <input type="text" name="username" placeholder="  Enter your username" class="text" required><br>
                    <input type="password" name="password" placeholder="  Enter your password" class="text" required><br>
                    <input type="checkbox" name="checkbox" style="margin-left: 2.5%"> Remember me<br>
                    <input type="submit" name="submit" value="Login" class="btn btn-outline-success btn-success login">
                </form>

            </div>
            <div class="col-lg-2"> </div>
            <div class="col-lg-5 avatarLog">
                <img src="image/Avatar.png" alt="avatar" class="image-fluid mx-auto d-block">
            </div>
        </div>
    </div>


    <?php include 'footer.php' ?>



z