<?php
/* @var $this LesionController */
/* @var $model Lesion */

$modelo= new Futbolista;
$model->LES_correl=$_GET['id'];
$model=Lesion::model()->findByPk($model->LES_correl);
$modelo=Futbolista::model()->findByPk($model->LES_futCorrel);

$this->breadcrumbs=array(
	'Futbolista'=>array('futbolista/admin'),
	$modelo->FUT_nombre." ".$modelo->FUT_apellidoPat=>array('futbolista/admin','id'=>$modelo->FUT_correl),
	'Lesiones'=>array('admin','id'=>$modelo->FUT_correl),
	$model->LES_fecha=>array('admin','id'=>$model->LES_correl),
	'Actualizar',
);


$this->menu=array(
	//array('label'=>'Lista de Lesiones', 'url'=>array('index')),
	//array('label'=>'Agregar Lesión', 'url'=>array('create')),
	//array('label'=>'Detalle Lesión', 'url'=>array('view', 'id'=>$model->LES_correl)),
	 array('label'=>'Volver', 'url'=>array('admin','id'=>$modelo->FUT_correl)),
);
?>

<h1>Actualizar Lesión</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>