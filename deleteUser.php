<?php
require_once 'db/connectDB.php';
session_start();

$sql="DELETE FROM χρήστης WHERE id_Χρήστη='". $_GET['user_id'] ."'";
$deleteUser = $connection->query($sql);

if ($deleteUser) {
    echo '<script language="javascript">alert("Επιτυχής διαγραφή χρήστη.")</script>';
    echo '<script language="javascript">document.location="handleUsers.php"</script>';
}else {
    echo '<script language="javascript">alert("Μη επιτυχής διαγραφή χρήστη.")</script>';
    echo '<script language="javascript">document.location="handleUsers.php"</script>';
    exit();
}
