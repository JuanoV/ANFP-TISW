<?php
/* @var $this GolController */
/* @var $model Gol */

$this->breadcrumbs=array(
	'Gols'=>array('index'),
	$model->GOL_correl,
);

$this->menu=array(
	array('label'=>'List Gol', 'url'=>array('index')),
	array('label'=>'Create Gol', 'url'=>array('create')),
	array('label'=>'Update Gol', 'url'=>array('update', 'id'=>$model->GOL_correl)),
	array('label'=>'Delete Gol', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->GOL_correl),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Gol', 'url'=>array('admin')),
);
?>

<h1>View Gol #<?php echo $model->GOL_correl; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'GOL_correl',
		'GOL_minuto',
		'GOL_asistente',
		'GOL_futCorrel',
		'GOL_parCorrel',
	),
)); ?>
