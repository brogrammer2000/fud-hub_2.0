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
                <h1>Create a New Account</h1>
                <span class="require">* required field</span>
                <form method="POST" action="createUser.php">
                    <input type="text" name="fname" placeholder="  Enter your first name" class="name text">
                    <input type="text" name="lname" placeholder="  Enter your last name" class="name text"><br>
                    <input type="email" name="email" placeholder="  Enter your email address" class="text" required><span class="require">*</span><br>
                    <input type="text" name="username" placeholder="  Enter your username" class="text" required><span class="require">*</span>
                    <input type="password" name="password" placeholder="  Enter your password" class="text" required><span class="require">*</span>
                    <h5 class="text-secondary">Birthday</h5>
                    <select name="month" class="select">
                        <option>Month</option>
                        <option value="01">Jan</option>
                        <option value="02">Feb</option>
                        <option value="03">Mar</option>
                        <option value="04">Apr</option>
                        <option value="05">May</option>
                        <option value="06">Jun</option>
                        <option value="07">Jul</option>
                        <option value="08">Aug</option>
                        <option value="09">Sep</option>
                        <option value="10">Oct</option>
                        <option value="11">Nov</option>
                        <option value="12">Dec</option>
                    </select>

                    <select name="day">
                        <option>Day</option>
                        <?php
                        for ($i = 1; $i <= 31; $i++)
                            echo "<option>$i</option>";
                        ?>
                    </select>

                    <select name="year">
                        <option>Year</option>
                        <?php
                        for ($i = 1905; $i <= 2020; $i++)
                            echo "<option>$i</option>";
                        ?>
                    </select>

                    <h5 class="text-secondary">Gender</h5>
                    <h6 class="display-5"><input type="radio" name="gender" value="female" class="check" required>Female
                        <input type="radio" name="gender" value="male" class="check" required>Male
                        <input type="radio" name="gender" value="other" class="check" required>Other <span class="require">*</span></h6>

                    <p>By clicking Sign Up, you agree to our <a href="terms_conditions.php">Terms & Conditions</a> . You may receive SMS Notifications from us and can opt out any time.</p>

                    <input type="submit" name="submit" value="Sign Up" class="btn btn-outline-success btn-success signup">
                </form>
            </div> <!-- form -->

            <div class="col-lg-2"> </div>
            <div class="col-lg-5 avatar">
                <img src="image/Avatar.png" alt="avatar" class="image-fluid mx-auto d-block">
            </div>
        </div>




        <?php include 'footer.php' ?>