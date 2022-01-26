<?php

include("zugriff.php");


$name = $_POST['name'];
$gewicht = $_POST['gewicht'];
$geschlecht = $_POST['geschlecht'];
#echo $gewicht;
$anzahl = $_POST['anzahl'];


if($geschlecht == "maennlich") {
    $sex = 0.7;
}else {
    $sex = 0.6;
}

date_default_timezone_set('Europe/Amsterdam');
$date = new DateTime("now");
$date1 =  $date->format('Y-m-d H:i:s');



$promille =  ((20) / ($gewicht * $sex)) * $anzahl; 

$promille = round($promille,2);
$sql = "INSERT INTO tb_promille_messer (name, date, promille, gewicht, anzahl, gender)
VALUES (
    '$name', '$date1', '$promille', '$gewicht', '$anzahl', '$geschlecht'
);";
mysqli_query($db, $sql);

echo $promille;
echo "<a href='ausgabe.php'>Ausgabe</a>";
?>