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

    <link rel="stylesheet" href="CSS/bld.css">
    <link rel="stylesheet" href="CSS/post.css">




</head>

<body>



    <div class="container">
        <?php include 'web_header.php' ?>
        <form action="action_page.php">
            <div class="row">
                <div class="col-sm-12">
                    <h1>Post a Recipe</h1>
                    <p>Please fill in the details to Post your Recipe...</p>
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
                                <option value="australia">Turkish</option>
                                <option value="canada">Chinese</option>
                                <option value="usa">Finnish</option>
                                <option value="usa">Indian</option>
                                <option value="usa">Mexican</option>
                                <option value="usa">Sweden</option>
                                <option value="usa">Italian</option>
                                <option value="usa">Turkish</option>
                            </select>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-25">
                            <label for="subject">Ingredients</label>
                        </div>
                        <div class="col-75">
                            <textarea id="subject" name="subject" placeholder="Your Secret Ingredients.." style="height:200px"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="subject">Description</label>
                        </div>
                        <div class="col-75">
                            <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
                        </div>
                    </div>
                    <hr>

                    <div class="row">
                        <div class="col-25">
                            <label for="notes">Notes & Nutrition Info</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="notes" name="notes" placeholder="Notes & Nutritions...">
                        </div>
                    </div>
                    <hr>
                    <form action="upload.php" method="post" enctype="multipart/form-data">
                        Select image to upload :
                        <input type="file" name="fileToUpload" id="fileToUpload">

                    </form>
                    <hr>
                    <form action="upload.php" method="post" enctype="multipart/form-data">
                        Select Video Link :
                        <input type="file" name="fileToUpload" id="fileToUpload">

                    </form>
                    <hr>
                    <div class="row">
                        <input type="submit" value="Submit">
                    </div>
        </form>


    </div>





    </div>



</body>

</html>
<?php include 'footer.php' ?>