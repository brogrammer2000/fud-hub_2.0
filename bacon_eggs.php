<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!--CSS link-->
    <link href='https://fonts.googleapis.com/css?family=Marck Script' rel='stylesheet'>
    <link rel="stylesheet" href="CSS/end_recipe_css.css">

    <!-- Navbar-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/4.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
    </script>

    <!--favicon link-->
    <link rel="shortcut icon" href="favicon.ico" />

    <title>FUD-HUB 2.0</title>
</head>

<body>
    <div class="container">
        <?php include "web_header.php"
        ?>

        <div class="row">
            <div class="col-sm-12" id=rec_name>
                <p><b>
                        <h1>Bacon & Eggs</h1>
                    </b></p>
                <hr>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12" id="rec_desc">
                <p>
                    <h6>One of the all-time best keto breakfasts ever!
                        Step up your bacon and eggs game with this mouth-watering version.<br>
                        Gauge your hunger meter and enjoy as many eggs as you need to feel satisfied.</h6>
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6" id="ingredients">
                <p><b>
                        <h2>Ingredients </h2>
                        <hr>
                    </b></p>
                <p>
                    <ul>
                        <li> 8 eggs</li>
                        <li>5 oz. bacon, in slices</li>
                        <li>5 tsp. olive oil</li>
                        <li>cherry tomatoes (optional)</li>
                        <li>fresh parsley (optional)</li>
                    </ul>
                </p>
            </div>
            <div class="col-sm-6" id="rec_vid">
                <iframe src="https://www.youtube.com/embed/_yDLYnOd2q8?start=23" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12" id="instructions">
                <p><b>
                        <h2>Instructions</h2>
                        <hr>
                    </b></p>

                <p>
                    <ul>
                        <li>Fry the bacon in a pan on medium high heat until crispy. Put aside on a plate. Leave the rendered fat in the pan.</li>
                        <li>Use the same pan to fry the eggs. Place it over medium heat and crack your eggs into the bacon grease. You can also crack them into a measuring cup and carefully pour into the pan to avoid splattering of hot grease.</li>
                        <li>Cook the eggs any way you like them.</li>
                        <li>For sunny side up — leave the eggs to fry on one side and cover the pan with a lid to make sure they get cooked on top.</li>
                        <li> For eggs cooked over — flip the eggs over after a few minutes and cook for another minute.</li>
                        <li> Cut the cherry tomatoes in half and fry them at the same time.</li>
                        <li>Salt and pepper to taste.</li>
                    </ul>
                </p>

            </div>
        </div>

        <div class="row">
            <div class="col-sm-6" id="notes_nutrition">
                <p><b>
                        <h2>Notes & Nutrition Info </h2>
                        <hr>
                    </b></p>
                <p>
                    <ul>
                        <li>Step up your bacon game with organic bacon if you can find it… it is tastier and has fewer additives.</li>
                        <li>Calories: 120</li>
                        <li>Total Fat: 7.1g</li>
                        <li>Cholesterol: 43.1mg</li>
                        <li>Sodium: 317.2mg</li>
                        <li>Potassium: 106.3mg</li>
                        <li>Carbohydrates: 22.3g</li>
                        <li>Protein 4.7g</li>
                    </ul>
                </p>
            </div>
            <div class="col-sm-6" id="nutrition_img">
                <img src="image/pancakes_info.jpg" alt="nutritional information">
            </div>
        </div>

        <?php include "comments.php"
        ?>

<div class="w3-content">
 <a href="https://litmosheroes.com/"><img class="mySlides" src="https://i.imgur.com/ZtdhrUA.jpg" alt="custom_html_banner1" style="width:100%"></a>
</div>

    </div>
    <!--container-->
    <?php include "footer.php"
    ?>

</body>

</html>