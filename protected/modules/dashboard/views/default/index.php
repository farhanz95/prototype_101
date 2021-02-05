<?php

$this->breadcrumbs=array(
    'Laman Utama',
);

?>
 
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>


<!-- Begin: Content -->
<section id="content" class="table-layout animated fadeIn">
    <div class="tray tray-center pt5 va-t posr" style="max-height:700px !important;">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
 

                <div class="panel">
                   <div class="panel-body">


                    <div class="alert alert-primary alert-sm alert-border-left light dismissable" id="tour-item1">
                     <span class="glyphicon glyphicon-exclamation-sign mr10"></span> Sistem Akan Dikemaskini Pada 14/07/2016
                    </div>

                        <div class="form-group">
                            <div class="row mb10">
                                <div class="col-md-6">
                                    <div class="panel bg-alert light of-h mb10" style="background-color:#3F1697 !important">
                                        <div class="pn pl20 p12">
                                            <div class="icon-bg"> <i class="fa fa-user"></i> </div>
                                            <h2 class="mt15 lh15"> <b>
                                                34385
                                            </b> </h2>
                                            <h5 class="text-muted">Jumlah Orang Asli</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="panel bg-info light of-h mb10" style="background-color:#24A0B !important">
                                        <div class="pn pl20 p5">
                                             <div class="icon-bg"> <i class="glyphicons glyphicons-building"></i> </div>
                                            <h2 class="mt15 lh15"> <b>
                                                11125
                                            </b> </h2>
                                            <h5 class="text-muted">Jumlah Kad Banci </br>Orang Asli Dikeluarkan</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row mb20" id="tour-item3">
                                <div class="col-md-12 pln br-r mvn15">
                                    <h5 class="ml5 mt20 ph10 pb5 br-b fw700">Pendaftaran Orang Asli 2016</h5>
                                    <div id="high-column2" class="mb30" style="width: 100%; height: 255px; margin: 0 auto"></div>
                                    <div id="high-column3" class="mb30" style="width: 100%; height: 255px; margin: 0 auto"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 pln br-r mvn15">
                                    <h5 class="ml5 mt20 ph10 pb5 br-b fw700">Statistik Bangsa Orang Asli</h5>
                                    <div id="high-pie" style="width: 100%; height: 200px; margin: 0 auto"></div>
                                </div>

                                <div class="col-md-6 pln br-r mvn15">
                                    <h5 class="ml5 mt20 ph10 pb5 br-b fw700">Jumlah Kad Bancian</h5>
                                    <div class="row table-layout">
                                        <div class="col-xs-5 va-m">
                                            <div id="high-column" style="width: 100%; height: 197px; margin: 0 auto"></div>
                                        </div>
                                        <div class="col-xs-7 br-l pn">
                                            <table class="table mbn tc-med-1 tc-bold-last">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <span class="fa fa-circle text-warning fs14 mr10"></span>Negrito</td>
                                                        <td>2400</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span class="fa fa-circle text-info fs14 mr10"></span>Senoi</td>
                                                        <td>700</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span class="fa fa-circle text-primary fs14 mr10"></span>Melayu Asli</td>
                                                        <td>1400</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>

    <!-- begin: .tray-right -->
    <aside class="tray tray-right tray290 va-t pn" data-tray-height="match" style="max-height:700px  !important;">

        <!-- store activity timeline -->
        <ol class="timeline-list pl5 mt10" id="tour-item2">
            <li class="timeline-item" >
                <div class=""style:"color:#000000 !important"><h4 <b>Jejak Audit</b></h4>
            </li> 
            <li class="timeline-item">
                <div class="timeline-icon bg-primary light"><span class="fa fa-location-arrow"></span>
                </div>
                <div class="timeline-desc"><b>Cetakan</b><br> Kad Banci
                </div>
                <div class="timeline-date">01-04-2016 1:25am</div>
            </li>
            <li class="timeline-item">
                <div class="timeline-icon bg-system"><span class="fa fa-search"></span>
                </div>
                <div class="timeline-desc"><b>Penyemakan</b> <br>Keluarga ARJUNA A/L WIRAWAN</div>
                <div class="timeline-date">30-03-2016 5:25am</div>
            </li>
            <li class="timeline-item">
                <div class="timeline-icon bg-success"><span class="fa fa-check"></span>
                </div>
                <div class="timeline-desc"><b>Selesai Bagi</br>Pendaftaran</b><br>Keluarga ARJUNA A/L WIRAWAN</a>
                </div>
                <div class="timeline-date">28-03-2016 4:15am</div>
            </li>
            <li class="timeline-item">
                <div class="timeline-icon bg-dark light"><span class="glyphicons glyphicons-settings"></span>
                </div>
                <div class="timeline-desc"><b>Kemaskini</br>Maklumat</b><br>  ARJUNA A/L WIRAWAN 
                </div>
                <div class="timeline-date">26-03-2016 3:05am</div>
            </li>
        </ol>

    </aside>
    <!-- end: .tray-right -->                   
