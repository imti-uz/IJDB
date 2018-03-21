<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="jokes.css">
    <link rel="stylesheet" href="form.css">
    <title><?= $title ?></title>
</head>
<body>
    <header>
        <h1>Internet Joke Database - IJDB</h1>
    </header>
    <nav>
        <ul>
            <li><a href="home.php">HOME</a></li>
            <li><a href="jokes.php">JOKES</a></li>
            <li><a href="addjoke.php">Add A Joke</a></li>
        </ul>
    </nav>
    <main>
        <?= $output ?>
    </main>
    <footer>
        &copy;IJDB 2017
    </footer>
</body>
</html>