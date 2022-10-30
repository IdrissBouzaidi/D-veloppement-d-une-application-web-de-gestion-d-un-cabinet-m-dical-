<?php
session_start();
if (!isset($_SESSION["role"]) ||  $_SESSION["role"]!="medecin"){
    header("location:/cabinetS1/index.php"); 
}
header("location:/Doctor/pages/dashboard.php"); 
?>
<!DOCTYPE html>
<html>

<?php include("include/head.php")?>

<body>
    <div class="main d-flex">
        <div class="sidebar">
            <?php include("include/sidebar.php")?>
        </div>
        <div class="dashboard">

        </div>
    </div>
</body>
<script>
</script>

</html>