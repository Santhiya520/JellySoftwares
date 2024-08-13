<?php
    include_once 'connectiondb.php';
    $sql="select * from themeDB";
    $run = mysqli_query($connection, $sql);
    while ($row = mysqli_fetch_array($run)) {
        $logo = $row['logo'];
        $logo1 = $row['logo1'];
        $favicon = $row['favicon'];
        $title = $row['title'];
        
    }

?>
<!DOCTYPE html>
<html lang="en" data-layout="topnav" data-topbar-color="dark" data-menu-color="light">

<head>
    <meta charset="utf-8" />
    <title><?php echo $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully responsive admin theme which can be used to build CRM, CMS,ERP etc." name="description" />
    <meta content="Techzaa" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Daterangepicker css -->
    <link rel="stylesheet" href="assets/vendor/daterangepicker/daterangepicker.css">

    <!-- Vector Map css -->
    <link rel="stylesheet" href="assets/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css">

    <!-- Theme Config Js -->
    <script src="assets/js/config.js"></script>

    <!-- App css -->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    
    <!-- Vendor js -->
    <script src="assets/js/vendor.min.js"></script>

    <!-- Daterangepicker js -->
    <script src="assets/vendor/daterangepicker/moment.min.js"></script>
    <script src="assets/vendor/daterangepicker/daterangepicker.js"></script>
    
    <!-- Apex Charts js -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>

    <!-- Vector Map js -->
    <script src="assets/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="assets/vendor/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>

    <!-- Dashboard App js -->
    <script src="assets/js/pages/dashboard.js"></script>


    <!-- App js -->
    <script src="assets/js/app.min.js"></script>
    
    <!--font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    
    <!-- Datatables js -->
    <script src="assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
    <script src="assets/vendor/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="assets/vendor/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
    <script src="assets/vendor/datatables.net-fixedcolumns-bs5/js/fixedColumns.bootstrap5.min.js"></script>
    <script src="assets/vendor/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="assets/vendor/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
    <script src="assets/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="assets/vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="assets/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="assets/vendor/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="assets/vendor/datatables.net-select/js/dataTables.select.min.js"></script>
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <!-- Datatables css -->
    <link href="assets/vendor/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/vendor/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet"
        type="text/css" />
    <link href="assets/vendor/datatables.net-fixedcolumns-bs5/css/fixedColumns.bootstrap5.min.css" rel="stylesheet"
        type="text/css" />
    <link href="assets/vendor/datatables.net-fixedheader-bs5/css/fixedHeader.bootstrap5.min.css" rel="stylesheet"
        type="text/css" />
    <link href="assets/vendor/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet"
        type="text/css" />
    <link href="assets/vendor/datatables.net-select-bs5/css/select.bootstrap5.min.css" rel="stylesheet"
        type="text/css" />

    <!-- Datatable Demo Aapp js -->
    <script src="assets/js/pages/datatable.init.js"></script>

    <style>
        /* system-view */

        @media screen and (min-width: 1220px) {
            .system-space1{
                margin-left:178px;
            }
            .system-space2{
                margin-left:-115px;
            }
            .system-space3{
                margin-left:-103px;
            }
            .icon1{
               margin-left:188px;
               margin-top:10px;
               position:absolute;
               color: White;
               font-size:20px;
            }
            .icon2{
                margin-left:-96px;
                margin-top:8px;
                position:absolute;
                color: #f1efef;
                font-size:20px
            }
            .icon3{
                margin-left:-104px;
                margin-top:8px;
                position:absolute;
                color:White;
                font-size:20px
            }
            #table-data{
                /*width:70%;*/
                /*margin-left:15%;*/
                margin-top:50px;
            }
            
        }
        
        /*mobile-view*/
        @media screen and (max-width: 1220px) {
            #table-data{
                margin-top:50px;
            }
            .system-view{
                display:none;
            }
            .system-space1{
                margin-left:-55px;
            }
            .system-space2{
                margin-left:-11px;
            }
            .system-space3{
                margin-left:-45px;
            }
            .icon1{
               margin-left:-49px;
               margin-top:8px;
               position:absolute;
               color: White;
               font-size:20px;
            }
            .icon2{
                margin-left:-38px;
                margin-top:8px;
                position:absolute;
                color: #f1efef;
                font-size:20px
            }
            .icon3{
                margin-left:-2px;
                margin-top:8px;
                position:absolute;
                color:White;
                font-size:20px
            }
            #mobile-space{
                margin:5px;
            }
            
        }
    </style>
</head>

