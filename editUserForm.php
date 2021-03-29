<?php
require_once 'db/connectDB.php';
session_start();
$title = 'Επεξεργασία Χρηστών';
require_once 'header.html';
?>

<?php
//Query for finding user
$sql = "SELECT * from χρήστης LEFT JOIN εξάμηνο
ΟΝ id_Χρήστη=id_Χρήστη_Φοιτητή WHERE id_Χρήστη='".$_GET['user_id']."'";
$foundUser = $connection->query($sql);

print_r($_GET);
var_dump($foundUser);
var_dump($sql);


if ($foundUser) {
    $row = mysqli_fetch_assoc($foundUser);
    $id = $row['id_Χρήστη'];
    $name = $row['Όνομα'];
    $surname = $row['Επώνυμο'];
    $mobile = $row['Κινητό'];
    $email = $row['Email'];
    $password = $row['Password'];
    $role = $row['Ρόλος'];
    $address = $row['Διεύθυνση'];
    $birthdate = $row['Ημερομηνία_Γέννησης'];
    $registerdate = $row['Ημερομηνία_Πρώτης_Εγγραφής'];
    $registernumber = $row['Αριθμός_Μητρώου'];
    $semesterid = $row['id_Εξαμήνου'];
    $semester = $row['Εξάμηνο'];
}

?>

<script>
//Checking the credentials the administrator inserting for registrating a user in the app
function validateRegister() {

    var x = document.forms["form"]["password"].value;
    var z = document.forms["form"]["email"].value;

    if ((/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(String(z).toLowerCase())) === false) {
        alert("Το E-mail δεν έχει σωστή μορφή!");
        return false;
    } else if (x.length < 8) {
        alert("Ο κωδικός χρήστη πρέπει να αποτελείται από τουλάχιστον 8 χαρακτήρες!");
        return false;
    } else {
        return true;
    }
}
</script>

<!-- Begin page content -->
<div class="d-flex flex-column pl-2">
      <h4 class="font-weight-bold">Επεξεργασία στοιχείων χρήστη</h4>
      <p>Συμπληρώστε τα πεδία χρήστη που επιθυμείτε να τροποποιήσετε</p>
    </div>

    <div class="d-flex justify-content-center" id="h-50">
      <form name="editform" role="form" method="post" action="updateOfUser.php" onsubmit="return validateRegister()">

        <div class="form-group row">
          <label for="surname" class="col-sm-4 col-form-label">Επώνυμο</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="surname">
          </div>
        </div>

        <div class="form-group row">
          <label for="name" class="col-sm-4 col-form-label">Όνομα</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="name">
          </div>
        </div>

        <div class="form-group row">
          <label for="email" class="col-sm-4 col-form-label">Email</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="email">
          </div>
        </div>

        <div class="form-group row">
          <label for="inputPassword" class="col-sm-4 col-form-label">Password</label>
          <div class="col-sm-8">
            <input type="password" class="form-control" name="password">
          </div>
        </div>

        <div class="form-group row">
          <label for="mobile" class="col-sm-4 col-form-label">Κινητό</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="mobile">
          </div>
        </div>

        <div class="form-group row">
          <label for="address" class="col-sm-4 col-form-label">Address</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="address">
          </div>
        </div>

        <div class="form-group row">
          <label for="birthdate" class="col-sm-4 col-form-label">Ημερομηνία Γέννησης</label>
          <div class="col-sm-8">
            <input type="date" class="form-control" name="birthdate">
          </div>
        </div>

        <div class="form-group row">
          <label for="registerdate" class="col-sm-4 col-form-label">Ημερομηνία Εγγραφής</label>
          <div class="col-sm-8">
            <input type="date" class="form-control" name="registerdate">
          </div>
        </div>

        <div class="form-group row">
          <label for="registernumber" class="col-sm-4 col-form-label">Αριθμός Μητρώου</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="registernumber">
          </div>
        </div>

        <div class="form-group row">
            <label for="rule" class="col-sm-4 col-form-label">Ρόλος</label>
            <div class="col-sm-8">
            <select class="form-control" name='defineUserRole'>
                <option>Διαχειριστής</option>
                <option>Καθηγητής</option>
                <option>Φοιτητής</option>
            </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="inputState" class="col-sm-4 col-form-label">Εξάμηνο</label>
            <div class="col-sm-8">
            <select class="form-control" name="semester">
                <option value=" "></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
            </div>
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Υποβολή</button>
      </form>
    </div>
<!-- End page content -->

<?php require_once 'footer.html';?>