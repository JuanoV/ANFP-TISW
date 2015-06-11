<?php

class EquipoController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
   {
      return array(array('CrugeAccessControlFilter'));
   }

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','mayor'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Equipo;
		$aux= new Pertenece;
		$log= new Logo;

		// Uncomment the following line if AJAX validation is needed
		 $this->performAjaxValidation($model);

		if(isset($_POST['Equipo']))
		{
			if (isset($_POST['Equipo'])) {
				$log->LOG_url=CUploadedFile::getInstance($log,'LOG_url');
				
			}
			$model->attributes=$_POST['Equipo'];
			if(isset($_POST['Pertenece']))
				$aux->attributes=$_POST['Pertenece'];
			if($aux->PER_divCorrel==null){
				$this->redirect('create',array(
				'model'=>$model,
				));
				echo BsHtml::alert(BsHtml::ALERT_COLOR_WARNING, BsHtml::bold(
			'Lo sentimos !') . 'El equipo debe pertenecer a una division.');
				// die();
			}
			/*if(isset($_POST['Logo'])){
				$log->attributes=$_POST['Logo'];
				echo($log);
				var_dump($log);
				die;
			}*/
			if($aux->PER_divCorrel!=null&&$model->save()){
					$log->LOG_url->saveAs('images/'.$model->EQU_correl.'.png');
					$log->LOG_nombre=$log->LOG_url;
					$log->LOG_equCorrel=$model->EQU_correl;
					$log->LOG_url=$model->EQU_correl;
					$aux->PER_equCorrel=$model->EQU_correl;
					$aux->PER_fecha=date('Y');

					$aux->save();
					$this->redirect(array('view','id'=>$model->EQU_correl));
				}
		}
		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
		$var;
		$idPer=Pertenece::model()->findAllByAttributes(array('PER_equCorrel'=>$id));
		//$agno=explode("-",$idPer->PER_fecha);
		//var_dump($agno);
		foreach ($idPer as $value) {
			$var[]=array(explode("-",$value->PER_fecha)[0],$value->PER_correl);
			//var_dump($value);
		}
		$var=(Utils::mayor($var));
		//var_dump($idPer);
		$aux= new Pertenece;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Equipo']))
		{
			$model->attributes=$_POST['Equipo'];
			$aux->attributes=$_POST['Pertenece'];
			if($model->save()){
				if($aux->PER_divCorrel!=null&&$aux->PER_fecha!=null){	
					$aux->PER_equCorrel=$model->EQU_correl;
					if(explode("-",$aux->PER_fecha)[0]!=$var[0])
						$aux->save();
					else{
						echo "El equipo no puede cambiar de division por este año";
						die();
						}
					}
				$this->redirect(array('view','id'=>$model->EQU_correl));
			}
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$var=Equipo::model()->findByPk($id);
		$var->EQU_estado=0;
		$var->save();
		// $this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Equipo');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin($id=null)
	{
		$model=new Equipo('search');
		$model->unsetAttributes();
		// $var= Equipo::model()->findAllByAttributes(array(
		// 	'EQU_correl'=>Pertenece::model()->findByAttributes(array(
		// 		'PER_fecha'=>DATE('Y'),'PER_divCorrel'=>$id)->PER_equCorrel)));
		// var_dump($var);
		// die();
		// var_dump($this->divActual($var[0]));
		// die();
		// foreach ($var as $key => $value) {
		// 	if (Pertenece::model()->findByPk($this->divActual($value))->PER_divCorrel==1) {
		// 		echo $value->EQU_nombre;
		// 	}
		// }
		// $hol=array('id'=>null,'agno'=>null);
		// var_dump($hol);
		// var_dump(max($hol[0...7]->EQU_correl));
		// die();
		// if ($id=1) {
		// 	if (Equipo::model()->findByAttributes(array(EQU))) {
		// 		# code...
		// 	}
		// }
		// $model->EQU_estado=1;  // clear any default values
		if(isset($_GET['Equipo']))
			$model->attributes=$_GET['Equipo'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Equipo the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Equipo::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Equipo $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='equipo-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	// public function Redir()
	// {
	// 	if (Torneo::model()->findByAttributes(array('TOR_agno'=>DATE('Y'),'TOR_tipo'=>1))->TOR_correl) {
	// 		$this->redirect(array('/integra/admin','id'=>Torneo::model()->findByAttributes(array('TOR_agno'=>DATE('Y'),'TOR_tipo'=>1))->TOR_correl));
	// 	}
	// }

	public function divActual($equipo)
	{
		$aux= Pertenece::model()->findAllByAttributes(array('PER_equCorrel'=>$equipo->EQU_correl));
		$i=0;
		// $id;
		foreach ($aux as $key => $value) {
			if ($value->PER_fecha>$aux[$i]->PER_fecha) {
				$i=$key;
			}
		}
		// var_dump($aux[$i]);
		// $id=;
		// var_dump($id);
		// die();
	return $aux[$i]->PER_correl;
	}

}
