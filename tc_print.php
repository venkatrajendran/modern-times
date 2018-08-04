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
        font-size: 8px;
        margin: 0px !important;
    }
    .card {
        border: 0px !important;
    }
    /* table.table-bordered tr th{
        border-bottom:1px solid #eceeef !important;
    }
    .table thead th, .table th{
        border:1px solid #eceeef !important;
    } */
    .table td, .table th {

        border-top: 0px !important;
    }
</style>
</head>
<body>
<?php session_start(); //print_r($_REQUEST); ?>
<div class="row" ng-show="views.invoice">
    <div class="col-12">
        <div class="card">
            <div class="card-block">
                <div class="row col-12">
                    <div class="col-3">
                        <img src="logo/logo.png" style="max-width: 100px;"/>
                    </div>
                    <div class="col-6" style="text-align: center">
                        Government of Tamilnadu - Department of School Eduction, Chennai<br>
                        TRANSFER CERTIFICATE<br>
                        (Appendix 5, Chapter III, Rule 34, T.N.E. Rules)<br>
                        (Recognized by the Director of School Education Chennai)
                    </div>
                    <div class="col-3"><?php if(trim($_REQUEST['photo']) != "") { ?><img class="pull-right" src="uploads/profile/<?php echo $_REQUEST['photo']; ?>"><?php } ?> </div>
                </div>
                <div class="row col-12">
                    <table class="table">
                        <thead>
                        <tr>
                            <th class="col-2">TC No</th>
                            <th class="col-2">Admn. No.</th>
                            <th class="col-2">TMR Code No.</th>
                            <th class="col-2">Register No.</th>
                            <th class="col-2">Certificate No.</th>
                            <th class="col-2">EMIS No.</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="font-weight-bold"><?php echo $_REQUEST['tcno']; ?></td>
                            <td class="font-weight-bold"><?php echo $_REQUEST['studentRollId']; ?></td>
                            <td class="font-weight-bold"><?php echo $_REQUEST['tmrCode']; ?></td>
                            <td class="font-weight-bold"><?php echo $_REQUEST['registerNo']; ?></td>
                            <td class="font-weight-bold"><?php echo $_REQUEST['certificate']; ?></td>
                            <td class="font-weight-bold"><?php echo $_REQUEST['emisNo']; ?></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row col-12">
                    <div class="col-1" style="text-align: center">1</div>
                    <div class="col-4">Name of the School</div>
                    <div class="col-1" style="text-align: center">:</div>
                    <div class="col-6 font-weight-bold"><?php echo strtoupper($_REQUEST['schoolname']); ?></div>
                </div>
                <div class="row col-12">
                    <div class="col-4 offset-1">a) Name of the Educational District</div>
                    <div class="col-1" style="text-align: center">:</div>
                    <div class="col-6 font-weight-bold"><?php echo strtoupper($_REQUEST['schoolcity']); ?> - <?php echo strtoupper($_REQUEST['schoolzipcode']); ?></div>
                </div>
                <div class="row col-12">
                    <div class="col-4 offset-1">b) Name of the Revenve District</div>
                    <div class="col-1" style="text-align: center">:</div>
                    <div class="col-6 font-weight-bold"><?php echo strtoupper($_REQUEST['revenuedistrict']); ?></div>
                </div>
                <div class="row col-12">
                    <div class="col-1" style="text-align: center">2</div>
                    <div class="col-4">Name of the Pupil(In Block Letters)</div>
                    <div class="col-1" style="text-align: center">:</div>
                    <div class="col-6 font-weight-bold"><?php echo strtoupper($_REQUEST['fullName']); ?></div>
                </div>
                <div class="row col-12">
                    <div class="col-1" style="text-align: center">3</div>
                    <div class="col-4">Name of the Father or Mother of the Pupil</div>
                    <div class="col-1" style="text-align: center">:</div>
                    <div class="col-6"><?php echo strtoupper($_REQUEST['parent']); ?></div>
                </div>
                <div class="row col-12">
                    <div class="col-1" style="text-align: center">4</div>
                    <div class="col-4">Nationality, Religion and Caste</div>
                    <div class="col-1" style="text-align: center">:</div>
                    <div class="col-6"><?php echo strtoupper($_REQUEST['nationality']); ?></div>
                </div>
                <div class="row col-12">
                    <div class="col-1" style="text-align: center">5</div>
                    <div class="col-4">Community Whether he belongs to</div>
                    <div class="col-1" style="text-align: center"> </div>
                    <div class="col-6"></div>
                </div>
                <div class="row col-12">
                    <div class="col-4 offset-1">a) Adi-Dravider(Scheduled caste or Tribe)</div>
                    <div class="col-1" style="text-align: center">:</div>
                    <div class="col-6"><?php echo strtoupper($_REQUEST['community']); ?></div>
                </div>
                <div class="row col-12">
                    <div class="col-4 offset-1">b) Backward Class</div>
                    <div class="col-1" style="text-align: center"> </div>
                    <div class="col-6 font-weight-bold"> </div>
                </div>
                <div class="row col-12">
                    <div class="col-4 offset-1">c) Most Backward Class</div>
                    <div class="col-1" style="text-align: center"> </div>
                    <div class="col-6 font-weight-bold"> </div>
                </div>
                <div class="row col-12">
                    <div class="col-4 offset-1">d) Convert to Christianity from Scheduled Caste</div>
                    <div class="col-1" style="text-align: center"> </div>
                    <div class="col-6 font-weight-bold"> </div>
                </div>
                <div class="row col-12">
                    <div class="col-4 offset-1">e) Denotified Communities</div>
                    <div class="col-1" style="text-align: center"> </div>
                    <div class="col-6 font-weight-bold"> </div>
                </div>
                <div class="row col-12">
                    <div class="col-1" style="text-align: center">6</div>
                    <div class="col-4">Sex</div>
                    <div class="col-1" style="text-align: center">:</div>
                    <div class="col-6"><?php echo strtoupper($_REQUEST['gender']); ?></div>
                </div>
                <div class="row col-12">
                    <div class="col-1" style="text-align: center">7</div>
                    <div class="col-4">Date of Birth as entered in the admission register in figures and Words</div>
                    <div class="col-1" style="text-align: center">:</div>
                    <div class="col-6">
                        <?php
                        $date = explode('/', $_REQUEST['birthday']);
                        $monthNum  = 3;
                        $dateObj   = DateTime::createFromFormat('!m', $date[1]);
                        $monthName = $dateObj->format('F'); // March
                        echo strtoupper($_REQUEST['birthday'].'  '. number_to_word($date[0]). ' '.$monthName.' '.number_to_word($date[2])); ?>
                    </div>
                </div>
                <div class="row col-12">
                    <div class="col-1" style="text-align: center">8</div>
                    <div class="col-4">Personal Marks of Identification</div>
                    <div class="col-1" style="text-align: center">:</div>
                    <div class="col-6"><?php echo strtoupper(nl2br($_REQUEST['identificationMarks'])); ?></div>
                </div>
                <div class="row col-12">
                    <div class="col-1" style="text-align: center">9</div>
                    <div class="col-4">Date of admission and standard in which he was admitted</div>
                    <div class="col-1" style="text-align: center">:</div>
                    <div class="col-6"><?php echo strtoupper($_REQUEST['admissionDate']); ?>; <?php echo strtoupper($_REQUEST['studentStudied']); ?></div>
                </div>
                <div class="row col-12">
                    <div class="col-1" style="text-align: center">10</div>
                    <div class="col-4">a). Standard in which the pupil was studying at the time of leaving</div>
                    <div class="col-1" style="text-align: center">:</div>
                    <div class="col-6"><?php echo strtoupper($_REQUEST['studentClass']); ?></div>
                </div>
                <div class="row col-12">
                    <div class="col-4 offset-1">b) The course offered i.e<br><b>General Education / Vocational Education</b></div>
                    <div class="col-1" style="text-align: center">:</div>
                    <div class="col-6 font-weight-bold"><?php echo strtoupper($_REQUEST['courseOffered']); ?></div>
                </div>
                <div class="row col-12">
                    <div class="col-4 offset-1">c) In the case of General Education the subjects offered under Part III Group A & Meduim of instruction</div>
                    <div class="col-1" style="text-align: center">:</div>
                    <div class="col-6"><?php echo strtoupper($_REQUEST['offeredGroupA']); ?></div>
                </div>
                <div class="row col-12">
                    <div class="col-4 offset-1">d) In the case of Vocational Education, the Vocational subject under Part III Group B and the related subject offered under Part III Group A</div>
                    <div class="col-1" style="text-align: center">:</div>
                    <div class="col-6"><?php echo strtoupper($_REQUEST['offeredGroupB']); ?></div>
                </div>
                <div class="row col-12">
                    <div class="col-4 offset-1">e) Language offered under Part I</div>
                    <div class="col-1" style="text-align: center">:</div>
                    <div class="col-6"><?php echo strtoupper($_REQUEST['languagePart1']); ?></div>
                </div>
                <div class="row col-12">
                    <div class="col-4 offset-1">d) Medium of Study</div>
                    <div class="col-1" style="text-align: center">:</div>
                    <div class="col-6"><?php echo strtoupper($_REQUEST['mediumofStudy']); ?></div>
                </div>
                <div class="row col-12">
                    <div class="col-1" style="text-align: center">11</div>
                    <div class="col-4">Whether qualified for promotion to higher standard</div>
                    <div class="col-1" style="text-align: center">:</div>
                    <div class="col-6"><?php echo strtoupper($_REQUEST['qualified']); ?></div>
                </div>
                <div class="row col-12">
                    <div class="col-1" style="text-align: center">12</div>
                    <div class="col-4">Whether the pupil has paid all the fees due to the school</div>
                    <div class="col-1" style="text-align: center">:</div>
                    <div class="col-6"><?php echo strtoupper($_REQUEST['duefee']); ?></div>
                </div>
                <div class="row col-12">
                    <div class="col-1" style="text-align: center">13</div>
                    <div class="col-4">Whether the pupil was in receipt of any scholarship (Nature of Scholarship to be specified)</div>
                    <div class="col-1" style="text-align: center">:</div>
                    <div class="col-6"><?php echo strtoupper($_REQUEST['scholarship']); ?></div>
                </div>
                <div class="row col-12">
                    <div class="col-1" style="text-align: center">14</div>
                    <div class="col-4">Whether the pupil has undergone Medical Inspection during the academic year (first or repeat to be specified)</div>
                    <div class="col-1" style="text-align: center">:</div>
                    <div class="col-6"><?php echo strtoupper($_REQUEST['medical']); ?></div>
                </div>
                <div class="row col-12">
                    <div class="col-1" style="text-align: center">15</div>
                    <div class="col-4">Date on which the pupil actually left the school</div>
                    <div class="col-1" style="text-align: center">:</div>
                    <div class="col-6"><?php echo strtoupper($_REQUEST['left']); ?></div>
                </div>
                <div class="row col-12">
                    <div class="col-1" style="text-align: center">16</div>
                    <div class="col-4">The pupil's conduct and character</div>
                    <div class="col-1" style="text-align: center">:</div>
                    <div class="col-6"><?php echo strtoupper($_REQUEST['conduct']); ?></div>
                </div>
                <div class="row col-12">
                    <div class="col-1" style="text-align: center">17</div>
                    <div class="col-4">Date on which application for Transfer Certificate was made on behalf of the pupil by the parent of guardian</div>
                    <div class="col-1" style="text-align: center">:</div>
                    <div class="col-6"><?php echo strtoupper($_REQUEST['applicationdate']); ?></div>
                </div>
                <div class="row col-12">
                    <div class="col-1" style="text-align: center">18</div>
                    <div class="col-4">Date of the Transfer Certificate</div>
                    <div class="col-1" style="text-align: center">:</div>
                    <div class="col-6"><?php echo strtoupper($_REQUEST['datetc']); ?></div>
                </div>
                <div class="row col-12">
                    <div class="col-1" style="text-align: center">19</div>
                    <div class="col-4">Course of Study</div>
                    <div class="col-1" style="text-align: center"> </div>
                    <div class="col-6"> </div>
                </div>
                <div class="row col-12">
                    <table class="table">
                        <thead>
                            <th class="col-3">Name of School</th>
                            <th class="col-3">Academic Year(s)</th>
                            <th class="col-2">Standard(s) studied</th>
                            <th class="col-2">First Language</th>
                            <th class="col-2">Medium of Instruction</th>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="font-weight-bold"><?php echo $_REQUEST['schoolname']; ?></td>
                            <td class="font-weight-bold"><?php echo $_REQUEST['academic']; ?></td>
                            <td class="font-weight-bold"><?php echo $_REQUEST['studentStudied']; ?></td>
                            <td class="font-weight-bold"><?php echo $_REQUEST['firstLanguage']; ?></td>
                            <td class="font-weight-bold"><?php echo $_REQUEST['mediumInstruction']; ?></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row col-12" style="margin-bottom: 80px">
                    Signature of the Headmaster with date and with School Seal
                </div>
                <div class="row col-12"><hr></div>
                <div class="row col-12">
                    <div class="col-1">Note</div>
                    <div class="col-11">1. Erasures and Unauthenticated of Fraudulent alterations in the Certificate will lead to its cancellation</div>
                </div>
                <div class="row col-12">
                    <div class="col-1"> </div>
                    <div class="col-11">2. Should be signed in ink by the Head of institution, who will be held responsible for the correctness of the entires.</div>
                </div>
                <div class="row col-12 font-weight-bold" style="margin-top: 20px; text-align: center">
                    <u>DECLARATION BY THE PARENT OR GUARDIAN</u>
                </div>
                <div class="row col-12" style="margin-bottom: 50px">
                    I here by declare that the particalars recorded against items 2 to 7 are correct and that no change will be demanded by me in future.
                </div>
                <div class="row col-12">
                    <div class="col-6 pull-left">Signature of the Student</div>
                    <div class="col-6 pull-right" style="text-align: right;">Signature of the Parent / Guardian</div>
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
<?php
function number_to_word( $num = '' )
{
    $num    = ( string ) ( ( int ) $num );

    if( ( int ) ( $num ) && ctype_digit( $num ) )
    {
        $words  = array( );

        $num    = str_replace( array( ',' , ' ' ) , '' , trim( $num ) );

        $list1  = array('','one','two','three','four','five','six','seven',
            'eight','nine','ten','eleven','twelve','thirteen','fourteen',
            'fifteen','sixteen','seventeen','eighteen','nineteen');

        $list2  = array('','ten','twenty','thirty','forty','fifty','sixty',
            'seventy','eighty','ninety','hundred');

        $list3  = array('','thousand','million','billion','trillion',
            'quadrillion','quintillion','sextillion','septillion',
            'octillion','nonillion','decillion','undecillion',
            'duodecillion','tredecillion','quattuordecillion',
            'quindecillion','sexdecillion','septendecillion',
            'octodecillion','novemdecillion','vigintillion');

        $num_length = strlen( $num );
        $levels = ( int ) ( ( $num_length + 2 ) / 3 );
        $max_length = $levels * 3;
        $num    = substr( '00'.$num , -$max_length );
        $num_levels = str_split( $num , 3 );

        foreach( $num_levels as $num_part )
        {
            $levels--;
            $hundreds   = ( int ) ( $num_part / 100 );
            $hundreds   = ( $hundreds ? ' ' . $list1[$hundreds] . ' Hundred' . ( $hundreds == 1 ? '' : 's' ) . ' ' : '' );
            $tens       = ( int ) ( $num_part % 100 );
            $singles    = '';

            if( $tens < 20 )
            {
                $tens   = ( $tens ? ' ' . $list1[$tens] . ' ' : '' );
            }
            else
            {
                $tens   = ( int ) ( $tens / 10 );
                $tens   = ' ' . $list2[$tens] . ' ';
                $singles    = ( int ) ( $num_part % 10 );
                $singles    = ' ' . $list1[$singles] . ' ';
            }
            $words[]    = $hundreds . $tens . $singles . ( ( $levels && ( int ) ( $num_part ) ) ? ' ' . $list3[$levels] . ' ' : '' );
        }

        $commas = count( $words );

        if( $commas > 1 )
        {
            $commas = $commas - 1;
        }

        return implode( '' , $words );
    }
    else if( ! ( ( int ) $num ) )
    {
        return 'Zero';
    }
    return '';
}
?>
