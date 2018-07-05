<?php error_reporting(0); ?>
<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="SolutionsBricks.com">
    <base href="index.php" />
            <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
        <title>PSV Polytechnic College</title>
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
            <link href="assets/css/style.css" rel="stylesheet">
        <link href="assets/css/colors/purple-dark.css" id="theme" rel="stylesheet">
    <link href="assets/css/custom.css" id="theme" rel="stylesheet">
    <link href="assets/css/intlTelInput.css" rel="stylesheet">
    <link href="assets/plugins/global-calendars/jquery.calendars.picker.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<style type="text/css">
    @media print {
        header {display: none;}
        Footer {display: none;}
        @page { margin: 0; size:A4; }
        #Header, #Footer { display: none !important; }
    }
    h4 {
    font-size: 15px;
}
body {
    font-size: 0.8rem;
}
.lead {
    font-size: 1rem;
}
</style>
</head>
<body>
<div class="row" ng-show="views.invoice">
    <?php session_start(); //echo "<pre>"; print_r($_SESSION);   ?>
    <div class="col-12">
        <div class="card">
            <div class="card-block">
                <h4 class="card-title">View invoice</h4>
                <div class="col-12">

                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="page-header">
                                <img src="logo/logo.png" alt"<?php echo $_SESSION['data']['siteTitle']; ?>" style="max-width: 100px;"/>
                                <small class="pull-right">#<?php echo $_SESSION['data']['payment']['paymentTitle']; ?></small>
                            </h2>
                        </div><!-- /.col -->
                    </div>
                    <!-- info row -->
                    <div class="row">
                        <div class="col-sm-4 invoice-col">
                            From
                            <address>
                                <strong><?php echo $_SESSION['data']['siteTitle']; ?></strong><br>
                                <?php echo $_SESSION['data']['address']; ?><br>
                                <?php echo $_SESSION['data']['address2']; ?><br>
                                Phone No: <?php echo $_SESSION['data']['phoneNo']; ?><br/>
                                Email address: <?php echo $_SESSION['data']['systemEmail']; ?>
                            </address>
                        </div><!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                            To
                            <address>
                                <strong><?php echo $_SESSION['data']['user']['fullName']; ?></strong><br>
                                <?php echo $_SESSION['data']['user']['address']; ?><br>
                                Phone No: <?php echo $_SESSION['data']['user']['phoneNo']; ?><br/>
                                Email address: <?php echo $_SESSION['data']['user']['email']; ?><br/>
                                Class: <?php echo $_SESSION['data']['user']['className']; ?>
                                <?php if(!empty($_SESSION['data']['user']['sectionTitle']) && !empty($_SESSION['data']['user']['sectionName'])) { ?>
                                <span><br/>Section name: <?php echo $_SESSION['data']['user']['sectionTitle']; ?> - <?php echo $_SESSION['data']['user']['sectionName']; ?></span>
                                <?php } ?>
                            </address>
                        </div><!-- /.col -->

                        <div class="col-sm-4 invoice-col text-center">
                             <?php if($_SESSION['data']['payment']['paymentStatus'] == "1") { ?>
                            <span style='color:green; font-size:30px;font-weight:bold;'>
                                <?php echo "PAID"; ?> 
                            </span>
                            <span ng-show="invoice.payment.paymentStatus == '1'" style='color:green;font-weight:bold;'>
                                <br/>
                                Payment Method : <?php echo $_SESSION['data']['payment']['paidMethod']; ?><br/>
                                Paid Date : <?php echo $_SESSION['data']['payment']['paidTime']; ?>
                            </span>
                            <?php } else if($_SESSION['data']['payment']['paymentStatus'] == "2") { ?>
                            <span ng-show="invoice.payment.paymentStatus == '0'" style='color:red; font-size:30px;font-weight:bold;'>
                                <?php echo "PARTIALLY PAID"; ?>
                            </span>
                            <?php } else if($_SESSION['data']['payment']['paymentStatus'] == "0") {  ?>
                            <span ng-show="invoice.payment.paymentStatus == '2'" style='color:green; font-size:30px;font-weight:bold;'>
                                <?php   echo "UNPAID";  ?>
                            </span>
                            <?php } ?>
                            

                        </div>
                    </div><!-- /.row -->

                    <div class="row" style="margin-top:10px; margin-bottom:10px;">
                        <div class="col-md-12">
                            <span class="pull-right">
                                <i class="fa fa-calendar"></i> Date  : <?php echo date('d-m-Y');//$_SESSION['data']['payment']['paymentDate']; ?><br/>
                            </span>
                        </div>
                    </div>

                    <?php $pending_invoice_amount = 0; ?>
                    <!-- Table row -->
                    <?php if(isset($_SESSION['data']['pendinginvoices']) && count($_SESSION['data']['pendinginvoices']) > 0) { ?>
                        <div class="row">
                            <label class="col-sm-2 control-label col-form-label"><h5>Pending Payment Paid</h5></label>
                            <div class="col-xs-12 table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>Invoice Number</th>
                                        <th>Total Amount</th>
                                        <th>Pending Amount</th>
                                        <th>Paid Amount</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($_SESSION['data']['pendinginvoices'] as $key => $value) { $pending_invoice_amount += ($value['feeAmount'] - $value['paid']); ?>
                                        <tr>
                                            <td><?php echo $value['number'] ?></td>
                                            <td><?php echo $value['feeAmount']; ?></td>
                                            <td><?php echo ($value['feeAmount'] - $value['paid']); ?></td>
                                            <td><?php echo ($value['feeAmount'] - $value['paid']); ?></td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    <?php } ?>
                    <div class="row">
                        <div class="col-xs-12 table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($_SESSION['data']['payment']['paymentRows'] as $key => $value) { ?>
                                    <tr>
                                        <td><?php echo $value['title'] ?></td>
                                        <td><?php echo $_SESSION['data']['currency_symbol']; ?> <?php echo $value['amount'] ?></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div><!-- /.col -->
                    </div><!-- /.row -->

                    <div class="row">
                        <!-- accepted payments column -->
                        <div class="col-md-6"></div><!-- /.col -->
                        <div class="col-md-6">
                            <p class="lead"><br/>Amount Paid <?php echo $_SESSION['data']['payment']['dueDate']; ?></p>
                            <div class="table-responsive">
                                <table class="table">
                                    <tr>
                                        <th style="width:50%">Subtotal:</th>
                                        <td><?php echo $_SESSION['data']['currency_symbol']; ?> <?php echo $_SESSION['data']['payment']['paymentAmount']; ?></td>
                                    </tr>
                                    <?php /*
                                    <tr>
                                        <th>Payment Tax (<?php echo $_SESSION['data']['paymentTax']; ?>%)</th>
                                        <td><?php echo $_SESSION['data']['currency_symbol']; ?> <?php echo $_SESSION['data']['amountTax']; ?></td>
                                    </tr> */ ?>
                                    <tr>
                                        <th>Total:</th>
                                        <td><?php echo $_SESSION['data']['currency_symbol']; ?> <?php echo ($_SESSION['data']['totalWithTax'] + $pending_invoice_amount); ?></td>
                                    </tr>
                                    <tr style="background-color: green;color: white;">
                                        <th>Total Paid Amount:</th>
                                        <td style="border-top:0px;"><?php echo $_SESSION['data']['currency_symbol']; ?> <?php echo $_SESSION['data']['payment']['paidAmount']; ?></td>
                                    </tr>
                                    <?php if((($_SESSION['data']['totalWithTax'] + $pending_invoice_amount)-$_SESSION['data']['payment']['paidAmount']) > 0) { ?>
                                    <tr style="background-color: green;color: white;">
                                        <th>Pending Amount:</th>
                                        <td style="border-top:0px;"><?php echo $_SESSION['data']['currency_symbol']; ?> <?php echo (($_SESSION['data']['totalWithTax'] + $pending_invoice_amount)-$_SESSION['data']['payment']['paidAmount']); ?></td>
                                    </tr>
                                    <?php } ?>
                                </table>
                            </div>
                        </div><!-- /.col -->
                        <p style="text-align: center;font-size: 11px !important;">Powered by Moderntimes Enterprise Solution (www.modern-times.in)</p>
                    </div><!-- /.row -->

                    <!-- this row will not appear when printing -->
                    
                </div>

            </div>
        </div>
    </div>
     <footer class="footer" style="width: 100%;left: 0;">
                
            </footer>
<?php  /*
    <div class="col-12">
        <div class="card">
            <div class="card-block">
                
                <h4 class="card-title">View invoice</h4>
                <div class="col-12">

                    <table class="table table-hover table-bordered">
                        <tbody>
                            <tr>
                                <th>Date</th>
                                <th>Amount</th>
                                <th>Payment Method</th>
                                <th>Notes</th>
                            </tr>
                            <?php foreach ($_SESSION['data']['collection'] as $key1 => $value1) { ?>
                            <tr>
                                <td><?php echo  $value1['collectionDate']; ?></td>
                                <td><?php echo $_SESSION['data']['currency_symbol']; ?> <?php echo $value1['collectionAmount']; ?></td>
                                <td><?php echo $value1['collectionMethod']; ?></td>
                                <td><?php echo $value1['collectionNote']; ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
*/
unset($_SESSION['data']);
?>
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <input type="hidden" id="rooturl" value=""/>
    <input type="hidden" id="utilsScript" value="assets/js/utils.js"/>
    <script src="assets/plugins/jquery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/plugins/bootstrap/js/tether.min.js"></script>
    <script src="assets/plugins/bootstrap/js/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="assets/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="assets/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="http://modern-times.inmodern-times.in/dev/assets/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="assets/plugins/echarts/echarts-all.js"></script>

    <script src="assets/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="assets/js/schoex.js" type="text/javascript"></script>
    <script src="assets/js/intlTelInput.min.js"></script>
    <script src="assets/plugins/ckeditor/ckeditor.js"></script>
    <script src="assets/plugins/toast-master/js/jquery.toast.js"></script>
    <script src="assets/plugins/datepicker/bootstrap-datepicker.js"></script>
    <script src="assets/js/jquery.colorbox-min.js"></script>
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/plugins/humanize-duration/humanize-duration.js"></script>

    <script type="text/javascript" src="assets/plugins/global-calendars/jquery.plugin.min.js"></script>
    <script type="text/javascript" src="assets/plugins/global-calendars/jquery.calendars.all.js"></script>
    
    <script src="assets/js/Angular/angular.min.js" type="text/javascript"></script>
    <script src="assets/js/Angular/AngularModules.js" type="text/javascript"></script>
    <script src="assets/js/Angular/app.js"></script>
    <script src="assets/js/Angular/routes.js" type="text/javascript"></script>
    <script type="text/javascript">
        $( document ).ready(function() {
    window.print();
});
    </script>
</body>
