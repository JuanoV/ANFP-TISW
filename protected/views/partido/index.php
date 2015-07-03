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
$var=$_GET['id2'];
echo BsHtml::buttonToolbar(array(
    array(
        'items' => array(
            array(
                'label'=>'Fechas',
                'color' => BsHtml::BUTTON_COLOR_INFO,
            ),
            array(
                'label' => '1',
                'url' =>array('','id'=>'1','id2'=>$var),
				'type' => BsHtml::BUTTON_TYPE_LINK
                ),
            array(
                'label' => '2',
                'url' =>array('','id'=>'2','id2'=>$var),
                'type' => BsHtml::BUTTON_TYPE_LINK
            ),
            array(
                'label' => '3',
                'url' =>array('','id'=>'3','id2'=>$var),
                'type' => BsHtml::BUTTON_TYPE_LINK
            ),
            array(
                'label' => '4',
                'url' =>array('','id'=>'4','id2'=>$var),
                'type' => BsHtml::BUTTON_TYPE_LINK
            ),
            array(
                'label' => '5',
                'url' =>array('','id'=>'5','id2'=>$var),
                'type' => BsHtml::BUTTON_TYPE_LINK
            ),
            array(
                'label' => '6',
                'url' =>array('','id'=>'6','id2'=>$var),
                'type' => BsHtml::BUTTON_TYPE_LINK
            ),
            array(
                'label' => '7',
                'url' =>array('','id'=>'7','id2'=>$var),
                'type' => BsHtml::BUTTON_TYPE_LINK
            ),
            array(
                'label' => '8',
                'url' =>array('','id'=>'8','id2'=>$var),
                'type' => BsHtml::BUTTON_TYPE_LINK
                ),
            array(
                'label' => '9',
                'url' =>array('','id'=>'9','id2'=>$var),
                'type' => BsHtml::BUTTON_TYPE_LINK
            ),
            array(
                'label' => '10',
                'url' =>array('','id'=>'10','id2'=>$var),
                 'type' => BsHtml::BUTTON_TYPE_LINK
            ),
            array(
                'label' => '11',
                'url' =>array('','id'=>'11','id2'=>$var),
                 'type' => BsHtml::BUTTON_TYPE_LINK
            ),
            array(
                'label' => '12',
                'url' =>array('','id'=>'12','id2'=>$var),
                 'type' => BsHtml::BUTTON_TYPE_LINK
            ),
            array(
                'label' => '13',
                'url' =>array('','id'=>'13','id2'=>$var),
                 'type' => BsHtml::BUTTON_TYPE_LINK
            ),
            array(
                'label' => '14',
                'url' =>array('','id'=>'14','id2'=>$var),
                 'type' => BsHtml::BUTTON_TYPE_LINK
            ),
            array(
                'label' => '15',
                'url' =>array('','id'=>'15','id2'=>$var),
                 'type' => BsHtml::BUTTON_TYPE_LINK
            ),
            array(
                'label' => '16',
                'url' =>array('','id'=>'16','id2'=>$var),
                 'type' => BsHtml::BUTTON_TYPE_LINK
            ),
            array(
                'label' => '17',
                'url' =>array('','id'=>'17','id2'=>$var),
                 'type' => BsHtml::BUTTON_TYPE_LINK
            ),
        )
    )
), array(
    'size' => BsHtml::BUTTON_SIZE_MINI,
    'justified' => true
));
echo BsHtml::buttonToolbar(array(
    array(
        'items' => array(
        	array(
                'label' => '18',
                'url' =>array('','id'=>'18','id2'=>$var),
                 'type' => BsHtml::BUTTON_TYPE_LINK
            ),
            array(
                'label' => '19',
                'url' =>array('','id'=>'19','id2'=>$var),
                 'type' => BsHtml::BUTTON_TYPE_LINK
            ),
            array(
                'label' => '20',
                'url' =>array('','id'=>'20','id2'=>$var),
                 'type' => BsHtml::BUTTON_TYPE_LINK
            ),
            array(
                'label' => '21',
                'url' =>array('','id'=>'21','id2'=>$var),
                 'type' => BsHtml::BUTTON_TYPE_LINK
            ),
            array(
                'label' => '22',
                'url' =>array('','id'=>'22','id2'=>$var),
                 'type' => BsHtml::BUTTON_TYPE_LINK
            ),
            array(
                'label' => '23',
                'url' =>array('','id'=>'23','id2'=>$var),
                 'type' => BsHtml::BUTTON_TYPE_LINK
            ),
            array(
                'label' => '24',
                'url' =>array('','id'=>'24','id2'=>$var),
                 'type' => BsHtml::BUTTON_TYPE_LINK
            ),
            array(
                'label' => '25',
                'url' =>array('','id'=>'25','id2'=>$var),
                 'type' => BsHtml::BUTTON_TYPE_LINK
            ),
            array(
                'label' => '26',
                'url' =>array('','id'=>'26','id2'=>$var),
                 'type' => BsHtml::BUTTON_TYPE_LINK
            ),
            array(
                'label' => '27',
                'url' =>array('','id'=>'27','id2'=>$var),
                 'type' => BsHtml::BUTTON_TYPE_LINK
            ),
            array(
                'label' => '28',
                'url' =>array('','id'=>'28','id2'=>$var),
                 'type' => BsHtml::BUTTON_TYPE_LINK
            ),
            array(
                'label' => '29',
                'url' =>array('','id'=>'29','id2'=>$var),
                 'type' => BsHtml::BUTTON_TYPE_LINK
            ),
            array(
                'label' => '30',
                'url' =>array('','id'=>'30','id2'=>$var),
                 'type' => BsHtml::BUTTON_TYPE_LINK
            ),
            array(
                'label' => '31',
                'url' =>array('','id'=>'31','id2'=>$var),
                 'type' => BsHtml::BUTTON_TYPE_LINK
            ),
            array(
                'label' => '32',
                'url' =>array('','id'=>'32','id2'=>$var),
                 'type' => BsHtml::BUTTON_TYPE_LINK
            ),
            array(
                'label' => '33',
                'url' =>array('','id'=>'33','id2'=>$var),
                 'type' => BsHtml::BUTTON_TYPE_LINK
            ),
            array(
                'label' => '34',
                'url' =>array('','id'=>'34','id2'=>$var),
                 'type' => BsHtml::BUTTON_TYPE_LINK
            ),
        )
    )
), array(
    'size' => BsHtml::BUTTON_SIZE_MINI,
    'justified' => true
));
$torneos=Torneo::model()->findAllByAttributes(array('TOR_division'=>$var,'TOR_agno'=>DATE('Y')));
$par=array_merge(Partido::model()->findAllByAttributes(array('PAR_torCorrel'=>$torneos[0]->TOR_correl)),Partido::model()->findAllByAttributes(array('PAR_torCorrel'=>$torneos[1]->TOR_correl)));
?>

<?php
	foreach ($par as $data) {
		$this->renderPartial('_view',array(
	'data'=>$data));
	}
	?>