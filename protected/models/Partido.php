<?php

/**
 * This is the model class for table "partido".
 *
 * The followings are the available columns in table 'partido':
 * @property string $PAR_correl
 * @property string $PAR_estCorrel
 * @property string $PAR_torCorrel
 * @property string $PAR_programacion
 * @property string $PAR_hora
 * @property integer $PAR_fecha
 * @property integer $PAR_asistencia
 * @property integer $PAR_recaudo
 * @property string $PAR_estado
 * @property string $PAR_tiempo
 *
 * The followings are the available model relations:
 * @property Arbitra[] $arbitras
 * @property Falta[] $faltas
 * @property Formacion[] $formacions
 * @property Gol[] $gols
 * @property Incidente[] $incidentes
 * @property Participa[] $participas
 * @property Estadio $pAREstCorrel
 * @property Torneo $pARTorCorrel
 */
class Partido extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'partido';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('PAR_fecha, PAR_asistencia, PAR_recaudo', 'numerical', 'integerOnly'=>true),
			array('PAR_estCorrel, PAR_torCorrel, PAR_estado', 'length', 'max'=>10),
			array('PAR_programacion, PAR_hora, PAR_tiempo', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('PAR_correl, PAR_estCorrel, PAR_torCorrel, PAR_programacion, PAR_hora, PAR_fecha, PAR_asistencia, PAR_recaudo, PAR_estado, PAR_tiempo', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'arbitras' => array(self::HAS_MANY, 'Arbitra', 'ARBI_parCorrel'),
			'faltas' => array(self::HAS_MANY, 'Falta', 'FAL_parCorrel'),
			'formacions' => array(self::HAS_MANY, 'Formacion', 'FOR_parCorrel'),
			'gols' => array(self::HAS_MANY, 'Gol', 'GOL_parCorrel'),
			'incidentes' => array(self::HAS_MANY, 'Incidente', 'INC_parCorrel'),
			'participas' => array(self::HAS_MANY, 'Participa', 'PART_parCorrel'),
			'pAREstCorrel' => array(self::BELONGS_TO, 'Estadio', 'PAR_estCorrel'),
			'pARTorCorrel' => array(self::BELONGS_TO, 'Torneo', 'PAR_torCorrel'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'PAR_correl' => 'ID',
			'PAR_estCorrel' => 'Estadio',
			'PAR_torCorrel' => 'Torneo',
			'PAR_programacion' => 'Fecha',
			'PAR_hora' => 'Hora',
			'PAR_fecha' => 'Fechas',
			'PAR_asistencia' => 'Asistencia',
			'PAR_recaudo' => 'Recaudo',
			'PAR_estado' => 'Estado',
			'PAR_tiempo' => 'Tiempo',
			'PAR_tipo' => 'Tipo',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('PAR_correl',$this->PAR_correl,true);
		$criteria->compare('PAR_estCorrel',$this->PAR_estCorrel,true);
		$criteria->compare('PAR_torCorrel',$this->PAR_torCorrel,true);
		$criteria->compare('PAR_programacion',$this->PAR_programacion,true);
		$criteria->compare('PAR_hora',$this->PAR_hora,true);
		$criteria->compare('PAR_fecha',$this->PAR_fecha);
		$criteria->compare('PAR_asistencia',$this->PAR_asistencia);
		$criteria->compare('PAR_recaudo',$this->PAR_recaudo);
		$criteria->compare('PAR_estado',$this->PAR_estado,true);
		$criteria->compare('PAR_tiempo',$this->PAR_tiempo,true);
		$criteria->compare('PAR_tipo',$this->PAR_tipo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Partido the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
