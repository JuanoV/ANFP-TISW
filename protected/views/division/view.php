<?php
/* @var $this DivisionController */
/* @var $model Division */

$this->breadcrumbs=array(
	'Divisions'=>array('index'),
	$model->DIV_correl,
);

$this->menu=array(
	array('label'=>'List Division', 'url'=>array('index')),
	array('label'=>'Create Division', 'url'=>array('create')),
	array('label'=>'Update Division', 'url'=>array('update', 'id'=>$model->DIV_correl)),
	array('label'=>'Delete Division', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->DIV_correl),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Division', 'url'=>array('admin')),
);
?>

<h1>View Division #<?php echo $model->DIV_correl; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'DIV_correl',
		'DIV_nombre',
		'DIV_posicion',
	),
)); ?>
