<?php
echo "<br>";
foreach ($serviceMairie as $row){
    echo "<h6 class='d-flex justify-content-center'>".$row->serv_nom." : ".$row->serv_tel."  ".$row->serv_mail."</h6>";
}
?>


