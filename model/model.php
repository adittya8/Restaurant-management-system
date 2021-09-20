<?php

require_once 'db.php';

function searchUsername($username){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `users` WHERE username = '$username'";


    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function findPassword($username){
    $conn = db_conn();
    $selectQuery = "SELECT password FROM `users` WHERE username = '$username'";


    try{
        $stmt = $conn->query($selectQuery);
        
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}
?>