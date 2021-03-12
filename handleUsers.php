<?php
session_start();
$title = 'Επεξεργασία Χρηστών';
require_once 'header.html';
require_once 'db/connectDB.php';

// Begin page content

//Query DB for all users
$sql = "SELECT * FROM χρήστης";
$res = $connection->query($sql);

$user;
$index = 0;

//Fetching users from DB
while ($row = mysqli_fetch_array($res)) {
    $user[$index]['id_Χρήστη'] = $row['id_Χρήστη'];
    $user[$index]['Όνομα'] = $row['Όνομα'];
    $user[$index]['Επώνυμο'] = $row['Επώνυμο'];
    $user[$index]['Κινητό'] = $row['Κινητό'];
    $user[$index]['Email'] = $row['Email'];
    $user[$index]['Password'] = $row['Password'];
    $user[$index]['Ρόλος'] = $row['Ρόλος'];
    $user[$index]['Διεύθυνση'] = $row['Διεύθυνση'];
    $user[$index]['Ημερομηνία_Γέννησης'] = $row['Ημερομηνία_Γέννησης'];
    $user[$index]['Ημερομηνία_Πρώτης_Εγγραφής'] = $row['Ημερομηνία_Πρώτης_Εγγραφής'];
    $user[$index]['Αριθμός_Μητρώου'] = $row['Αριθμός_Μητρώου'];
    $index++;
};
?>


<!-- Creating table of users and populate it with data of users -->
<div class="flex">
    <div class="flex pl-2">
        <h4 class="font-weight-bold">ΔΙΑΧΕΙΡΙΣΗ ΧΡΗΣΤΩΝ</h4>
    </div>
    <div class="flex p-4">
        <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">Id_Χρήστη</th>
                <th scope="col">Όνομα</th>
                <th scope="col">Επώνυμο</th>
                <th scope="col">Κινητό</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Ρόλος</th>
                <th scope="col">Διεύθυνση</th>
                <th scope="col">Ημ. Γέννησης</th>
                <th scope="col">Ημ. Εγγραφής</th>
                <th scope="col">Αρ. Μητρώου</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row" id="pt-62">1</th>
                <td>Όνομα βασικού μαθήματος 1</td>
                <td>Όνομα διδάσκοντα 1</td>
                <td class="text-center">5</td>
                <td>Βασικό</td>
              </tr>
              <tr>
                <td>Όνομα βασικού μαθήματος 2</td>
                <td>Όνομα διδάσκοντα 2</td>
                <td class="text-center">5</td>
                <td>Βασικό</td>
              </tr>
              <tr>
                <td>Όνομα βασικού μαθήματος 3</td>
                <td>Όνομα διδάσκοντα 3</td>
                <td class="text-center">5</td>
                <td>Βασικό</td>
              </tr>
              <tr>
                <th scope="row" id="pt-62">2</th>
                <td>Όνομα βασικού μαθήματος 4</td>
                <td>Όνομα διδάσκοντα 1</td>
                <td class="text-center">5</td>
                <td>Βασικό</td>
              </tr>
              <tr>
                <td>Όνομα βασικού μαθήματος 5</td>
                <td>Όνομα διδάσκοντα 2</td>
                <td class="text-center">5</td>
                <td>Βασικό</td>
              </tr>
              <tr>
                <td>Όνομα βασικού μαθήματος 6</td>
                <td>Όνομα διδάσκοντα 4</td>
                <td class="text-center">5</td>
                <td>Βασικό</td>
              </tr>
              <tr>
                <th scope="row" id="pt-80">3</th>
                <td>Όνομα βασικού μαθήματος 7</td>
                <td>Όνομα διδάσκοντα 1</td>
                <td class="text-center">5</td>
                <td>Βασικό</td>
              </tr>
              <tr>
                <td>Όνομα βασικού μαθήματος 8</td>
                <td>Όνομα διδάσκοντα 2</td>
                <td class="text-center">5</td>
                <td>Βασικό</td>
              </tr>
              <tr>
                <td>Όνομα μαθήματος επιλογής 1</td>
                <td>Όνομα διδάσκοντα 3</td>
                <td class="text-center">5</td>
                <td>Επιλογής</td>
              </tr>
              <tr>
                <td>Όνομα μαθήματος επιλογής 2</td>
                <td>Όνομα διδάσκοντα 4</td>
                <td class="text-center">5</td>
                <td>Επιλογής</td>
              </tr>
            </tbody>
          </table>
    </div>
</div>


<!-- End page content -->

<?php require_once 'footer.html'; ?> 
