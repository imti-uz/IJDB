<?php

if(isset($_POST['joketext'])) {
        try {
            // $pdo = new PDO('mysql:host=localhost; dbname=ijdb; charset=utf8', 'ijdbuser', 'mypassword');
            // $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            include __DIR__.'/../includes/DatabaseConnection.php';
            include __DIR__.'/../includes/DatabaseFunctions.php';

            // $output = "holy shit";

            // $query = 'INSERT INTO `jokes` SET `joketext`= :joketext ,`jokedate`= CURDATE()';
            
            // $stmt = $pdo->prepare($query);
            // $stmt->bindValue(':joketext', $_POST['joketext']);
            // $stmt->execute();

            addJoke($pdo, $_POST['joketext'], 1);

            header('location: jokes.php');
        }
        catch(PDOException $e) {
            $title = 'ERROR!';
            $output = 'Database error: ' . $e->getMessage() . ' in '. $e->getFile() . ':' . $e->getLine();
        }
    }
else {
    $title = "Add New Joke - IJDB";

    ob_start();
    include __DIR__.'/../templates/addjoke.html.php';
    $output = ob_get_clean();
}

include __DIR__.'/../templates/layout.html.php';