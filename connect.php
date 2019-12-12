<?php
$pdo = new PDO('mysql:dbname=funapp;host=localhost', 'root', '', array(PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE=> PDO::FETCH_OBJ));
