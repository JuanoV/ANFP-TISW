<?php
/* @var $this IntegraController */
/* @var $model Integra */

$this->breadcrumbs=array(
	// 'Torneos'=>array('//torneo/admin','id'=>$model->INT_torCorrel),
	// Torneo::model()->findByPk($model->INT_torCorrel)->TOR_nombre." ".Torneo::model()->findByPk($model->INT_torCorrel)->TOR_agno=>array('//torneo/view','id'=>$model->INT_torCorrel),
	'Tabla equipos'
);

// $this->menu=array(
// 	array('label'=>'Volver', 'url'=>array('//torneo/view','id'=>$model->INT_torCorrel)),
// );
$torneo= new Torneo();
$torneo=Torneo::model()->findByPk($model->INT_torCorrel);
?>

<?php echo BsHtml::pageHeader('Tabla'." ".'Equipos',$torneo->TOR_tipo." ".$torneo->TOR_nombre." ".$torneo->TOR_agno." ".Division::model()->findByPk($torneo->TOR_division)->DIV_nombre) ?>

<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'integra-grid',
	'dataProvider'=>$model->search(),
	// 'filter'=>$model,
	'type'=>BsHtml::GRID_TYPE_BORDERED,
	'columns'=>array(
		//'INT_correl',
		//'INT_torCorrel',
		array('name' =>'INT_equCorrel','value'=>'Equipo::model()->findByPk($data->INT_equCorrel)->EQU_nombre',),
		//'INT_equCorrel',
		'INT_puntaje',
		'INT_golesFavor',
		'INT_golesContra',
		'INT_golesDif',
		'INT_partidoGanado',
		'INT_partidoPerdido',
		'INT_partidoEmpatado',
		'INT_tarjetaAmarilla',
		'INT_tarjetaRojas',
		array(
			// 'class'=>'CButtonColumn',
			'class'=>'bootstrap.widgets.TbButtonColumn',
            'template'=>'{update}', //removed {view}
            // 'buttons'=>array(
            // 	'opciones' => array(
            // 		'label'=>'Opciones',
            // 		'url'=>'#',
            // 	)
            // 	,),
			
			//'template' => '{view}{update}',
		),
	),
)); ?>
