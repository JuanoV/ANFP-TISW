<?php

class TorneoController extends Controller
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
				'actions'=>array('index','view'),
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
		$model=new Torneo;
		$modelo=new Torneo;
		$modelos=new Torneo;
		$team=new Equipo;
		$flag=0;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		if(isset($_POST['Torneo']))
		{
			$model->attributes=$_POST['Torneo'];
			//$var=Pertenece::model()->findAllByAttributes(array('PER_divCorrel'=>$model->TOR_division,explode("-",$value->PER_fecha)[0]=>$model->TOR_agno));
			//$var=(Pertenece::model()->findAllByAttributes(array('PER_divCorrel'=>$model->TOR_division,)));
			if (Torneo::model()->findByAttributes(array('TOR_agno'=>$model->TOR_agno))==null) {
				if(Pertenece::model()->findByAttributes(array('PER_divCorrel'=>1,'PER_fecha'=>$model->TOR_agno))!=null){
					$model->TOR_division=1;
					$model->TOR_periodo=1;
					$model->TOR_tipo=1;
					$modelo->TOR_division=1;
					$modelo->TOR_nombre=$model->TOR_nombre;
					$modelo->TOR_agno=$model->TOR_agno;
					$modelo->TOR_periodo=2;
					$modelo->TOR_tipo=2;
					// if($modelo->save())
					$modelo->save();
					// var_dump($modelo->TOR_correl);
					// var_dump($model->TOR_correl);
					// die();
					if($model->save()){
						$this->integrar($model,1,$modelo);
						$flag=1;
					}
				}
				$modelo=new Torneo;
				if(Pertenece::model()->findByAttributes(array('PER_divCorrel'=>2,'PER_fecha'=>$model->TOR_agno))!=null){
					$modelos->TOR_division=2;
					$modelos->TOR_periodo=1;
					$modelos->TOR_tipo=1;
					$modelos->TOR_nombre=$model->TOR_nombre;
					$modelos->TOR_agno=$model->TOR_agno;
					if($modelos->save()){
						$modelo->TOR_division=2;
						$modelo->TOR_periodo=2;
						$modelo->TOR_tipo=2;
						$modelo->TOR_nombre=$model->TOR_nombre;
						$modelo->TOR_agno=$model->TOR_agno;
						$modelo->save();
						$this->integrar($modelos,2,$modelo);
						$flag=1;
						// $this->redirect(array('view','id'=>$modelos->TOR_correl));
					}
				}
				if($flag==1){
				$this->redirect(array('admin'));
				}
			}
		echo BsHtml::alert(BsHtml::ALERT_COLOR_WARNING, BsHtml::bold(
			'Lo sentimos !') . 'Puede que ya exista un torneo este año o que no existan equipos en esta division.');
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

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Torneo']))
		{
			$model->attributes=$_POST['Torneo'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->TOR_correl));
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
		$aux;
		$model= new Integra;
		$modelo= new Partido;
		$modelo=Partido::model()->findAllByAttributes(array('PAR_torCorrel'=>$id));
		$model=Integra::model()->findAllByAttributes(array('INT_torCorrel'=>$id));
		foreach ($modelo as$key) {
			$aux=Participa::model()->findAllByAttributes((array('PART_parCorrel'=>$key->PAR_correl)));
			foreach ($aux as $value) {
				$value->delete();
			}
			$key->delete();
		}

		foreach ($model as $key)$key->delete();
		$this->loadModel($id)->delete();
		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Torneo');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Torneo('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Torneo']))
			$model->attributes=$_GET['Torneo'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Torneo the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Torneo::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Torneo $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='torneo-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public function Integrar($model, $div,$modelo)
	{
		$var=new Pertenece;
		$team;
		$array=[1,2];
		$rounds;
		$var=Pertenece::model()->findAllByAttributes(array('PER_divCorrel'=>$div,'PER_fecha'=>$model->TOR_agno));
		foreach ($var as $value=> $key) {
							$aux = new Integra;
							$aux->INT_torCorrel=$model->TOR_correl;
							$aux->INT_equCorrel=$key->PER_equCorrel;
							$aux->save();
							$auxClau = new Integra;
							$auxClau->INT_torCorrel=$modelo->TOR_correl;
							$auxClau->INT_equCorrel=$key->PER_equCorrel;
							$auxClau->save();
							$team[$value]=Equipo::model()->findByPk($aux->INT_equCorrel);
							}
		shuffle($team);
		$rounds=$this->roundRobin($team);
		foreach($rounds as $fecha => $games){
    		foreach($games as $play){
    			// var_dump($games);
    			// die();
    			shuffle($array);
    			$local= new Participa;
   				$visita= new Participa;
   				$localClau= new Participa;
   				$visitaClau= new Participa;
   				$apertura = new Partido;
    			$clausura = new Partido;
    			$apertura->PAR_torCorrel = $model->TOR_correl;
    			$apertura->PAR_fecha = $fecha+1;
   				$clausura->PAR_torCorrel = $modelo->TOR_correl;
   				$clausura->PAR_fecha = $fecha+1+count($rounds);
    			$local->PART_equCorrel=$play["Home"]->EQU_correl;
    			$visita->PART_equCorrel=$play["Away"]->EQU_correl;
    			$local->PART_posicion=$array[0];
   				$visita->PART_posicion=$array[1];
   				$localClau->PART_equCorrel=$play["Home"]->EQU_correl;
    			$visitaClau->PART_equCorrel=$play["Away"]->EQU_correl;
    			$localClau->PART_posicion=$array[1];
    			$visitaClau->PART_posicion=$array[0];
    			if ($apertura->save()) {
    				$local->PART_parCorrel=$apertura->PAR_correl;
   					$visita->PART_parCorrel=$apertura->PAR_correl;
   					$local->save();
   					$visita->save();
   					}
    			if ($clausura->save()) {
    				$localClau->PART_parCorrel=$clausura->PAR_correl;
    				$visitaClau->PART_parCorrel=$clausura->PAR_correl;
    				$localClau->save();
    				$visitaClau->save();
    				}
   	 			}
			}	
		}

	public function CopyModel($model){
		$aux= new Torneo;
		$aux->TOR_division=$model->TOR_division;
		$aux->TOR_agno=$model->TOR_agno;
		$aux->TOR_nombre=$model->TOR_nombre;
		$aux->TOR_periodo=$model->TOR_periodo;
		$aux->TOR_premio=$model->TOR_premio;
		$aux->TOR_tipo=$model->TOR_tipo;
		return $aux;
	}
	function roundRobin( array $teams ){

    if (count($teams)%2 != 0){
        array_push($teams,"bye");
    }
    $away = array_splice($teams,(count($teams)/2));
    $home = $teams;
    for ($i=0; $i < count($home)+count($away)-1; $i++)
    {
        for ($j=0; $j<count($home); $j++)
        {
            $round[$i][$j]["Home"]=$home[$j];
            $round[$i][$j]["Away"]=$away[$j];
        }
        if(count($home)+count($away)-1 > 2)
        {
            $s = array_splice( $home, 1, 1 );
            $slice = array_shift( $s  );
            array_unshift($away,$slice );
            array_push( $home, array_pop($away ) );
        }
    }
    return $round;
}
	public function Redir()
	{
		
		echo "funca";
		die();
	}
}

?>