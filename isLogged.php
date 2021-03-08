<?php
require_once 'db/connectDB.php'; //Σύνδεση με ΒΔ

$email = '';
$password = '';

if (isset($_POST['submit'])) {
    $ok = true;

    //Check for insertion of email value from user
    if (!isset($_POST['email']) || $_POST['email'] === '') {
        $ok = false;
    } else {
        $email = $_POST['email'];
    }
    ;

    //Check for insertion of password value from user
    if (!isset($_POST['password']) || $_POST['password'] === '') {
        $ok = false;
    } else {
        $password = $_POST['password'];
    }
    ;
}
;

//Query DB for inserted username by the user
$sql = "SELECT * FROM χρήστης WHERE Email='" . $_POST['email'] . "'";
$res = $connection->query($sql);

//Checking if there is a row in DB with the inserted email
$row = mysqli_num_rows($res);

//If there is a row in DB with the inserted email
if ($row != 0) {
    $userInfo = mysqli_fetch_row($res);
    $id_user = $userInfo[0];
    $name = $userInfo[1];
    $surname = $userInfo[2];
    $emailAddress = $userInfo[4];
    $psswrd = $userInfo[5];
    $role = $userInfo[6];

    //Check if user entered correct password
    if ($password != $psswrd) {
        echo '<script language="javascript">
        alert("Λάθος Password!!!");
        document.location="login.php";</script>';
        exit();
    } else {
        //Storing info of the user in a session for further use
        session_start();
        $_SESSION['user_id'] = $id_user;
        $_SESSION['user_name'] = $name;
        $_SESSION['user_surname'] = $surname;
        $_SESSION['user_email'] = $emailAddress;
        $_SESSION['user_password'] = $psswrd;
        $_SESSION['user_role'] = $role;

        header("Location: index.php");
    }
}
;

echo '<script language="javascript">
        alert("Λάθος username!!!");
        document.location="login.php";</script>';
