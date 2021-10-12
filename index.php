<?php 
    $paragrafo ='E buonasera signore e signori <br>
    Fuori gli attori <br>
    Vi conviene toccarvi i coglioni <br>
    Vi conviene stare zitti e buoni <br>
    Qui la gente è strana tipo spacciatori';

    $lunghezzaParagrafo = strlen($paragrafo);
    $censura = '***';
    $paragrafoCensurato = str_replace($_GET['parola'], $censura, $paragrafo);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
</head>
<body>

    <p><?php echo $paragrafo?></p>
    <p>Lunghezza del paragrafo: <?php echo $lunghezzaParagrafo?></p>
    <br>
    
    <h2>paragrafo censurato: </h2>
    <p><?php echo $paragrafoCensurato ?></p>
</body>
</html>