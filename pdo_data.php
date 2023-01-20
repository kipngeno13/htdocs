<!-- this program holds the login information required to gain acces to the database. -->

<?php
$connection = new PDO ( 'mysql:host=127.0.0.1; port=3307; dbname=misc', 'root','');

$connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


?>