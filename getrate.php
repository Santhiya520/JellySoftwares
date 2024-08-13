<?php
    $p_id=$_GET['id'];
    include_once 'connectiondb.php';
    $sql = "select * from  productDB where p_code = '$p_id'";
    $run = mysqli_query($connection, $sql);
    while ($row = mysqli_fetch_array($run)) {
        echo $row['case_rate'];              
    }
?>