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
  <link rel="stylesheet" href="css/headerFooter.css">

  <title> Μεταπτυχιακό - <?php echo $title; ?></title>
</head>

<body>
  
<!-- Begin of header -->
  <header>

    <div class="jumbotron">
      <!-- creation of logo -->
      <div class="row">
        <div class="col-4">
          <p class="text-center">
            <a href="index.php">
              <img alt="logo" src="assets/images/logo_200x200.png" id="img">
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
          <p class="text-center" id="entryLink"><a href="html/login.php">Είσοδος</a></p>
        </div>
      </div>
      <!-- ending of text in middle of header -->

      <!-- navs for navigating the site -->
      <ul class="nav nav-pills nav-justified" id="navLinks">
        <li class="nav-item">
          <a class="nav-link active" href="index.php">Αρχική</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="html/lessons.php">Μαθήματα</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#">Προσωπικό</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="html/teachers.php">Διδάσκοντες</a>
            <a class="dropdown-item" href="html/secretaries.php">Γραμματεία</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="html/studyRules.php">Κανονισμός Σπουδών</a>
        </li>
      </ul>
      <!-- ending of navs for navigating the site -->

    </div>
  </header>
  <!-- End of header -->