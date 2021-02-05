<?php

class ReportController extends Controller
{
	public function actionIndex()
	{
		$currentYear = date('Y');
		$yearFrom  = 2010;
		$yearsRange = range($yearFrom, $currentYear);
		$year = array_combine($yearsRange, $yearsRange);


		$this->render('index', array('year'=>$year,'yearFrom'=>$yearFrom));
	}
}

?>