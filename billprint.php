<?php
    include_once 'connectiondb.php';
    $sql="select * from demothemeDB";
    $run = mysqli_query($connection, $sql);
    while ($row = mysqli_fetch_array($run)) {
        $logo = $row['logo'];
        $favicon = $row['favicon'];
        $title = $row['title'];
    }
    $sql="select * from ConfigDB";
    $run = mysqli_query($connection, $sql);
    while ($row = mysqli_fetch_array($run)) {
        $watermark = $row['watermark'];
        $company_name=$row['company_name'];
    }
    $sales_id = $_GET['id'];
    $f_year=$_GET['f_year'];
?>
<html>
    <head>
        <title><?php echo $title;?></title>
	    <link rel="icon" href="<?php echo $favicon;?>" type="image/x-icon">
        <link rel="stylesheet" href="dist/tablesorter.css">    <!-- tablesort -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.1.1/flatly/bootstrap.min.css">
        <script src="dist/jquery.min.js"></script> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <style>
            @media print{
                @page{
                    size: a4;
                }
                .footer {
                    position: fixed;
                    bottom: 0;
                    width: 100%;
                    /*border: solid 2px black;*/
                    /*background-color: white;*/
                }
                .header {
                    position: fixed;
                    left: 0;
                    right: 0;
                    top: 0px;
                    /*border: solid 2px black;*/
                    /*background-color: white;*/
                }
                .content {
                    margin-top: 380px;
                }
                #break-page{
                    margin-top:1100px;
                    margin-bottom:380px;
                }
            }
            .header {
                /*position: fixed;*/
                left: 0;
                right: 0;
                top: 0px;
                /*border: solid 2px black;*/
                /*background-color: white;*/
            }
            #page{
                width:100%;
                height:100%;
                border: solid 2px black;
                position:fixed;
                top:0;
            }
            .watermark {
                display: inline;
                position: fixed !important;
                font-size: 3em;
                width: 96%;
                margin-left:2%;
                text-align: center;
                top: 35%;
                right: 5px;
                z-index:-999;
            }
        </style>
    </head>
    <body style="font-family: Arial;">
        <?php
            $sql = "select * from  proformaDB where id=$sales_id and despatch_year = '$f_year'";
                $run = mysqli_query($connection, $sql);
                // echo $sql;
                while ($row = mysqli_fetch_array($run)) {
                    $source = $row['sales_date'];
                    $date1 = new DateTime($source);
                    $date = $date1->format('d-m-Y');
                    $c_id= $row['customer_id'];
                    $sql1 = "select * from  customersDB where id=$c_id";
                    // echo $sql1;
                    $run1 = mysqli_query($connection, $sql1);
                    while ($row1 = mysqli_fetch_array($run1)) {
                        $name = $row1['c_name'];
                        $city = $row1['city'];
                        $address1=$row1['address1'];
                        $address2=$row1['address2'];
                        $contact_no=$row1['contact'];
                        $gstin = $row1['gstin'];
                    }
                    $despatch = $row['despatched'];
                    $caseorbundle_no = $row['case_num'];
                    $dfrom = $row['despatched_from'];
                    $dto = $row['despatched_to'];
                    $tname = $row['trans_name'];
                    $lgstin = $row['lr_num'];
                    $lno = $row['lorry_num'];
                    $source1=$row['LR_date'];
                    $date2 = new DateTime($source1);
                    $ldate = $date2->format('d-m-Y');
                    $document = $row['docum_through'];
                    $hsn = $row['HSN_code'];
                    $sub_total = $row['grant_total'];
                    $tax=$row['total'];
                    $total = $row['subtotal'];
                    $net_rate = $row['net_amount'];
                    $disc_per = $row['disc'];
                    $disc_amt = $row['disc_amount'];
                    $Mahamai =$row['mahamai'];
                    $Mahamai1 = $row['mahamai_amount'];
                    $insurance=$row['insurance'];
                    $insurance1=$row['insurance_amount'];
                    $hnf=$row['HF'];
                    $hnf1 = $row['HF_amount'];
                    $cgst =$row['cgst'];
                    $cgst1 = $row['cgst_amount'];
                    $sgst =$row['sgst'];
                    $sgst1 =$row['sgst_amount'];
                    $igst = $row['igst'];
                    $igst1 = $row['igst_amount'];
                    $roundoff = $row['roundoff'];
                }
        ?>
        <div class="watermark">
            <img src="<?php echo $watermark; ?>" style="width:400px;height:400px">
        </div>
        <div id="page">
        </div>
            <div class="header">
                <img src="images/banner.jpg" style="width:98%;height:150px;margin:1%">
                <div class="row">
                    <div class="col-6" style="padding-left:30px;padding-top:20px;border-right:2px solid black;border-bottom:2px solid black;border-top:2px solid black;">
                        <h6>To. <?php echo $name; ?></h6>
                        <?php
                            if($address1!="") {
                        ?>
                            <h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $address1; ?> , <?php echo $address2?></h6>
                        <?php }  ?>
                        <h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $city; ?></h6>
                        <?php
                            if($contact_no > 0) {
                        ?>
                            <h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $contact_no; ?> , <?php echo $alternative_contact_no?></h6>
                        <?php }  ?>
                        <h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Party GSTIN No/PAN/Aadhar:<?php echo $gstin; ?></h6>
                    </div>
                    <div class="col-6" style="padding-top:20px;border-bottom:2px solid black;border-top:2px solid black;">
                        <h6>Bill No : <?php echo $sales_id; ?> - <?php echo $f_year; ?></h6>
                        <h6>Date : <?php echo $date; ?></h6>
                    </div>
                </div>
                <div class="row" style="border-bottom:2px solid black;padding-top:20px">
                    <div class="col" >
                        <h6 style="padding-left:10px">Marks/B.No</h6>
                    </div>
                    <div class="col-3">
                        <h6>Particulars </h6>
                    </div>
                    <div class="col-1">
                        <h6>Case</h6>
                    </div>
                    <div class="col-1">
                        <h6>Unit Content</h6>
                    </div>
                    <div class="col-1">
                        <h6>Qty</h6>
                    </div>
                    <div class="col-1">
                        <h6>Units</h6>
                    </div>
                    <div class="col-1">
                        <h6>Rate</h6>
                    </div>
                    <div class="col-1">
                        <h6>Per</h6>
                    </div>
                    <div class="col">
                        <h6>Amount</h6>
                    </div>
                </div>
            </div>
            <div class="content  p-2" style="position:relative;z-index:999">
                <br>
                <?php
                $sql2 = "select * from  ProformaParticulrasDB where sales_id=$sales_id and dispatch_year = '$f_year' ORDER BY id  ASC ";
                $run2 = mysqli_query($connection, $sql2);
                $i = 1;
                while ($row2 = mysqli_fetch_array($run2)) {
                    $p_id = $row2['id'];
                    $mark = $row2['mark'];
                    $product_name = $row2['product_name'];
                    $cases = $row2['cases'];
                    $pack_contents = $row2['pack_contents'];
                    $quantity = $row2['quantity'];
                    $rate = $row2['rate'];
                    $per = $row2['per'];
                    $unit = $row2['unit'];
                    $total = $row2['amount'];
                    ?>
                    <div class="row" style="position:relative;bottom:10px;">
                        <div class="col">
                            <h5><?php echo $mark; ?> - <?php echo $p_id; ?></h5>
                        </div>
                        <div class="col-3">
                            <h5><?php echo $product_name; ?></h5>
                        </div>
                        <div class="col-1" align="center">
                            <h5><?php echo $cases; ?></h5>
                        </div>
                        <div class="col-1"  align="right">
                            <h5><?php echo $pack_contents; ?></h5>
                        </div>
                        <div class="col-1" align="right">
                            <h5><?php echo $quantity; ?></h5>
                        </div>
                        <div class="col-1" align="center">
                            <h5><?php echo $unit; ?></h5>
                        </div>
                        <div class="col-1" align="right">
                            <h5><?php echo $rate; ?></h5>
                        </div>
                        <div class="col-1" align="center">
                            <h5><?php echo $per; ?></h5>
                        </div>
                        <div class="col" align="right">
                            <h5><?php echo $total; ?></h5>
                        </div>
                    </div>
        
                    <?php
                    $i++;
                    if ($i % 19 == 0) {
                        ?>
                        <!--<hr style="border: solid 2px black;">-->
                        <!--<br>-->
                        <div id="break-page">&nbsp;</div>
                        <?php
                    }
                }
                ?>
            
            </div>
            <div class="footer">
                <div class="row">
                    <div class="col-6 p-2" style="border-right:2px solid black;border-top:2px solid black;">
                        <div class="row" style="margin-left:10px">
                            <div class="col-5">
                                <h5>Despatched </h5>
                            </div>
                            <div class="col-7">
                                <h5><b>:<?php echo $despatch; ?></b></h5>
                            </div>
                            <div class="col-5">
                                <h5>Case/Bundle No </h5>
                            </div>
                            <div class="col-7">
                                <h5><b>:<?php echo $caseorbundle_no; ?></b></h5>
                            </div>
                            <div class="col-5">
                                <h5>Despatched from </h5>
                            </div>
                            <div class="col-7">
                                <h5><b>:<?php echo $dfrom; ?></b></h5>
                            </div>
                            <div class="col-5">
                                <h5>Despatched to </h5>
                            </div>
                            <div class="col-7">
                                <h5><b>:<?php echo $dto; ?></b></h5>
                            </div>
                            <div class="col-5">
                                <h5>Transport Name </h5>
                            </div>
                            <div class="col-7">
                                <h5><b>:<?php echo $tname; ?></b></h5>
                            </div>
                            <div class="col-5">
                                <h5>Lorry GSTIN </h5>
                            </div>
                            <div class="col-7">
                                <h5><b>:<?php echo $lgstin; ?></b></h5>
                            </div>
                            <div class="col-5">
                                <h5>L.R.No</h5>
                            </div>
                            <div class="col-7">
                                <h5><b>:
                                <?php 
                                if($lno>0){
                                    echo $lno; ?> 
                                    / 
                                <?php echo $ldate;
                                }
                                ?></b></h5>
                            </div>
                            <div class="col-5">
                                <h5>Document Through </h5>
                            </div>
                            <div class="col-7">
                                <h5><b>:<?php echo $document; ?></b></h5>
                            </div>
                            <div class="col-5">
                                <b>HSN CODE </b>
                            </div>
                            <div class="col-7">
                                <h5><b>:<?php echo $hsn; ?></b></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-6" style="border-top:2px solid black;padding-right:20px">
                        <div class="row">
                            <div class="col-6">
                                <h5>Sub Total</h5>
                            </div>
                            <div class="col-1">
                                <b>:</b>
                            </div>
                            <div class="col-5" align="right">
                                <h5><b><?php echo $total; ?></b></h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <h5>Discount<?php echo $disc_per ?>%</h5>
                            </div>
                            <div class="col-1">
                                <b>:</b>
                            </div>
                            <div class="col-5" align="right">
                                <h5><b><?php echo $disc_amt; ?></b></h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <h5>Grand Total</h5>
                            </div>
                            <div class="col-1">
                                <b>:</b>
                            </div>
                            <div class="col-5" align="right">
                                <h5><b><?php echo $sub_total; ?></b></h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <h5>Mahamai <?php echo $Mahamai ?>%</h5>
                            </div>
                            <div class="col-1">
                                <b>:</b>
                            </div>
                            <div class="col-5" align="right">
                                <h5><b><?php echo $Mahamai1; ?></b></h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <h5>Insurance <?php echo $insurance ?>%</h5>
                            </div>
                            <div class="col-1">
                                <b>:</b>
                            </div>
                            <div class="col-5" align="right">
                                <h5><b><?php echo $insurance1; ?></b></h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <h5>H&F <?php echo $hnf ?>%</h5>
                            </div>
                            <div class="col-1">
                                <b>:</b>
                            </div>
                            <div class="col-5" align="right">
                                <h5><b><?php echo $hnf1; ?></b></h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <h5>Taxable Value</h5>
                            </div>
                            <div class="col-1">
                                <b>:</b>
                            </div>
                            <div class="col-5" align="right">
                                <h5><b><?php echo $tax ;?></b></h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <h5>CGST <?php echo $cgst ?>%</h5>
                            </div>
                            <div class="col-1">
                                <b>:</b>
                            </div>
                            <div class="col-5" align="right">
                                <h5><b><?php echo $cgst1?></b></h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <h5>SGST <?php echo $sgst ?>%</h5>
                            </div>
                            <div class="col-1">
                                <b>:</b>
                            </div>
                            <div class="col-5" align="right">
                                <h5><b><?php echo $sgst1?></b></h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <h5>IGST <?php echo $igst ?>%</h5>
                            </div>
                            <div class="col-1">
                                <b>:</b>
                            </div>
                            <div class="col-5" align="right">
                                <h5><b><?php echo $igst1?></b></h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <h5>Net Amount</h5>
                            </div>
                            <div class="col-1">
                                <b>:</b>
                            </div>
                            <div class="col-5" align="right">
                                <h5><b><?php echo $net_rate; ?></b></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 p-2" style="border-top:2px solid black;border-bottom:2px solid black;">
                        <h5 style="padding-left:25px">Amount in words : &nbsp;
                        <?php 
                            include_once 'numtoword.php'; 
                            echo getIndianCurrency($net_rate) . "</h5>";
                        ?>
                    </div>
                    <div class="col-6" style="border-right:2px solid black;">
                        <h5 style="padding-left:20px">Interest at 18% per annum will be charged on bills if not paid on date.<br>
                            Subject to Sivakasi juridiction. E. & O.E<h5>
                    </div>
                    <div class="col-6" align="center">
                        <div class="row" style="padding-left:20px">
                            <div class="col-12">
                                <h5>For <?php echo $company_name; ?><h5>
                            </div>
                            <div class="col-12">&nbsp;</div>
                            <div class="col-12">
                                <h5>Authorized Signature<h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        
    </body>
</html>