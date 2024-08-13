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
    $edit = $_GET['edit'];
    $f_year = $_GET['year'];
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

        .odd {
            display: none;
        }

        .dataTables_filter {
            display: none;
        }

        .dataTables_info {
            display: none;
        }

        table.dataTable>thead .sorting:after,
        table.dataTable>thead .sorting_asc:after,
        table.dataTable>thead .sorting_desc:after,
        table.dataTable>thead .sorting_asc_disabled:after,
        table.dataTable>thead .sorting_desc_disabled:after {
            display: none;
        }

        table.dataTable>thead .sorting:before,
        table.dataTable>thead .sorting_asc:before,
        table.dataTable>thead .sorting_desc:before,
        table.dataTable>thead .sorting_asc_disabled:before,
        table.dataTable>thead .sorting_desc_disabled:before {
            display: none;
        }

        h5 {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <?php include_once 'navbar.php'; ?>
    <div class="card m-md-2 mt-sm-4  p-md-2 p-sm-1">

        <form action="" method="POST">
            <h3 align="center">Edit Quotation</h3>
            <div class="row">
                <div class="col-sm-4">
                    <div class="row">
                        <div class="col-3">
                            <h5>Customer</h5>
                        </div>
                        <div class="col-7 pe-0">
                            <select class="form-control" name="c_id" id="c_id" required onchange="customer()">
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
                        <div class="col-2 ps-2">
                            <a class="btn btn-dark" href="AddCustomers.php">+</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <h5>Address</h5>
                        </div>
                        <div class="col-9">
                            <input class="form-control" type="text" name="address1" id="address1"
                                placeholder="Address1">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <h5>&nbsp;</h5>
                        </div>
                        <div class="col-9">
                            <input class="form-control" type="text" name="address2" id="address2"
                                placeholder="Address2">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <h5>City/GSTIN</h5>
                        </div>
                        <div class="col-5 pe-0">
                            <input class="form-control" type="text" name="city" id="city" placeholder="City">
                        </div>
                        <div class="col-4">
                            <input class="form-control" type="text" name="gstin" id="gstin" placeholder="GSTIN">
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="row">
                        <div class="col-5">
                            <h5>Last case</h5>
                        </div>
                        <div class="col-7">
                            <input class="form-control" type="text" name="lc" id="lc" placeholder="Last case">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5">
                            <h5>List Year</h5>
                        </div>
                        <div class="col-7">
                            <select class="form-control" name="ly" id="ly" required>
                                <option value="2024">2024</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <div class="col-5">
                            <h5>Financial Year</h5>
                        </div>
                        <div class="col-7 ps-0">
                            <select class="form-control" name="fy" id="fy" required>
                                <option value="2024-25">2024-25</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <div class="col-4">
                            <h5>Invoice No</h5>
                        </div>
                        <div class="col-4 ps-0">
                            <?php
                                    $sql = "select * from  proformaDB where status = 1 ORDER BY sales_id ASC";
                                    $run = mysqli_query($connection, $sql);
                                    while ($row = mysqli_fetch_array($run)) {
                                        $id = $row['sales_id'];
                                    }
                                    if($id>0){
                                        $id=$id+1;
                                    }else{
                                        $id=1;
                                    } 
                                ?>
                            <input class="form-control" type="text" name="ino" id="ino" value="<?php echo $id ?>">
                        </div>
                        <div class="col-2">
                            <a onclick="addinv()" class="btn btn-dark">+</a>
                        </div>
                        <div class="col-2">
                            <a onclick="subinv()" class="btn btn-dark">-</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <h5>Invoice Date</h5>
                        </div>
                        <div class="col-8 ps-0">
                            <input type="date" class="form-control" name="date" id="date" value="<?php echo date("
                                Y-m-d"); ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <h5>HSN Code</h5>
                        </div>
                        <div class="col-8 ps-0">
                            <input class="form-control" type="text" name="hsn" id="hsn" placeholder="HSN Code"
                                value="<?php echo $hsn_code; ?>">
                        </div>
                    </div>
                </div>
            </div>

            <div id="table-data">
                <table class="table table-striped nowrap row-border order-column w-100">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Case Nos</th>
                            <th>Cases</th>
                            <!--</tr>-->
                            <!--<tr>-->
                            <th>Product Code</th>
                            <th>Product Name</th>
                            <th>Contents</th>
                            <th>Quantity</th>
                            <th>Rate</th>
                            <th>Per</th>
                            <th>Unit</th>
                            <th>Amount</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody id="table_field">

                    </tbody>
                </table>
            </div>

            <table style="width:100%; margin-top:20px">
                <tr>
                    <th style="width:50px">
                        <input type="text" name="sno" id="sno" class="form-control">
                    </th>
                    <th>
                        <input type="text" name="case_no" id="case_no" class="form-control">
                    </th>
                    <th>
                        <input type="text" name="cases" id="cases" class="form-control" onChange="getquantity()">
                    </th>
                    <th style="width:150px">
                        <input list="product_datalist" type="text" class="form-control " id="code" name="code"
                            onchange="getproduct()">
                        <datalist id="product_datalist">
                            <option hidden>--select--</option>
                            <?php
                            $sql = "select * from  productDB where status = 1 ORDER BY p_name ASC";
                            $run = mysqli_query($connection, $sql);
                            while ($row = mysqli_fetch_array($run)) {
                                $id = $row['p_code'];
                                $p_name=$row['p_name'];
                        ?>
                            <option value="<?php echo $id; ?>">
                                <?php echo $p_name; ?>
                            </option>
                            <?php
                            }
                        ?>
                        </datalist>
                    </th>
                    <th style="width:180px">
                        <input type="text" name="p_name" id="p_name" class="form-control">
                    </th>
                    <th>
                        <input type="text" name="contents" id="contents" class="form-control">
                    </th>
                    <th>
                        <input type="text" name="quantity" id="quantity" class="form-control">
                    </th>
                    <th>
                        <input type="text" name="rate" id="rate" class="form-control" onChange="getquantity()">
                    </th>
                    <th>
                        <input type="text" name="per" id="per" class="form-control" onChange="getquantity()">
                    </th>
                    <th>
                        <input type="text" name="unit" id="unit" class="form-control">
                    </th>
                    <th>
                        <input type="text" name="amount" id="amount" class="form-control" onClick="total_price()">
                    </th>
                    <th style="width:50px">
                        <a class="btn btn-info" onclick="addvalue()">+</a>
                        <input hidden type="number" id="count" name="count" value="0">
                        <input hidden type="number" id="count1" name="count1" value="0">
                    </th>
                </tr>
            </table>
            <br>
            <div class="row">
                <div class="col-sm-3">
                    <div class="row">
                        <div class="col-5">
                            <h5>Total Cases</h5>
                        </div>
                        <div class="col-7">
                            <input type="text" name="tot_case" id="tot_case" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5">
                            <h5>Case No</h5>
                        </div>
                        <div class="col-7">
                            <input type="text" name="case_no1" id="case_no1" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5">
                            <h5>Place of supply</h5>
                        </div>
                        <div class="col-7">
                            <input type="text" name="pos" id="pos" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5">
                            <h5>Despatched to</h5>
                        </div>
                        <div class="col-7">
                            <input type="text" name="dto" id="dto" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5">
                            <h5>Transport</h5>
                        </div>
                        <div class="col-7">
                            <select name="transport" id="transport" class="form-control">
                                <option></option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <div class="col-4">
                            <h5>Vehicle No</h5>
                        </div>
                        <div class="col-8 pe-md-0 ps-0">
                            <input type="text" name="vno" id="vno" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <h5>L.R No / Date</h5>
                        </div>
                        <div class="col-3 pe-0 ps-0">
                            <input type="text" name="lno" id="lno" class="form-control">
                        </div>
                        <div class="col-5 pe-md-0 ps-0">
                            <input type="date" class="form-control" name="ldate" id="ldate" value="<?php echo date("
                                Y-m-d"); ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 pe-0">
                            <h5>Document Throught</h5>
                        </div>
                        <div class="col-8 pe-md-0 ps-0">
                            <input type="text" name="dt" id="dt" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <h5>Order No</h5>
                        </div>
                        <div class="col-3 pe-0 ps-0">
                            <input type="text" name="ono" id="ono" class="form-control">
                        </div>
                        <div class="col-5 pe-md-0 ps-0">
                            <input type="date" class="form-control" name="odate" id="odate" value="<?php echo date("
                                Y-m-d"); ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <h5>E-Reference No</h5>
                        </div>
                        <div class="col-8 pe-md-0 ps-0">
                            <input type="text" name="eref" id="eref" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <div class="col-6">
                            <h5>Sub Total</h5>
                        </div>
                        <div class="col-6" align="right">
                            <!--<h5 align="right">0.00</h5>-->
                            <input type="text" name="sub_total" id="sub_total" class="form-control" readonly
                                style="background-color:white; border:none;text-align:right" value="0.00">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5 pe-0">
                            <h5>Discount</h5>
                        </div>
                        <div class="col-2 pe-0 ps-0">
                            <input type="text" name="discount" id="discount" class="form-control"
                                onChange="discount_per()">
                        </div>
                        <div class="col-1">
                            <h5>%</h5>
                        </div>
                        <div class="col-4 ps-0">
                            <input type="text" name="discount1" id="discount1" class="form-control" value="0.00"
                                onChange="reduce_disc()" style="text-align:right">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <h5>Grand Total</h5>
                        </div>
                        <div class="col-6" align="right">
                            <!--<h5 align="right">0.00</h5>-->
                            <input type="text" name="g_total" id="g_total" class="form-control" readonly
                                style="background-color:white; border:none;text-align:right" value="0.00"
                                onchange="sub_total()">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5 pe-0">
                            <h5>Packing</h5>
                        </div>
                        <div class="col-2 pe-0 ps-0">
                            <input type="text" name="packing" id="packing" class="form-control"
                                onchange="packing_amt()">
                        </div>
                        <div class="col-1">
                            <h5>%</h5>
                        </div>
                        <div class="col-4  ps-0">
                            <input type="text" name="packing1" id="packing1" class="form-control" value="0.00"
                                style="text-align:right" onChange="packing_per()">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5 pe-0">
                            <h5>Mahamai</h5>
                        </div>
                        <div class="col-2 pe-0 ps-0">
                            <input type="text" name="mahamai" id="mahamai" class="form-control"
                                onChange="mahamai_amt()">
                        </div>
                        <div class="col-1">
                            <h5>%</h5>
                        </div>
                        <div class="col-4 ps-0">
                            <input type="text" name="mahamai1" id="mahamai1" class="form-control" value="0.00"
                                style="text-align:right" onChange="mahamai_per()">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5 pe-0">
                            <h5>Insurance</h5>
                        </div>
                        <div class="col-2 pe-0 ps-0">
                            <input type="text" name="insurance" id="insurance" class="form-control"
                                onChange="insurance_amt()">
                        </div>
                        <div class="col-1">
                            <h5>%</h5>
                        </div>
                        <div class="col-4 ps-0">
                            <input type="text" name="insurance1" id="insurance1" class="form-control" value="0.00"
                                style="text-align:right" onChange="insurance_per()">
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <div class="col-6">
                            <h5>Total</h5>
                        </div>
                        <div class="col-6" align="right">
                            <!--<h5 align="right">0.00</h5>-->
                            <input type="text" name="total" id="total" class="form-control" readonly
                                style="background-color:white; border:none;text-align:right" value="0.00">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5 pe-0">
                            <h5>SGST</h5>
                        </div>
                        <div class="col-2 pe-0 ps-0">
                            <input type="text" name="sgst" id="sgst" class="form-control" onChange="sgst_amt()">
                        </div>
                        <div class="col-1">
                            <h5>%</h5>
                        </div>
                        <div class="col-4 ps-0">
                            <input type="text" name="sgst1" id="sgst1" class="form-control" value="0.00"
                                style="text-align:right" onChange="sgst_per()">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5 pe-0">
                            <h5>CGST</h5>
                        </div>
                        <div class="col-2 pe-0 ps-0">
                            <input type="text" name="cgst" id="cgst" class="form-control" onChange="cgst_amt()">
                        </div>
                        <div class="col-1">
                            <h5>%</h5>
                        </div>
                        <div class="col-4 ps-0">
                            <input type="text" name="cgst1" id="cgst1" class="form-control" value="0.00"
                                style="text-align:right" onChange="cgst_per()">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5 pe-0">
                            <h5>IGST</h5>
                        </div>
                        <div class="col-2 pe-0 ps-0">
                            <input type="text" name="igst" id="igst" class="form-control" onChange="igst_amt()">
                        </div>
                        <div class="col-1">
                            <h5>%</h5>
                        </div>
                        <div class="col-4 ps-0">
                            <input type="text" name="igst1" id="igst1" class="form-control" value="0.00"
                                style="text-align:right" onChange="igst_per()">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <h5>Round Off</h5>
                        </div>
                        <div class="col-6" align="right">
                            <!--<h5 align="right">0.00</h5>-->
                            <input type="text" name="roundoff" id="roundoff" class="form-control" readonly
                                style="background-color:white; border:none;text-align:right" value="0.00"
                                onChange="round_off()">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <h5>Net Amount</h5>
                        </div>
                        <div class="col-6" align="right">
                            <!--<h5 align="right">0.00</h5>-->
                            <input type="text" name="net_amt" id="net_amt" class="form-control" readonly
                                style="background-color:white; border:none;text-align:right" value="0.00">
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-2">&nbsp;</div>
                <div class="col-3">
                    <i class="fa-solid fa-floppy-disk icon1"></i>
                    <input type="submit" class="btn btn-primary system-space1" Style="width:82px" name="submit"
                        id="submit" value="   Save">
                </div>
                <div class="col-3" align="center">
                    <i class="fa-solid fa-broom icon2"></i>
                    <input type="reset" value=" Clear" class="btn btn-secondary system-space3"
                        Style="width:82px;padding-left:25px">
                </div>
                <div class="col-3">
                    <i class="fa-solid fa-right-from-bracket icon3"></i>
                    <button class="btn btn-danger system-space2" Style="width:82px;padding-left:25px"><a
                            href="Dashboard.php" style="text-decoration:none; color:White">&nbsp;&nbsp;Exit</a></button>
                </div>
                <div class="col-1">&nbsp;</div>
                <input type="text" name="id" id="id" hidden>
            </div>
        </form>
        <?php
             
            if (isset($_POST['submit'])) {
            //   echo "submitted";
                $date = $_POST['date'];
                $c_id = $_POST['c_id'];
                $sql = "select * from  customersDB where id = $c_id";
                $run = mysqli_query($connection, $sql);
                while ($row = mysqli_fetch_array($run)) {
                    $name = $row['c_name'];    
                    $contact = $row['contact'];
                }
                $address1 = $_POST['address1'];
                $address2 = $_POST['address2'];
                $city = $_POST['city'];
                $gstin = $_POST['gstin'];
                $lc = $_POST['lc'];
                $ly = $_POST['ly'];
                $fy = $_POST['fy'];
                $ino = $_POST['ino'];
                $hsn = $_POST['hsn'];
                $tot_case = $_POST['tot_case'];
                $case_no1 = $_POST['case_no1'];
                $pos = $_POST['pos'];
                $dto = $_POST['dto'];
                $transport = $_POST['transport'];
                $lno = $_POST['lno'];
                $ldate = $_POST['ldate'];
                $vno = $_POST['vno'];
                $dt = $_POST['dt'];
                $ono = $_POST['ono'];
                $odate = $_POST['odate'];
                $eref = $_POST['eref'];
                $sub_total = $_POST['sub_total'];
                $discount1 = $_POST['discount1'];
                $discount = $_POST['discount'];
                $g_total = $_POST['g_total'];
                $packing = $_POST['packing'];
                $packing1 = $_POST['packing1'];
                $Mahamai = $_POST['mahamai'];
                $Mahamai1 = $_POST['mahamai1'];
                $insurance = $_POST['insurance'];
                $insurance1 = $_POST['insurance1'];
                $total = $_POST['total'];
                $cgst = $_POST['cgst'];
                $cgst1 = $_POST['cgst1'];
                $sgst = $_POST['sgst'];
                $sgst1 = $_POST['sgst1'];
                $igst = $_POST['igst'];
                $igst1 = $_POST['igst1'];
                $roundoff = $_POST['roundoff'];
                $net_amt = $_POST['net_amt'];
                $count = $_POST['count'];
                
                
                // echo "<br>name".$name;
                // echo "<br>date".$date;
                // echo "<br>number".$number;
                // echo "<br>city".$city;
                // echo "<br>total".$total;
                // echo "<br>count".$count;
                $sql="INSERT INTO proformaDB (sales_id, sales_date,order_num, HSN_code, customer_id,customer_name,city,contact,despatched,case_num, bundle_num, 
                despatched_from, despatched_to, trans_name, lorry_num, 
                lr_num, docum_through, subtotal, disc, disc_amount, grant_total, HF, HF_amount, total,
                cgst, cgst_amount, sgst, sgst_amount, igst, igst_amount, roundoff, net_amount,
                display_status, despatch_year, mahamai, mahamai_amount, insurance, insurance_amount, LR_date,
                order_date, ereference_num, status) VALUES
                ('$ino','$date','$ono','$hsn','$c_id','$name','$city','$contact','$tot_case','$case_no1','','$pos','$dto','$transport','$vno','$lno','$dt','$sub_total'
                ,'$discount','$discount1','$g_total','$packing','$packing1','$total','$cgst','$cgst1','$sgst','$sgst1','$igst','$igst1',
                '$roundoff','$net_amt','','$fy','$Mahamai','$Mahamai1','$insurance','$insurance1','$ldate','$odate','$eref',1)";
                // echo $sql;
                    if(mysqli_query($connection,$sql))
                    {
                        $id = mysqli_insert_id($connection);
                        
                        // $id=1;
                        // echo "<br>last insert id = ".$id;
                        if($id>0)
                        {
                            for ($i = 1; $i <= $count; $i++) {
                                // echo "fetch data";
                                $case_no = $_POST['case_no'.$i];
                                $cases = $_POST['cases'.$i];
                                $code = $_POST['code'.$i];
                                $p_name = $_POST['p_name'.$i];
                                $contents = $_POST['contents'.$i];
                                $quantity = $_POST['quantity'.$i];
                                $rate = $_POST['rate'.$i];
                                $per = $_POST['per'.$i];
                                $amount= $_POST['amount'.$i];
                                $unit=$_POST['unit'.$i];
                                if(intval($quantity)>0){
                                    $sql2 = "insert into ProformaParticulrasDB(sales_id,mark,product_code,cases,pack_contents,quantity,unit,rate
                                    ,amount,sales_date,per,display_status,dispatch_year,product_type,product_name,status)values
                                            ('$id','','$code','$cases','$contents','$quantity','$unit','$rate','$amount','$date','$per','','$fy','','$p_name',1)";
                                                                                            
                                    // echo "<br>".$sql2;
                                    if(mysqli_query($connection,$sql2))
                                    {
                                        echo "<script>window.location = 'success.php?id=".$id."&f_year=".$fy."'</script>";
                                        // echo "success";
                                    }
                                }
                                
                            }//for
                            
                        }//if
                    }//sql  
            }
        ?>
    </div>
