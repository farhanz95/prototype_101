

<div id="a1">
    
</div>

<div class="col-lg-12">

    <div class="col-lg-2">
        <a href="javascript:window.print()" class="btn btn-default mt10 mr10"><i class="fa fa-print pr5"></i> Cetak</a>
    </div>
    <div class="col-lg-8 pt10">
        Export &nbsp; : &nbsp;
        <a href="" rel="tooltip" data-toggle="tooltip" data-original-title="Export Ke Word" class="va-b fa fa-file-word-o fs30 text-primary mr5"></a>
        <a href="" rel="tooltip" data-toggle="tooltip" data-original-title="Export Ke Excel" class="va-b fa fa-file-excel-o fs30 text-success mr5"></a>
        <a href="" rel="tooltip" data-toggle="tooltip" data-original-title="Export Ke PDF" class="va-b fa fa-file-pdf-o fs30 text-danger mr5"></a>
        <a class="btn btn-default br3 va-b" rel="tooltip" data-toggle="tooltip" data-original-title="Export Ke CSV"><span class="fa fa-share mr5"></span>CSV</a>
        <a class="btn btn-primary br3 va-b" rel="tooltip" data-toggle="tooltip" data-original-title="Export Ke Image"><span class="fa fa-picture-o fa-lg mr10"></span><span class="fa fa-download va-b"></span></a>
    </div>
     
    </div>

                                       

<?php
Yii::app()->clientScript->registerScript(
'3Suku', 
"
$(function () {
 $('#a1').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: false      
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false
                    },
                    showInLegend: true
                }
            },
             credits: {
            enabled: false
            },
            exporting: {
                enabled: false
            },
            series: [{
                name: 'Peratus',
                colorByPoint: true,
                data: [{
                    name: 'Negrito',
                    y: 10.38
                }, {
                    name: 'Senoi',
                    y: 24.03,
                    sliced: true,
                    selected: true
                }, {
                    name: 'Melayu Asli',
                    y: 56.33
                }]
            }]
        });



});

",
CClientScript::POS_READY
);
?>
