<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

if (isset($_POST['submit'])){

    $nom=$_POST ["nom" ];

    $prenom=$_POST ["prenom"];

    $email=$_POST ["email"];

    $sujet=$_POST ["sujet"];
    
    $message=$_POST ["message"];

    echo  "Information personne : " ."<br>". $nom."  ".$prenom."  "."<br>";
 


}



?>
</body>
</html>