<?php
    class insterdata 
    {
        public function insertdata($data,$tableB,$tableA)
        {
            require("connection.php");
            echo "Hello";
            $ins="INSERT INTO table2 VALUES('','$values')";
            echo $sql; exit;
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

        public function getdata()
        {
            require("connection.php");
            $query = "SELECT * FROM table1 ORDER BY table1 ASC";
            $data = mysqli_query($conn, $query);
            $total = mysqli_num_rows($data);

            $query1 = "SELECT * FROM table2 ORDER BY table2 ASC";
            $data1 = mysqli_query($conn, $query1);
            $total1 = mysqli_num_rows($data1);

        }
    }
?>