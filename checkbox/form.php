<?php
    include('connection.php');
    include ('function.php');

    $calltoaction=new insertdata();
    if (isset($_POST['swap1']))
    {
        $data = $_POST['check'];
        $calltoaction->insert($data,'tableb','tablea','checkbox_data');
        echo"Done";
        // exit;
    }
    if (isset($_POST['swap2']))
    {
        $data = $_POST['check'];
        $calltoaction->insert($data,'tablea','tableb','checkbox_data');
    }
    $totaldata=$calltoaction->getdata('tablea','tableb');
    $query=$totaldata['data'];
    $query1=$totaldata['data1'];
?>
<?php
    session_start();
?>
<html>
    <head>
        <title>Checkbox</title>
    </head>
    <body>
        <?php
            if(isset($_SESSION['status']))
            {
                echo "<h4>".$SESSION['status']."</h4>";
                unset($_SESSION['status']);
            }
        ?>
    
        <center><h2>Table A</h2></center>
        <form method="POST" action="">
            <center>
                <table border="1">
                    <tr>
                        <th></th>
                        <th>Checkboxes</th>
                    </tr>
                    <?php
                        while($row = mysqli_fetch_array($query))
                        {
                            echo "<tr>";
                            echo "<td> <input type='checkbox' name='check[]' value='".$row['checkbox_data']."'></td><td>".$row['checkbox_data']." </td>" ;
                            echo "</tr>";
                        }
                        echo "</table>";

                    ?>
                    </br>
                    <input type="submit" name="swap1" id="swap1" value="Swap to B">
                    </br></br>
                </table>
            </center>
        </form>
    </body>
</html>

<html>
    <body>
        <?php
            if(isset($_SESSION['status']))
            {
                echo "<h4>".$SESSION['status']."</h4>";
                unset($_SESSION['status']);
            }
        ?>
    
        <center><h2>Table B</h2></center>
            <form method="POST" action="">
                <center>
                    <table border="1">
                        <tr>
                            <th></th>
                            <th>Checkboxes</th>
                        </tr>
                        <?php
                            while($row = mysqli_fetch_array($query1))
                            {
                                echo "<tr>";
                                echo "<td> <input type='checkbox' name='check[]' value='".$row['checkbox_data']."'></td><td>".$row['checkbox_data']."</td>";
                                echo "</tr>";
                            }
                            echo "</table>";
                        ?>
                        </br>
                        <input type="submit" name="swap2" id="swap2" value="Swap to A">
                    </table>
                </center>
            </form>
        <?php
            mysqli_close($conn);
        ?>
    </body>
</html> 