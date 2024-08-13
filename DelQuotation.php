<?php 
    include_once 'connectiondb.php';
    $del = $_GET['del'];
    $f_year = $_GET['year'];
            // echo "hi";
            // echo "del".$del;
    $sql = "update proformaDB set status= '0' where id = '$del' and despatch_year = '$f_year'";
    // echo $sql;        
    if(mysqli_query($connection,$sql))
    {
        echo '<script> location.replace("QuotationReport.php")</script>';  
    }
    else
    {
        echo "Some thing Error" . $connection->error;
    }
?>