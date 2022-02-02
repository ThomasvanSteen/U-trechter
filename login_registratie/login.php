<?php
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];


    $sql = "SELECT username, password from user WHERE username = '$username'";

    include_once('connect.php');

    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_row();

        //var_dump($row);
        //var_dump($sql);

        if (password_verify($_POST['password'], $row[1])) {
            echo "User is logged in with valid password";
        } else {
            echo "invalid password";
        }
    } else {
        echo "invalid username";
    }
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