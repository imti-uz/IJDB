<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>welcome</title>
</head>
<body>
    <p>
        <?php
            // if(isset($error))
            //         echo '<p>'.$error.'</p>';
            // else
            // {
            //     foreach ($jokes as $joke) {
            //         echo '<blockquote>'.htmlspecialchars($joke, ENT_QUOTES, 'UTF-8').'</blockquote>';
            //     }
            // }
        ?>
    </p>

        <?php if(isset($error)): ?>
        <p>
            <!-- <$php echo $error; ?> -->
            <?= $error; ?>
        </p>
        <?php else: ?>
        <p>
            <?=$jokeCount?> jokes have been submitted in the IJDB until now.
        </p>
        <?php foreach($jokes as $joke): ?>
        <blockquote>
            <p>
                <?= htmlspecialchars($joke['joketext'], ENT_QUOTES, 'UTF-8') ?>

                (by 
                <a href="mailto:<?=htmlspecialchars($joke['email'], ENT_QUOTES, 'UTF-8')?>">
                    <?=htmlspecialchars($joke['name'], ENT_QUOTES, 'UTF-8')?>
                </a>)

                <a href="editjoke.php?id=<?=$joke['id']?>">EDIT</a>

                <form action="deletejoke.php" method='post'>
                    <!-- <input type="hidden" name='id' value=$joke['id']> -->
                    <input type="hidden" name='id' value=<?=$joke['id']?>>
                    <input type="submit" value="DELETE!">
                </form>
            </p>
        </blockquote>
        <?php endforeach; ?>
        <?php endif; ?>
        
</body>
</html>