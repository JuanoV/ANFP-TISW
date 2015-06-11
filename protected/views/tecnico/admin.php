<?php
/* @var $this TecnicoController */
/* @var $model Tecnico */

$this->breadcrumbs=array(	
	'Técnicos',
);

$this->menu=array(
	//array('label'=>'List Tecnico', 'url'=>array('index')),
	array('label'=>'Registrar Técnico', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tecnico-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Técnicos</h1>



<?php $this->widget('bootstrap.widgets.BsGridView', array(
	'id'=>'tecnico-grid',
	'dataProvider'=>$model->search(),
	'type'=>BsHtml::GRID_TYPE_BORDERED,
	'filter'=>$model,
	'columns'=>array(
		//'TEC_correl',
		'TEC_nombre',
		'TEC_apellidoPat',
		'TEC_apellidoMat',
		'TEC_fechaNac',
		'TEC_nacionalidad',
		array(
			'class'=>'CButtonColumn',
			'template' => '{update} {delete}',
		),
	),
)); ?>
