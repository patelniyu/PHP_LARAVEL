<?php

 class insertdata
{
    public function insert($data,$table2,$table1,$col)
    {
        require('connection.php');

        $data = $_POST['check'];
       

            foreach($data as $value)

        {
            $query = "INSERT INTO $table2  VALUES ('','$value')";
            $query_run = mysqli_query($conn,$query);
            $del_sql = "delete from $table1 where $col = '$value'";
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
                //header("Location: tableA.php");
            }

            echo "HELLO PHP";
            exit;

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