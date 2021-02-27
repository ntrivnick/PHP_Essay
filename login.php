<?php
  $title = 'Είσοδος';
  require_once './header.php';
  //require_once 'db/connectDB.php';
 
   ?>

  <!-- Begin page content -->
 
    <div class="d-flex flex-column pl-2">
      <h4 class="font-weight-bold">ΕΙΣΟΔΟΣ</h4>
      <p>Συνδεθείτε με τα συνθηματικά σας</p>
    </div>

    <div class="d-flex justify-content-center" id="h-50">
      <form>
        <div class="form-group row">
          <label for="username" class="col-sm-4 col-form-label">Username</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="username">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword" class="col-sm-4 col-form-label">Password</label>
          <div class="col-sm-8">
            <input type="password" class="form-control" id="inputPassword">
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Υποβολή</button>
      </form>
    </div>

    <div class="p-1">
    <br><br><br><br><br><br>
    </div>

  <!-- End page content -->

  <?php require_once './footer.php'; ?>