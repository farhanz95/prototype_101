<?php
/* @var $this DefaultController */

$this->breadcrumbs=array(
	'Bank Soalan'=>array('index'),
    'Tambah Soalan',
);

Yii::app()->clientScript->registerCss('mycss', '
.modalDialog {
    position: fixed;
    font-family: Arial, Helvetica, sans-serif;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background: rgba(0, 0, 0, 0.8);
    z-index: 99999;
    opacity:0;
    -webkit-transition: opacity 400ms ease-in;
    -moz-transition: opacity 400ms ease-in;
    transition: opacity 400ms ease-in;
    pointer-events: none;
}
.modalDialog:target {
    opacity:1;
    pointer-events: auto;
}
.modalDialog > div {
    width: 600px;
    position: relative;
    margin: 10% auto;
    border-radius: 10px;
    background: #fff;
}
.close {
    z-index: 1;
    opacity: 0.8;
    background: #606061;
    color: #FFFFFF;
    line-height: 25px;
    position: absolute;
    right: -12px;
    text-align: center;
    top: -10px;
    width: 24px;
    text-decoration: none;
    font-weight: bold;
    -webkit-border-radius: 12px;
    -moz-border-radius: 12px;
    border-radius: 12px;
    -moz-box-shadow: 1px 1px 3px #000;
    -webkit-box-shadow: 1px 1px 3px #000;
    box-shadow: 1px 1px 3px #000;
}
.close:hover {
    background: #00d9ff;
}
.addLogo {
    border: 1px dashed transparent;
    -webkit-transition: all 400ms ease-in;
    -moz-transition: all 400ms ease-in;
    transition: all 400ms ease-in;
}
a.btn.btn-sm.btn-system,a.btn.btn-sm.btn-default,button.btn.btn-sm.btn-system,button.btn.btn-sm.btn-default {
    display: none;
}
.addLogo:hover {
    background: #fcf2c7;
    border: 1px dashed #30a487;
}
.addLogo:hover a.btn,.addLogo:hover button.btn {
    display: inline-block;
}
.br-a-dashed {
    border: 1px dashed #30a487;
}
.lh-14 {
    line-height: 14px;
}
.pv3 {
  padding-top: 3px;
  padding-bottom: 3px;
}
');
?>
<div id="addLogo" class="modalDialog">
    <div><a href="#close" title="Close" class="close">X</a>
      <div class="panel panel-dark">
        <div class="panel-heading pln">
          <span class="h-icon"><i class="fa fa-upload"></i></span><span class="panel-title text-white-dark pl10">Add Image</span>
        </div>
        <div class="panel-body">
        <div class="tray-bin pl10 mbn" style="min-height: 250px;">
          <h5 class="text-muted mt10 fw600 pl10">
          <form action="/file-upload" class="dropzone dropzone-sm dz-clickable" id="dropZone">
            
          <div class="dz-default dz-message"><i class="mt20 fa fa-cloud-upload"></i><span class="fs20 fw600">Drag and drop a file here.</span><br><br><div class="label label-muted mr5">JPG</div><div class="label label-muted mr5">GIF</div><div class="label label-muted mr5">PNG</div><br><br><span class="fs14 fw400 text-muted">You can also upload a file from your computer</span></div></form>
        </div>
        </div>
        <div class="panel-footer">
        <div class="form-horizontal clearfix">
          <a href="#close" class="pull-right btn btn-default">Cancel</a>
        </div>
        </div>
      </div>
    </div>
</div>

<div id="addSurveyTitle" class="modalDialog">
    <div><a href="#close" title="Close" class="close">X</a>
      <div class="panel panel-dark">
        <div class="panel-heading pln">
          <span class="h-icon"><i class="glyphicon glyphicon-list-alt"></i></span><span class="panel-title text-white-dark pl10">Edit Survey Title</span>
        </div>
        <div class="panel-body">
        <div class="form-horizontal">
          <div class="form-group">
              <label class="col-lg-4 control-label">Survey Title<div class="pull-right mr5 ml10"><i class="glyphicons glyphicons-circle_question_mark"></i></div></label>
              <div class="col-lg-8">
                  <input type="text" id="inputStandard" class="form-control" value="Customer Satisfaction" placeholder="Give your survey a name...">
                  <div class="fs11 mt10">You're good up to 250 characters.</div>
              </div>
          </div>

          <div class="form-group">
              <label class="col-lg-4 control-label">Aligment<div class="pull-right mr5 ml10"><i class="glyphicons glyphicons-circle_question_mark"></i></div></label>
              <div class="col-lg-8">
                <select class="form-control" id="surveyTitleAlignment">
                  <option>Please Choose Aligment</option>
                  <option value="left">Left Aligned</option>
                  <option value="center">Center Aligned</option>
                </select>
              </div>
          </div>

          <div class="form-group">
            <label class="col-lg-4 control-label">Category<div class="pull-right mr5 ml10"><i class="glyphicons glyphicons-circle_question_mark"></i></div></label>
              <div class="col-lg-8">
                <select class="form-control" id="newCategory" name="">
                  <option value="0" selected="">Select a Category</option>
                  <optgroup label="Categories">
                  <option value="1">Community</option>
                  <option value="2">Customer Feedback</option>
                  <option value="3">Customer Satisfaction</option>
                  <option value="4">Demographics</option>
                  <option value="5">Education</option>
                  <option value="6">Events</option>
                  <option value="7">Healthcare</option>
                  <option value="8">Human Resources</option>
                  <option value="10">Industry Specific</option>
                  <option value="11">Just for Fun</option>
                  <option value="12">Market Research</option>
                  <option value="13">Non-Profit</option>
                  <option value="14">Political</option>
                  <option value="15">Other</option>
                  </optgroup>
                </select>
              </div>
          </div>

          </div>
        </div>
        <div class="panel-footer">
        <div class="form-horizontal text-right">
          <a href="#" class="btn btn-system mr5">Save</a><a href="#close" class="btn btn-default">Cancel</a>
        </div>
        </div>
      </div>
    </div>
</div>

<div id="addPageTitle" class="modalDialog">
    <div><a href="#close" title="Close" class="close">X</a>
      <div class="panel panel-dark">
        <div class="panel-heading">
          <span class="h-icon"><i class="glyphicon glyphicon-list-alt"></i></span><span class="panel-title text-white-dark pl10">Tambah Soalan Bancian</span>
        </div>
        <div class="panel-body">
        <div class="form-horizontal">
          <div class="form-group">
              <label class="col-lg-4 control-label">Nama Soalan<div class="pull-right mr5 ml10"><i class="glyphicons glyphicons-circle_question_mark"></i></div></label>
              <div class="col-lg-8">
                  <input type="text" id="inputStandard" class="form-control" placeholder="Beri nama soalan yang ingin dikemukakan.">
                  <div class="fs11 mt10">Anda boleh menulis sehingga 250 patah perkataan untuk satu soalan</div>
              </div>
          </div>

          <div class="form-group">
              <label class="col-lg-4 control-label">Text Soalan<div class="pull-right mr5 ml10"><i class="glyphicons glyphicons-circle_question_mark"></i></div></label>
              <div class="col-lg-8">
                <textarea rows="4" class="form-control"></textarea>
              </div>
          </div>

          </div>
        </div>
        <div class="panel-footer">
        <div class="form-horizontal text-right">
          <a href="#" class="btn btn-system mr5">Simpan</a><a href="#close" class="btn btn-default">Batal</a>
        </div>
        </div>
      </div>
    </div>
</div>

<div id="editQuestion" class="modalDialog">
    <div><a href="#close" title="Close" class="close">X</a>
      <div class="panel panel-dark">
        <div class="panel-heading">
          <span class="h-icon"><i class="glyphicon glyphicon-list-alt"></i></span><span class="panel-title text-white-dark pl10">Kemaskini Soalan</span>
        </div>

        <div class="tab-block">
          <ul class="nav nav-tabs tabs-bg">
            <li class="active">
              <a href="#tab10_1" data-toggle="tab">Tajuk Soalan</a>
            </li>
            <li>
              <a href="#tab10_2" data-toggle="tab">Jawapan Pilihan</a>
            </li>
          </ul>
          <div class="tab-content br-b-n">
            <div id="tab10_1" class="tab-pane active">

            <div class="form-horizontal">
              <div class="form-group">
                  <label class="col-lg-12"><span class="text-muted">Q1:</span> Text Soalan<div class="pull-right mr5 ml10"><i class="glyphicons glyphicons-circle_question_mark"></i></div></label>
                  <div class="col-lg-12">
                      <input type="text" id="inputStandard" class="form-control" value="Pendapatan perkapita keluarga orang asli">
                  </div>
              </div>

            </div>

            </div>
            <div id="tab10_2" class="tab-pane">
              <div class="col-md-12">
                <div class="checkbox-custom p10 bg-light dark br3">
                  <input type="checkbox" id="checkboxDefault3">
                  <label for="checkboxDefault3">Wajib mengemukakan jawapan bagi soalan ini</label>
                  <div class="pull-right mr5 ml10"><i class="glyphicons glyphicons-circle_question_mark"></i></div>
                </div>
                <div class="mb10 p10 bg-light light">
                  <label>Sistem akan memaparkan mesej berikut jika soalan tidak dijawab.</label>
                  <input type="text" id="inputStandard" class="form-control" placeholder="Soalan ini memerlukan jawapan">
                </div>
                <div class="mb10 p10 bg-light light">
                  <label>Jawapan yang memenuhi kriteria .</label>
                  <input type="text" id="inputStandard" class="form-control" placeholder="Pendapatan perlu lebih dari RM200 dan sekiranya tidak proses lain akan dikemukakan">
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="panel-footer">
        <div class="form-horizontal text-right">
          <a href="#" class="btn btn-system mr5">Simpan</a><a href="#close" class="btn btn-default">Batal</a>
        </div>
        </div>
      </div>
    </div>
</div>

<section id="content" class="animated fadeIn">
	<div class="row">
		<div class="col-sm-12 col-lg-12">
      <div class="panel panel-dark">
          <div class="panel-heading ">
           <i class="glyphicon glyphicon-list-alt"></i></span><span class="panel-title text-white-dark">Bina Soalan Baru</span>
          </div>
        <div class="panel-body">
          <div class="col-md-4">
            <div class="panel-group accordion accordion-lg mbn" id="accordion1">
            
            <div class="panel">
              <div class="panel-heading">
                <a class="accordion-toggle accordion-icon link-unstyled" data-toggle="collapse" data-parent="#accordion1" href="#accord2" aria-expanded="false">
                  Bank Soalan</a>
                <div class="pull-right mr5"><i class="glyphicons glyphicons-circle_question_mark"></i></div>
              </div>
              <div id="accord2" class="panel-collapse collapse in" aria-expanded="true">
                <div class="panel-body h-300 clearfix" style="overflow-y: scroll;">
                  <div class="form-group">
                    <input type="text" class="form-control pv5 h-30 br64" placeholder="Carian Soalan.." value="Carian Soalan..">
                  </div>
                  <div class="col-lg-10 pln mb20">
                  <select class="form-control">
                    <option selected="selected">[ Senarai Soalan ]</option>
                    <option>Ketua Isi Rumah</option>
                    <option>Isu Pendapatan</option>
                    <option>Insuran Orang Asli</option>
                    <option>Kependudukan Tempat Tinggal</option>
                  </select>
                  </div>
                  <div class="col-lg-2 mb10"><i class="glyphicons glyphicons-circle_question_mark"></i></div>
                  <div class="col-lg-12 bg-light darker mt5 pv10 h-80 mb10">Pendapatan perkapita keluarga orang asli<br></div>
                  <div class="col-lg-12 bg-light mt5 pv10 mb10">Jumlah kependudukan orang asli pada satu-satu kampung</div>
                  <div class="col-lg-12 bg-light mt5 pv10 mb10">Tahap kewangan keluarga orang asli?<br>
                    <div class="btn-group">
                      
                        <select class="form-control">
                          <option>Miskin Tegar</option>
                          <option>Miskin</option>
                          <option>Mudah Miskin</option>
                        </select>
                       
                    </div>
                  </div>
                  <div class="col-lg-12 bg-light mt5 pv10">Hasil pendapatan keluarga<br>
                    <div class="btn-group">
                      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Nyatakan hasil pendapatan
                        <span class="caret ml5"></span>
                      </button>
                      <ul class="dropdown-menu w250" role="menu">
                        <li>
                          <span class="ph10 fw600 text-system">Hasil Pendapatan Keluarga</span><i class="fa fa-check"></i>
                          <hr class="mv5">
                          <label class="col-md-12">Nyatakan :</label>
                          <div class="col-md-12">
                            <input type="text" id="inputStandard" class="form-control input-sm">
                          </div>
                          <div class="col-md-12 mt10">
                            <a href="#" class="btn btn-sm btn-system">Save</a>
                            <a href="#" class="btn btn-sm btn-default">Cancel</a>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
            <div class="panel">
              <div class="panel-heading">
                <a class="accordion-toggle accordion-icon link-unstyled collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accord1" aria-expanded="false">
                  Jawapan
                </a>
                <div class="pull-right mr5"><i class="glyphicons glyphicons-circle_question_mark"></i></div>
              </div>
              <div id="accord1" class="panel-collapse collapse" style="height: 0px;" aria-expanded="false">
                <div class="panel-body">
                  <div class="mb5 clearfix">
                  <div class="col-md-1 text-center pv3 ph5 bg-success">1</div><div class="col-md-11 pv3 ph5 bg-light dark"><span>Pendapatan perkapita keluarga</span></div>
                  </div>

                  <div class="mb5 clearfix">
                  <div class="col-md-1 text-center pv3 ph5 bg-success">2</div><div class="col-md-11 pv3 ph5 bg-light dark"><span>Jumlah kependudukan</span></div>
                  </div>
                  
                  <div class="mb5 clearfix">
                  <div class="col-md-1 text-center pv3 ph5 bg-success">3</div><div class="col-md-11 pv3 ph5 bg-light dark"><span>Tahap kewangan</span></div>
                  </div>

                  <div class="mb5 clearfix">
                  <div class="col-md-1 text-center pv3 ph5 bg-success">4</div><div class="col-md-11 pv3 ph5 bg-light dark"><span>Hasil pendapatan keluarga..</span></div>
                  </div>
                  

                </div>
              </div>
            </div>
            
          </div>
          </div>

        <!--   <div class="col-md-8 prn mb5 clearfix"><a target="_blank" href="previewtemplate" class="pull-right btn btn-default">Preview</a></div> -->
          <div class="col-md-8 pn br-a">
              <a href="#addLogo" class="addLogo show">
              <!-- <div class="p10"><i class="glyphicons glyphicons-picture va-m fs30 mr10 text-muted-lighter"></i><i class="fa fa-plus mr10"></i><span class="fw600">Add Logo</span></div></a> -->
              <a href="#addSurveyTitle" class="addLogo show">
              <div class="p20 bg-primary light"><span class="fs14 fw600 text-white">Soalan Kad Bancian</span><!-- <button class="btn btn-sm btn-system light pull-right"><span class="fa fa-plus mr10"></span>Tambah</button> --></div></a>
              <a href="#addPageTitle" class="addLogo show">
              <div class="p20 bg-light"><i class="fa fa-plus mr10"></i><span class="fs14 fw600">Tambah Soalan Bancian</span><button class="btn btn-sm btn-system light pull-right"><span class="fa fa-plus mr10"></span>Tambah</button></div></a>
                <div class="addLogo p20 clearfix">
                  <label class="col-lg-12">1. Pendapatan perkapita keluarga orang asli</label>
                  <div class="col-lg-10"><textarea rows="3" class="form-control"></textarea></div>
                  <div class="col-lg-12">
                    <div class="form-group pt10">
                    <a href="#editQuestion" class="btn btn-sm btn-system light"><span class="fa fa-pencil mr10"></span>Kemaskini</a>
                    <a href="#" class="btn btn-sm btn-default"><span class="fa fa-trash mr10"></span>Buang</a>
                    </div>
                  </div>
                </div>
                <div class="addLogo p20 clearfix">
                  <label class="col-lg-12">2. Jumlah kependudukan orang asli pada satu-satu kampung</label>
                  <div class="col-lg-10"><textarea rows="5" class="form-control"></textarea></div>
                  <div class="col-lg-12">
                    <div class="form-group pt10">
                    <a href="#editQuestion" class="btn btn-sm btn-system light"><span class="fa fa-pencil mr10"></span>Kemaskini</a>
                    <a href="#" class="btn btn-sm btn-default"><span class="fa fa-trash mr10"></span>Buang</a>
                    </div>
                  </div>
                </div>
                <div class="addLogo p20 clearfix">
                  <label class="col-lg-12">3. Tahap kewangan keluarga orang asli</label>
                  <div class="col-lg-10">
                    <div class="radio-custom mb5">
                      <input type="radio" id="radioExample3" name="radioExample">
                      <label for="radioExample3">Miskin Tegar</label>
                    </div>
                    <div class="radio-custom mb5">
                      <input type="radio" id="radioExample4" name="radioExample">
                      <label for="radioExample4">Miskin</label>
                    </div>
                    <div class="radio-custom mb5">
                      <input type="radio" id="radioExample5" name="radioExample">
                      <label for="radioExample5">Mudah Miskin</label>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group pt10">
                    <a href="#editQuestion" class="btn btn-sm btn-system light"><span class="fa fa-pencil mr10"></span>Kemaskini</a>
                    <a href="#" class="btn btn-sm btn-default"><span class="fa fa-trash mr10"></span>Buang</a>
                    </div>
                  </div>
                </div>
                <div class="addLogo p20 clearfix">
                  <label class="col-lg-12">4. Hasil Pendapatan Keluarga</label>
                  <div class="col-lg-10"><textarea rows="5" class="form-control"></textarea></div>
                  <div class="col-lg-12">
                    <div class="form-group pt10">
                    <a href="#editQuestion" class="btn btn-sm btn-system light"><span class="fa fa-pencil mr10"></span>Kemaskini</a>
                    <a href="#" class="btn btn-sm btn-default"><span class="fa fa-trash mr10"></span>Buang</a>
                    </div>
                  </div>
                </div>
              <div class="form-group mt10 text-center">
                <a href="#" class="btn btn-dark dark">Simpan</a>
              </div>
          </div>

        </div>
			</div>
		</div>
	</div>
</section>
<?php
Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/admin-tools/admin-forms/css/admin-forms.css');
Yii::app()->clientScript->registerScript(
    'survey_create',
    "
    $('.select2-single').select2();
    $('.select2').css({'width':'100%'});
    ",
CClientScript::POS_READY
);
?>