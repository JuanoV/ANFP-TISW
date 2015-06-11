<?php
/* @var $this PartidoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Partidos',
);

// $this->menu=array(
// 	array('label'=>'Create Partido', 'url'=>array('create')),
// 	array('label'=>'Manage Partido', 'url'=>array('admin')),
// );
?>

<h1>Partidos</h1>

<?php
// echo BsHtml::buttonToolbar(array(
//     array(
//         'items' => array(
//             array(
//                 //'icon' => '<img src="'.Yii::app()->request->baseUrl.'/images/futbol.ico">',
//                 'label'=>'Fechas',
//                 'color' => BsHtml::BUTTON_COLOR_INFO,
//                 //'imageUrl'=>'<img src="'.Yii::app()->request->baseUrl.'/images/futbol.ico">'
//                 //'template'=>'<img src="'.Yii::app()->request->baseUrl.'/images/futbol.ico">'
//                 //'label'=>'<img src="'.Yii::app()->request->baseUrl.'/images/AAA.ico">'


//             ),
//             array(
//                 'label' => '1',
//                 'url' =>array('admin','id'=>'1'),
//                 'type' => BsHtml::BUTTON_TYPE_LINK
//                 //'color' => BsHtml::BUTTON_COLOR_INFO
//                 ),
//             array(
//                 'label' => '2',
//                 'url' =>array('//partido/admin','id'=>'2'),
//                 'type' => BsHtml::BUTTON_TYPE_LINK
//                 //'color' => BsHtml::BUTTON_COLOR_INFO
//             ),
//             array(
//                 'label' => '3',
//                 'url' =>array('//partido/admin','id'=>'3'),
//                 'type' => BsHtml::BUTTON_TYPE_LINK
//                 //'color' => BsHtml::BUTTON_COLOR_INFO
//             ),
//             array(
//                 'label' => '4',
//                 'url' =>array('//partido/admin','id'=>'4'),
//                 'type' => BsHtml::BUTTON_TYPE_LINK
//                 //'color' => BsHtml::BUTTON_COLOR_INFO
//             ),
//             array(
//                 'label' => '5',
//                 'url' =>array('//partido/admin','id'=>'5'),
//                 'type' => BsHtml::BUTTON_TYPE_LINK
//                 //'color' => BsHtml::BUTTON_COLOR_INFO
//             ),
//             array(
//                 'label' => '6',
//                 'url' =>array('//partido/admin','id'=>'6'),
//                 'type' => BsHtml::BUTTON_TYPE_LINK
//                 //'color' => BsHtml::BUTTON_COLOR_INFO
//             ),
//             array(
//                 'label' => '7',
//                 'url' =>array('//partido/admin','id'=>'7'),
//                 'type' => BsHtml::BUTTON_TYPE_LINK
//                 //'color' => BsHtml::BUTTON_COLOR_INFO
//             ),
//             array(
//                 'label' => '8',
//                 'url' =>array('//partido/admin','id'=>'8'),
//                 'type' => BsHtml::BUTTON_TYPE_LINK
//                 //'color' => BsHtml::BUTTON_COLOR_INFO
//                 ),
//             array(
//                 'label' => '9',
//                 'url' =>array('//partido/admin','id'=>'9'),
//                 'type' => BsHtml::BUTTON_TYPE_LINK
//                 //'color' => BsHtml::BUTTON_COLOR_INFO
//             ),
//             array(
//                 'label' => '10',
//                 'url' =>array('//partido/admin','id'=>'10'),
//                 'type' => BsHtml::BUTTON_TYPE_LINK
//                 //'color' => BsHtml::BUTTON_COLOR_INFO
//             ),
//             array(
//                 'label' => '11',
//                 'url' =>array('//partido/admin','id'=>'11'),
//                 'type' => BsHtml::BUTTON_TYPE_LINK
//                 //'color' => BsHtml::BUTTON_COLOR_INFO
//             ),
//             array(
//                 'label' => '12',
//                 'url' =>array('//partido/admin','id'=>'12'),
//                 'type' => BsHtml::BUTTON_TYPE_LINK
//                 //'color' => BsHtml::BUTTON_COLOR_INFO
//             ),
//             array(
//                 'label' => '13',
//                 'url' =>array('//partido/admin','id'=>'13'),
//                 'type' => BsHtml::BUTTON_TYPE_LINK
//                 //'color' => BsHtml::BUTTON_COLOR_INFO
//             ),
//             array(
//                 'label' => '14',
//                 'url' =>array('//partido/admin','id'=>'14'),
//                 'type' => BsHtml::BUTTON_TYPE_LINK
//                 //'color' => BsHtml::BUTTON_COLOR_INFO
//             ),
//             array(
//                 'label' => '15',
//                 'url' =>array('//partido/admin','id'=>'15'),
//                 'type' => BsHtml::BUTTON_TYPE_LINK
//                 //'color' => BsHtml::BUTTON_COLOR_INFO
//             ),
//             array(
//                 'label' => '16',
//                 'url' =>array('//partido/admin','id'=>'16'),
//                 'type' => BsHtml::BUTTON_TYPE_LINK
//                 //'color' => BsHtml::BUTTON_COLOR_INFO
//             ),
//             array(
//                 'label' => '17',
//                 'url' =>array('//partido/admin','id'=>'17'),
//                 'type' => BsHtml::BUTTON_TYPE_LINK
//                 //'color' => BsHtml::BUTTON_COLOR_INFO
//             ),
//            /* array(
//             'own' => BsHtml::ajaxButton('own', Yii::app()->createAbsoluteUrl('site/ajaxTest'), array(
//                 'cache' => true,
//                 'data' => array(
//                     'message' => 'clicked the Ajaxbutton from the buttongroup'
//                 ),
//                 'type' => 'POST',
//                 'success' => 'js:function(data){
//                             console.log(data);
//                             $(".modal-body").html(data);
//                             $("#demo_modal").modal("show");
//                         }'
//                 ), array(
//                 'icon' => BsHtml::GLYPHICON_BELL
//                 ))
//             )*/
//         )
//     )
// ), array(
//     'size' => BsHtml::BUTTON_SIZE_MINI
//     //'justified' => true
// ));
?>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
