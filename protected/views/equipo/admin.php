<?php
/* @var $this EquipoController */
/* @var $model Equipo */

$this->breadcrumbs=array(
	'Equipos'
);

$this->menu=array(
	array('label'=>'Registrar Equipo', 'url'=>array('create'), 'visible'=>!Yii::app()->user->isGuest),
);

?>

<?php echo BsHtml::pageHeader('Administrar','Equipos') ?>

<?php $this->widget('bootstrap.widgets.BsGridView', array(
	'id'=>'equipo-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'type'=>BsHtml::GRID_TYPE_BORDERED,
	'columns'=>array(
		//'EQU_correl',
		'EQU_nombre',
		'EQU_presidente',
		'EQU_direccionClub',
		'EQU_sitio',
		'EQU_telefono',
		/*
		'EQU_logo',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
            'template'=>'{update}{delete}',
		),
	),
)); ?>
