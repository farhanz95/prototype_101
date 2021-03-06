<?php

$this->breadcrumbs=array(
	'Visualisation'=>'index',
);

?>

<style>

#container {
    height: 500px; 
    min-width: 310px; 
    max-width: 800px; 
    margin: 0 auto; 
}
.loading {
    margin-top: 10em;
    text-align: center;
    color: gray;
}


</style>

<script src="https://code.highcharts.com/maps/highmaps.js"></script>
<script src="https://code.highcharts.com/maps/modules/data.js"></script>
<script src="https://code.highcharts.com/mapdata/countries/my/my-all.js"></script>

<section id="content">
 
<div class="panel">
	<div class="panel panel-dark">
		<div class="panel-heading bg-dark">
			<span class="text-white"><span class="glyphicon glyphicon-stats mr10"></span>Model Visualisation</span>
		</div>

		<div class="panel-body">

		<div id="container">
		    <div class="loading">
		        <i class="icon-spinner icon-spin icon-large"></i>
		        Loading data from Google Spreadsheets...
		    </div>
		</div>


		</div>
	</div>
</div>



<script>

$(function () {

    // Prepare demo data
    var data = [
        {
            "hc-key": "my-sa",
            "value": 0
        },
        {
            "hc-key": "my-sk",
            "value": 1
        },
        {
            "hc-key": "my-la",
            "value": 2
        },
        {
            "hc-key": "my-pg",
            "value": 3
        },
        {
            "hc-key": "my-kh",
            "value": 4
        },
        {
            "hc-key": "my-sl",
            "value": 5
        },
        {
            "hc-key": "my-ph",
            "value": 6
        },
        {
            "hc-key": "my-kl",
            "value": 7
        },
        {
            "hc-key": "my-pj",
            "value": 8
        },
        {
            "hc-key": "my-pl",
            "value": 9
        },
        {
            "hc-key": "my-jh",
            "value": 10
        },
        {
            "hc-key": "my-pk",
            "value": 11
        },
        {
            "hc-key": "my-kn",
            "value": 12
        },
        {
            "hc-key": "my-me",
            "value": 13
        },
        {
            "hc-key": "my-ns",
            "value": 14
        },
        {
            "hc-key": "my-te",
            "value": 15
        },
        {
            "value": 16
        }
    ];

    // Initiate the chart
    $('#container').highcharts('Map', {

        title : {
            text : 'Rajah Pengeluaran Bancian Orang Asli'
        },

        // subtitle : {
        //     text : 'Source map: <a href="https://code.highcharts.com/mapdata/countries/my/my-all.js">Malaysia</a>'
        // },

        mapNavigation: {
            enabled: true,
            buttonOptions: {
                verticalAlign: 'bottom'
            }
        },

        colorAxis: {
            min: 0
        },

        credits: {
        	enabled: false,
        },
        series : [{
            data : data,
            mapData: Highcharts.maps['countries/my/my-all'],
            joinBy: 'hc-key',
            name: 'Bancian Dikeluarkan',
            states: {
                hover: {
                    color: '#BADA55'
                }
            },
            dataLabels: {
                enabled: true,
                format: '{point.name}'
            }
        }, {
            name: 'Separators',
            type: 'mapline',
            data: Highcharts.geojson(Highcharts.maps['countries/my/my-all'], 'mapline'),
            color: 'silver',
            showInLegend: false,
            enableMouseTracking: false
        }]
    });
});


</script>
