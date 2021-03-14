<?php

require_once 'db/connectDB.php'; //Connection to DB

//Checking the role of the user
$defineUserRole='Φοιτητής';
if (strpos($_POST['defineUserRole'], 'Γραμματεία') !== false) {
    $defineUserRole='Γραμματεία';
};

if (strpos($_POST['defineUserRole'], 'Διδάσκων') !== false) {
    $defineUserRole='Διδάσκων';
};

//Querry for inserting the user to DB
$insertUserQuery=sprintf(
    "INSERT INTO 'Χρήστης' (`id_Χρήστη`, `Όνομα`, `Επώνυμο`,
    `Κινητό`, `Email`, `Password`, `Ρόλος`, `Διεύθυνση`,
    `Ημερομηνία_Γέννησης`, `Ημερομηνία_Πρώτης_Εγγραφής`, `Αριθμός_Μητρώου`) SET (
    '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s')",
    $connection->real_escape_string(''),
    $connection->real_escape_string($_POST['name']),
    $connection->real_escape_string($_POST['surname']),
    $connection->real_escape_string($_POST['mobile']),
    $connection->real_escape_string($_POST['email']),
    $connection->real_escape_string($_POST['password']),
    $connection->real_escape_string($defineUserRole),
    $connection->real_escape_string($_POST['address']),
    $connection->real_escape_string($_POST['birthdate']),
    $connection->real_escape_string($_POST['registerdate']),
    $connection->real_escape_string($_POST['registernumber'])
    );

    echo "$insertUserQuery";