<?php
    try
    {
        // $pdo = new PDO("mysql:host='localhost' dbname='ijdb' charset='utf8' ", 'ijdbuser', 'mypassword');
        // $pdo = new PDO('mysql:host=localhost; dbname=ijdb; charset=utf8', 'ijdbuser', 'mypassword');
        // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);

        include __DIR__.'/../includes/DatabaseConnection.php';
        include __DIR__.'/../includes/DatabaseFunctions.php';

        // $query = 'SELECT `joketext` FROM `jokes`';
        // $query = 'SELECT `joketext`,`id` FROM `jokes`';
        
        // $query = 'SELECT `jokes`.`id`, `joketext`, `name`, `email` 
        //     FROM `jokes` INNER JOIN `author` WHERE `authorID` = `author`.`id`';
        // $jokes = $pdo->query($query);
        
        // $result = $pdo->query($query);
        // echo '<p>'.getJoke($pdo, 6).'</p>';
        // updateJoke($pdo, 7, 'Second one, and a bit polished!', 4);
        
        // foreach ($result as $row) {
        //     // $jokes[] = $row['joketext'];
        //     // $jokes[] = array('id'= $row['id'], 'joketext'=row['joketext']); //not the right way
        //     $jokes[] = array('id' => $row['id'], 'joketext' => $row['joketext']);
        // }

        $jokes = allJokes($pdo);

        $title = 'IJDB joke list';
        $output = '';
        $jokeCount = totalJokes($pdo);

        // foreach ($jokes as $joke) {
        //     $output .= '<blockquote>';
        //     $output .= '<p>';
        //     $output .= $joke;
        //     $output .= '</p>';
        //     $output .= '</blockquote>';
        // }
        
        ob_start();
        include __DIR__.'/../templates/jokes.html.php';
        $output = ob_get_clean();

        // $output = include __DIR__.'/../templates/jokes.html.php';
    }

    catch(PDOException $e)
    {
        $title = 'ERROR OCCURED!';
        $output = 'Database Error: ' . $e->getMessage() . 'in' . $e->getFile() . ':' . $e->getLine();
    }

    include __DIR__.'/../templates/layout.html.php';