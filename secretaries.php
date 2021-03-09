<?php
  $title = 'Γραμματεία';
  require_once './header.html';
  //require_once 'db/connectDB.php';
 
   ?>

    <!-- Begin page content -->
    <div class="d-flex flex-column justify-content-around item">
        <div class="d-flex pl-2 pb-5">
            <h3 class="font-weight-bold">ΓΡΑΜΜΑΤΕΙΑ</h3>
        </div>

        <div class="d-flex p-5">
            <table class="table">
                <tbody>
                    <tr>
                        <th scope="row" id="no-border-top">
                            <img alt="teachers_Img" src="./assets/secretary.jpg" id="teacher_img">
                        </th>
                        <td id="no-border-top" class="pr-5">Ονοματεπώνυμο γραμματέως 1</td>
                        <td id="no-border-top" class="pl-5">Αναπληρωτής Γραμματέας</td>
                        <td id="no-border-top">Email</td>
                        <td id="no-border-top">Τηλέφωνο</td>
                    </tr>
                    <tr>
                        <th scope="row" id="no-border-top">
                            <img alt="teachers_Img" src="./assets/secretary.jpg" id="teacher_img">
                        </th>
                        <td class="pr-5">Ονοματεπώνυμο γραμματέως 1</td>
                        <td class="pl-5">Αναπληρωτής Γραμματέας</td>
                        <td>Email</td>
                        <td>Τηλέφωνο</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End page content -->

    <?php require_once './footer.html'; ?>