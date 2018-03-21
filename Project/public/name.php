<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php get</title>
</head>
<body>
    <?php 
        // $name = $_GET['value'];
        // echo 'Welcome to our page, '.$name;
        echo 'Welcome to our page, '.
            htmlspecialchars($_POST['firstName'], ENT_QUOTES, 'UTF-8').' '.
            htmlspecialchars($_POST['lastName'], ENT_QUOTES, 'UTF-8');
    ?>
</body>
</html>