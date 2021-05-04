<?php
$mysqli = mysqli_connect( $config["server"], $config["login"], $config["pass"], $config["db"]);  

if (!$mysqli) { printf("Unable to connect to the database. Error code: %s\n", mysqli_connect_error());   exit; 
} 
if (!$mysqli->set_charset("utf8")) {printf("Error while processing the set of symbols utf8: %s\n", $mysqli->error); exit();
} else {

}
?>