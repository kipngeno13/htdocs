<!-- // this program avoids posting twice on refreshing the page -->
<!-- it utilizes the session to store the previous process' data which may then be pulled for output -->
<!-- it terminates the program and redirects to itself -->
<?php

  session_start();
        if( isset ($_POST['guess'])){
            $guess = $_POST['guess'] + 0 ;
            $_SESSION['guess'] = $guess;
            if ($guess == 13){
                $_SESSION['mensaje'] = 'you got it';
            }elseif($guess < 13){
                $_SESSION['mensaje'] = 'that is too low';    
            }else{
                $_SESSION['mensaje'] = 'that is too high';    
            }
            header("location: improved_guess_mvc.php");
            return;
        }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>improved_guess_mvc</title>
</head>
<body>
<?php
$guess = isset ($_SESSION['guess']) ?  $_SESSION['guess'] : '';
$mensaje = isset ($_SESSION['mensaje']) ?  $_SESSION['mensaje'] : false;
?>
    <p>we're fools whether we play or not, so we might as well play</p>

<?php
if ($mensaje !== false){
    echo("<p>$mensaje</p>");
}
?>
    <form method="post">
        <label for="guess">input your guess</label>
        <input type="text" name= "guess" value=<?= htmlentities($_SESSION['guess'])?> >
        <input type="submit">
    </form>
</body>
</html>