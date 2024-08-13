<?php
    include_once 'connectiondb.php';
    $sql="select * from demothemeDB";
    $run = mysqli_query($connection, $sql);
    while ($row = mysqli_fetch_array($run)) {
        $logo = $row['logo'];
        $favicon = $row['favicon'];
        $title = $row['title'];
    }

?>
<html>
    <head>
        <title><?php echo $title;?></title>
	    <link rel="icon" href="<?php echo $favicon;?>" type="image/x-icon">
         <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>
        
        <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style>
        /* mobile-view */
        @media screen and (max-width: 1220px) {
            #icon{
                color:008000;
                font-size: 60px;
                margin-top:30px;
            }
            
        }
        /* system-view */
        @media screen and (min-width: 1220px) {
            #icon{
                color:008000;
                font-size: 90px;
                margin-top: 15px;
            }
            
        }
        #b-details{
            margin:10px;
        }
        #btn{
            padding:10px;
        }
    </style>
    </head>
   <body background="images/background.png">
       <br><br>
        <div class="row">
            <div class="col-12" align="center">
                <i class="fa-regular fa-circle-check fa-rotate-by" id="icon"></i>
            </div>
            <div class="col-12">&nbsp;</div>
            <div class="col-12" align="center">
                <h3>Invoice saved successfully!</h3>
            </div>
        </div>
        <br>
        
        <?php
            if(isset($_GET['id']))
            {
                $id=$_GET['id'];
                $f_year=$_GET['f_year'];
        ?>
        <br>
        <center>
           <a href="billprint.php?id=<?php echo $id; ?>&f_year=<?php echo $f_year; ?>" class="btn btn-info">Download</a>
        </center>
        <br><br>
        <?php
            }
        ?>
    </body>
</html>