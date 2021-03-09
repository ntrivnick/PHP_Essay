<?php
session_start();
require_once 'db/connectDB.php';

//Logout the user 
if (isset($_SESSION['user_role'])) {
    unset($_SESSION['user_role']);
}

//Message for successful user disconnection 
echo '<script language="javascript">
        alert("Αποσύνδεση Χρήστη");
        document.location="index.php";</script>';

?>