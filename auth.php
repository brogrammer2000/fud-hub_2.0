<?php include 'db.php';

error_reporting(0);
ini_set('display_errors', 0);

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = htmlentities($_POST['username']);
    $password = md5(htmlentities($_POST['password']));
    $sql = "SELECT * FROM userinfo WHERE username='$username'";
    $result = $conn->query($sql);

    if (!$result) {
        echo "something is wrong!";
    } else {
        while ($row = $result->fetch_assoc()) {
            if ($username == $row['username']) {
                if ($password == $row['password']) {
                    session_start();
                    $_SESSION['user'] = $_POST['username'];

                    include 'frontPage.php';
                } else {
                    echo "Wrong password";
                }
            } else {
                echo "User doesn't exist!";
            }
        }
    }
}
