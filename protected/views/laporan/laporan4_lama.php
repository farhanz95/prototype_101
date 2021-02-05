<legend class="ml10">Laporan Orang Asli Mengikut Negeri Tahun 2015</legend>

<div class="type-report">
		<div class="col-lg-4 mb20">
    		<select id="type-negeri" name="type" class="form-control wauto" empty="-Pilih Jenis Laporan-">
    		
    		<option value="jadual">Jadual Tabular</option>
    		<option value="graf">Graf</option>
    		<option value="pai">Carta Pai</option>
    		
    		</select>
		</div>
</div>

<div class="negeri-form1 ">

<?php  

$negeri = Yii::app()->db->createCommand()
->select()
->from('list_negeri')
->queryAll();

$c=5;
 
?>

    <table class="table table-bordered table-responsive mt20 ml10">
        <tr  style="background-color:#0182C6 ; color:white">
            <td>Bil</td>
            <td>Negeri</td>
            <td>Jumlah</td>
        </tr>
        <?php foreach($negeri as $a) { 
            ?>
        <tr>
            <td><?php echo $a['list_state_id'] ?></td>
            <td><?php echo $a['list_state_nicename'] ?> </td>
            <td><?php echo $c++; ?></td>
        </tr>

        <?php  } ?>
    </table>		

</div>



<div class="col-lg-12 negeri-form2 mt0" id="negeri1" style="width: 1250px; height: 650px; display:none;"></div>
		
<div class="col-lg-12">
	<div class="col-lg-3"></div>
		<div class="col-lg-6">
			<div class=" negeri-form3 " id="negeri2" style="height:600px; display:none;  "></div>
		</div>
	<div class="col-lg-3"></div>
	<div class="col-lg-12">

	<a href="javascript:window.print()" class="btn btn-default mt10 mr10"><i class="fa fa-print pr5"></i> Cetak</a>
    </br></br>
    Export : </br>
	<a href="" rel="tooltip" data-toggle="tooltip" data-original-title="Export Ke Word" class="va-b fa fa-file-word-o fs30 text-primary mr5"></a>
	<a href="" rel="tooltip" data-toggle="tooltip" data-original-title="Export Ke Excel" class="va-b fa fa-file-excel-o fs30 text-success mr5"></a>
	<a href="" rel="tooltip" data-toggle="tooltip" data-original-title="Export Ke PDF" class="va-b fa fa-file-pdf-o fs30 text-danger mr5"></a>
    <a class="btn btn-default br3 va-b" rel="tooltip" data-toggle="tooltip" data-original-title="Export Ke CSV"><span class="fa fa-share mr5"></span>CSV</a>
    <a class="btn btn-primary br3 va-b" rel="tooltip" data-toggle="tooltip" data-original-title="Export Ke Image"><span class="fa fa-picture-o fa-lg mr10"></span><span class="fa fa-download va-b"></span></a>

    </div>

     <!--    <span class="fa fa-mail-forward mr10"></span> -->
	</div>
</div>


<script type="text/javascript">

 $('#type-negeri').on('change', function() {

      if ( this.value == 'jadual')
      {
        $('.negeri-form1').fadeIn();
        $('.negeri-form2').fadeOut();
         $('.negeri-form3').fadeOut();

      }

      else if ( this.value == 'graf')
      {
        $('.negeri-form2').fadeIn();
        $('.negeri-form1').fadeOut();
         $('.negeri-form3').fadeOut();

      }
      else if ( this.value == 'pai')
      {
        $('.negeri-form3').fadeIn();
	    $('.negeri-form1').fadeOut();
	    $('.negeri-form2').fadeOut();
      }
    
    });

$(function () {
    $('#negeri1').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Taburan Penduduk Orang Asli Mengikut Negeri'
        },
        credits: {
            enabled: false
            },
            exporting: {
                enabled: false
            },
        xAxis: {
            categories: [
                'Perlis', 'Pulau Pinang', 'Kedah', 'Perak', 'Kelantan', 'Terengganu', 'Pahang', 'Selangor', 'Negeri Sembilan', 'Melaka', 'Johor', 'Sabah','Sarawak','Kuala Lumpur'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Bilangan Penduduk'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Negrito',
            data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]

        }, {
            name: 'Senai',
            data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3, 91.2, 83.5, 106.6, 92.3]

        }, {
            name: 'Melayu Asli',
            data: [48.9, 38.8, 39.3, 41.4, 47.0, 48.3, 59.0, 59.6, 52.4, 65.2, 59.3, 51.2]

        }]
    });


     $('#negeri2').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Statistik Penduduk Orang Asli Mengikut Negeri'      
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'value',
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
                    name: 'Perlis',
                    y: 12
                }, {
                    name: 'Pulau Pinang',
                    y: 14,
                    sliced: true,
                    selected: true
                }, {
                    name: 'Perak',
                    y: 21
                },{
                    name: 'Kelantan',
                    y: 14
                },{
                    name: 'Terengganu',
                    y: 13
                },{
                    name: 'Kedah',
                    y: 10
                },{
                    name: 'Pahang',
                    y: 11
                },{
                    name: 'Selangor',
                    y: 13
                },{
                    name: 'Negeri Sembilan',
                    y: 6
                },{
                    name: 'Melaka',
                    y: 8
                },{
                    name: 'Johor',
                    y: 7
                },{
                    name: 'Sabah',
                    y: 32
                },{
                    name: 'Sarawak',
                    y: 34
                },{
                    name: 'Kuala Lumpur',
                    y: 5
                },]
            }]
        });
});

</script>
