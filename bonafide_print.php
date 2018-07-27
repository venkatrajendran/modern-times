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
        margin: 0px !important;

    }
    .card {
        border: 0px !important;
    }
    .card-block {
        margin-top: 400px;
    }
</style>
</head>
<body>
<?php session_start(); //print_r($_REQUEST); ?>
<div class="row" ng-show="views.invoice">
    <div class="col-12">
        <div class="card">
            <div class="card-block">
                <div class="row">
                    <div class="col-12 font-weight-bold" style="text-align: center">
                        <?php echo $_REQUEST['schoolname']; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 font-weight-bold" style="text-align: center">
                        <?php echo $_REQUEST['schooladdress']; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 font-weight-bold" style="text-align: center">
                        <?php echo $_REQUEST['schoolcity']; ?>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 50px">
                    <div class="col-6">Admn. No : <?php echo $_REQUEST['studentRollId']; ?></div>
                    <div class="col-6" style="text-align: right;">Dt : <?php echo date('d/m/Y'); ?></div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="text-justify">This is to certify that Selvan <u><?php echo $_REQUEST['fullName']; ?></u> S/o, <u><?php echo $_REQUEST['parent']; ?></u> is a bonafide student of our Hr. Sec. School. He is studying in  <u><?php echo $_REQUEST['studentClass']; ?></u> standard  <u><?php echo $_REQUEST['studentSection']; ?></u> section in the academic year ( <?php echo $_REQUEST['academic']; ?>). He belongs to  <u><?php echo $_REQUEST['community']; ?></u> Community. His date of birth is <u><?php echo $_REQUEST['birthday']; ?></u></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
