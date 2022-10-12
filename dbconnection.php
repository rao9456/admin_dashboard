<?php

$SERVER = 'localhost';
$USERNAME = 'root';
$PASSWORD = '';
$DATABASE = 'zalegram2';

$conn = mysqli_connect($SERVER,$USERNAME,$PASSWORD,$DATABASE);

if ($conn){
    echo "Database connected successfuly";
}
else{
    echo"Error occured";
}

?>