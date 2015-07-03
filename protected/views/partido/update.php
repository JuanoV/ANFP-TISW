<?php
/* @var $this PartidoController */
/* @var $model Partido */

$this->breadcrumbs=array(
	// 'Partidos',
	'Actualizar',
);

$this->menu=array(
	// array('label'=>'Cancelar', 'url'=>array('index')),
);
?>

<h1>Actualizar Partido <?php echo $model->PAR_correl; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>