<?php
    // if (!isset($_POST['firstName']))
    if (!isset($_POST['password']))
        include __DIR__.'/../templates/form.html.php';
    else 
    {
        // $firstName = $_POST['firstName'];
        // $lastName = $_POST['lastName'];

        $pass = $_POST['password'];

        // if($firstName == 'Kevin' && $lastName == 'Yank')
        if($pass=='ishqjunoon')
            $output = 'Welcome Back, COMRADE!';
        else
        {
            // $output = 'Welcome to our website, '.
            //     htmlspecialchars($firstName, ENT_QUOTES, 'UTF-8').' '.
            //     htmlspecialchars($lastName, ENT_QUOTES, 'UTF-8');

            $output = 'This '.htmlspecialchars($pass, ENT_QUOTES, 'UTF-8').' shit you\'ve typed is not the password.
                GO BACK and try again!';
        }

        include __DIR__.'/../templates/welcome.html.php';
    }
?>