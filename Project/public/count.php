<?php
    $output = '';

    for($count = 1; $count <= 10; $count++)
    {
        $output .= $count.' ';
    }

    // include 'count.html.php';
    echo __DIR__;
    include __DIR__.'/../templates/count.html.php';
    
