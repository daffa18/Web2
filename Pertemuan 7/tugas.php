<?php
session_start();
function menu($menu)
{
    if ($menu == '1') {
        return include 'tugasIFELSE_P2.php';
    } elseif ($menu == '2') {
        return include 'tugasSwitchCase_P3.php';
    } elseif ($menu == '3') {
        return include 'tugasLoopingg_P4.php';
    } elseif ($menu == '4') {
        return include 'tugasAarrayy_P6.php';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web_P7</title>
</head>
<body>
    <h3>Pilih Menu ingin di pilih</h3>
    <ol>
        <li>Penggunaan IF .... ELSE</li>
        <li>Penggunaan Switch .... CASE</li>
        <li>Penggunaan Looping</li>
        <li>Penggunaan Array</li>
    </ol>

    <form action="" method="POST">
        <input type="text" name="menu">
        <input type="submit" name="pilih" value="Pilih">
        <input type="submit" name="reset" value="Reset">
    </form>

    <br/>
    <br/>

    <?php 

if (isset($_POST['pilih'])) {
    $_SESSION['menu'] = $_POST['menu'];
    menu($_POST['menu']);
} else {
    if(!empty($_SESSION['menu'])) {
        menu($_SESSION['menu']);
    }
}

if (isset($_POST['reset'])) {
    session_destroy();
}

?>
</body>
</html>