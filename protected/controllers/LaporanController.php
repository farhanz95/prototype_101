<?php

class LaporanController extends Controller
{
	public function actionIndex()
	{
		$currentYear = date('Y');
		$yearFrom  = 2010;
		$yearsRange = range($yearFrom, $currentYear);
		$year = array_combine($yearsRange, $yearsRange);
		$this->render('index', array('year'=>$year,'yearFrom'=>$yearFrom));
	}

	public function actionLaporan_gis()
	{
		$this->render('laporan_gis');
	}
			
	public function actionUtama()
	{
		$currentYear = date('Y');
		$yearFrom  = 2010;
		$yearsRange = range($yearFrom, $currentYear);
		$year = array_combine($yearsRange, $yearsRange);
		$this->render('utama', array('year'=>$year,'yearFrom'=>$yearFrom));
	}

}

?>
