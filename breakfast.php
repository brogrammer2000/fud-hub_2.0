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

    <link rel="stylesheet" href="bld.css">




</head>
<body>



<div class="container">
    <?php include 'web_header.php'?>;
    <div class="row">
        <div class="col-sm-12" id="heading">
            <h1>BREAKFAST</h1>

        </div>
    </div>
        <hr>

        <div class="row" id="recipes">
            <div class="col-sm-4" id="br_coloumn">
                <a href="chicken_slider.html">
                <img src="blueberry_pancakes.jpg" alt="Recipe_1" id="br_img">
                <p><b>Blueberry Pancakes</b> </p>
            </div>
            <div class="col-sm-4" id="br_coloumn">
                <a href="chicken_slider.html">
                <img src="oatmeal.jpg" alt="Recipe_2" id="br_img">
                <p><b>Oatmeal</b></p>
            </div>
            <div class="col-sm-4" id="br_coloumn">
                <a href="chicken_slider.html">
                <img src="eggs_bacon.jpg" alt="Recipe_3" id="br_img">
                <p><b>Eggs and Bacon</b> </p>
            </div>
        </div>
    <?php include 'footer.php'?>;
</div>



</body>
</html>
