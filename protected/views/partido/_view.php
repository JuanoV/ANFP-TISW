<?php 
//echo $_GET["id"]."<br>";
// var_dump($par);
// die();
 ?>

<?php if ($data->PAR_fecha==$_GET["id"]) {?>


<?php  
    $part= Participa::model()->findAllByAttributes(array('PART_parCorrel'=>$data->PAR_correl));
    $equipo1=Equipo::model()->findByPk($part[0]->PART_equCorrel);
    $equipo2=Equipo::model()->findByPk($part[1]->PART_equCorrel);
?>


<div class="parent">
    <table style="width:100%">
    <tr>
        <td>
             <center><h3><b><?php echo $equipo1->EQU_nombre ?></b><br></h3></center>
        </td>
        <td><center>
            <?php 
                echo BsHtml::buttonToolbar(array(
                    array(
                        'items' => array(
                            array(
                            'label'=>'Editar',
                            'color' => BsHtml::BUTTON_COLOR_DANGER,
                            'url' =>array('admin','id'=>$data->PAR_correl),
                             ),
                        ),
                    )
                )
            )
            ?>
        </center>
        </td>
        <td>
             <center><h3><b><?php echo $equipo2->EQU_nombre ?></b><br></h3></center>
        </td>
    </tr>
    <tr>
        <td width="40%">
            <center>
                <?php  echo '<img src="'.Yii::app()->request->baseUrl.'/images/'.$equipo1->EQU_correl.'.png" width="30%">';?>
            </center>
        </td>
        <td width="20%">
            <center>
                <b><h1><?php echo $part[0]->PART_goles ?>
                <?php  echo '<img src="'.Yii::app()->request->baseUrl.'/images/versus.ico" width="30%">';?>
                <?php echo $part[1]->PART_goles ?></h1></b>
            </center>
            <center><h1><?php echo $data->PAR_programacion ?></h1></center>
        </td>
        <td width="40%">
            <center>
                <?php  echo '<img src="'.Yii::app()->request->baseUrl.'/images/'.$equipo2->EQU_correl.'.png" width="30%"';?>
            </center>
        </td>
    </tr>
    </table>
</div>
<?php } ?>