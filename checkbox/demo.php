<?php
    include ("connection.php");
    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";
    $data=$_POST['check'];

    if(isset($_POST['submit']))
    {
        if(!empty($data))
        {
            foreach($data as $key=>$values)
            {
                $ins="INSERT INTO table2 VALUES('','$values')";
                if(mysqli_query($conn, $ins))
                {
                    $del = "DELETE FROM table1 WHERE text1='$values'";
                    if (mysqli_query($conn, $del)) 
                    {
                        // echo "Record deleted successfully";
                    } 
                    else 
                    {
                        echo "Error deleting record: " . mysqli_error($conn);
                    }
                }
            }     
        }
        else
        {
            echo "Please Select any Checkbox ";
        }
    } 

    if(isset($_POST['submit1']))
    {
        if(!empty($data))
        {
            foreach($data as $key=>$values)
            {
                $ins="INSERT INTO table1 VALUES('','$values')";
                if(mysqli_query($conn, $ins))
                {
                    $del = "DELETE FROM table2 WHERE text2='$values'";
                    if (mysqli_query($conn, $del)) 
                    {                
                        // echo "Record deleted successfully";
                    } 
                    else 
                    {
                        echo "Error deleting record: " . mysqli_error($conn);
                    }
                }
            }     
        }
        else
        {
            echo "Please Select any Checkbox ";
        }
    } 

    $query = "SELECT * FROM table1 ";
    $data = mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);

    $query1 = "SELECT * FROM table2 ";
    $data1 = mysqli_query($conn, $query1);
    $total1 = mysqli_num_rows($data1);
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
