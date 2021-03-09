<?php
  $title = 'Μαθήματα';
  require_once './header.html';
  //require_once 'db/connectDB.php';
  
   ?>

    <!-- Begin page content -->
    <!-- Table of lessons -->
    <div class="flex">
        <div class="flex pl-2">
            <h4 class="font-weight-bold">ΜΑΘΗΜΑΤΑ</h4>
        </div>
        <div class="flex p-4">
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">Εξάμηνο</th>
                    <th scope="col">Μάθημα</th>
                    <th scope="col">Διδάσκων</th>
                    <th scope="col">Διδακτικές Μονάδες</th>
                    <th scope="col">Είδος</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row" rowspan="3" id="pt-62">1</th>
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
                    <th scope="row" rowspan="3" id="pt-62">2</th>
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
                    <th scope="row" rowspan="4" id="pt-80">3</th>
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

    <?php require_once './footer.html';?>   
    
   