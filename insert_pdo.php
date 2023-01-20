<?php

require_once "pdo_data.php";

if ( isset($_POST['name'])  &&  isset($_POST['email'])  &&  isset($_POST['password']) ) {
    $data = "INSERT INTO users (name, email, password) VALUES ( :name ,:email,:password)";
    $stmt = $connection->prepare($data);
    $stmt-> execute (array(
        ':name' => $_POST['name'],
        ':email' => $_POST['email'],
        ':password' => $_POST['password']
    ));
}
echo("<pre>");

$myquery = $connection->query('SELECT * FROM users');

while ($row = $myquery->fetch(PDO::FETCH_ASSOC)){
    print_r($row);
}

echo("<pre/>");
?>


<html>
    <body>
    <p>add new users</p>

<form method="post">
    Name :<input type="text" name="name"> <br>
    Email :<input type="email" name="email"><br>
    Password :<input type="password" name="password"><br>
    <input type="submit" value="add new" >
</form>
</body>
</html>
