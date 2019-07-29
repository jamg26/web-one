<?php

$server = 'db';

$user = 'root';

$pass = 'tqbfjotld';

$dbname = 'mydb';

$conn = new mysqli($server, $user, $pass, $dbname);

if($conn->connect_error) {
    echo 'failed';
} else {
    echo 'success';
}


?>