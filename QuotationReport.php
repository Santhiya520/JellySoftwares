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
    $sql="select * from ConfigDB";
    $run = mysqli_query($connection, $sql);
    while ($row = mysqli_fetch_array($run)) {
        $hsn_code = $row['default_hsn_code'];
        
    }
?>
<!DOCTYPE html>
<html lang="en" data-layout="topnav" data-topbar-color="dark" data-menu-color="light">

<head>
    <meta charset="utf-8" />
    <title>
        <?php echo $title; ?>
    </title>
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

    <!--bootstrap 5    -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>

    <!--ajax-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>

    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>

    <!--sweetalert-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


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

    <!--excel-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.0/xlsx.full.min.js"></script>

    <style>
        /* system-view */

        @media screen and (min-width: 1220px) {
            .system-space1 {
                margin-left: 178px;
            }

            .system-space2 {
                margin-left: -115px;
            }

            .system-space3 {
                margin-left: -103px;
            }

            .icon1 {
                margin-left: 188px;
                margin-top: 10px;
                position: absolute;
                color: White;
                font-size: 20px;
            }

            .icon2 {
                margin-left: -96px;
                margin-top: 8px;
                position: absolute;
                color: #f1efef;
                font-size: 20px
            }

            .icon3 {
                margin-left: -104px;
                margin-top: 8px;
                position: absolute;
                color: White;
                font-size: 20px
            }

            #table-data {
                margin-top: 10px;
                overflow: scroll;
                width: 100%;
                height: 250px;
            }

            .button-align {
                position: relative;
                margin-top: -60px;
            }
        }

        /*mobile-view*/
        @media screen and (max-width: 1220px) {
            #table-data {
                margin-top: 50px;
                overflow: scroll;
                width: 100%;
                height: 250px;
            }

            .system-view {
                display: none;
            }

            .system-space1 {
                margin-left: -55px;
            }

            .system-space2 {
                margin-left: -11px;
            }

            .system-space3 {
                margin-left: -45px;
            }

            .icon1 {
                margin-left: -49px;
                margin-top: 8px;
                position: absolute;
                color: White;
                font-size: 20px;
            }

            .icon2 {
                margin-left: -38px;
                margin-top: 8px;
                position: absolute;
                color: #f1efef;
                font-size: 20px
            }

            .icon3 {
                margin-left: -2px;
                margin-top: 8px;
                position: absolute;
                color: White;
                font-size: 20px
            }

            #mobile-space {
                margin: 5px;
            }

        }

        h5 {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <?php include_once 'navbar.php'; ?>
        <div class="card m-md-2 mt-sm-4  p-md-2 p-sm-1">
            <h3 align="center">Quotation Report</h3>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-sm-3">
                        <h6>From : </h6>
                        <input id="startDate" name="startDate" class="form-control input-type" type="date" value="<?php echo date("Y-m-d"); ?>"/>
                    </div>
                    <div class="col-sm-3">
                        <h6>To : </h6>
                        <input id="ToDate" name="ToDate" class="form-control input-type" type="date" value="<?php echo date("Y-m-d"); ?>"/>
                    </div>
                    <div class="col-sm-3">
                        <h6>Customer Name</h6>
                        <select class="form-control" id="c_id" name="c_id" onchange="customer()">
                        <option hidden>--select--</option>
                                <?php
                                        $sql = "select * from  customersDB where status = 1 ORDER BY c_name ASC";
                                        $run = mysqli_query($connection, $sql);
                                        while ($row = mysqli_fetch_array($run)) {
                                            $id = $row['id'];
                                            $c_name=$row['c_name'];
                                    ?>
                                <option value="<?php echo $id; ?>">
                                    <?php echo $c_name; ?>
                                </option>
                                <?php
                                        }
                                    ?>
                        </select>
                    </div>
                    <div class="col-sm-3" id="input-box">
                        <h6>City</h6>
                        <select class="form-control" id="city" name="city">
                        <option hidden>--select--</option>
                                <?php
                                        $sql = "select * from  customersDB where status = 1 group by city ORDER BY city ASC";
                                        $run = mysqli_query($connection, $sql);
                                        while ($row = mysqli_fetch_array($run)) {
                                            $city=$row['city'];
                                    ?>
                                <option value="<?php echo $city; ?>">
                                    <?php echo $city; ?>
                                </option>
                                <?php
                                        }
                                    ?>
                        </select>
                    </div>
                </div>
                 <br>
                <i class="fa-solid fa-magnifying-glass" style="margin-left:5px;margin-top:10px;margin-right:10px;position:absolute;color: #13f50f;font-size:20px"></i>
                <input type="submit" class="btn btn-outline-success" name="submit" id="submit" value="   Search" >
            </form>
           
                <?php
                    
                    if(isset($_POST['submit'])){
                        $from_date = date('Y-m-d', strtotime($_POST['startDate']));
                        $to_date = date('Y-m-d', strtotime($_POST['ToDate']));
                        $city=$_POST['city'];
                        $c_id=$_POST['c_id'];
                        $where="status=1";
                        if($from_date!="1970-01-01" && $to_date!="1970-01-01")
                        {
                            if($where==""){
                                 $where .="sales_date>= '$from_date' and sales_date<= '$to_date'";
                            }
                            else{
                                $where .=" and sales_date>= '$from_date' and sales_date<= '$to_date'";
                            }
                           
                        }
                        
                        if($city>0){
                            $where .=" and city = '$city'";
                        }
                        
                        if($c_id>0){
                            $where .=" and customer_id = $c_id";
                        }
                       
                        if($where=="")
                        {
                            $sql = "select * from  proformaDB where status = 1 order by sales_id asc";
                            
                        }
                        else{
                            $sql = "select * from  proformaDB where $where  order by sales_id asc";
                        }
                    }
                    else{
                        $sql = "select * from  proformaDB where status = 1 order by sales_id asc";
                    }
                $run = mysqli_query($connection, $sql);
                $j = 1;
                // echo $sql;
              ?> 
              <br>
              <div class="row mt-3 mb-3">
                  <div class="col-1 ps-4">
                      <input type="button" style="background-color:#ff99c8;color:white" onclick="export_data()" value="Export" class="btn">
                  </div>
                  <!--<div class="col ps-0 pe-0" align="center">-->
                  <!--    <Button class="btn" style="background-color:#ab4e68;color:white" onClick="Overall_print(1,'<?php echo $from_date ?>','<?php echo $to_date ?>')">Report Print</Button>-->
                  <!--</div>-->
                  <!--<div class="col ps-0 pe-0">-->
                  <!--    <Button class="btn" style="background-color:#014f86;color:white" onClick="Overall_print(2,'<?php echo $from_date ?>','<?php echo $to_date ?>')">Itemized Print</Button>-->
                  <!--</div>-->
                  <div class="col-2 ps-0 pe-0">
                      <button class="btn" Style="background-color:#f8961e;" ><a href="Dashboard.php" style="text-decoration:none; color:White">Exit</a></button>
                  </div>
                  <div class="col-6">&nbsp;</div>
              </div>
              
            
            <table id="scroll-horizontal-datatable" class="table table-striped w-100 nowrap mt-2">
                <thead>
                    <tr>
                        <!--<th>S.No</th>-->
                        <th>Invoice No</th>
                        <th>Date</th>
                        <th>Customer Name</th>
                        <th>City</th>
                        <th>Contact</th>
                        <th>Amount</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i=1;
                    $grand_total=0.00;
                        while ($row = mysqli_fetch_array($run)) {
                            $sales_id=$row['id'];
                            $id = $row['sales_id'];
                            $sales_date = $row['sales_date'];
                            $customer_name = $row['customer_name'];
                            $city = $row['city'];
                            $net_amount = $row['net_amount'];
                            $contact=$row['contact'];
                            $f_year=$row['despatch_year'];
                            $grand_total=$grand_total+$net_rate;
                    ?>
                    <tr>
                        
                        <!--<td><?=$i?></td>-->
                        <td><?php echo $id; ?></td>
                        <td><?php echo $sales_date; ?></td>
                        <td><?php echo $customer_name; ?></td>
                        <td><?php echo $city; ?></td>
                        <td><?php echo $contact; ?></td>
                        <td align="right"><?php echo $net_amount; ?></td>
                        <td>
                            <a onClick="print_report(<?php echo $sales_id ?>,'<?php echo $f_year ?>')"><i class="fa-solid fa-print fa-xl" style="color: #3098e8;margin-top:15px;"></i></a>
                            <a href="EditQuotation.php?edit=<?php echo $sales_id ?>&year=<?php echo $f_year ?>" class="text-decoration:none;"><i class="fa-solid fa-file-pen fa-xl" style="color: #9d11e8;margin-top:15px;"></i></a>
                            <a href="DelQuotation.php?del=<?php echo $sales_id ?>&year=<?php echo $f_year ?>" class="text-decoration:none"><i class="fa-solid fa-trash fa-xl" style="color: red;margin-top:15px;"></i></a>
                                       
                        </td>
                    </tr>
                    <?php
                    $i++;
                        }
                    ?>
                </tbody>
            </table>     
            
            
           
            <table id="table" width="100%" style="display:none">
                <tr>
                    <td><b>Id</b></td>
                    <td><b>Date</b></td>
                    <td><b>Customer Name</b></td>
                    <td><b>City</b></td>
                    <td><b>Contact</b></td>
                    <td><b>Amount</b></td>
                </tr>
                <?php
                    $run = mysqli_query($connection, $sql);
                    while ($row = mysqli_fetch_array($run)) {
                            $sales_id=$row['id'];
                            $id = $row['sales_id'];
                            $sales_date = $row['sales_date'];
                            $customer_name = $row['customer_name'];
                            $city = $row['city'];
                            $net_amount = $row['net_amount'];
                            $contact=$row['contact'];
                            $grand_total=$grand_total+$net_rate;
                ?>
                    <tr>
                        <td><?php echo $id; ?></td>
                        <td><?php echo $sales_date; ?></td>
                        <td><?php echo $customer_name; ?></td>
                        <td><?php echo $city; ?></td>
                        <td><?php echo $contact; ?></td>
                        <td align="right"><?php echo $net_amount; ?></td>
                    </tr>
                <?php
                    }
                ?>
               
            </table>
            <!--table-->
        </div>
        <script>
             function print_report(id,f_year)
            {
                
                console.log("print_report called")
                $(document).ready(function() {
                    swal(
                        {
                        icon: 'warning',
                        text: "Are you sure you want to make this Print",
                        type: "warning",
                        buttons: {
                            cancel: 'No',
                            defeat: {
                                text: 'Yes',
                                value: true
                            }
                        },
                        closeOnConfirm: false
                    }).then((isConfirm) => {
                        if (isConfirm === true) {
                            console.log("working")
                            window.location.href='billprint.php?id='+id+'&f_year='+f_year;
                        }
                    });
                });
            }
            
            function export_data(){
                console.log("export called");
            	let data=document.getElementById('table');
            	var fp=XLSX.utils.table_to_book(data,{sheet:'Sheet1'});
            	XLSX.write(fp,{
            		bookType:'xlsx',
            		type:'base64'
            	});
            	XLSX.writeFile(fp, 'QuotationReport.xlsx');
            }
        </script>
</body>
</html>