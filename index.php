<!DOCTYPE html>
<html>
    <head lang="fr">
        <meta charset="utf-8">
        <title>Exercice 8</title>
    </head>
    <body>
        <div>
            <?php
            $count = 200;
            while ($count >= 0)
            {
                echo '<p>' .$count. ' Enfin !!!!</p>';
                $count -= 12;
            }
            ?>
        </div>
    </body>
</html>