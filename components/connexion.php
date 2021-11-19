<?php
    $host = $_SERVER["SERVER_NAME"];
    try {
        if ($host === "localhost") {
            $idconn = new PDO('mysql:host=localhost;dbname=areve;charset=utf8', 'fab', '1234');
        } else {
            $idconn = new PDO('mysql:host=arevefrpbvtest.mysql.db;dbname=arevefrpbvtest;charset=utf8', 'arevefrpbvtest', 'adminareve83B');}
    } catch (PDOException $except) {
        echo "Echec de la connexion", $except->getMessage();
        return FALSE;
        exit();
    }
