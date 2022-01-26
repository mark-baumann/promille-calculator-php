<?php

include("zugriff.php");

date_default_timezone_set('Europe/Amsterdam');
$now = new DateTime("now");

$sql = "SELECT * FROM tb_promille_messer;";
        $result = mysqli_query($db, $sql);
        
        
echo "<table border='1'>";

        while($row = mysqli_fetch_assoc($result)){
           // echo $bierGesamt;
            $name =  $row['name'];
            $olddate = $row['date'];
            $promille = $row['promille'];
            $anzahl = $row['anzahl'];

           # echo $name."<br>".$promille."<br>";

            $dateTime = new DateTime($olddate);

            $unterschiedInSec = ($now->getTimestamp() -
            $dateTime->getTimestamp());
           
   
            #echo $unterschiedInSec."<br>";

                if ($unterschiedInSec > 3600)  {
                        echo "<script>console.log('$name');</script>";
                        echo "<script>console.log('$unterschiedInSec');</script>";
                        
                        $promille = $promille - 0.2;
                        $sql = "UPDATE tb_promille_messer SET promille = '$promille' WHERE name = '$name';              ";
                        mysqli_query($db, $sql);
                }
                if ( $unterschiedInSec > 7200){
                        echo "<script>console.log('$name');</script>";
                        $promille = $promille - 0.2;
                        $sql = "UPDATE tb_promille_messer SET promille = '$promille' WHERE name = '$name';               ";
                        mysqli_query($db, $sql);
                }
                if ($unterschiedInSec > 10800){
                        echo "<script>console.log('$name');</script>";
                        $promille = $promille - 0.2;
                        $sql = "UPDATE tb_promille_messer SET promille = '$promille' WHERE name = '$name';                 ";
                        mysqli_query($db, $sql);
                } if ($unterschiedInSec > 14400){
                        echo "<script>console.log('$name');</script>";
                        $promille = $promille - 0.2;
                        $sql = "UPDATE tb_promille_messer SET promille = '$promille' WHERE name = '$name';                 ";
                        mysqli_query($db, $sql);
                }
                if ($unterschiedInSec > 18000){
                        echo "<script>console.log('$name');</script>";
                        $promille = $promille - 0.2;
                        $sql = "UPDATE tb_promille_messer SET promille = '$promille' WHERE name = '$name';                ";
                        mysqli_query($db, $sql);
                }
                if ($unterschiedInSec > 21600){
                        echo "<script>console.log('$name');</script>";
                        $promille = $promille - 0.2;
                        $sql = "UPDATE tb_promille_messer SET promille = '$promille' WHERE name = '$name';                 ";
                        mysqli_query($db, $sql);
                }
                if ($unterschiedInSec > 25200){
                        echo "<script>console.log('$name');</script>";
                        $promille = $promille - 0.2;
                        $sql = "UPDATE tb_promille_messer SET promille = '$promille' WHERE name = '$name';                 ";
                        mysqli_query($db, $sql);
                }
        




                if ($promille < 0){
                        $promille = 0;
                        $sql = "UPDATE tb_promille_messer SET promille = '$promille' WHERE name = '$name'";
                         mysqli_query($db, $sql);
                }


                echo "<tr><td>".$name."<td>".$promille."</td><td>".$olddate."<td>".$anzahl."</td></tr>";






        }


     
       echo "</table>";




?>