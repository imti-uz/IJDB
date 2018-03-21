<?php
    include __DIR__.'/../includes/DatabaseConnection.php';
    include __DIR__.'/../includes/DatabaseFunctions.php';

    try{
        if(isset($_POST['joketext']))
        {
            updateJoke($pdo, $_POST['jokeID'], $_POST['joketext'], 1);

            header('location:jokes.php');
        }
        else 
        {
            // $id = $_GET['id'];
            $joke = getJoke($pdo, $_GET['id']);

            $title = 'Edit Joke - IJDB';

            ob_start();
            include __DIR__.'/../templates/editjoke.html.php';
            $output = ob_get_clean();
        }
    }
    catch(PDOException $e)
    {
        $title = 'ERROR OCCURED!';
        $output = 'Database Error: ' . $e->getMessage() . 'in' . $e->getFile() . ':' . $e->getLine();
    }

    include __DIR__.'/../templates/layout.html.php';
?>