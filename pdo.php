<!-- this program connects to a database called misc, fetches and displays the record within -->


<?php
echo("<pre>\n");

$conn = new PDO ('mysql:host=127.0.0.1;port=3307; dbname=misc', 'root' ,'');
$data = $conn->query('SELECT * FROM users');

while ($row = $data->fetch(PDO::FETCH_ASSOC)){
    print_r($row);
}
echo("</pre>\n")
?>