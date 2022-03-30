<?php require("controllerUserData.php"); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Rare Bookstores</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <style>
        @media only screen and (max-width: 600px) {
  .cont {
   margin-top: 50%;
  }
}
body{
    background-color: #062C30;
}
    </style>
    <body id="page-top" >
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand " href="index.php" >Rare Bookstores</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link " href="index.php?PageName=EmployeeLogin">Employee</a></li>
                        <li class="nav-item"><a class="nav-link " href="index.php?PageName=ManagerLogin">Manager</a></li>
                        <li class="nav-item"><a class="nav-link " href="index.php?PageName=OwnerLogin">Owner</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php?PageName=Register">Register</a></li>
                    </ul>
                </div>
            </div>
        </nav>
      

<?php

$PagesDirectory = 'Pages Folder';
if (!empty($_GET['PageName'])) {
    $PagesFolder = scandir($PagesDirectory, 0);
    unset($PagesFolder[0], $PagesFolder[1]);
    $PageName = $_GET['PageName'];
    if (in_array($PageName . '.php', $PagesFolder)) {
        include($PagesDirectory . '/' . $PageName . '.php');
    } else {
        echo '<h1 id="request">You are Lost..</h1>';
        echo '<h2>Sorry Page Not Found</h2>';
    }
} else {
    include($PagesDirectory . '/Landing.php');
}
?>
      

   
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
