<?php
    try
    {
        // $pdo = new PDO("mysql:host='localhost' dbname='ijdb' charset='utf8' ", 'ijdbuser', 'mypassword');
        // $pdo = new PDO('mysql:host=localhost; dbname=ijdb; charset=utf8', 'ijdbuser', 'mypassword');
        // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);

        include __DIR__.'/../includes/DatabaseConnection.php';
        include __DIR__.'/../includes/DatabaseFunctions.php';

        // $sql = 'DELETE FROM `jokes` where `id`= :id ';

        // $stmt = $pdo->prepare($sql);
        // $stmt->bindValue(':id', $_POST['id']);
        // $stmt->execute();

        deleteJoke($pdo, $_POST['id']);

        header('location:jokes.php');
    }

    catch(PDOException $e)
    {
        $output = 'Database Error: ' . $e->getMessage() . 'in' . $e->getFile() . ':' . $e->getLine();
    }