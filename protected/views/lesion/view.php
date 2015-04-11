<?php
/* @var $this LesionController */
/* @var $model Lesion */

$this->breadcrumbs=array(
	'Lesions'=>array('index'),
	$model->LES_correl,
);

$this->menu=array(
	//array('label'=>'Lista de Lesiones', 'url'=>array('index')),
	array('label'=>'Registrar Lesión', 'url'=>array('create')),
	array('label'=>'Actualizar Lesión', 'url'=>array('update', 'id'=>$model->LES_correl)),
	array('label'=>'Eliminar Lesión', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->LES_correl),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Buscar Lesión', 'url'=>array('admin')),
);
?>

<h1>Detalle Lesiones </h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'LES_correl',
		//'LES_futCorrel',
		'LES_glosa',
		'LES_fecha',
		'LES_descripcion',
		'LES_tiempoReposo',
	),
)); ?>
