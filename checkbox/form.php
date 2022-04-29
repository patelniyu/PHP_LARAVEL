<?php
    require ("connection.php");
    require("function.php");
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    //exit;
    //$data=$_POST['check'];
    $calltoaction = new insterdata();
    if (isset($_POST['submit'])) 
    {
        foreach ($_POST['check'] as $key => $value) 
        {
            $calltoaction->insertdata($value,'table2','table1');        
        }
    }

    if (isset($_POST['submit1'])) 
    {
        foreach ($_POST['check'] as $key => $value) 
        {
            $calltoaction->insertdata($value,'table1','table2');
        }
    }
     
?>
<!DOCTYPE html>
<html lang="en">
    <head>    
        <title>Display Table Data</title>
        <style>
            body 
            {
                width: 90%;
                margin: 0 auto;
            }
            table:first-child 
            {
                background-color: white;
                color: black;
                margin-right: 1%;
            }
            table:nth-child(2n) 
            {
                background-color: black;
                color: white;
            }
            table 
            {
                width: 49%;
                float: left;
            }
        </style>
    </head>
    <body>
        <form method="POST">
            <?php
                if ($total != 0) 
                {
            ?>          
                <h2>TABLE1 Records</h2>
                    <center>
                        <table border="2" cellspacing="5" width="50%">
                            <tr>
                                <th width="03%">Id</th>
                                <th width="10%">Sample form checkboxes</th>
                            </tr>
                    </center>
                    <?php
                        while ($result = mysqli_fetch_assoc($data)) 
                        {    
                    ?>
                            <tr>
                                <td><?php echo $result['id1'] ?>
                                    <input type="hidden" name="id1_<?php echo $result['id1'] ?>" value="<?php echo $result['id1'] ?>">
                                </td>
                                <td><?php echo $result['text1'] ?>
                                    <input type="checkbox" name="check[]" value="<?php echo $result['text1'] ?>" />
                                </td>
                            </tr>
            <?php
                        }
                } 
                else 
                {
                    echo "No record found..";
                }
            ?>
                    <tr>
                        <td colspan="3" style="text-align: center;">
                            <input type="submit" value="submit" name="submit">
                        </td>
                    </tr>
                </table>
        </form>
        <form method="POST">
            <?php
                if ($total1 != 0) 
                {
            ?>
        <center>
            <h2>TABLE2 Records</h2>
        </center>
        <center>
            <table border="2" cellspacing="5" width="50%">
                <tr>
                    <th width="03%">Id</th>
                    <th width="10%">Sample form checkboxes</th>
                </tr>
        </center>
        <?php
            while ($result1 = mysqli_fetch_assoc($data1)) {
        ?>
            <tr>
                <td><?php echo $result1['id2'] ?>
                    <input type="hidden" name="id2_<?php echo $result1['id2'] ?>" value="<?php echo $result1['id2'] ?>">
                </td>
                <td><?php echo $result1['text2'] ?>
                    <input type="checkbox" name="check[]" value="<?php echo $result1['text2'] ?>" />
                </td>
            </tr>
        <?php
                }
            } 
            else 
            {
                echo "No record found..";
            }
        ?>
                <tr>
                    <td colspan="3" style="text-align: center;">
                        <input type="submit" value="submit" name="submit1">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>