<body>
    <?php include_once 'navbar.php'; ?>
    <div class="card m-md-4 mt-sm-4  p-md-4 p-sm-1">
        <div class="container">
            <form action="" method="POST">
                <br>
                <h1 align="center">Product Master</h1>
                <br>
                <div class="row">
                    <div class="col-sm-3">
                        <h4>Product Code</h4>
                        <input class="form-control" type="text" name="p_code" id="p_code" placeholder="Product Code"  >
                    </div>
                    <div class="col-sm-3">
                        <h4>Product Name</h4>
                        <input class="form-control" type="text" name="p_name" id="p_name" placeholder="Product Name">
                    </div>
                    <div class="col-sm-3">
                        <h4>Case Content</h4>
                        <input class="form-control" type="text" name="case_content" id="case_content" placeholder="Case Content">
                    </div>
                    <div class="col-sm-3">
                        <h4>Case Unit</h4>
                        <input class="form-control" type="text" name="case_unit" id="case_unit" placeholder="Case Unit">
                    </div>
                    <div class="col-sm-3">
                        <h4>Case Rate</h4>
                        <input class="form-control" type="text" name="case_rate" id="case_rate" placeholder="Case Rate">
                    </div>
                    <div class="col-sm-3">
                        <h4>Case Rate Per</h4>
                        <input class="form-control" type="text" name="case_rate_per" id="case_rate_per" placeholder="Case Rate Per">
                    </div>
                     <div class="col-sm-3">
                        <h4>Bundle Content</h4>
                        <input class="form-control" type="text" name="bundle_content" id="bundle_content" placeholder="Bundle Content">
                    </div>
                     <div class="col-sm-3">
                        <h4>Bundle Unit</h4>
                        <input class="form-control" type="text" name="bundle_unit" id="bundle_unit" placeholder="Bundle Unit">
                    </div>
                     <div class="col-sm-3">
                        <h4>Bundle Rate</h4>
                        <input class="form-control" type="text" name="bundle_rate" id="bundle_rate" placeholder="Bundle Rate">
                    </div>
                     <div class="col-sm-3">
                        <h4>Bundle Rate Per</h4>
                        <input class="form-control" type="text" name="bundle_rate_per" id="bundle_rate_per" placeholder="Bundle Rate Per">
                    </div>
                   <div class="col-sm-3">
                        <h4>Years</h4>
                        <input class="form-control" type="year" name="year" id="year" placeholder="Year">
                    </div>
                   
                    
                </div>
                <br>
                <div class="row"> 
                    <div class="col-2">&nbsp;</div>
                    <div class="col-3">
                        <i class="fa-solid fa-floppy-disk icon1"></i>
                        <input type="submit"   class="btn btn-primary system-space1" Style="width:82px" name="submit" id="submit" value="   Save"  >
                    </div>
                    <div class="col-3" align="center">
                        <i class="fa-solid fa-broom icon2"></i>
                        <input type="reset"  value=" Clear" class="btn btn-secondary system-space3" Style="width:82px;padding-left:25px">
                    </div>
                    <div class="col-3">
                        <i class="fa-solid fa-right-from-bracket icon3"></i>
                        <button   class="btn btn-pink system-space2" Style="width:82px;padding-left:25px" ><a href="Dashboard.php" style="text-decoration:none; color:White">&nbsp;&nbsp;Exit</a></button>
                    </div>
                    <div class="col-1">&nbsp;</div>
                    <input type="text" name="id" id="id" hidden>
                </div>
                
            </form>
        </div>
        
        <br>
        <?php
             
            if (isset($_POST['submit'])) {
                $id = $_POST['id'];
                $p_code = $_POST['p_code'];
                $p_name = $_POST['p_name'];
                $case_content= $_POST['case_content'];
                $case_unit= $_POST['case_unit'];
                $case_rate = $_POST['case_rate'];
                $case_rate_per = $_POST['case_rate_per'];
                $bundle_content= $_POST['bundle_content'];
                $bundle_unit= $_POST['bundle_unit'];
                $bundle_rate = $_POST['bundle_rate'];
                $bundle_rate_per = $_POST['bundle_rate_per'];
                $year= $_POST['year'];
                
                
                if($id ==0)
                {
                    $sql = "insert into productDB(p_code,p_name,case_content,case_unit,case_rate,case_rate_per,bundle_content,bundle_unit,bundle_rate,bundle_rate_per,year,status)values
                    ('$p_code','$p_name','$case_content','$case_unit','$case_rate','$case_rate_per','$bundle_content','$bundle_unit','$bundle_rate','$bundle_rate_per','$year',1)";
                  if(mysqli_query($connection,$sql))
                  {
                    echo '<script> location.replace("AddProducts.php")</script>';  
                  }
                  else
                  {
                  echo "Some thing Error" . $connection->error;
                  }
                }
                else
                {   
                    $sql = "update productDB set p_code= '$p_code',p_name='$p_name',case_content='$case_content',case_unit='$case_unit',case_rate='$case_rate',
                    case_rate_per='$case_rate_per',bundle_content='$bundle_content',bundle_unit='$bundle_unit',bundle_rate='$bundle_rate',bundle_rate_per='$bundle_rate_per',year='$year',status='1' where id =  '$id'";
                    if(mysqli_query($connection,$sql))
                    {
                        echo '<script> location.replace("AddProducts.php")</script>';  
                    }
                    else
                    {
                        echo "Some thing Error" . $connection->error;
                    }
                }
            }
        ?>
        <div id="table-data">
            <table id="scroll-horizontal-datatable" class="table table-striped w-100 nowrap mt-2">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Product Code</th>
                        <th>Product Name</th>
                        <th>Case Content</th>
                        <th>Case Unit</th>
                        <th>Case Rate</th>
                        <th>Case Rate Per</th>
                        <th>Year</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql = "select * from  productDB where status = 1 ORDER BY p_code ASC";
                        $run = mysqli_query($connection, $sql);
                        $id1=1;
                        while ($row = mysqli_fetch_array($run)) {
                         
                
                            $id = $row['id'];
                            $p_code = $row['p_code'];
                            $p_name =$row['p_name'];
                            $case_content = $row['case_content'];
                            $case_unit = $row['case_unit'];
                            $case_rate= $row['case_rate'];
                            $case_rate_per = $row['case_rate_per'];
                            $bundle_content = $row['bundle_content'];
                            $bundle_unit = $row['bundle_unit'];
                            $bundle_rate= $row['bundle_rate'];
                            $bundle_rate_per = $row['bundle_rate_per'];
                            $year = $row['year'];
                            
                    ?>
                    <tr>
                        <td><?php echo $id; ?></td>
                        <td><?php echo $p_code; ?></td>
                        <td><?php echo $p_name; ?></td>
                        <td><?php echo $case_content; ?></td>
                        <td><?php echo $case_unit; ?></td>
                        <td><?php echo $case_rate; ?></td>
                        <td><?php echo $case_rate_per; ?></td>
                        <td><?php echo $year; ?></td>
                        
                        <td>
                            <button class="btn btn-info" style="color:white;width:100px" onClick = "update_product('<?php echo $id ?>','<?php echo $p_code ?>','<?php echo $p_name ?>','<?php echo $case_content ?>',
                            '<?php echo $case_unit ?>','<?php echo $case_rate ?>','<?php echo $case_rate_per ?>','<?php echo $bundle_content ?>','<?php echo $bundle_unit ?>','<?php echo $bundle_rate ?>','<?php echo $bundle_rate_per ?>','<?php echo $year ?>')">
                                <a href="#form" style="text-decoration:none;color:white"><i class="fa-solid fa-pen-to-square" style="color: white;font-size:15px"></i>&nbsp;&nbsp;Edit</a>
                            </button>
                             <button class="btn btn-danger" style="width:100px"><a href='DeleteProducts.php?del=<?php echo $id ?>' class="text-light" style="text-decoration:none;"> <i class="fa-solid fa-trash" style="color: white;font-size:15px"></i> &nbsp;&nbsp;Delete</a></button>
                        </td>
                    </tr>
                    <?php
                    $id1++;
                        }
                    ?>
                </tbody>
            </table>
        </div>
        
    </div>

</body>
<script>
    function update_product(code,p_code,p_name,case_content,case_unit,case_rate,case_rate_per,bundle_content,bundle_unit,bundle_rate,bundle_rate_per,year)
   
            {
                console.log("update_customer called");
                console.log({code});
                console.log({p_code});
                console.log({p_name});
                console.log({case_content});
                console.log({case_unit});
                console.log({case_rate});
                console.log({case_rate_per});
                console.log({bundle_content});
                console.log({bundle_unit});
                console.log({bundle_rate});
                console.log({bundle_rate_per});
                console.log({year});
                
               
                document.getElementById("id").value = code;
                document.getElementById("p_code").value= p_code ;
                document.getElementById("p_name").value= p_name ;
                document.getElementById("case_content").value = case_content;
                document.getElementById("case_unit").value= case_unit ;
                document.getElementById("case_rate").value = case_rate;
                document.getElementById("case_rate_per").value= case_rate_per ;
                document.getElementById("bundle_content").value = bundle_content;
                document.getElementById("bundle_unit").value= bundle_unit ;
                document.getElementById("bundle_rate").value = bundle_rate;
                document.getElementById("bundle_rate_per").value= bundle_rate_per ;
                document.getElementById("year").value = year;

            }
            
            
</script>


</html>