</section>


<?php
Yii::app()->clientScript->registerScript(
'abc', 
"

var highColors = [bgWarning, bgPrimary, bgInfo, bgAlert,
    bgDanger, bgSuccess, bgSystem, bgDark
];
var column2 = $('#high-column2');
$('#high-column2').highcharts({
    credits: false,
    colors: [bgAlert,bgPrimary],
    chart: {
        type: 'bar'
    },
    title: {
        text: 'Jumlah Pendaftaran Orang Asli 2016'
    },
    xAxis: {
        categories: ['Januari', 'Februari', 'March', 'April']
    },
    yAxis: {
        title: {
            text: '',
        }
    },
    exporting: {
    	enabled: false,
    },
    series: [{
        name: 'Lelaki',
        data: [1500, 1000, 1400, 2100]
    }, {
        name: 'Perempuan',
        data: [1500, 1700, 1300, 1200]
    }],
})

var column3 = $('#high-column3');
$('#high-column3').highcharts({
    credits: false,
    colors: [bgSuccess,bgDanger],
    chart: {
        type: 'bar'
    },
    title: {
        text: 'Jumlah Keluaran Kad Banci 2016'
    },
    xAxis: {
        categories: ['Januari', 'Februari', 'March', 'April']
    },
    yAxis: {
        title: {
            text: '(KG)'
        }
    },
    exporting: {
    	enabled: false,
    },
    series: [{
        name: 'Individual',
        data: [6000, 4000, 5000, 3000]
    }, {
        name: 'Keluarga',
        data: [6000, 5000, 7000, 4000]
    }],
})

$('#high-pie').highcharts({
    credits: false,
    title: {
        text: null
    },
    exporting: {
    	enabled: false,
    },
    series: [{
        type: 'pie',
        name: 'Statistik Bangsa Orang Asli',
        data: [
            ['Negrito', 302],
            ['Senoi', 405],
            ['Melayu Asli', 203]
        ]
    }]
})

$('#high-column').highcharts({
    credits: false,
    colors: highColors,
    chart: {
        backgroundColor: 'transparent',
        type: 'column',
        padding: 0,
        margin: 0,
        marginTop: 10
    },
    legend: {
        enabled: false
    },
    title: {
        text: null
    },
    xAxis: {
        lineWidth: 0,
        tickLength: 0,
        minorTickLength: 0,
        title: {
            text: null
        },
        labels: {
            enabled: false
        }
    },
    yAxis: {
        gridLineWidth: 0,
        title: {
            text: null
        },
        labels: {
            enabled: false
        }
    },
    tooltip: {
        headerFormat: '<span style=\"font-size:10px\">{point.key}</span><table>',
        pointFormat: '<tr><td style=\"color:{series.color};padding:0\">{series.name}: </td>' +
            '<td style=\"padding:0\"><b>{point.y:.1f}</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            groupPadding: 0.05,
            pointPadding: 0.25,
            borderWidth: 0
        }
    },
    exporting: {
    	enabled: false,
    },
    series: [{
        name: 'Borang 1',
        data: [2400]
    }, {
        name: 'Borang 2',
        data: [700]
    }, {
        name: 'Borang 3',
        data: [1400]
    }]
})
",
CClientScript::POS_READY
);
?>


