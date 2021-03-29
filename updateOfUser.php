<?php
require_once 'db/connectDB.php'; //Connection to DB
session_start();

print_r($_POST);
print_r($_GET);

$id=$_GET['user_id'];
$name=$_POST['name'];
$surname=$_POST['surname'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$password=$_POST['password'];
$address=$_POST['address'];
$birthdate=$_POST['birthdate'];
$registerdate=$_POST['registerdate'];
$registernumber=$_POST['registernumber'];
$semester=$_POST['semester'];
$idSemester=$_GET['id_Εξαμήνου'];

//Querry for inserting the user to DB
$editUserQuery = sprintf(
    "UPDATE χρήστης SET Όνομα='%s', Επώνυμο='%s',
    Κινητό='%s', Email='%s', Password='%s', Διεύθυνση='%s',
    Ημερομηνία_Γέννησης='%s', Ημερομηνία_Πρώτης_Εγγραφής='%s', Αριθμός_Μητρώου='%s' 
    WHERE id_Χρήστη=%s",
    $connection->real_escape_string($name),
    $connection->real_escape_string($surname),
    $connection->real_escape_string($mobile),
    $connection->real_escape_string($email),
    $connection->real_escape_string($password),
    $connection->real_escape_string($address),
    $connection->real_escape_string($birthdate),
    $connection->real_escape_string($registerdate),
    $connection->real_escape_string($registernumber),
    $id
);

$connection->query($editUserQuery);

//Querry for updating the semester of the student to DB
$updateSemesterQuery=sprintf(
    "UPDATE εξάμηνο SET Εξάμηνο='%s' WHERE id_Εξαμήνου=%s",
    $connection->real_escape_string($semester),
    $idSemester
);

$connection->query($updateSemesterQuery);

if ($editUserQuery) {
    echo '<script language="javascript">alert("Επιτυχής τροποποίηση στοιχείων χρήστη.")</script>';
    //echo '<script language="javascript">document.location="handleUsers.php"</script>';
}else {
    echo '<script language="javascript">alert("Μη επιτυχής τροποποίηση στοιχείων χρήστη.")</script>';
    echo '<script language="javascript">document.location="handleUsers.php"</script>';
    exit();
}

