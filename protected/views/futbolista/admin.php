<?php
/* @var $this FutbolistaController */
/* @var $model Futbolista */

$this->breadcrumbs=array(
	'Futbolistas'
);

$this->menu=array(
	//array('label'=>'Lista de Futbolistas', 'url'=>array('index')),
	array('label'=>'Agregar Futbolista', 'url'=>array('create')),
);


?>

<h1>Administrar Futbolistas</h1>


<?php $this->widget('bootstrap.widgets.BsGridView', array(
	'id'=>'futbolista-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'type'=>BsHtml::GRID_TYPE_BORDERED,
	'columns'=>array(
		//'FUT_correl',
		'FUT_nombre',
		'FUT_apellidoPat',
		'FUT_apellidoMat',
		'FUT_fechaNacimiento',
		'FUT_nacionalidad',		
		'FUT_estado',
		'FUT_estadoCivil',
		array(
			    'class'=>'CButtonColumn',
                'template' => ' {lesion} {indexLes} {update} {delete} ',
            	'buttons'=>array(                       			
            		'lesion' => array(
                        'label'=>'Agregar Lesión', 'url'=>"CHtml::normalizeUrl(array('lesion/create', 'id'=>\$data->FUT_correl))",
                        'imageUrl'=>Yii::app()->request->baseUrl.'/images/lesion.ico', 
                        'options' => array('class'=>'lesion'),
                		),
            		'indexLes' => array(
            			'label' => 'Indice de Lesiones', 'url'=>"CHtml::normalizeUrl(array('lesion/admin','id'=>\$data->FUT_correl))",
            			'imageUrl' =>Yii::app()->request->baseUrl.'/images/index lesiones.ico',
            			'options' => array('class'=>'indexLes'),
            			),
        		),
    		),
		),
	)
); ?>
