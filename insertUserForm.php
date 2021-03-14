<?php
session_start();
$title = 'Επεξεργασία Χρηστών';
require_once 'header.html';
require_once 'db/connectDB.php';
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

//Checking if administrator registering a student
//then field semester appears for inserting a value
function userIsStudent(par) {
    if (par.selectedIndex=='Φοιτητής') {
        document.getElementById("isStudent").style.display='block';
    }else{
        document.getElementById("isStudent").style.display='none';
    }
}
</script>

<!-- Begin page content -->

<div class="d-flex flex-column pl-2">
      <h4 class="font-weight-bold">Εγγραφή</h4>
      <p>Συμπληρώστε τα πεδία για εγγραφή χρήστη</p>
    </div>

    <div class="d-flex justify-content-center" id="h-50">
      <form name="form" role="form" method="post" action="insertOfUser.php" onsubmit="return validateRegister()">

        <div class="form-group row">
          <label for="surname" class="col-sm-4 col-form-label">Επώνυμο</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="surname" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="name" class="col-sm-4 col-form-label">Όνομα</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="name" required>
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
            <label for="defineUserRole" class="col-sm-4 col-form-label">Ρόλος</label>
            <?php echo
             " <select name='defineUserRole' id='mySelect' onChange='userIsStudent(this);';>
                <option>Γραμματεία</option>
                <option>Καθηγητής</option>
                <option>Φοιτητής</option>
            </select>"; ?>
        </div>

        <div class="form-group row" id="isStudent" style="display: none;">
            <label for="inputState">Εξάμηνο</label>
            <select class="form-control" name="semester">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Υποβολή</button>
      </form>
    </div>



<!-- End page content -->
<?php require_once 'footer.html';?>