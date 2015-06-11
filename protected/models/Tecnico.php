<?php

/**
 * This is the model class for table "tecnico".
 *
 * The followings are the available columns in table 'tecnico':
 * @property string $TEC_correl
 * @property string $TEC_nombre
 * @property string $TEC_apellidoPat
 * @property string $TEC_apellidoMat
 * @property string $TEC_fechaNac
 * @property string $TEC_nacionalidad
 *
 * The followings are the available model relations:
 * @property Contratotecnico[] $contratotecnicos
 * @property Sanciontecnico[] $sanciontecnicos
 */
class Tecnico extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tecnico';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('TEC_nombre, TEC_apellidoPat, TEC_apellidoMat', 'length', 'max'=>45),
			array('TEC_nombre, TEC_apellidoPat, TEC_apellidoMat', 'required','message'=>'Por favor, indíquenos: {attribute}.'),
			array('TEC_nombre, TEC_apellidoPat, TEC_apellidoMat', 'match','pattern' => '/^[a-zA-Z\s]+$/','message'=>'El campo {attribute} sólo puede ser texto.'),
			
			array('TEC_fechaNac', 'safe'),
			array('TEC_fechaNac', 'date', 'format'=>'yyyy-M-d', 'message'=>'El formato de fecha es: [YYYY-M-D]'),
			array('TEC_fechaNac','compare','compareValue'=>date('Y-m-d'),'operator'=>'<='),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('FUT_correl, FUT_nombre, FUT_apellidoPat, FUT_apellidoMat, FUT_fechaNacimiento, FUT_nacionalidad, FUT_estado, FUT_estadoCivil', 'safe', 'on'=>'search'),
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
			'contratotecnicos' => array(self::HAS_MANY, 'Contratotecnico', 'CON_TEC_tecCorrel'),
			'sanciontecnicos' => array(self::HAS_MANY, 'Sanciontecnico', 'SAN_TEC_tecCorrel'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'TEC_correl' => 'Tecnico Correl',
			'TEC_nombre' => 'Nombre',
			'TEC_apellidoPat' => 'Apellido Paterno',
			'TEC_apellidoMat' => 'Apellido Materno',
			'TEC_fechaNac' => 'Fecha de Nacimiento',
			'TEC_nacionalidad' => 'Pais de Origen',
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

		$criteria->compare('TEC_correl',$this->TEC_correl,true);
		$criteria->compare('TEC_nombre',$this->TEC_nombre,true);
		$criteria->compare('TEC_apellidoPat',$this->TEC_apellidoPat,true);
		$criteria->compare('TEC_apellidoMat',$this->TEC_apellidoMat,true);
		$criteria->compare('TEC_fechaNac',$this->TEC_fechaNac,true);
		$criteria->compare('TEC_nacionalidad',$this->TEC_nacionalidad,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Tecnico the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
