<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <!-- My CSS -->
  <link rel="stylesheet" href="/css/headerFooter.css">

  <title>Μεταπτυχιακό</title>
</head>

<body>

  <!-- Begin of header -->
  <header>
    <div class="jumbotron">
      <!-- creation of logo -->
      <div class="row">
        <div class="col-4">
          <p class="text-center">
            <a href="../index.html">
              <img alt="logo" src="/assets/images/logo_200x200.png" id="img">
            </a>
          </p>
        </div>
        <!-- ending code for logo -->

        <!-- text in middle of header -->
        <div class="col-4" id="headerText">
          <p class="text-center font-weight-bold">ΗΛΕΚΤΡΟΝΙΚΗ ΓΡΑΜΜΑΤΕΙΑ</p>
          <p class="text-center">ΜΕΤΑΠΤΥΧΙΑΚΟΥ ΠΡΟΓΡΑΜΜΑΤΟΣ ΣΠΟΥΔΩΝ ........</p>
          <p class="text-center">ΤΜΗΜΑ ..............</p>
          <p class="text-center">ΠΑΝΕΠΙΣΤΗΜΙΟ .........</p>
        </div>
        <div class="col-4">
          <p class="text-center" id="entryLink"><a href="/html/login.html">Είσοδος</a></p>
        </div>
      </div>
      <!-- ending of text in middle of header -->

      <!-- navs for navigating the site -->
      <ul class="nav nav-pills nav-justified" id="navLinks">
        <li class="nav-item">
          <a class="nav-link" href="/index.html">Αρχική</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/html/lessons.html">Μαθήματα</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#">Προσωπικό</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="/html/teachers.html">Διδάσκοντες</a>
            <a class="dropdown-item" href="/html/secretaries.html">Γραμματεία</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/html/studyRules.html">Κανονισμός Σπουδών</a>
        </li>
      </ul>
      <!-- ending of navs for navigating the site -->

    </div>
  </header>
  <!-- End of header -->



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

  <!-- End page content -->

  <!-- Begin of Footer -->
  <div class="d-flex justify-content-around bottomArea fixed-bottom p-2">
    <div class="d-flex flex-column mr-5 pr-5">
      <div class="font-weight-bold">Επικοινωνήστε μαζί μας</div>
      <div>Τηλέφωνο: 211-1234567</div>
      <div>Email: info@university.gr</div>
    </div>
    <div class="ml-5 pl-5">
      <a href="/assets/termsOfUse.pdf" target="_blank">Όροι χρήσης</a> | <a href="/assets/confintential.pdf" target="_blank">Πολιτική απορρήτου</a>
    </div>
  </div>
  <!-- End of Footer -->

  <!-- jQuery, Popper.js, and Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
    integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
    crossorigin="anonymous"></script>

  <!-- My JS -->
  <script src="/js/header.js"></script>
</body>

</html>