<?php

/**
 * This is the model class for table "historialenfermedades".
 *
 * The followings are the available columns in table 'historialenfermedades':
 * @property integer $idhistorial
 * @property string $rut
 * @property string $fecha
 * @property integer $idenfermedad
 *
 * The followings are the available model relations:
 * @property Enfermedades[] $enfermedades
 * @property Donante $rut0
 */
class Historialenfermedades extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'historialenfermedades';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('rut, fecha, idenfermedad', 'required'),
			array('idenfermedad', 'numerical', 'integerOnly'=>true),
			array('rut', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idhistorial, rut, fecha, idenfermedad', 'safe', 'on'=>'search'),
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
			'enfermedades' => array(self::HAS_MANY, 'Enfermedades', 'idhistorial'),
			'rut0' => array(self::BELONGS_TO, 'Donante', 'rut'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idhistorial' => 'Idhistorial',
			'rut' => 'Rut',
			'fecha' => 'Fecha',
			'idenfermedad' => 'Idenfermedad',
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

		$criteria->compare('idhistorial',$this->idhistorial);
		$criteria->compare('rut',$this->rut,true);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('idenfermedad',$this->idenfermedad);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Historialenfermedades the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
