<!-- this is a game that prompts the user to enter a number, 
checks it and displays a message accordingly --> 


<?php
$prevguess = '';
$mensaje = FALSE;

if(isset($_POST['guess']))
  {$prevguess = $_POST['guess'];
      }if (!is_numeric( $prevguess)){
            $mensaje = 'that is not a number';}
        elseif(strlen($prevguess)< 1 ){
                $mensaje = 'type something';
        }elseif($prevguess<13){
            $mensaje = "that's low";
        }elseif($prevguess>13){
            $mensaje = "that's high";
        }elseif($prevguess == 13){
            $mensaje = "that's it";
    }


?>
<html>
<head>
    <title>el casino</title>
</head>
<body style="font-family: sans-serif;">
<p>play!</p>
<form method="post">
   <p><label for="guess">Input Guess</label>
   <input type="text" name="guess" id="guess" size="40"
     value="<?= htmlentities($prevguess)?>"/></p>
   <input type="submit"/>
</form>
<?php
if ($mensaje !== FALSE)
echo($mensaje);
?>
</body>


