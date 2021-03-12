<?php
echo "<br>";
foreach ($serviceMairie as $row){
    echo "<h6 class='d-flex justify-content-center ml-3 mr-3'>".$row->serv_nom." : ".$row->serv_tel."  ".$row->serv_mail."</h6>";
    echo "<br>";
}
?>


