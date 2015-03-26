<?php
/* @var $this AreaController */
/* @var $model Area */

$this->breadcrumbs=array(
	'Areas'
);

$this->menu=array(
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Agregar Area', 'url'=>array('create')),
);
?>

<?php echo BsHtml::pageHeader('Administrar','Areas') ?>
<div class="panel panel-default">
    <div class="panel-body">
        <?php $this->widget('bootstrap.widgets.BsGridView',array(
			'id'=>'antecedentes-grid',
			'dataProvider'=>$model->search(),
			'filter'=>$model,
			'type'=>BsHtml::GRID_TYPE_BORDERED,
			'columns'=>array(
		//'are_correl',
		'are_nombre',
		'are_descripcion',
		array(
			'class'=>'CButtonColumn',
			'template' => '{view}{update}',
		),
),
        )); ?>
    </div>
</div>