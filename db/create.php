<?php include 'post_recipe.php';
$username = isset($_POST['uname']) ;
$cuisine = isset($_POST['cuisine']) ;
$ingredients = isset($_POST['ingredients']) ;
$instructions = isset($_POST['instructions']) ;
$nandn = isset($_POST['nandn']) ;
$video =  isset($_POST['url']) ;
$image = isset($_POST  ['image']) ;

$sql = "insert into post_recipe ( usernamename , cuisine , ingredients , instructions , nandn , url , image)
values ('$username','$cuisine', '$ingredients', '$instructions','$nandn','$url','$image')";
if ($conn->query($sql) === TRUE){

    echo "New record added";

}
else
{

    echo "ERROR: " .$sql . "<br>" . $conn->error;

}
$conn->close();
?>
