<!DOCTYPE html>
<html lang="en">

<head> Navbar-->...
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/4.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrap
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!--CSS link-->
        <link href='https://fonts.googleapis.com/css?family=Marck Script' rel='stylesheet'>
        <link rel="stylesheet" href="end_recipe_css.css">

        <!--cdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
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
                        <h1>Oatmeal Porridge</h1>
                    </b></p>
                <hr>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12" id="rec_desc">
                <p>
                    <h6>This is the classic porridge recipe. It just involves 2 ingredients! but..
                        <br>“Once you’ve mastered the basic porridge recipe, get creative and add your favourite toppings. <br>
                        Think fruit, toasted nuts and honey – the options are endless! Check out some of our favourite combos below… ”</h6>
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6" id="ingredients">
                <p><b>
                        <h2>Ingredients </h2>
                        <h6 style="color: #d3d3d3">BASE RECIPE</h6>
                        <hr>
                    </b></p>
                <p>
                    <ul>
                        <li>160 g rolled porridge oats</li>
                        <li> 600 ml milk, organic soya milk or water</li>
                    </ul>
                </p>
            </div>
            <div class="col-sm-6" id="rec_vid">
                <iframe src="https://www.youtube.com/embed/ywkEGKXk2cQ?start=6" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                        <li>Place the oats and the milk or water in a large pan over a medium heat.</li>
                        <li>Add a tiny pinch of sea salt and stir with a wooden spoon.</li>
                        <li>Bring to a steady simmer for 5 to 6 minutes, stirring as often as you can to give you a smooth creamy porridge</li> –
                        <li>if you like your porridge runnier, simply add a splash more milk or water until you’ve got the consistency you like.</li>
                        <li>Jazz up your porridge with your favourite combo of fresh fruit, nuts and seeds, sweetening to taste.</li>
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
                        <li>Stir in a generous pinch of ground cinnamon, some poppy seeds and maple syrup.<br>
                            Top with sliced banana and a handful of toasted almonds. </li>
                        <li>Stir through coarsely grated apple (core and all) and maple syrup, then top with a handful of toasted pecans and a drizzle more syrup.</li>
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