<?php include 'post_recipe.php';
$uname = isset($_POST['uname']) ;
$cuisine = isset($_POST['cuisine']) ;
$ingredients = isset($_POST['ingredients']) ;
$instructions = isset($_POST['instructions']) ;
$nni = isset($_POST['nni']) ;
$url =  isset($_POST['url']) ;
$image = isset($_POST  ['image']) ;

$sql = "insert into post_recipe ( uname , cuisine , ingredients , instructions , nni , url , image)
values ('$uname','$cuisine', '$ingredients', '$instructions','$nni','$url','$image')";
if ($conn->query($sql) === TRUE){

    echo "New record added";

}
else
{

    echo "ERROR: " .$sql . "<br>" . $conn->error;

}
$conn->close();
?>