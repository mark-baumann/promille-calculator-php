<?php

include("zugriff.php");

date_default_timezone_set('Europe/Amsterdam');
$now = new DateTime("now");

$sql = "SELECT * FROM tb_promille_messer;";
        $result = mysqli_query($db, $sql);
        
        
        while($row = mysqli_fetch_assoc($result)){
           // echo $bierGesamt;
            $name[] =  $row['name']."<br>";
            $olddate = $row['date'];
            $dateTime = new DateTime($olddate);

            $unterschiedInSec = ($now->getTimestamp() -
            $dateTime->getTimestamp());
           
   
            echo $unterschiedInSec."<br>";

        }


     
       
/*

       

*/

        

?>