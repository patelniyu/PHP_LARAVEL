<html>
    <body>
        <?php
            echo(strtotime("now") . "<br>");
            echo(strtotime("3 October 2005") . "<br>");
            echo(strtotime("+5 hours") . "<br>");
            echo(strtotime("+1 week") . "<br>");
            echo(strtotime("+1 week 3 days 7 hours 5 seconds") . "<br>");
            echo(strtotime("next Monday") . "<br>");
            echo(strtotime("last Sunday"));
        ?>
    </body>
</html>
