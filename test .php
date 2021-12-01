
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="Style.css" rel="stylesheet"/>
</head>
<body>
<?php
include ("connexion.php");
?>
<h1>Shout ITT Shoutbox</h1>
<hr>
<div class="new" >
    <header></header>
    <div id="shouts">
        <ul>
            <li class="shout"><strong><?php

                    $y=$pdo->query('SElECT *  FROM users ');
                    while ($d=$y->fetch()){
                        $h=$d['temp'].':'.' '.$d['name'].':'.' '. $d['message'].'</br>';
                        echo $h;
                    }
                    ?></strong> </li>
       </ul>
    </div>
    <div id="error"></div><br>
</div><br>
<form action="envoimsg.php" method="get">
    <input type="text" placeholder="name" name="name"/>
    <input type="text" placeholder="message" name="message"/><br>
    <br>
    <input type="submit" class="subm" value="submit" name="valider"/><br>
</form>



</body>
</html>