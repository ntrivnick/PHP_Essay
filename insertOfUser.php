<?php

require_once 'db/connectDB.php'; //Connection to DB

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


//Checking the role of the user
$defineUserRole = 'Φοιτητής';
if (strpos($_POST['defineUserRole'], 'Διαχειριστής') !== false) {
    $defineUserRole = 'Διαχειριστής';
}
;

if (strpos($_POST['defineUserRole'], 'Διδάσκων') !== false) {
    $defineUserRole = 'Διδάσκων';
}
;

//Querry for inserting the user to DB
$insertUserQuery = sprintf(
    "INSERT INTO χρήστης (id_Χρήστη,Όνομα, Επώνυμο,
    Κινητό, Email, Password, Ρόλος, Διεύθυνση,
    Ημερομηνία_Γέννησης, Ημερομηνία_Πρώτης_Εγγραφής, Αριθμός_Μητρώου) VALUES (
    '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s')",
    $connection->real_escape_string(''),
    $connection->real_escape_string($name),
    $connection->real_escape_string($surname),
    $connection->real_escape_string($mobile),
    $connection->real_escape_string($email),
    $connection->real_escape_string($password),
    $connection->real_escape_string($defineUserRole),
    $connection->real_escape_string($address),
    $connection->real_escape_string($birthdate),
    $connection->real_escape_string($registerdate),
    $connection->real_escape_string($registernumber)
);

//echo "$insertUserQuery";

$connection->query($insertUserQuery);
//echo '<p>User Added</p>';

//If the role of user is "Student" we are inserting also the semester
//Finding the id of user(student)
if ($defineUserRole=='Φοιτητής') {
    $query="SELECT id_Χρήστη FROM 'χρήστης' ORDER BY id_Χρήστη DESC LIMIT 1";
    $resultOfQuery=$connection->query($query);
    $row=mysqli_fetch_assoc($resultOfQuery);
    $id=ceil($row["id_Χρήστη"]);

    //Query for inserting the semester of student in the DB
    $insertSemester=sprintf(
    "INSERT INTO εξάμηνο (id_Εξάμηνο, id_Χρήστη_Φοιτητή, Εξάμηνο) VALUES(
       '%s', '%s', '%s')",
       $connection->real_escape_string(''),
       $connection->real_escape_string($id),
       $connection->real_escape_string($semester)
    );

    $connection->query($insertSemester);
    
}

if ($insertUserQuery) {
    echo '<script language="javascript">alert("Επιτυχής εγγραφή χρήστη.")</script>';
    echo '<script language="javascript">document.location="handleUsers.php"</script>';
}else {
    echo '<script language="javascript">alert("Μη επιτυχής εγγραφή χρήστη.")</script>';
    echo '<script language="javascript">document.location="handleUsers.php"</script>';
    exit();
}