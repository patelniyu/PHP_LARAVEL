

        <?php
            $date1=date_create("2022-03-27");
            $date2=date_create("2022-06-17");
            $diff=date_diff($date1,$date2);
            echo $diff->format("%R%a days");
        ?>
    