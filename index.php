<!DOCTYPE html>
<html lang="fr">
	<head>
        <title>PHP ex1.5</title>
    </head>
    <body >
        <p>
            <?php
            $x=NULL;
            echo nl2br("x set as NULL= '".$x."'\n");
            $x="non null";
            echo nl2br("x= '".$x."'\n");
            ?>
        </p>
    </body>
</html>