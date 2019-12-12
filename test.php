<?php

if (isset($_GET)) {
    if (isset($_GET['options'])) {
        $options = $_GET['options'];
    } else {
        $options = "";
    }
    if (isset($_GET['request'])) {
        $request = $_GET['request'];
    } else {
        $request = "";
    }
    if (isset($_GET['options']) && isset($_GET['request'])) {
        $search =  $options . "<br>" . $request;
        var_dump($search);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Votre choix</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style2.css">
</head>

<body>

<a href="index.php"><button class="btn btn-dark">Retour à l'accueil</button></a>