</body>
<script>
    function customer() {
        console.log("customer called");
        var input = document.getElementById('c_id').value;
        console.log({ input });

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                console.log("add1", this.responseText);
                document.getElementById("address1").value = this.responseText;
            }
        }
        xmlhttp.open("GET", "getAddress1.php?id=" + input, true);
        xmlhttp.send();

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                console.log("add2", this.responseText);
                document.getElementById("address2").value = this.responseText;
            }
        }
        xmlhttp.open("GET", "getAddress2.php?id=" + input, true);
        xmlhttp.send();

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                console.log("city", this.responseText);
                document.getElementById("city").value = this.responseText;
                document.getElementById("dto").value = this.responseText;
                document.getElementById("pos").value = "SIVAKASI";

            }
        }
        xmlhttp.open("GET", "getCity.php?id=" + input, true);
        xmlhttp.send();

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                console.log("gstin", this.responseText);
                document.getElementById("gstin").value = this.responseText;
            }
        }
        xmlhttp.open("GET", "getGstin.php?id=" + input, true);
        xmlhttp.send();
    }
    function getproduct() {
        console.log("getproduct called");
        var input = document.getElementById("code").value;
        console.log({ input });
        if (input != '') {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    console.log("p_name", this.responseText);
                    document.getElementById("p_name").value = this.responseText;
                }
            }
            xmlhttp.open("GET", "getpname.php?id=" + input, true);
            xmlhttp.send();

            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    console.log("contents", this.responseText);
                    document.getElementById("contents").value = this.responseText;
                }
            }
            xmlhttp.open("GET", "getcontent.php?id=" + input, true);
            xmlhttp.send();

            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    console.log("rate", this.responseText);
                    document.getElementById("rate").value = this.responseText;
                }
            }
            xmlhttp.open("GET", "getrate.php?id=" + input, true);
            xmlhttp.send();

            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    console.log("per", this.responseText);
                    document.getElementById("per").value = this.responseText;
                }
            }
            xmlhttp.open("GET", "getper.php?id=" + input, true);
            xmlhttp.send();

            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    console.log("unit", this.responseText);
                    document.getElementById("unit").value = this.responseText;
                }
            }
            xmlhttp.open("GET", "getunit.php?id=" + input, true);
            xmlhttp.send();

        }
    }
    function addvalue() {
        console.log("addvalue called");



        var case_no = document.getElementById('case_no').value;
        console.log({ case_no });
        var cases = document.getElementById("cases").value;
        console.log({ cases });
        var code = document.getElementById("code").value;
        console.log({ code });
        var p_name = document.getElementById('p_name').value;
        console.log({ p_name });
        var contents = document.getElementById('contents').value;
        console.log({ contents });
        var quantity = document.getElementById('quantity').value;
        console.log({ quantity });
        var rate = document.getElementById('rate').value;
        console.log({ rate });
        var per = document.getElementById('per').value;
        console.log({ per });
        var unit = document.getElementById('unit').value;
        console.log({ unit });
        var amount = document.getElementById('amount').value;
        console.log({ amount });

        var val = document.getElementById('count1').value;
        var check = parseInt(val);
        console.log({ check });
        if (check == 0) {
            var rowCount = document.getElementById("count").value;
            console.log({ rowCount });
            var i = parseInt(rowCount) + 1;
            document.getElementById('count').value = i;
            console.log({
                i
            });
            console.log("after");
            var rowCount = document.getElementById("count").value;
            console.log({ rowCount });


            var html = '<tr class="rev">';
            html += '<td style="width:30px" class="pe-0"><input type="text" class="form-control  no-border"  name="sno' + i + '" id="sno' + i + '"  value="' + i + '"  readonly></td>';
            html += '<td class="pe-0"><input type="text" class="form-control no-border "  name="case_no' + i + '" id="case_no' + i + '"  value="' + case_no + '"  readonly></td>';
            html += '<td class="pe-0"><input type="text" class="form-control no-border "  name="cases' + i + '" id="cases' + i + '"  value="' + cases + '"  readonly></td>';
            html += '<td class="pe-0" style="width:150px"><input type="text" class="form-control no-border "  name="code' + i + '" id="code' + i + '"  value="' + code + '"  readonly></td>';
            html += '<td class="pe-0" style="width:180px"><input type="text" class="form-control no-border "  name="p_name' + i + '" id="p_name' + i + '"  value="' + p_name + '"  readonly></td>';
            html += '<td class="pe-0"><input type="text" class="form-control no-border "  name="contents' + i + '" id="contents' + i + '"  value="' + contents + '"  readonly></td>';
            html += '<td class="pe-0"><input type="text" class="form-control no-border "  name="quantity' + i + '" id="quantity' + i + '"  value="' + quantity + '"  readonly></td>';
            html += '<td class="pe-0"><input type="text" class="form-control no-border "  name="rate' + i + '" id="rate' + i + '"  value="' + rate + '"  readonly></td>';
            html += '<td class="pe-0"><input type="text" class="form-control no-border "  name="per' + i + '" id="per' + i + '"  value="' + per + '"  readonly></td>';
            html += '<td class="pe-0"><input type="text" class="form-control no-border "  name="unit' + i + '" id="unit' + i + '"  value="' + unit + '"  readonly></td>';
            html += '<td class="pe-0"><input type="text" class="form-control no-border "  name="amount' + i + '" id="amount' + i + '"  value="' + amount + '"  readonly></td>';
            html += '<td class="pe-0 ps-0"><a class="btn" id="edit" name="edit" onClick="update_data(' + i + ')"><i class="fa-solid fa-pencil fa-xl" style="color: #74C0FC;"></i></a></td>';
            html += '<td class="pe-0 ps-0"><a class="btn" id="remove" name="remove" onClick="delete_row(' + i + ')"><i class="fa-solid fa-trash fa-xl" style="color: #f91f06;"></i></a></td>';
            html += '</tr>';

            document.getElementById('sno').value = "";
            document.getElementById('case_no').value = "";
            document.getElementById('cases').value = "";
            document.getElementById('code').value = "";
            document.getElementById('p_name').value = "";
            document.getElementById('contents').value = "";
            document.getElementById('quantity').value = "";
            document.getElementById('rate').value = "";
            document.getElementById('per').value = "";
            document.getElementById('unit').value = "";
            document.getElementById('amount').value = "";

            console.log({ html });
            $("#table_field").append(html);

            $("#table_field").on('click', '#remove', function () {
                console.log("remove called");
                $(this).closest('.rev').remove();
            });
        }
        else {
            var sno = document.getElementById('sno').value;
            console.log({ sno });
            document.getElementById('case_no' + check).value = case_no;
            document.getElementById('sno' + check).value = sno;
            document.getElementById('cases' + check).value = cases;
            document.getElementById('code' + check).value = code;
            document.getElementById('p_name' + check).value = p_name;
            document.getElementById('contents' + check).value = contents;
            document.getElementById('quantity' + check).value = quantity;
            document.getElementById('rate' + check).value = rate;
            document.getElementById('per' + check).value = per;
            document.getElementById('unit' + check).value = unit;
            document.getElementById('amount' + check).value = amount;
            document.getElementById('count1').value = i;

            document.getElementById('sno').value = "";
            document.getElementById('case_no').value = "";
            document.getElementById('cases').value = "";
            document.getElementById('code').value = "";
            document.getElementById('p_name').value = "";
            document.getElementById('contents').value = "";
            document.getElementById('quantity').value = "";
            document.getElementById('rate').value = "";
            document.getElementById('per').value = "";
            document.getElementById('unit').value = "";
            document.getElementById('amount').value = "";
            document.getElementById('count1').value = 0;
        }
    }

    function update_data(i) {
        console.log("update_data");
        console.log({ i });
        var sno = document.getElementById('sno' + i).value;
        console.log({ sno });
        var case_no = document.getElementById('case_no' + i).value;
        console.log({ case_no });
        var cases = document.getElementById('cases' + i).value;
        console.log({ cases });
        var code = document.getElementById('code' + i).value;
        console.log({ code });
        var p_name = document.getElementById('p_name' + i).value;
        console.log({ p_name });
        var contents = document.getElementById('contents' + i).value;
        console.log({ contents });
        var quantity = document.getElementById('quantity' + i).value;
        console.log({ quantity });
        var rate = document.getElementById('rate' + i).value;
        console.log({ rate });
        var per = document.getElementById('per' + i).value;
        console.log({ per });
        var unit = document.getElementById('unit' + i).value;
        console.log({ unit });
        var amount = document.getElementById('amount' + i).value;
        console.log({ amount });

        document.getElementById('sno').value = sno;
        document.getElementById('case_no').value = case_no;
        document.getElementById('cases').value = cases;
        document.getElementById('code').value = code;
        document.getElementById('p_name').value = p_name;
        document.getElementById('contents').value = contents;
        document.getElementById('quantity').value = quantity;
        document.getElementById('rate').value = rate;
        document.getElementById('per').value = per;
        document.getElementById('unit').value = unit;
        document.getElementById('amount').value = amount;
        document.getElementById('count1').value = i;

    }
    function delete_row(i) {
        console.log("delete_row");
        console.log({ i });
        var amount = "amount" + i;
        console.log({ amount });
        var t_amt = document.getElementById(amount).value;
        console.log("check remove");
        console.log({ t_amt });
        var t_sub_total = document.getElementById('sub_total').value;
        var sub_total = t_sub_total - t_amt;
        console.log({ sub_total });
        document.getElementById('sub_total').value = sub_total.toFixed(2);
        discount();

    }
    function getquantity() {

        var cases = document.getElementById("cases").value;
        var contents = document.getElementById("contents").value;
        var rate = document.getElementById("rate").value;
        var pertxt = document.getElementById("per").value;
        var quantity = parseInt(cases) * parseInt(contents);
        document.getElementById("quantity").value = quantity;
        console.log({
            quantity
        });
        if (quantity != null) {
            var amt = parseInt(quantity) * parseFloat(rate);
            var amount = amt / parseFloat(pertxt);
            document.getElementById("amount").value = amt.toFixed(2);
            total_price();
            discount();
        }
    }
    function total_price() {

        console.log("total calculate");
        var sub_total = document.getElementById('sub_total').value;
        var amt = document.getElementById('amount').value;
        console.log({ sub_total });
        console.log({ amt });
        if (sub_total > 1) {
            var net = parseFloat(amt) + parseFloat(sub_total);
        } else {
            var net = amt;
        }
        console.log({ net });
        document.getElementById('sub_total').value = net;
        document.getElementById('total').value = net;
        document.getElementById('g_total').value = net;
        document.getElementById('net_amt').value = net;
        discount();

    }
    function discount() {
        console.log("function discount");
        var sub_total = document.getElementById("sub_total").value;
        var discount = document.getElementById("discount").value;
        console.log({ sub_total });
        console.log({ discount });
        var amt = discount / 100;
        console.log({ amt });
        var discount1 = (amt * sub_total).toFixed(2);
        console.log({ discount1 })
        document.getElementById("discount1").value = discount1;
        var amount = (sub_total - discount).toFixed(2);
        document.getElementById("g_total").value = amount;
        // document.getElementById("net_amt").value=amount;
        mahamai_amt();
        insurance_amt();
        packing_amt();
        net_total_calc();

    }
    function discount_per() {
        console.log("function discount");
        var sub_total = document.getElementById("sub_total").value;
        var discount = document.getElementById("discount").value;
        console.log({ sub_total });
        console.log({ discount });
        var amt = discount / 100;
        console.log({ amt });
        var discount1 = (amt * sub_total).toFixed(2);
        console.log({ discount1 })
        document.getElementById("discount1").value = discount1;
        var amount = (sub_total - discount1).toFixed(2);
        document.getElementById("g_total").value = amount;
        document.getElementById("total").value = amount;
        document.getElementById("net_amt").value = amount;
        mahamai_amt();
        insurance_amt();
        packing_amt();
        net_total_calc();

    }
    function reduce_disc() {
        console.log("function discount");
        var sub_total = document.getElementById("sub_total").value;
        var discount = document.getElementById("discount1").value;
        var amount = (sub_total - discount).toFixed(2);
        document.getElementById("g_total").value = amount;
        document.getElementById("net_amt").value = amount;
        mahamai_per();
        insurance_per();
        packing_per();
        net_total_calc();

    }
    function packing_amt() {
        console.log("packing_amt called");
        var g_total = document.getElementById("g_total").value;
        var disc = document.getElementById("packing").value;
        if (disc > 0) {
            var amt = disc / 100;
            var discount = (amt * g_total).toFixed(2);
            document.getElementById("packing1").value = discount;
            var amount = (parseFloat(g_total) + parseFloat(discount)).toFixed(2);
            cgst_amt();
            sgst_amt();
            igst_amt();
        }
        total_calc();
        net_total_calc();

    }
    function packing_per() {
        console.log("packing_per");
        var g_total = document.getElementById("g_total").value;
        var discount = document.getElementById("packing1").value;
        var amount = (parseFloat(g_total) + parseFloat(discount)).toFixed(2);
        cgst_per();
        sgst_per();
        igst_per();
        total_calc();
        net_total_calc();

    }
    function mahamai_amt() {
        console.log("mahamai_amt called");
        var g_total = document.getElementById("g_total").value;
        var disc = document.getElementById("mahamai").value;
        if (disc > 0) {
            var amt = disc / 100;
            var discount = (amt * g_total).toFixed(2);
            document.getElementById("mahamai1").value = discount;
            cgst_amt();
            sgst_amt();
            igst_amt();
        }
        total_calc();
        net_total_calc();

    }
    function mahamai_per() {
        console.log("mahamai_amt called");
        var g_total = document.getElementById("g_total").value;
        var discount = document.getElementById("mahamai1").value;
        cgst_per();
        sgst_per();
        igst_per();
        total_calc();
        net_total_calc();

    }
    function insurance_amt() {
        console.log("insurance_amt called");
        var g_total = document.getElementById("g_total").value;
        var disc = document.getElementById("insurance").value;
        if (disc > 0) {
            var amt = disc / 100;
            var discount = (amt * g_total).toFixed(2);
            document.getElementById("insurance1").value = discount;
            var amount = (parseFloat(g_total) + parseFloat(discount)).toFixed(2);
            cgst_amt();
            sgst_amt();
            igst_amt();
        }
        total_calc();
        net_total_calc();

    }
    function insurance_per() {
        console.log("insurance_per");
        var g_total = document.getElementById("g_total").value;
        var discount = document.getElementById("insurance1").value;
        var amount = (parseFloat(g_total) + parseFloat(discount)).toFixed(2);
        cgst_per();
        sgst_per();
        igst_per();
        total_calc();
        net_total_calc();

    }
    function cgst_amt() {
        console.log("cgst_amt called");
        var total = document.getElementById("total").value;
        var disc = document.getElementById("cgst").value;
        if (disc > 0) {
            var amt = disc / 100;
            var discount = (amt * total).toFixed(2);
            document.getElementById("cgst1").value = discount;
            var amount = (parseFloat(total) + parseFloat(discount)).toFixed(2);
        }
        net_total_calc();

    }
    function cgst_per() {
        console.log("cgst_per");
        var total = document.getElementById("total").value;
        var discount = document.getElementById("cgst1").value;
        var amount = (parseFloat(total) + parseFloat(discount)).toFixed(2);
        net_total_calc();

    }
    function sgst_amt() {
        console.log("sgst_amt called");
        var total = document.getElementById("total").value;
        var disc = document.getElementById("sgst").value;
        if (disc > 0) {
            var amt = disc / 100;
            var discount = (amt * total).toFixed(2);
            document.getElementById("sgst1").value = discount;
            var amount = (parseFloat(total) + parseFloat(discount)).toFixed(2);
        }
        net_total_calc();

    }
    function sgst_per() {
        console.log("sgst_per");
        var total = document.getElementById("total").value;
        var discount = document.getElementById("sgst1").value;
        var amount = (parseFloat(total) + parseFloat(discount)).toFixed(2);
        net_total_calc();

    }
    function igst_amt() {
        console.log("igst_amt called");
        var total = document.getElementById("total").value;
        var disc = document.getElementById("igst").value;
        if (disc > 0) {
            var amt = disc / 100;
            var discount = (amt * total).toFixed(2);
            document.getElementById("igst1").value = discount;
            var amount = (parseFloat(total) + parseFloat(discount)).toFixed(2);
        }
        net_total_calc();

    }
    function igst_per() {
        console.log("igst_per");
        var total = document.getElementById("total").value;
        var discount = document.getElementById("igst1").value;
        var amount = (parseFloat(total) + parseFloat(discount)).toFixed(2);
        net_total_calc();

    }
    function round_off() {
        console.log("round_off called");
        var net = document.getElementById("net_amt").value;
        console.log({ net });
        var t_net = Math.round(net);
        console.log({ t_net });
        var roundoff = t_net - net;
        console.log({ roundoff });
        document.getElementById("roundoff").value = roundoff;
        document.getElementById("net_amt").value = t_net.toFixed(2);
    }
    function total_calc() {
        console.log("total_calc called");
        var total = document.getElementById("g_total").value;
        var mahamai = document.getElementById("mahamai1").value;
        var insurance = document.getElementById("insurance1").value;
        var packing = document.getElementById("packing1").value;
        console.log({ total });
        console.log({ mahamai });
        console.log({ insurance });
        console.log({ packing });
        var res = parseFloat(mahamai) + parseFloat(insurance) + parseFloat(packing);
        var total = parseFloat(total) + res;
        console.log({ res });
        console.log({ total });
        document.getElementById("total").value = total.toFixed(2);
    }
    function net_total_calc() {
        console.log("net_total_calc");
        var total = document.getElementById("sub_total").value;
        var disc = document.getElementById("discount1").value;
        var mahamai = document.getElementById("mahamai1").value;
        var insurance = document.getElementById("insurance1").value;
        var packing = document.getElementById("packing1").value;
        var cgst = document.getElementById("cgst1").value;
        var sgst = document.getElementById("sgst1").value;
        var igst = document.getElementById("igst1").value;
        var roundoff = document.getElementById("roundoff").value;
        console.log({ total });
        console.log({ disc });
        console.log({ mahamai });
        console.log({ insurance });
        console.log({ packing });
        console.log({ cgst });
        console.log({ sgst });
        console.log({ igst });
        console.log({ roundoff });
        var g_total = parseFloat(total) - parseFloat(disc);
        console.log({ g_total });
        var net = parseFloat(g_total) + parseFloat(mahamai) + parseFloat(insurance) + parseFloat(packing) + parseFloat(cgst) + parseFloat(sgst) + parseFloat(igst);
        console.log({ net });
        var t_net = Math.round(net);
        console.log({ t_net });
        var roundoff = t_net - net;
        console.log({ roundoff });
        document.getElementById("roundoff").value = roundoff.toFixed(2);
        document.getElementById("net_amt").value = t_net.toFixed(2);

    }
</script>

</html>