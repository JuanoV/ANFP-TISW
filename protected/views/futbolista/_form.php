<?php
/* @var $this FutbolistaController */
/* @var $model Futbolista */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
	'id'=>'torneo-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
        <p class="help-block">Campos con <span class="required">*</span> son obligatorios.</p>


	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'FUT_nombre'); ?>
		<?php echo $form->textField($model,'FUT_nombre',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'FUT_nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FUT_apellidoPat'); ?>
		<?php echo $form->textField($model,'FUT_apellidoPat',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'FUT_apellidoPat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FUT_apellidoMat'); ?>
		<?php echo $form->textField($model,'FUT_apellidoMat',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'FUT_apellidoMat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FUT_fechaNacimiento'); ?>
		<?php echo $form->textField($model,'FUT_fechaNacimiento'); ?>
		<?php echo $form->error($model,'FUT_fechaNacimiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->dropDownListControlGroup($model, 'FUT_nacionalidad', array(
        '1' => 'Afganistán', '2' => 'Albania', '3' => 'Argelia', '4' => 'Samoa Americana',
        '5' => 'Andorra', '6' => 'Angola', '7' => 'Anguilla', '8' => 'Antártida', '9' => 'Antigua y Barbuda', 
        '10' => 'Argentina', '11' => 'Armenia', '12' => 'Aruba', '13' => 'Australia', '14' => 'Austria',
        '15' => 'Azerbaiyán', '16' => 'Bahamas', '17' => 'Bahrein', '18' => 'Bangladesh', '19' => 'Barbados', 
        '20' => 'Bielorrusia', '21' => 'Bélgica', '22' => 'Belice', '23' => 'Benín', '24' => 'Bermudas', 
        '25' => 'Bután', '26' => 'Bolivia', '27' => 'Bosnia-Herzegovina', '28' => 'Botswana', '29' => 'Brasil', 
        '30' => 'Brunei Darussalam', '31' => 'Bulgaria', '32' => 'Burkina Faso', '33' => 'Burundi', '34' => 'Camboya',
        '35' => 'Camerún', '36' => 'Canadá', '37' => 'Cabo Verde', '38' => 'Islas Caimán', '39' => 'Repúblicas Centroafricana',
        '40' => 'Chad', '41' => 'Chile', '42' => 'China', '43' => 'Isla De Navidad, Isla Christmas', '44' => 'Islas Cocos', 
        '45' => 'Colombia', '46' => 'Comores', '47' => 'República Democrática del Congo', '48' => 'República del Congo', '49' => 'Islas Cook', 
        '50' => 'Costa Rica', '51' => 'Costa de Marfil', '52' => 'Croacia', '53' => 'Cuba',  '54' => 'Chipre', 
        '55' => 'República Checa', '56' => 'Dinamarca', '57' => 'Djibouti, Yibuti', '58' => 'Dominica', '59' => 'Dominicana, República', 
        '60' => 'Timor Oriental', '61' => 'Ecuador', '62' => 'Egipto', '63' => 'El Salvador', '64' => 'Guinea Ecuatorial', 
        '65' => 'Eritrea', '66' => 'Estonia', '67' => 'Etiopía', '68' => 'Islas Malvinas', '69' => 'Islas Feroe', 
        '70' => 'Fiyi', '71' => 'Finlandia', '72' => 'Francia', '73' => 'Guayana Francesa', '74' => 'Polinesia Francesa',
        '75' => 'Tierras Australes y Antárticas Francesas', '76' => 'Gabón', '77' => 'Gambia', '78' => 'Georgia', '79' => 'Alemania', 
        '80' => 'Ghana', '81' => 'Gibraltar', '82' => 'Gran Bretaña', '83' => 'Grecia', '84' => 'Groenlandia', 
        '85' => 'Granada', '86' => 'Guadalupe', '87' => 'Guam', '88' => 'Guatemala', '89' => 'República Guinea', 
        '90' => 'Guinea Bissau', '91' => 'Guyana', '92' => 'Haiti', '93' => 'Santa Sede, Vaticano, Ciudad del Vaticano', '94' => 'Honduras', 
        '95' => 'Hong Kong', '96' => 'Hungría', '97' => 'Islandia', '98' => 'India', '99' => 'Indonesia', 
        '100' => 'Irán', '101' => 'Iraq', '102' => 'Irlanda', '103' => 'Israel', '104' => 'Italia', 
        '105' => 'Jamaica', '106' => 'Japón', '107' => 'Jordania', '108' => 'Kazajstán', '109' => 'Kenia', 
        '110' => 'Kiribati', '111' => 'Corea del Norte', '112' => 'Corea del Sur', '113' => 'Kosovo', '114' => 'Kuwait', 
        '115' => 'Kirguistán', '116' => 'Laos; oficialmente: República Democrática Popular Lao', '117' => 'Letonia', '118' => 'Líbano', '119' => 'Lesotho', 
        '120' => 'Liberia', '121' => 'Libia', '122' => 'Liechtenstein', '123' => 'Lituania', '124' => 'Luxemburgo', 
        '125' => 'Macao', '126' => 'Macedonia', '127' => 'Madagascar', '128' => 'Malawi', '129' => 'Malasia', 
        '130' => 'Maldivas', '131' => 'Malí', '132' => 'Malta', '133' => 'Islas Marshall', '134' => 'Martinica', 
        '135' => 'Mauritania', '136' => 'Mauricio', '137' => 'Mayotte', '138' => 'México', '139' => 'Micronesia', 
        '140' => 'Moldavia', '141' => 'Mónaco', '142' => 'Mongolia', '143' => 'Montenegro', '144' => 'Montserrat', 
        '145' => 'Marruecos', '146' => 'Mozambique', '147' => 'Myanmar, Birmania', '148' => 'Namibia', '149' => 'Nauru',
        '150' => 'Nepal', '151' => 'Países Bajos, Holanda', '152' => 'Antillas Holandesas', '153' => 'Nueva Caledonia', '154' => 'Nueva Zelanda', 
        '155' => 'Nicaragua', '156' => 'Niger', '157' => 'Nigeria', '158' => 'Niue', '159' => 'Marianas del Norte', 
        '160' => 'Noruega', '161' => 'Omán', '162' => 'Pakistán', '163' => 'Palau', '164' => 'Territorios Palestinos', 
        '165' => 'Panamá', '166' => 'Papúa-Nueva Guinea', '167' => 'Paraguay', '168' => 'Perú', '169' => 'Filipinas', 
        '170' => 'Isla Pitcairn', '171' => 'Polonia', '172' => 'Portugal', '173' => 'Puerto Rico', '174' => 'Qatar', 
        '175' => 'Reunión', '176' => 'Rumanía', '177' => 'Federación Rusa', '178' => 'Ruanda', '179' => 'San Cristobal y Nevis', 
        '180' => 'Santa Lucía', '181' => 'San Vincente y Granadinas', '182' => 'Samoa', '183' => 'San Marino', '184' => 'Santo Tomé y Príncipe', 
        '185' => 'Arabia Saudita', '186' => 'Senegal', '187' => 'Serbia', '188' => 'Seychelles', '189' => 'Sierra Leona', 
        '190' => 'Singapur', '191' => 'Eslovaquia', '192' => 'Eslovenia', '193' => 'Islas Salomón', '194' => 'Somalia', 
        '195' => 'Sudáfrica', '196' => 'Sudán del Sur', '197' => 'España', '198' => 'Sri Lanka', '199' => 'Sudán', 
        '200' => 'Surinam', '201' => 'Swazilandia', '202' => 'Suecia', '203' => 'Suiza', '204' => 'Siria', 
        '205' => 'Taiwan', '206' => 'Tadjikistan', '207' => 'Tanzania', '208' => 'Tailandia', '209' => 'Tíbet', 
        '210' => 'Timor Oriental', '211' => 'Togo', '212' => 'Tokelau', '213' => 'Tonga', '214' => 'Trinidad y Tobago', 
        '215' => 'Túnez', '216' => 'Turquía', '217' => 'Turkmenistan', '218' => 'Islas Turcas y Caicos', '219' => 'Tuvalu', 
        '220' => 'Uganda', '221' => 'Ucrania', '222' => 'Emiratos Árabes Unidos', '223' => 'Reino Unido', '224' => 'Estados Unidos',
        '225' => 'Uruguay', '226' => 'Uzbekistán', '227' => 'Vanuatu', '228' => 'Ciudad del Vaticano', '229' => 'Venezuela', 
        '230' => 'Vietnam', '231' => 'Islas Virgenes Británicas', '232' => 'Islas Virgenes Americanas', '233' => 'Wallis y Futuna', '234' => 'Sáhara Occidental ', 
        '235' => 'Yemen', '236' => 'Zambia', '237' => 'Zimbabwe'), array('empty' => 'Seleccione País de Origen' ));  ?>
	</div>

	<div class="row">
		<?php echo $form->dropDownListControlGroup($model, 'FUT_estado', array(
        '1' => 'Habilitado', '2' => 'Deshabilitado'
        ), array('empty' => 'Seleccione Estado' ));  ?>
	</div>

	<div class="row">
		<?php echo $form->dropDownListControlGroup($model, 'FUT_estadoCivil', array(
        '1' => 'Soltero', '2' => 'Casado', '3' => 'Viudo', '4' => 'Separado'
        ), array('empty' => 'Seleccione Estado Civil' ));  ?>
	</div>	

	

	<div class="row buttons">
		 <?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>
