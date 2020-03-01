<?php
session_start();


$username = "";
$cuisine = "";
$ingredients = "";
$instructions = "";
$nni = "";
$image = "";
$url = "";

$db = mysqli_connect('localhost', 'root', '', 'post');


if (isset($_POST['post_rec'])) {
    // receive all input values from the form
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $cuisine = mysqli_real_escape_string($db, $_POST['cuisine']);
    $ingredients = mysqli_real_escape_string($db, $_POST['ingredients']);
    $instructions = mysqli_real_escape_string($db, $_POST['instructions']);
    $nni = mysqli_real_escape_string($db, $_POST['nni']);
    $image = mysqli_real_escape_string($db, $_POST['image']);
    $url = mysqli_real_escape_string($db, $_POST['url']);


    if (empty($username)) { array_push($errors, "Username is required"); }
    if (empty($cuisine)) { array_push($errors, "Cuisine is required"); }
    if (empty($ingredients)) { array_push($errors, "Ingredients is required"); }
    if (empty($instructions)) { array_push($errors, "Instructions is required"); }
    if (empty($nni)) { array_push($errors, "Notes are required"); }
    if (empty($image)) { array_push($errors, "Image is required"); }
    if (empty($url)) { array_push($errors, "URL is required"); }

    }




?>