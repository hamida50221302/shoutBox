<?php
try{
    $pdo=new PDO("mysql:host=localhost;dbname=shout","root","");
}
catch(PDOException $e){
    echo $e->getMessage();
}
?>
