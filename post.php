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
    <link rel="stylesheet" href="post.css">





</head>
<body>




<div class="container">
    <?php include 'web_header.php'?>
    <form action="action_page.php" >
        <div class="row">
            <div class="col-sm-12">
                <h1>Post a Recipe</h1>
                <p>Please fill in the details to Post your Recipe</p>
                <hr>


                <div class="row">
                    <div class="col-25">
                        <label for="username">Username</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="username" name="username" placeholder="Your Username..">
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-25">
                        <label for="cuisine">Cuisine</label>
                    </div>
                    <div class="col-75">
                        <select id="country" name="cuisine">
                            <option value="#">Select one</option>
                            <option value="chinese">Chinese</option>

                            <option value="indian">Indian</option>
                            <option value="mexican">Mexican</option>
                            <option value="swedish">Swedish</option>
                            <option value="italian">Italian</option>
                            <option value="turkish">Turkish</option>
                        </select>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-25">
                        <label for="ingredients">Ingredients</label>
                    </div>
                    <div class="col-75">
                        <textarea id="subject" name="ingredients" placeholder="Your Secret Ingredients.."
                                  style="height:200px"></textarea>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-25">
                        <label for="instructions">Instructions</label>
                    </div>
                    <div class="col-75">
                        <textarea id="subject" name="instructions" placeholder="Write something.."
                                  style="height:200px"></textarea>
                    </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-25">
                        <label for="nni">Notes & Nutrition Info</label>
                    </div>
                    <div class="col-75">
                        <input id="notes" name="nni" placeholder="Notes & Nutritions..." type="text">
                    </div>
                </div>
                <hr>




            <div class="row">
                <div class="col-25">
                    <label for="url">URL</label>
                </div>
                <div class="col-75">
                    <input type="text" id="url" name="url" placeholder="Upload URL..">
                </div>
                <div>

                <label for="image">Select Image:</label>
                <input type="file" id="img" name="img">
                </div>

            </div>
            </div>










                    <div class="row">
                        <input type="submit" value="Submit">
                    </div>


            </div>





        </div>



</body>

</html>
<?php include 'footer.php'?>