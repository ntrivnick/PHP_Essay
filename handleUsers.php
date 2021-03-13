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
}
;
?>


<!-- Creating table of users and populate it with data of users -->
<div class="flex">
    <div class="flex pl-2">
        <h4 class="font-weight-bold">ΔΙΑΧΕΙΡΙΣΗ ΧΡΗΣΤΩΝ</h4>
    </div>
    <div class="flex p-1">
        <table class="table table-bordered small">
            <thead>
              <tr>
                <th scope="col">Id</th>
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
                <th scope="col">Επεξ.</th>
                <th scope="col">Διαγρ.</th>
              </tr>
            </thead>
            <tbody>

<?php foreach ($user as $key => $value) {?>

  <tr>
    <th scope="row"> <?=$value['id_Χρήστη']?> </th>
    <td><?=$value['Όνομα']?></td>
    <td><?=$value['Επώνυμο']?></td>
    <td><?=$value['Κινητό']?></td>
    <td><?=$value['Email']?></td>
    <td><?=$value['Password']?></td>


  <?php
if ($value['Ρόλος'] == 'Διδάσκων') {
    $role = 'Διδάσκων';
} else if ($value['Ρόλος'] == 'Φοιτητής') {
    $role = 'Φοιτητής';
} else {
    $role = 'Διαχειριστής';
}
    ?>
    <td><?=$role?></td>

    <td><?=$value['Διεύθυνση']?></td>
    <td><?=$value['Ημερομηνία_Γέννησης']?></td>
    <td><?=$value['Ημερομηνία_Πρώτης_Εγγραφής']?></td>
    <td class="text-center"><?=$value['Αριθμός_Μητρώου']?></td>

    <td class="text-center"><img src="./assets/editButton.png" alt="Επεξεργασία" style="width: 35%;"
    onclick="'editUser(<?=$value['id_Χρήστη']?>)'"></td>
    
    <td class="text-center"><img src="./assets/deleteButton.png" alt="Διαγραφή" style="width: 35%;"
    onclick="'deleteUser(<?=$value['id_Χρήστη']?>)'"></td>

  </tr>
<?php }?>

            </tbody>
          </table>
    </div>

    <!-- Button for inserting user in DB/application -->
    <div class="flex">
      <div class="row p-3 ml-2">
          <button type="button" class="btn btn-primary" onclick="location.ref=insertUser.php">Εισαγωγή Χρήστη</button>
      </div>
    </div>
</div>


<!-- End page content -->

<?php require_once 'footer.html';?>
