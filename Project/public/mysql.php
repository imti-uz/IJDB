<?php
    try
    {
        $pdo = new PDO('mysql:host=localhost; dbname=ijdb; charset=utf8', 'ijdbuser','mypassword');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // $query = 'INSERT INTO jokes (joketext, jokedate) VALUE ("this joke was added from script", "2018-03-06")';
        // $query = 'CREATE TABLE jokes(
        //     id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        //     joketext TEXT,
        //     jokedate DATE NOT NULL
        // ) DEFAULT CHARACTER SET utf8 ENGINE=InnoDB';
        
        // $query_update = 'UPDATE jokes set jokedate="2018-2-28" WHERE id=6';
        $query = 'SELECT `joketext` FROM `jokes`';
        
        // $pdo->exec($query);
        // echo 'executed the query';
        // $output = 'executed a query: '.$pdo->exec($query_update);
        
        $result = $pdo->query($query);
        
        // while ($row = $result->fetch() ) 
        foreach($result as $row)
        {
            // echo $row['jokedate'];
            $jokes[] = $row['joketext'];
        }
    }

    catch(PDOException $e)
    {
        $output = 'problem in database connection: '.$e->getMessage().' in '.$e->getFile().' at line '.$e->getLine();
    }

    include __DIR__ . '/../templates/jokes.html.php';
    