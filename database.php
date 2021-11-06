<?php

if(isset($_SERVER['HTTP_HOST']) && $_SERVER['HTTP_HOST']=='localhost'){

    $conn = new mysqli("localhost", "root","","db_saewiindia");

}

else{
    $conn = new mysqli("localhost", "bssrauoj_saewiindia","Saewiindia@2021","bssrauoj_saewiindia");
}
if ($conn->connect_errno) {

        echo "connection failed";

}

date_default_timezone_set('Asia/Kolkata');

 

?>