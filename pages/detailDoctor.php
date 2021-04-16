<?php
use WebApp2\Database\Database;
use WebApp2\Database\DoctorPDO;

require_once 'vendor/autoload.php';

$d = new DoctorPDO();
$id= $_POST['id'];

$dr = $d->getdoctorById($id, Database::getDb());
//var_dump($dr_by_id);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Query Crew - Health Clinic</title>

    <!-- Bootstrap 4.5 CSS -->
    <link rel="stylesheet" href="library/bootstrap/bootstrap.min.css">
    <!-- Style FOR HEADER AND FOOTER -->
    <link rel="stylesheet" href="css/HeaderFooter.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="css/admin-style/admin_dashboard.css">


</head>

<?php

    include_once 'header.php';
            
?>


<div class="wrapper">

    <div class="container">

        <div class="m-1 row-cols-1 float-right" style="margin-bottom: 1em;">
            <a href="index.php?page=doctorAdmin" id="btn_addStudent" class="btn btn-outline-success btn-lg ">Doctor Admin Panel</a>
        </div>

        <!-- doctor's information container -->
        <div class="wrapper">

            <?php include "doctorInformation.php"; ?>

        </div>
        <!-- end container -->

    </div>
    <!-- end wrapper -->
</div>

<?php

include 'footer.php';

?>

<!-- Script Source Files -->

<!-- jQuery -->
<script src="js/jquery-3.5.1.min.js"></script>
<!-- Bootstrap 4.5 JS -->
<script src="js/bootstrap.min.js"></script>
<!-- Popper JS -->
<script src="js/popper.min.js"></script>
<!-- Font Awesome -->
<script src="js/all.min.js"></script>

<!-- End Script Source Files -->
</body>
</html>