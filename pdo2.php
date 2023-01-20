<!-- this program uses login data from 'pdo_data.php' fetches records from the dbase and displays it.  -->

<?php
echo("<pre>");

require_once "pdo_data.php";
$myquery = $connection->query('SELECT * FROM users');

while ($row = $myquery->fetch(PDO::FETCH_ASSOC)){
    print_r($row);
}
echo("<pre/>");
?>