<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $int = rand(1, 3);

        if ($int = 1) {
            echo "uno";
        } elseif ($int = 2) {
            echo "dos";
        } else {
            echo "tres";
        }
        ?>
    </body>
</html>
