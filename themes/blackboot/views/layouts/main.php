<?php
	Yii::app()->clientscript
		// use it when you need it!
		/*
		->registerCssFile( Yii::app()->theme->baseUrl . '/css/bootstrap.css' )
		->registerCssFile( Yii::app()->theme->baseUrl . '/css/bootstrap-responsive.css' )
		->registerCoreScript( 'jquery' )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-transition.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-alert.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-modal.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-dropdown.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-scrollspy.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-tab.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-tooltip.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-popover.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-button.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-collapse.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-carousel.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-typeahead.js', CClientScript::POS_END )
		*/
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo CHtml::encode($this->pageTitle); ?></title>
<meta name="language" content="es" />
<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
  <!-- blueprint CSS framework -->
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/screen.css" media="screen, projection" />
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/print.css" media="print" />
  <!--[if lt IE 8]>
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/ie.css" media="screen, projection" />
  <![endif]-->

  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/main.css" />
  <!-- <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/form.css" /> -->
  <!-- <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/estilo.css" /> -->

<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap-responsive.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css" />
  <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/modernizr-2.0.6.min.js"></script>
<!-- Le fav and touch icons -->
</head>
<?php //echo Yii::app()->user->ui->displayErrorConsole(); ?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
   $(document).on('ready',function()
   {
      $('#next').click(function()
         {
            $('#galeria-li:first').appendTo('#galeria:first');
         });      
   });
</script>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container-fluid">
				<!-- chupalá -->
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="#"><?php echo Yii::app()->name ?></a>
				<div class="nav-collapse">
					<?php
						$hola=Yii::app()->createController('Torneo');
						echo BsHtml::pills(array(
    						array('label' => 'Home','url'=>array('/site/index'),'active' => true),
      						//array('label'=>'About','url'=>array('/site/page', 'view'=>'about')),
      						//array('label'=>'Contact', 'url'=>array('/site/contact')),
      						//array('label' => 'Help','url' => '#'),
      						array('label'=>'Futbolistas', 'url'=>array('/futbolista/admin'), 'visible'=>!Yii::app()->user->isGuest),
      						array('label'=>'Técnicos', 'url'=>array('/tecnico/admin'), 'visible'=>!Yii::app()->user->isGuest, ),
      						array('label' =>'Partidos','items' => array(
            					// array('label'=>'Fechas', 'url'=>array('/participa/index')),
            					array(
                					'label' => 'Partidos Liga A'." ".DATE('Y'),
                					'url'=>(isset(Torneo::model()->findByAttributes(array('TOR_agno'=>DATE('Y'),'TOR_tipo'=>1,'TOR_division'=>1))->TOR_correl))? array('/partido/index','id'=>1,'id2'=>1): array('/site/index'),
                					'visible'=>Torneo::model()->findByAttributes(array('TOR_agno'=>DATE('Y'),'TOR_tipo'=>1))!=null,
                					),
            					array(
                					'label' => 'Partidos Liga B'." ".DATE('Y'),
                					'url'=>(isset(Torneo::model()->findByAttributes(array('TOR_agno'=>DATE('Y'),'TOR_tipo'=>1,'TOR_division'=>1))->TOR_correl))? array('/partido/index','id'=>1,'id2'=>2): array('/site/index'),
                					'visible'=>Torneo::model()->findByAttributes(array('TOR_agno'=>DATE('Y'),'TOR_tipo'=>1))!=null,
                					),
            					BsHtml::menuDivider(),
            				// array(
                // 				'label' => 'Registrar Partido',
                // 				'url' => array('/Partido/create'),
            				// 		),
            					
        					)
    ),
      						array('label' => 'Equipos','items' => array(
            					array(
                					'label' => 'Equipos',
                					'url' => array('/Equipo/admin'),
           			 			),
           			 			// array(
                		// 			'label' => 'Liga A',
                		// 			'url' => array('/Equipo/admin','id'=>1),
           			 			// ),
           			 			// array(
                		// 			'label' => 'Liga B',
                		// 			'url' => array('/Equipo/admin','id'=>2),
           			 			// ),
            				BsHtml::menuDivider(),
            				array(
                				'label' => 'Registrar Equipo',
                				'url' => array('/Equipo/create'),'visible'=>!Yii::app()->user->isGuest
            						),
            				// array('label'=>'Historial', 'url'=>array('/torneo/admin'))
        						)
    						),

    							
      						array('label' => 'Torneos','items' => array(
            					 array(
                	 				'label' => 'Liga A Apertura'." ".DATE('Y'),
                	 				'url'=>(isset(Torneo::model()->findByAttributes(array('TOR_agno'=>DATE('Y'),'TOR_tipo'=>1,'TOR_division'=>1))->TOR_correl))? array('/integra/admin','id'=>Torneo::model()->findByAttributes(array('TOR_agno'=>DATE('Y'),'TOR_tipo'=>1,'TOR_division'=>1))->TOR_correl): array('/site/index'),
                					'visible'=>Torneo::model()->findByAttributes(array('TOR_agno'=>DATE('Y'),'TOR_tipo'=>1))!=null,
           			 		 	),
            					  array(
                	 				'label' => 'Liga A Clausura'." ".DATE('Y'),
                	 				'url'=>(isset(Torneo::model()->findByAttributes(array('TOR_agno'=>DATE('Y'),'TOR_tipo'=>2,'TOR_division'=>1))->TOR_correl))? array('/integra/admin','id'=>Torneo::model()->findByAttributes(array('TOR_agno'=>DATE('Y'),'TOR_tipo'=>2,'TOR_division'=>1))->TOR_correl): array('/site/index'),
                					'visible'=>Torneo::model()->findByAttributes(array('TOR_agno'=>DATE('Y'),'TOR_tipo'=>2,'TOR_division'=>1))!=null,
           			 		 	),
            					  array(
                	 				'label' => 'Liga B Apertura'." ".DATE('Y'),
                	 				'url'=>(isset(Torneo::model()->findByAttributes(array('TOR_agno'=>DATE('Y'),'TOR_tipo'=>1,'TOR_division'=>2))->TOR_correl))? array('/integra/admin','id'=>Torneo::model()->findByAttributes(array('TOR_agno'=>DATE('Y'),'TOR_tipo'=>1,'TOR_division'=>2))->TOR_correl): array('/site/index'),
                					'visible'=>Torneo::model()->findByAttributes(array('TOR_agno'=>DATE('Y'),'TOR_tipo'=>1,'TOR_division'=>2))!=null,
           			 		 	),
            					  array(
                	 				'label' => 'Liga B Clausura'." ".DATE('Y'),
                	 				'url'=>(isset(Torneo::model()->findByAttributes(array('TOR_agno'=>DATE('Y'),'TOR_tipo'=>2,'TOR_division'=>2))->TOR_correl))? array('/integra/admin','id'=>Torneo::model()->findByAttributes(array('TOR_agno'=>DATE('Y'),'TOR_tipo'=>2,'TOR_division'=>2))->TOR_correl): array('/site/index'),
                					'visible'=>Torneo::model()->findByAttributes(array('TOR_agno'=>DATE('Y'),'TOR_tipo'=>2,'TOR_division'=>2))!=null,
           			 		 	),
            					   
    						
            				BsHtml::menuDivider(),
            				array(
                				'label' => 'Registrar Apertura/Clausura',
                				'url'=>array('/torneo/create'), 'visible'=>!Yii::app()->user->isGuest
            						),
            				array('label'=>'Todos los Torneos', 'url'=>array('/torneo/admin'))
        						)
    						),
    						array('label' => 'Mi cuenta','items' => array(
            				array('label'=>'Administrar Usuarios',
            				'url'=>Yii::app()->user->ui->userManagementAdminUrl, 
            				'visible'=>!Yii::app()->user->isGuest),
							array('label'=>'Login', 'url'=>Yii::app()->user->ui->loginUrl,
							'visible'=>Yii::app()->user->isGuest),
							array('label'=>'Logout ('.Yii::app()->user->name.')', 
							'url'=>Yii::app()->user->ui->logoutUrl, 'visible'=>!Yii::app()->user->isGuest),
        				),
    				 'visible'=>!Yii::app()->user->isGuest),
    						array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest)
));
?>
					
				</div><!--/.nav-collapse -->
			</div>
		</div>
	</div>
