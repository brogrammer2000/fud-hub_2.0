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
                        <h1>Chicken Sliders</h1>
                    </b></p>
                <hr>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12" id="rec_desc">
                <p>
                    <h6>Need a simple, yet incredibly tasty slider recipe to feed a crowd? <br>
                        If so, this <b>BBQ chicken sliders recipe</b> is the perfect sliders recipe to make for <i>a get together at home or to bring to a picnic or potluck! </i> </h6>
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6" id="ingredients">
                <p><b>
                        <h2>Ingredients</h2>
                        <hr>
                    </b></p>
                <p>
                    <ul>
                        <li>4 6-oz boneless, skinless chicken breasts</li>
                        <li>2 tbsp. plus 1 tsp olive oil</li>
                        <li>1/4 tsp. salt</li>
                        <li>1/4 tsp. pepper</li>
                        <li>4 red plums, cut into 1-inch wedges)</li>
                        <li>2 scallions, thinly sliced</li>
                        <li>6 c. baby arugula</li>
                        <li>1/2 c. fresh dill, very roughly chopped</li>
                        <li>1/4 c. roasted almonds, chopped</li>
                    </ul>
                </p>
            </div>
            <div class="col-sm-6" id="rec_vid">
                <iframe src="https://www.youtube.com/embed/WoGrZbdLXrs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                        <li>Heat grill to medium. Rub the chicken with 1 teaspoon olive oil and season with 1/4 teaspoon each salt and pepper. In large bowl, toss red plums with 1 tablespoon oil and 1/4 teaspoon each salt and pepper. </li>
                        <p> </p>
                        <li>Grill chicken until cooked through, 5 to 7 minutes per side. Transfer to cutting board and let rest 5 minutes before slicing. </li>
                        <p> </p>
                        <li>Add plums to grill and cook until just charred, 2 to 3 minutes per side; return to bowl and toss with remaining 1 tablespoon oil and scallions.</li>
                        <p> </p>
                        <li>Add chicken (and any juices) to bowl, and toss to combine. Fold in arugula, dill, and almonds.</li>
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
                        <li>Try it with pork: Swap the chicken breast fillets for pork fillets. </li>
                        <li>Serve the rocket mixture as a side salad with pan-fried pork cutlets. </li>
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