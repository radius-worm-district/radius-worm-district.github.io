<?php

try{
    $db_conn = new PDO('mysql:host=sql.tomaszt.nazwa.pl;dbname=tomaszt','tomaszt','Worms@15');
}catch(PDOException $e)
{
    echo "Error: " . $e->getCode();
}