<?php  
	//$ano=Torneo::model()->findByAttributes(array('TOR_agno'=>(DATE('y')+2000),'TOR_periodo'=>1))->TOR_correl;
	//				var_dump($ano);
	//				die();
?>
	
	<div class="cont">
	<div class="container-fluid">
	  <?php if(isset($this->breadcrumbs)):?>
			<?php $this->widget('zii.widgets.CBreadcrumbs', array(
				'links'=>$this->breadcrumbs,
				'homeLink'=>false,
				'tagName'=>'ul',
				'separator'=>'',
				'activeLinkTemplate'=>'<li><a href="{url}">{label}</a> <span class="divider">/</span></li>',
				'inactiveLinkTemplate'=>'<li><span>{label}</span></li>',
				'htmlOptions'=>array ('class'=>'breadcrumb')
			)); ?>
		<!-- breadcrumbs -->
	  <?php endif?>
	
	<?php echo $content ?>
	
	
	</div><!--/.fluid-container-->
	</div>
	
	<div class="extra">
		<div class="container">
			<div class="row">				
				
			</div> <!-- /container -->
		</div>
	</div>
	
	<div class="footer">
	  <div class="container">
		<div class="row">
		
			<div id="footer-terms" class="col-md-6">
				Copyright &copy; <?php echo date('Y'); ?> Por Freddy Masias, Juan Veliz.<br/>
				Todos los derechos reservados.<br/>
				<?php echo Yii::powered(); ?>
			</div> <!-- /.span6 -->
		 </div> <!-- /row -->
	  </div> <!-- /container -->
	</div>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.Rut.min.js"></script>
<?php Yii::app()->bootstrap->register(); ?>
</body>
</html>
