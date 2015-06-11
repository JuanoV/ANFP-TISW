<?php
/* @var $this PartidoController */
/* @var $model Partido */

$this->breadcrumbs=array(
	'Partidos'
);

// $this->menu=array(
// 	array('label'=>'Temporada Actual', 'url'=>array('index')),
// 	array('label'=>'Registrar Partido', 'url'=>array('create')),
// );
?>
<?php echo BsHtml::pageHeader('Administrar','Partidos') ?>


<?php $this->widget('bootstrap.widgets.BsGridView', array(
	'id'=>'partido-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'type'=>BsHtml::GRID_TYPE_BORDERED,
	'columns'=>array(
		//'PAR_correl',
		// array('name'=>'PAR_estCorrel',
		// 	'value'=>'Estadio::model()->findByPk($data->PAR_estCorrel)->EST_nombre'
		// 	),
		// 'PAR_programacion',
		'PAR_hora',
		'PAR_fecha',
		'PAR_asistencia',
		'PAR_recaudo',
		'PAR_estado',
		/*
		'PAR_tiempo',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
