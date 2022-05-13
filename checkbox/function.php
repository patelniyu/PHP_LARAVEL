<?php

    class insertdata
    {
        public function insert($data,$table2,$table1,$col)
        {
            require('connection.php');

            //$data = $_POST['check'];
            foreach($data as $value)
            {
                $query = "INSERT INTO $table2  VALUES (NULL,'$value')";
                if(mysqli_query($conn, $query))
                {
                    //echo "hello";
                    $query_run = mysqli_query($conn,$query);
                    $del_sql = "delete from $table1 where $col = '$value'";
                    if (mysqli_query($conn, $del)) 
                    {
                        header("location:form.php");
                        // echo "Record deleted successfully";
                    } 
                    else 
                    {
                        echo "Error deleting record: " . mysqli_error($conn);
                    }
                }    
                    //echo $del_sql; exit;
                    mysqli_query($conn,$del_sql);
            }
            if($query_run)
            {
                echo "Inserted Successfully";
                header("Location: form.php");
            }
            else
            {
                echo "Data Not Inserted";
                //header("Location: form.php");
            }   
        }

         public function getdata($table1,$table2)
        {
            include('connection.php');
            $query="SELECT * FROM $table1 ORDER BY checkbox_data ASC";
            $data=mysqli_query($conn,$query);
            $total['total1']=mysqli_num_rows($data);
            $total['data']=$data;

            $query1="SELECT * FROM $table2 ORDER BY checkbox_data ASC";
            $data1=mysqli_query($conn,$query1);
            $total['total2']=mysqli_num_rows($data1);
            $total['data1']=$data1;
            return $total;
        }
    }
?>