<?php
require_once 'db/connectDB.php'; //Σύνδεση με ΒΔ

$email = '';
$password = '';

if (isset($_POST['submit'])) {
    $ok = true;

    //Check for insertion of email value from user
    if (!isset($_POST['username']) || $_POST['username'] === '') {
        $ok = false;
    } else {
        $email = $_POST['username'];
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

//Query DB for all rows of users table
$sql = 'SELECT * FROM χρήστης';
$res = $connection->query($sql);

    foreach ($res as $row) {

        $id_user = $row['id_Χρήστη'];
        $name = $row['Όνομα'];
        $surname = $row['Επώνυμο'];
        $emailAddress = $row['Email'];
        $psswrd = $row['Password'];
        $role = $row['Ρόλος'];

        //Check if user entered correct password
        if ($password != $psswrd) {
            echo '<script language="javascript">
        alert("Λάθος Password!!!");
        document.location="login.php";</script>';
            exit();
        } else {
            echo '<script language="javascript">
        alert("Σωστό Password!!!");
        </script>';
            exit();
        }
    }
;
