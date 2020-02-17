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
                        <h1> Extra super fluffy blueberry pancakes</h1>
                    </b></p>
                <hr>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12" id="rec_desc">
                <p>
                    <h6>This is my favorite recipe for the <b>ULTIMATE</b> Extra Super Fluffy Blueberry Pancakes.<br>

                        Inspired by my <i> grandmother’s classic recipe</i>, these are the <b>fluffiest</b> buttermilk pancakes packed with juicy-plump blueberries. </h6>
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
                        <li>2 cups all purpose flour</li>
                        <li>2 tablespoons baking powder</li>
                        <li>1 teaspoon kosher salt</li>
                        <li>3 tablespoons light brown sugar</li>
                        <li>2 eggs</li>
                        <li>1 teaspoon vanilla</li>
                        <li>1 1/2 cups milk</li>
                        <li>5 tablespoons butter, melted</li>
                        <li>2 cups fresh blueberries</li>
                        <li>butter for frying</li>
                    </ul>
                </p>
            </div>
            <div class="col-sm-6" id="rec_vid">
                <iframe src="https://www.youtube.com/embed/PYwzW6CCxJU" frameborder="2px" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                        <li>In a large bowl whisk the flour, baking powder, salt and brown sugar together.</li>
                        <li>In separate bowl whisk the eggs, vanilla and milk together.</li>
                        <li>Add the wet ingredients into the dry and mix until just combined.</li>
                        <li>Lastly mix in the melted butter and stir until combined, the batter will be slightly lumpy.</li>
                        <li> Set the batter aside while you heat your griddle to medium-low heat.</li>
                        <li> Melt a small pat of butter on the griddle and then scoop out 1/4 cup of pancake batter onto the hot griddle and top evenly with blueberries.</li>
                        <li>Cook until the edges are set and bubbles form on top of the pancake. Flip and cook until browned.</li>
                        <li>Serve warm.</li>


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
                        <li><b>Serving size:</b> This recipe makes about 8 fluffy pancakes.</li>
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
                <img src="pancakes_info.jpg" alt="nutritional information for pancakes">
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