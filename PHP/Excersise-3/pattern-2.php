<html>
    <head>
        <title>Pattern</title>
    </head>
    <body>
        <?php
            $size = 5;
            for($i = 0; $i < $size; $i++) 
            {
                for($j = 1; $j < $size - $i; $j++) 
                {
                    echo "&nbsp;&nbsp;";
                }
                for($k = 0; $k <= $i; $k++)
                {
                    echo "*";
                }
                echo "<br>";
            }
        ?>
    </body>
</html>
    