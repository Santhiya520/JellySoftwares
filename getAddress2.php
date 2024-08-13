<?php
    $p_id=$_GET['id'];
    include_once 'connectiondb.php';
    $sql = "select * from  customersDB where id = '$p_id'";
    $run = mysqli_query($connection, $sql);
    while ($row = mysqli_fetch_array($run)) {
        echo $row['address2'];              
    }
?>