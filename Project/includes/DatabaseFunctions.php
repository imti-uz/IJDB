<?php
    function allJokes($pdoLink)
    {
        $sql = 'SELECT `jokes`.`id`, `joketext`, `name`, `email`
                FROM `jokes` INNER JOIN `author`
                ON `authorID`=`author`.`id`;';

        $query = executeQuery($pdoLink, $sql);
        return $query->fetchAll();
    }

    function totalJokes($pdoLink) 
    {
        // $sql = $pdoLink->prepare('SELECT COUNT(*) FROM `jokes`');
        // $sql->execute();
        $query = executeQuery($pdoLink, 'SELECT COUNT(*) FROM `jokes`');

        $row = $query->fetch();
        return $row[0];
    }

    function getJoke($pdoLink, $id)
    {
        // $sql = $pdoLink->prepare('SELECT `joketext` FROM `jokes` WHERE `id`=:id');
        // $sql->bindValue(':id',$id);
        // $sql->execute();
        $parameters = [':id' => $id];
        $query = executeQuery($pdoLink,'SELECT * FROM `jokes` WHERE `id`=:id', $parameters);
        // $query = executeQuery($pdoLink,'SELECT `joketext` FROM `jokes` WHERE `id`=:id', $parameters);

        return $query->fetch();
    }

    function addJoke($pdoLink, $joketext, $authorID)
    {
        $sql = 'INSERT INTO `jokes` (`joketext`, `jokedate`, `authorID`) VALUES (:joketext, CURDATE(), :authorID)';
        $parameters = [':joketext' => $joketext, ':authorID' => $authorID];
        // $query = executeQuery($pdoLink, $sql, $parameters);
        executeQuery($pdoLink, $sql, $parameters);
    }

    function updateJoke($pdoLink, $jokeID, $joketext, $authorID)
    {
        $sql = 'UPDATE `jokes` SET `joketext`=:joketext, `authorID`=:authorID WHERE `id`=:jokeID';
        $parameters = [':joketext' => $joketext, ':authorID' => $authorID, ':jokeID' => $jokeID];
        executeQuery($pdoLink, $sql, $parameters);
    }

    function newUpdateJoke($pdoLink, $fields)
    {
        $sql = 'UPDATE `jokes` SET ';

        foreach ($fields as $key => $value) 
        {
            $sql .= '`'.$key.'` = '.':'.$key.',';
        }

        $sql->rtrim($sql, ',');

        $sql .= 'WHERE `id`= :primaryKey';

        $fields['primaryKey'] = $fields['id'];

        executeQuery($pdo, $fields);
    }

    function deleteJoke($pdoLink, $jokeID)
    {
        $parameters = [':id' => $jokeID];
        executeQuery($pdoLink, 'DELETE FROM `jokes` WHERE `id`=:id;', $parameters);
    }

    function executeQuery($pdo, $sql, $parameters = [])
    {
        $query = $pdo->prepare($sql);

        // foreach ($parameters as $key => $value) {
        //     $query->bindValue($key,$value);
        // }
        
        // $query->execute();
        $query->execute($parameters);
        return $query;
    }
?>