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
     <?php 
        include_once 'NavBar1.php';
        include_once 'connectiondb.php';
        $sql = "select * from  ConfigDB ";
        $run = mysqli_query($connection, $sql);
        while ($row = mysqli_fetch_array($run)) {
            
            $pass_code=$row['pass_code'];
            $company_name=$row['company_name'];
            $Address1=$row['Address1'];
            $Address2=$row['Address2'];
            $city=$row['city'];
            $contact=$row['contact'];
            $GSTIN_number=$row['GSTIN_number'];
            $default_hsn_code=$row['default_hsn_code'];
            $invoice_no_start=$row['invoice_no_start'];
            $finance_year=$row['finance_year'];
            $support_pin=$row['support_pin'];
            $extra_details=$row['extra_details'];
            $hdcn=$row['hdcn'];
            $print=$row['print'];
            $default_year=$row['default_year'];
            $bank_name=$row['bank_name'];
            $branch_name=$row['branch_name'];
            $account_num=$row['account_num'];
            $IFSC_code=$row['IFSC_code'];
            
        }
       ?>
       <br>
    <?php include_once 'navbar.php'; ?>
    <div class="card m-md-4 mt-sm-4  p-md-4 p-sm-1">
        <div class="container">
            <form action="" method="POST">
                <br>
                <h1 align="center">Configuration Master</h1>
                <br>
                <div class="row">
                    <div class="col-sm-3">
                        <h4>Pass Code</h4>
                        <input class="form-control" type="text" name="pass_code" id="pass_code" placeholder="Pass Code"  >
                    </div>
                    <div class="col-sm-3">
                        <h4>Company Name</h4>
                        <input class="form-control" type="text" name="company_name" id="company_name" placeholder="Company Name">
                    </div>
                    <div class="col-sm-3">
                        <h4>Address1</h4>
                        <input class="form-control" type="text" name="Address1" id="Address1" placeholder="Address1">
                    </div>
                    <div class="col-sm-3">
                        <h4>Address2</h4>
                        <input class="form-control" type="text" name="Address2" id="Address2" placeholder="Address2">
                    </div>
                    <div class="col-sm-3">
                        <h4>City</h4>
                        <input class="form-control" type="text" name="city" id="city" placeholder="city">
                    </div>
                    <div class="col-sm-3">
                        <h4>Contact</h4>
                        <input class="form-control" type="text" name="contact" id="contact" placeholder="contact">
                    </div>
                     <div class="col-sm-3">
                        <h4>GSTIN_number</h4>
                        <input class="form-control" type="text" name="GSTIN_number" id="GSTIN_number" placeholder="GSTIN Number">
                    </div>
                     <div class="col-sm-3">
                        <h4>Default HSN Code</h4>
                        <input class="form-control" type="text" name="default_hsn_code" id="default_hsn_code" placeholder="Default HSN Code">
                    </div>
                     <div class="col-sm-3">
                        <h4>Invoice No Start</h4>
                        <input class="form-control" type="text" name="invoice_no_start" id="invoice_no_start" placeholder="Invoice No Start">
                    </div>
                     <div class="col-sm-3">
                        <h4>Finance Year</h4>
                        <input class="form-control" type="year" name="finance_year" id="finance_year" placeholder="Finance Year">
                    </div>
                   <div class="col-sm-3">
                        <h4>Support Pin</h4>
                        <input class="form-control" type="text" name="support_pin" id="support_pin" placeholder="Support Pin">
                    </div>
                     <div class="col-sm-3">
                        <h4>Extra Details</h4>
                        <input class="form-control" type="text" name="extra_details" id="extra_details" placeholder="Extra Details">
                    </div>
                     <div class="col-sm-3">
                        <h4>HDSN</h4>
                        <input class="form-control" type="text" name="hdcn" id="hdcn" placeholder="HDSN">
                    </div>
                     <div class="col-sm-3">
                        <h4>Print</h4>
                        <input class="form-control" type="text" name="print" id="print" placeholder="Print">
                    </div>
                     <div class="col-sm-3">
                        <h4>Default Year</h4>
                        <input class="form-control" type="year" name="default_year" id="default_year" placeholder="Default Year">
                    </div>
                     <div class="col-sm-3">
                        <h4>Bank Name</h4>
                        <input class="form-control" type="text" name="bank_name" id="bank_name" placeholder="Bank Name">
                    </div>
                    <div class="col-sm-3">
                        <h4>Branch Name</h4>
                        <input class="form-control" type="text" name="branch_name" id="branch_name" placeholder="Branch Name">
                    </div>
                    <div class="col-sm-3">
                        <h4>Account Num</h4>
                        <input class="form-control" type="text" name="account_num" id="account_num" placeholder="Account Num">
                    </div>
                    <div class="col-sm-3">
                        <h4>Bank Name</h4>
                        <input class="form-control" type="text" name="bank_name" id="bank_name" placeholder="Bank Name">
                    </div>
                    <div class="col-sm-3">
                        <h4>IFSC Code</h4>
                        <input class="form-control" type="text" name="IFSC_code" id="IFSC_code" placeholder="IFSC Code">
                    </div>
                    <div class="col-sm-3">
                        <h4>watermark</h4>
                        <input class="form-control" type="file" name="watermark" id="watermark" onChange="image_update()">
                    </div>
                   
                    
                </div>
                <br>
                 <div class="col" align="center">
                <input type="submit" class="btn btn-success" name="submit" id="submit" value="Update" id="submit-btn">
                <a href="Settings.php" style="text-decoration:none;" class="btn btn-danger">Exit</a>
                </div>
                
            </form>
        </div>
        
        <br>
        <?php
             
            if (isset($_POST['submit'])) {
                $id = $_POST['id'];
                $pass_code= $_POST['pass_code'];
                $company_name = $_POST['company_name'];
                $Address1= $_POST['Address1'];
                $Address2= $_POST['Address2'];
                $city = $_POST['city'];
                $contact = $_POST['contact'];
                $GSTIN_number= $_POST['GSTIN_number'];
                $default_hsn_code= $_POST['default_hsn_code'];
                $invoice_no_start= $_POST['invoice_no_start'];
                $finance_year = $_POST['finance_year'];
                $support_pin= $_POST['support_pin'];
                $extra_details= $_POST['extra_details'];
                $hdcn= $_POST['hdcn'];
                $print= $_POST['print'];
                $default_year = $_POST['default_year'];
                $bank_name= $_POST['bank_name'];
                $branch_name= $_POST['branch_name'];
                $account_num= $_POST['account_num'];
                $IFSC_code = $_POST['IFSC_code'];
                $target_dir = "images/";
                $file_name=basename($_FILES["image"]["name"]);
                $extension = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
                
               $sql1 = "update ConfigDB set pass_code='$pass_code',company_name='$company_name',Address1='$Address1',Address2='$Address2',city='$city',contact='$contact',GSTIN_number='$GSTIN_number',default_hsn_code='$default_hsn_code',invoice_no_start='$invoice_no_start',finance_year='$finance_year',support_pin='$support_pin',extra_details='$extra_details',hdcn='$hdcn',print='$print',default_year='$default_year',bank_name='$bank_name',branch_name='$branch_name',account_num='$account_num',IFSC_code='$IFSC_code',watermark='$watermark'";
                        // echo $sql1;         
                                  
                    if(mysqli_query($connection,$sql1))
                    {
                        echo '<script> location.replace("Configuration.php")</script>';  
                    }
                    else
                    {
                        echo "Some thing Error" . $connection->error;
                    }    
                    
                }  
                ?>
         </div>
        </div>
    </body>
<script>
    
             function image_update()
    {
        
        console.log("image called");
        document.getElementById("img").value=1 ;
    }
            
            
</script>


</html>














