<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        welcome to this guessing game.
    </h1>

    


<?php  


  if(! isset($_GET['guess'])){
    echo("input parameter");}
    elseif(strlen($_GET['guess']<1) ){
    echo("input something");}
    elseif(is_numeric($_GET['guess']) === FALSE){
    echo("input a number");}
    elseif($_GET['guess']<13){
    echo("your guess is too low");}
    elseif($_GET['guess']>13){
    echo("your guess is too high");}
    elseif($_GET['guess']=13){
    echo("you got it");}
?>
<pre>
  <?php 
    print_r($_GET);
    ?>
</pre>
</body>
</html>