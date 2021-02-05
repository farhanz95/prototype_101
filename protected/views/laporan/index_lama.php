<?php 

Yii::app()->clientScript->registerScript('filter', "
$('.filter-button').click(function(){
    $('.filter-form').toggle();
     $('.selesaiCetakan').hide();
    $('.negeri').hide();
    $('.3Suku').hide();
});


");

?>

<?php

$this->breadcrumbs=array('Laporan');

$month = array('Januari','Februari','Mac','April','May','Jun','July','Ogos','September','Oktober','November','Disember');
$x=1;

 ?>

<title>Highcharts Example</title>

<style type="text/css">
${demo.css}
</style>
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="https://code.highcharts.com/highcharts-3d.js"></script>

<style>

.paantable-bordered > thead > tr > th,
.paantable-bordered > tbody > tr > th,
.paantable-bordered > tfoot > tr > th,
.paantable-bordered > thead > tr > td,
.paantable-bordered > tbody > tr > td,
.paantable-bordered > tfoot > tr > td {
  border: 0px solid #eeeeee !important;
}

</style>


<section id="content" class="">
    <div class="row">
        <div class="col-sm-12 col-lg-12">
            <div class="panel">
                <div class="panel-heading bg-dark ">
                    <span class="h-icon text-white-dark"><i class="glyphicon glyphicon-stats"></i></span>
                    <span class="panel-title text-white-dark pl10">Laporan</span>
                </div>

                
                <div class="panel-body">

                <div class="pl10"><span class="btn btn-system mb20 filter-button">Semakan Laporan Terperinci</span></div>

                <div class="filter-form" style="display:none">

                    <div class="col-lg-12 mb20">
                        <div class="col-lg-4">
                            <select id="years" name="years" class="form-control" empty="-Select Report Year-" value="2015">

                            <option value="" >-Pilih Tahun Laporan-</option>
                            <?php 

                            for($i=1; $i<=count($year); $i++)
                            {
                                echo "<option value=".$yearFrom.">".$yearFrom++."</option>";
                            }

                            ?> 

                            <option name="years"> </option>  

                            </select> 

                        </div>
                        <div class="col-lg-4">
                            <select class="form-control">
                                <option value="" >-Pilih Bulan Laporan-</option>
                                <?php foreach($month as $za) { ?>
                                <option><?php echo $za; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-12 mb20">
                        <div class="col-lg-8">
                            <select id="report" name="report" class="form-control wauto" >

                            <option value="" >-Pilih Jenis Laporan-</option>
                        
                            <option value="selesaiCetakan">Senarai Penduduk Orang Asli Yang Telah Selesai Cetakan</option>
                            <option value="Negeri">Taburan Penduduk Orang Asli Mengikut Negeri</option>
                            <option value="3Suku">Taburan Penduduk Orang Asli Mengikut 3 Suku Kaum Utama</option>
                            <option name="report"> </option>  

                            </select> 

                        </div>
                    
                    </div>

                </div>

                

                    <div class="col-lg-12 selesaiCetakan" style="display:none">
                        <?php 

                            $this->renderPartial('SelesaiCetakan');
                         ?>
                    </div>

                    <div class="col-lg-12 negeri" style="display:none">
                        <?php 
                            $this->renderPartial('byNegeri');
                         ?>
                    </div>

                    <div class=" 3Suku " style="display:none">
                        <?php 
                            $this->renderPartial('3Suku');
                         ?>
                    </div>
                
                </div>

            </div>
        </div>
    </div>
</section>



<?php
Yii::app()->clientScript->registerScript(
    'utama',
    "
    $('#report').on('change', function() {
      if ( this.value == 'selesaiCetakan')
      {
        $('.selesaiCetakan').fadeIn();
        $('.negeri').fadeOut();
        $('.3Suku').fadeOut();
      }
      else if ( this.value == 'Negeri')
      {
        $('.negeri').fadeIn();
        $('.selesaiCetakan').fadeOut();
        $('.3Suku').fadeOut();
      }
       else if ( this.value == '3Suku')
      {
        $('.3Suku').fadeIn();
        $('.selesaiCetakan').fadeOut();
        $('.negeri').fadeOut();
      }
  
    });
    ",
CClientScript::POS_READY
);
?>

