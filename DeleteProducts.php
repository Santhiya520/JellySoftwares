<?php 
            include_once 'connectiondb.php';
            $del = $_GET['del'];
            // echo "hi";
            // echo "del".$del;
            $sql = "update productDB set status= '0' where id = '$del'";
            
                if(mysqli_query($connection,$sql))
                {
                    echo '<script> location.replace("AddProducts.php")</script>';  
                }
                else
                {
                    echo "Some thing Error" . $connection->error;
                }
        ?>