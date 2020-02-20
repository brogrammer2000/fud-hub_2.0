<?php include "fud_hub_db.php" ?>
<div class="row" id="comments">
    <div class="col-lg-5" id="comments_input">
        <h2>Leave a Reply</h2>
        <hr>
        <p>Your email address will not be published. Required fields are marked <span style="color: red">*</span></p>

        <form name="comments_form" method="POST" action="enter_data.php">


            <p>NAME <span style="color: red">*</span></p>
            <input id="input_box" class="info" type="text" name="name">

            <p>EMAIL <span style="color: red">*</span></p>
            <input id="input_box" class="info" type="email" name="email">

            <p>COMMENT</p>
            <textarea id="input_box" class="info" style="height: 150px;" name="comment"></textarea>

            <p>RATING</p>
            <input id="input_box" class="info" type="number" max="5" min="0" name="rating">
            <br>
            <br>


            <input style="background-color: red" type="submit" value="Save Data">
            <hr>

        </form>
    </div>




    <div class="col-lg-7 comment" id="comments">
        <h2>Comments</h2>
        <hr>
        <div id="input_box" class="box">
            <?php
            
            $sql = "select * from comments order by MYTIMESTAMP DESC";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<h4>" . $row["name"] . "</h4>" . $row["rating"] . "/5";
                    echo "<br>";

                    echo $row["comment"];
                }
            }
            ?>
        </div>
       
        <hr>
    </div>

</div>