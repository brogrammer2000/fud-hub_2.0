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
    <link rel="stylesheet" href="end_recipe_css.css">

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
                        <h1>Meat Lovers ' Pizza</h1>
                    </b></p>
                <hr>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12" id="rec_desc">
                <p>
                    <h6>This is definitely not for vegetarians. <br>
                        This homemade thin crust pizza is loaded with four delicious varieties of meat… crispy bacon, thin sliced ham, spicy pepperoni and hot sausage!<br>
                        If you’re a fan of salty and spicy meat, then this loaded meat lover’s pizza is for you!</h6>
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
                        <li>1 ball of no-knead pizza dough</li>
                        <li>1/3 – 1/2 cup pizza sauce, depending on how saucy you like your pizza</li>
                        <li>2 cloves garlic, minced</li>
                        <li>1 – 1 1/2 cups shredded Canadian mozzarella</li>
                        <li>8-10 slices pepperoni</li>
                        <li>1-2 slices of ham, cut into small squares</li>
                        <li>2 slices of crispy bacon, cut into small pieces</li>
                        <li>1 link spicy sausage, removed from casing and browned</li>
                        <li>1/2 cup browned ground beef</li>
                        <li>Canadian parmesan cheese, to finish</li>
                        <li>red pepper flakes, to serve</li>
                    </ul>
                </p>
            </div>
            <div class="col-sm-6" id="rec_vid">
                <iframe src="https://www.youtube.com/embed/GUG27Y2E2c8?start=39" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12" id="instructions">
                <br><br>
                <p><b>
                        <h2>Instructions</h2>
                        <hr>
                    </b></p>

                <p>
                    <ul>
                        Arrange a rack in middle of oven and preheat to its hottest setting, 500°–550°.

                        <li>Lightly oil a cast iron pan and dust lightly with cornmeal, if desired. Or, lightly oil and dust a baking sheet.</li>
                        <li> Shape dough into a circle, pushing gently until fairly thin. Spread on the sauce almost to the edges and sprinkle on the garlic.</li>
                        <li> Top generously with the shredded mozzarella, followed by all the meats.
                        <li>Grate on parmesan to taste then place in the oven to bake for 12-15 minutes, or until the crust is puffy, crisp and slightly blistered.</li>
                        <li>Enjoy immediately with red pepper flakes.</li>
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
                        <li>It does take a bit more time if you have to cook all of your meats before hand.</li>
                        <li> Feel free to substitute in with whichever meats you have on hand.</li>
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
                <img src="pancakes_info.jpg" alt="nutritional information">
            </div>
        </div>

        <div class="row" id="comments">
            <div class="col-lg-5" id="comments_input">
                <h2>Leave a Reply</h2>
                <hr>
                <p>Your email address will not be published. Required fields are marked <span style="color: red">*</span></p>

                <form>


                    <p>NAME <span style="color: red">*</span></p>
                    <input id="input_box" class="info" type="text" name="name">

                    <p>EMAIL <span style="color: red">*</span></p>
                    <input id="input_box" class="info" type="email" name="email">

                    <p>COMMENT</p>
                    <textarea id="input_box" class="info" style="height: 150px;" name="comment"></textarea>

                    <p>RATING</p>
                    <input id="input_box" class="info" type="text" name="website">
                    <br>
                    <br>


                    <button style="background-color: red" type="button" class="btn btn-primary button">POST COMMENT</button>
                    <hr>

                </form>
            </div>




            <div class="col-lg-7 comment" id="comments">
                <h2>Comments</h2>
                <hr>
                <div id="input_box" class="box">
                    <h4>SCARLETT JOHANSONN</h4>
                    <p>Try grandma’s spot remover to get stains out. It is pretty awesome stuff</p>

                </div>

                <div id="input_box" class="box">
                    <h4>ANGELINA JOLIE</h4>
                    <p>MY mOMMY TAUGHT ME THAT IF YOU REALLY WANT FLUFFY PANCAKES, SEPARATE THE EGSS, AND BEST THE
                        WHITES TIL SOFT PEAKS FORM AND FOLD THEM IN. iT’S A NEVER FAIL FOR FLUFFY hOTCAKES, AS SHE
                        CALLED THEM.</p>

                </div>

                <div id="input_box" class="box">
                    <h4>AARUSHI BHATNAGAR</h4>
                    <p>Greetings, I simply made these pancakes for supper. They looked so great I couldn’t support
                        myself. I follwed the formula careful and they turned out flawless. I utilized solidified
                        blueberries, I didn’t blend them into the hitter yet I put the blueberries straightforwardly
                        into the scoop consequently my player did not turn blue.</p>

                </div>
                <hr>
            </div>

        </div>


    </div>
    <!--container-->
    <?php include "footer.php"
    ?>

</body>

</html>