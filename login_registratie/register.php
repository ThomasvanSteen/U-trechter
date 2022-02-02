<?php

if (isset($_POST['submit'])) {
    //yes submit
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hash = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO user (username, password, created_on) VALUES ('$username', '$hash', NOW())";
    //echo $sql;
    include_once("connect.php");

    if ($conn->query($sql) === TRUE) {
        echo "new user added";
    } else {
        echo "database query error";
    }

    $conn->close();
} else {
?>

    <form action="" method="post">
        <input type="text" name="username" placeholder="username">
        <input type="text" name="password" placeholder="password">
        <input type="submit" name="submit">
    </form>
<?php
}

?>