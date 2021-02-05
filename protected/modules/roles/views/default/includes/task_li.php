<?php 
    $this->widget('zii.widgets.grid.CGridView', array(
        'id'=>'tasks-grid',
        'dataProvider'=>$itemchildren->operation_search($authitem->name),
        'filter'=>$itemchildren,
        'summaryText'=>'Paparan {start} hingga {end} dari {count} keseluruhan',
        'columns'=>array(
            array(
                'header'=>'Bil',
                'class'=>'CounterColumn',
                'htmlOptions'=>array('style'=>'text-align:center', 'width'=>'5%')
            ),
            array(
                'name'=>'child',
                'header'=>'Nama Tugasan',
            ),
            array(
                'class'=>'CButtonColumn',
                'afterDelete'=>'function(link,success,data){if(success)update_tasks("'.Yii::app()->controller->createUrl("/roles/default/reloadtask", array("id"=>$authitem->name)).'");}',
                'template'=>'{delete}',
                'buttons'=>array(
                    'delete' => array(
                        'url'=>'Yii::app()->controller->createUrl("/roles/default/deletetask", array("id"=>$data->child, "role"=>$data->parent))',
                        ),
                    ),
                ),
            ),
        )
    ); 
?>