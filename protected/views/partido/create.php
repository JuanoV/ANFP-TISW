<?php
/* @var $this PartidoController */
/* @var $model Partido */

$this->breadcrumbs=array(
	'Registrar',
);

$this->menu=array(
	array('label'=>'Cancelar', 'url'=>array('site/index')),
);
?>

<?php echo BsHtml::pageHeader('Registrar','Partido') ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>