</div>



<!-- 
'Afganistán',
'Albania',
'Argelia',
'Samoa Americana',
'Andorra',
'Angola',
'Anguilla',
'Antártida',
'Antigua y Barbuda',
'Argentina',
'Armenia',
'Aruba',
'Australia',
'Austria',
'Azerbaiyán',
'Bahamas',
'Bahrein',
'Bangladesh',
'Barbados',
'Bielorrusia',
'Bélgica',
'Belice',
'Benín',
'Bermudas',
'Bután',
'Bolivia',
'Bosnia-Herzegovina',
'Botswana',
'Brasil',
'Brunei Darussalam',
'Bulgaria',
'Burkina Faso',
'Burundi',
'Camboya',
'Camerún',
'Canadá',
'Cabo Verde',
'Islas Caimán',
'Repúblicas Centroafricana',
'Chad',
'Chile',
'China',
'Isla De Navidad, Isla Christmas',
'Islas Cocos',
'Colombia',
'Comores',
'República Democrática del Congo',
'República del Congo',
'Islas Cook',
'Costa Rica',
'Costa de Marfil',
'Croacia',
'Cuba',
'Chipre',
'República Checa',
'Dinamarca',
'Djibouti, Yibuti',
'Dominica',
'Dominicana, República',
'Timor Oriental',
'Ecuador',
'Egipto',
'El Salvador',
'Guinea Ecuatorial',
'Eritrea',
'Estonia',
'Etiopía',
'Islas Malvinas',
'Islas Feroe',
'Fiyi',
'Finlandia',
'Francia',
'Guayana Francesa',
'Polinesia Francesa',
'Tierras Australes y Antárticas Francesas',
'Gabón',
'Gambia',
'Georgia',
'Alemania',
'Ghana',
'Gibraltar',
'Gran Bretaña',
'Grecia',
'Groenlandia',
'Granada',
'Guadalupe',
'Guam',
'Guatemala',
'República Guinea',
'Guinea Bissau',
'Guyana',
'Santa Sede, Vaticano, Ciudad del Vaticano',
'Honduras',
'Hong Kong',
'Hungría',
'Islandia',
'India',
'Indonesia',
'Irán',
'Iraq',
'Irlanda',
'Israel',
'Italia',
'Jamaica',
'Japón',
'Jordania',
'Kazajstán',
'Kenia',
'Kiribati',
'Corea del Norte',
'Corea del Sur',
'Kosovo',
'Kuwait',
'Kirguistán',
'Laos; oficialmente: República Democrática Popular Lao',
'Letonia',
'Líbano',
'Lesotho',
'Liberia',
'Libia',
'Liechtenstein',
'Lituania',
'Luxemburgo',
'Macao',
'Macedonia',
'Madagascar',
'Malawi',
'Malasia',
'Maldivas',
'Malí',
'Malta',
'Islas Marshall',
'Martinica',
'Mauritania',
'Mauricio',
'Mayotte',
'México',
'Micronesia',
'Moldavia',
'Mónaco',
'Mongolia',
'Montenegro',
'Montserrat',
'Marruecos',
'Mozambique',
'Myanmar, Birmania',
'Namibia',
'Nauru',
'Nepal',
'Países Bajos, Holanda',
'Antillas Holandesas',
'Nueva Caledonia',
'Nueva Zelanda',
'Nicaragua',
'Niger',
'Nigeria',
'Niue',
'Marianas del Norte',
'Noruega',
'Omán',
'Pakistán',
'Palau',
'Territorios Palestinos',
'Panamá',
'Papúa-Nueva Guinea',
'Paraguay',
'Perú',
'Filipinas',
'Isla Pitcairn',
'Polonia',
'Portugal',
'Puerto Rico',
'Qatar',
'Reunión',
'Rumanía',
'Federación Rusa',
'Ruanda',
'San Cristobal y Nevis',
'Santa Lucía',
'San Vincente y Granadinas',
'Samoa',
'San Marino',
'Santo Tomé y Príncipe',
'Arabia Saudita',
'Senegal',
'Serbia',
'Seychelles',
'Sierra Leona',
'Singapur',
'Eslovaquia',
'Eslovenia',
'Islas Salomón',
'Somalia',
'Sudáfrica',
'Sudán del Sur',
'España',
'Sri Lanka',
'Sudán',
'Surinam',
'Swazilandia',
'Suecia',
'Suiza',
'Siria',
'Taiwan',
'Tadjikistan',
'Tanzania',
'Tailandia',
'Tíbet',
'Timor Oriental',
'Togo',
'Tokelau',
'Tonga',
'Trinidad y Tobago',
'Túnez',
'Turquía',
'Turkmenistan',
'Islas Turcas y Caicos',
'Tuvalu',
'Uganda',
'Ucrania',
'Emiratos Árabes Unidos',
'Reino Unido',
'Estados Unidos',
'Uruguay',
'Uzbekistán',
'Vanuatu',
'Ciudad del Vaticano',
'Venezuela',
'Vietnam',
'Islas Virgenes Británicas',
'Islas Virgenes Americanas',
'Wallis y Futuna',
'Sáhara Occidental',
'Yemen',
'Zambia',
'Zimbabwe' -->