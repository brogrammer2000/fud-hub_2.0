<?php
include 'server.php';
$sql = "select * from post_recipe";

$result = $conn->query($sql);
if($result ->num_rows > 0) {
//fetch_assoc(): It fetches result as an associative array.
    while($row = $result ->fetch_assoc()){
        echo "username:" . $row["uname"] . "Cuisine:". $row["cuisine"]."Ingredients:". $row["ingredients"]

            ."Instructions:". $row["instruction"]. "Notes & Nutrition info:". $row["nni"]. "Image:". $row["image"]
            . "URL:". $row["url"]
            ."<br>";
    }
}
// You can type different sql queries based on your needs
// The output as of now does not look good. Your task is to format it properly with HTML tables.
else
{
    echo "no results";
}

$conn->close();
?>