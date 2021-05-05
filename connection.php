<?php
    $host           = "host = 127.0.0.1";
    $port           = "port = 5432";
    $dbname         = "dbname = AMD2";
    $credentials    = "user = postgres password = 12345678";

    $db = pg_connect("$host $port $dbname $credentials");
    if(!$db) {
        echo "Error : unable to open database\n";
    } else {
        echo "Connect sucessfully";
    }
?>