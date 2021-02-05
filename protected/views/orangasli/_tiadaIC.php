<label class="alert alert-info alert-sm alert-border-left light alert-dismissable fontwn font2">
	<a class="glyphicon glyphicon-exclamation-sign mr10"></a> Tiada Orang Asli yang didaftarkan dengan Kad Pengenalan Berikut, Sila isi borang di bawah untuk pendaftaran <a>Orang Asli Baru</a>
</label>

<div class="form-group ml10">

<span class="btn btn-primary daftarsendiri-button">Pendaftaran Persendirian</span>
<span class="btn btn-primary daftarkeluarga-button">Pendaftaran Keluarga</span>

</div>

<div class="daftarsendiri-form" style="display:none">
	<?php $this->renderPartial('_formSendiri', array('model'=>$model)); ?>
</div>

<div class="daftarkeluarga-form" style="display:none">

	<?php $this->renderPartial('_formKeluarga' ,array('model'=>$model)); ?>
	
</div>
