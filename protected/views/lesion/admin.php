<?php
/* @var $this LesionController */
/* @var $model Lesion */

$modelo= new Futbolista;
$modelo->FUT_correl=$_GET['id'];
$modelo=Futbolista::model()->findByPk($modelo->FUT_correl);

$this->breadcrumbs=array(
	'Futbolista'=>array('futbolista/admin'),
	'Lesiones',
);


$this->menu=array(
	//array('label'=>'Lista de Lesiones', 'url'=>array('index')),
	
	array('label'=>'Agregar Lesión', 'url'=>array('create','id'=>$modelo->FUT_correl)),
	array('label'=>'Volver', 'url'=>array('futbolista/admin')),
);


?>

<?php echo BsHtml::pageHeader('Lesiones '.$modelo->FUT_nombre." ".$modelo->FUT_apellidoPat) ?>


<?php $this->widget('bootstrap.widgets.BsGridView', array(
	'id'=>'lesion-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'type'=>BsHtml::GRID_TYPE_BORDERED,
	'columns'=>array(
		//'LES_correl',
		//'LES_futCorrel',
		//array('name'=>'LES_futCorrel',
			//'value'=>'Lesion::model()->findByAttributes($data->LES_futCorrel)->FUT_nombre'),
		'LES_glosa',
		'LES_fecha',
		'LES_descripcion',
		'LES_tiempoReposo',
		array(
			'class'=>'CButtonColumn',
			'template' => '{update} {delete}',
		),
	),
)); ?>
