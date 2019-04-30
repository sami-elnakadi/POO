<?php
require 'parking.php';
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.css">
    <link type="text/css" rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
    <link type="text/css" rel="stylesheet" href="./poo.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
    <?php
$voiture1 = new Voiture("BEZEB113","6/12/2015","Audi","RS5 Coupe","180476","Rouge","1.69");
$voiture2 = new Voiture("FRZEB112","5/10/2016","Ferrari","488 GTB","90000","Rouge","1.2");
$voiture3 = new Voiture("DEZEB111","5/10/2010","Land Rover","Range Rover Sport","210000","Blanc","3.6");

echo '<div class ="row">
        <div class ="col-md-3 table">';
echo '<table>';
echo '<img src="https://www.cars-data.com/pictures/audi/audi-rs5-coupe_155_1.jpg">';
                            foreach ($voiture1 as $value){
                                echo '<tr>';
                                echo '<td>'.$value.'</td>';
                                echo '</tr>';
                            }
                            echo '</table>';
        echo '<p>'.$voiture1->pays().'</p>';
        echo '<p>'.$voiture1->marque().'</p>';
        echo '<p>'.$voiture1->type().'</p>';
        echo '<p>'.$voiture1->roulage().'</p>';
        echo '<p>'.$voiture1->age().'</p>';

echo '</div>

<div class ="col-md-3 table">';
echo '<table>';
echo '<img src="https://www.cars-data.com/pictures/ferrari/ferrari-488-gtb_3414_1.jpg">';
                            foreach ($voiture2 as $value){
                                echo '<tr>';
                                echo '<td>'.$value.'</td>';
                                echo '</tr>';
                            }
                            echo '</table>';
        echo '<p>'.$voiture2->pays().'</p>';
        echo '<p>'.$voiture2->marque().'</p>';
        echo '<p>'.$voiture2->type().'</p>';
        echo '<p>'.$voiture2->roulage().'</p>';
        echo '<p>'.$voiture2->age().'</p>';
echo '</div>

<div class ="col-md-3 table">';
echo '<table>';
echo '<img src="https://www.cars-data.com/pictures/land-rover/land-rover-range-rover-sport_1272_1.jpg">';
                            foreach ($voiture3 as $value){
                                echo '<tr>';
                                echo '<td>'.$value.'</td>';
                                echo '</tr>';
                            }
                            echo '</table>';
        echo '<p>'.$voiture3->pays().'</p>';
        echo '<p>'.$voiture3->marque().'</p>';
        echo '<p>'.$voiture3->type().'</p>';
        echo '<p>'.$voiture3->roulage().'</p>';
        echo '<p>'.$voiture3->age().'</p>';
echo '</div>
        </div>';
    ?>


</body>
</html>
