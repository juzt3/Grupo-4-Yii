<?php

/**
 * This is the model class for table "historialdonacionmedula".
 *
 * The followings are the available columns in table 'historialdonacionmedula':
 * @property integer $id_historialmedula
 * @property integer $id_donacionmedula
 * @property string $rut
 * @property string $fecha_donacionmedula
 *
 * The followings are the available model relations:
 * @property Donacionmedula $idDonacionmedula
 * @property Donantes $rut0
 */
class Historialdonacionmedula extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'historialdonacionmedula';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_historialmedula', 'required'),
			array('id_historialmedula, id_donacionmedula', 'numerical', 'integerOnly'=>true),
			array('rut', 'length', 'max'=>10),
			array('fecha_donacionmedula', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_historialmedula, id_donacionmedula, rut, fecha_donacionmedula', 'safe', 'on'=>'search'),
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
			'idDonacionmedula' => array(self::BELONGS_TO, 'Donacionmedula', 'id_donacionmedula'),
			'rut0' => array(self::BELONGS_TO, 'Donantes', 'rut'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_historialmedula' => 'Id Historialmedula',
			'id_donacionmedula' => 'Id Donacionmedula',
			'rut' => 'Rut',
			'fecha_donacionmedula' => 'Fecha Donacionmedula',
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

		$criteria->compare('id_historialmedula',$this->id_historialmedula);
		$criteria->compare('id_donacionmedula',$this->id_donacionmedula);
		$criteria->compare('rut',$this->rut,true);
		$criteria->compare('fecha_donacionmedula',$this->fecha_donacionmedula,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Historialdonacionmedula the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
