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
                width:70%;
                margin-left:15%;
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
    <div class="card m-md-2 mt-sm-4  p-md-2 p-sm-1">
        <div class="container">
            <form action="" method="POST">
                <h2 align="center">Quotation</h2>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="row">
                            <div class="col-11">
                                <h4>Customer Name</h4>
                                <select class="form-control" name="c_name" id="c_name" required>
                                    <option hidden >--select--</option>
                                    <?php
                                        $sql = "select * from  customersDB where status = 1 ORDER BY c_name ASC";
                                        $run = mysqli_query($connection, $sql);
                                        while ($row = mysqli_fetch_array($run)) {
                                            $id = $row['id'];
                                            $c_name=$row['c_name'];
                                    ?>
                                        <option value="<?php echo $id; ?>" ><?php echo $c_name; ?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="col-1">
                                <h6>&nbsp;</h6>
                                <button class="btn btn-dark" href="AddCustomers.php">+</button>
                            </div>
                        </div>
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
                $name = $_POST['name'];
                if($id ==0)
                {
                    $sql = "insert into agentDB(name,status)values('$name',1)";
                  if(mysqli_query($connection,$sql))
                  {
                    echo '<script> location.replace("AddAgents.php")</script>';  
                  }
                  else
                  {
                  echo "Some thing Error" . $connection->error;
                  }
                }
                else
                {   
                    $sql = "update agentDB set name= '$name' where id =  '$id'";
                    if(mysqli_query($connection,$sql))
                    {
                        echo '<script> location.replace("AddAgents.php")</script>';  
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
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql = "select * from  agentDB where status = 1 ORDER BY name ASC";
                        $run = mysqli_query($connection, $sql);
                        $id1=1;
                        while ($row = mysqli_fetch_array($run)) {
                            $id = $row['id'];
                            $name = $row['name'];
                    ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $name; ?></td>
                        <td>
                            <button class="btn btn-info" style="color:white;width:100px" onClick = "update_agent('<?php echo $id ?>','<?php echo $name ?>')">
                                <a href="#form" style="text-decoration:none;color:white"><i class="fa-solid fa-pen-to-square" style="color: white;font-size:15px"></i>&nbsp;&nbsp;Edit</a>
                            </button>
                             <button class="btn btn-danger" style="width:100px"><a href='DeleteAgents.php?del=<?php echo $id ?>' class="text-light" style="text-decoration:none;"> <i class="fa-solid fa-trash" style="color: white;font-size:15px"></i> &nbsp;&nbsp;Delete</a></button>
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
    function update_agent(code,name)
            {
                console.log("update_product called");
                console.log({code});
                console.log({name});
                document.getElementById("id").value = code;
                document.getElementById("name").value= name ;
            }
</script>
</html>