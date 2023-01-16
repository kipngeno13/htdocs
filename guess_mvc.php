<?php
$prevguess = '';
$message = false;

if(isset($_POST['guess']))

    {$prevguess = $_POST['guess'] + 0 ;

        if(strlen($prevguess)< 1 ){
            $message = 'type something';
        }
        elseif (!is_numeric( $prevguess)){
            $message = 'that is not a number';
        }elseif($prevguess<13){
            $message = "that's low";
        }elseif($prevguess>13){
            $message = "that's high";
        }elseif($prevguess = 13){
            $message = "that's it";
    }
}

?>

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
        you're now playing
    </h1>

    <form action="post">
        <label for="guess">input your guess</label>
        <input type="text" id= "guess" name= "guess" value= "<? htmlentities($prevguess)?>" >
        <input type="submit">  
    </form>
    <?php 
    if($message !== FALSE){
        echo($message);
    }
    ?>
</body>
</html>