<?php
/* @var $this TecnicoController */
/* @var $model Tecnico */

$this->breadcrumbs=array(
	'Técnicos'=>array('admin'),
	$model->TEC_nombre." ".$model->TEC_apellidoPat=>array('admin','id'=>$model->TEC_correl),
	'Actualizar',
);

$this->menu=array(
	//array('label'=>'List Tecnico', 'url'=>array('index')),
	//array('label'=>'Create Tecnico', 'url'=>array('create')),
	//array('label'=>'View Tecnico', 'url'=>array('view', 'id'=>$model->TEC_correl)),
	array('label'=>'Volver', 'url'=>array('admin')),
);
?>

<h1>Editar Técnico <?php echo $model->TEC_nombre." ".$model->TEC_apellidoPat; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>