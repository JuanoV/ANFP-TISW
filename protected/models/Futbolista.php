<?php

/**
 * This is the model class for table "futbolista".
 *
 * The followings are the available columns in table 'futbolista':
 * @property string $FUT_correl
 * @property string $FUT_nombre
 * @property string $FUT_apellidoPat
 * @property string $FUT_apellidoMat
 * @property string $FUT_fechaNacimiento
 * @property string $FUT_nacionalidad
 * @property string $FUT_estado
 * @property string $FUT_estadoCivil
 *
 * The followings are the available model relations:
 * @property Contratojugador[] $contratojugadors
 * @property Falta[] $faltas
 * @property Gol[] $gols
 * @property Juega[] $juegas
 * @property Lesion[] $lesions
 * @property Sancionfutbolista[] $sancionfutbolistas
 */
class Futbolista extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'futbolista';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('FUT_nombre, FUT_apellidoPat, FUT_apellidoMat', 'length', 'max'=>45),
			array('FUT_nombre, FUT_apellidoPat, FUT_apellidoMat', 'required','message'=>'Por favor, indíquenos: {attribute}.'),
			array('FUT_nombre, FUT_apellidoPat, FUT_apellidoMat', 'match','pattern' => '/^[a-zA-Z\s]+$/','message'=>'El campo {attribute} sólo puede ser texto.'),
			array('FUT_estado, FUT_estadoCivil', 'length', 'max'=>10),
			array('FUT_fechaNacimiento', 'safe'),
			array('FUT_fechaNacimiento', 'date', 'format'=>'yyyy-M-d', 'message'=>'El formato de fecha es: [YYYY-M-D]'),
			array('FUT_fechaNacimiento','compare','compareValue'=>date('Y-m-d'),'operator'=>'<='),
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
			'contratojugadors' => array(self::HAS_MANY, 'Contratojugador', 'CON_JUG_futCorrel'),
			'faltas' => array(self::HAS_MANY, 'Falta', 'FAL_futCorrel'),
			'gols' => array(self::HAS_MANY, 'Gol', 'GOL_futCorrel'),
			'juegas' => array(self::HAS_MANY, 'Juega', 'JUE_futCorrel'),
			'lesions' => array(self::HAS_MANY, 'Lesion', 'LES_futCorrel'),
			'sancionfutbolistas' => array(self::HAS_MANY, 'Sancionfutbolista', 'SAN_FUT_futCorrel'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'FUT_correl' => 'Fut Correl',
			'FUT_nombre' => 'Nombre',
			'FUT_apellidoPat' => 'Apellido Paterno',
			'FUT_apellidoMat' => 'Apellido Materno',
			'FUT_fechaNacimiento' => 'Fecha Nacimiento',
			'FUT_nacionalidad' => 'País de Origen',
			'FUT_estado' => 'Estado',
			'FUT_estadoCivil' => 'Estado Civil',
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

		$criteria->compare('FUT_correl',$this->FUT_correl,true);
		$criteria->compare('FUT_nombre',$this->FUT_nombre,true);
		$criteria->compare('FUT_apellidoPat',$this->FUT_apellidoPat,true);
		$criteria->compare('FUT_apellidoMat',$this->FUT_apellidoMat,true);
		$criteria->compare('FUT_fechaNacimiento',$this->FUT_fechaNacimiento,true);
		$criteria->compare('FUT_nacionalidad',$this->FUT_nacionalidad,true);
		$criteria->compare('FUT_estado',$this->FUT_estado,true);
		$criteria->compare('FUT_estadoCivil',$this->FUT_estadoCivil,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Futbolista the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
