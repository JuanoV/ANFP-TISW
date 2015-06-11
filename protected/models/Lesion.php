<?php

/**
 * This is the model class for table "lesion".
 *
 * The followings are the available columns in table 'lesion':
 * @property string $LES_correl
 * @property string $LES_futCorrel
 * @property string $LES_glosa
 * @property string $LES_fecha
 * @property string $LES_descripcion
 * @property string $LES_tiempoReposo
 *
 * The followings are the available model relations:
 * @property Futbolista $lESFutCorrel
 */
class Lesion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'lesion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('LES_futCorrel, LES_glosa, LES_fecha, LES_tiempoReposo', 'required'),
			array('LES_futCorrel', 'length', 'max'=>10),
			array('LES_glosa', 'length', 'max'=>45),
			array('LES_fecha, LES_descripcion, LES_tiempoReposo', 'safe'),
			array('LES_fecha, LES_tiempoReposo', 'date', 'format'=>'yyyy-M-d', 'message'=>'El formato de fecha es: [YYYY-M-D]'),
			array('LES_fecha','compare','compareValue'=>date('Y-m-d'),'operator'=>'=='),
			array('LES_tiempoReposo','compare','compareValue'=>date('Y-m-d'),'operator'=>'>'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('LES_correl, LES_futCorrel, LES_glosa, LES_fecha, LES_descripcion, LES_tiempoReposo', 'safe', 'on'=>'search'),
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
			'lESFutCorrel' => array(self::BELONGS_TO, 'Futbolista', 'LES_futCorrel'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'LES_correl' => 'Les Correl',
			'LES_futCorrel' => 'Futbolista',
			'LES_glosa' => 'Glosa',
			'LES_fecha' => 'Fecha Ocurrencia',
			'LES_descripcion' => 'Descripcion',
			'LES_tiempoReposo' => 'Reposo',
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

		$criteria->compare('LES_correl',$this->LES_correl,true);
		$criteria->compare('LES_futCorrel',$this->LES_futCorrel,true);
		$criteria->compare('LES_glosa',$this->LES_glosa,true);
		$criteria->compare('LES_fecha',$this->LES_fecha,true);
		$criteria->compare('LES_descripcion',$this->LES_descripcion,true);
		$criteria->compare('LES_tiempoReposo',$this->LES_tiempoReposo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Lesion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
