<?php
require 'parking.php';
$car = $_POST['marque'];
$poids = $_POST['poids'];
$immat = $_POST['immatriculation'];
$km = $_POST['km'];
$date = $_POST['date'];
$voiture = new Voiture;
?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form action="#" method="post">


</form>

    <?php
        echo $voiture->model($car);
        echo $voiture->type($poids);
        echo $voiture->pays($immat);
        echo $voiture->roulage($km);
        echo $voiture->age($date);
    ?>

</body>
</html>