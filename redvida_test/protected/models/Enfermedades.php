<?php

/**
 * This is the model class for table "enfermedades".
 *
 * The followings are the available columns in table 'enfermedades':
 * @property integer $idenfermedad
 * @property string $nombre
 * @property string $descripcion
 *
 * The followings are the available model relations:
 * @property Historialenfermedades[] $historialenfermedades
 */
class Enfermedades extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'enfermedades';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, descripcion', 'required'),
			array('nombre', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idenfermedad, nombre, descripcion', 'safe', 'on'=>'search'),
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
			'historialenfermedades' => array(self::HAS_MANY, 'Historialenfermedades', 'idenfermedad'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idenfermedad' => 'Idenfermedad',
			'nombre' => 'Nombre',
			'descripcion' => 'Descripcion',
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

		$criteria->compare('idenfermedad',$this->idenfermedad);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('descripcion',$this->descripcion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public static function getEnfermedadesSinRepetir($id) //Devuelve las enfermedades que el donante NO TIENE actualmente.
	{
		$arrayhistorial = CHtml::listData(Historialenfermedades::model()->findAll(array('select'=>'idenfermedad',
																			'condition'=>'rut = :rut', 
																			'params'=>array(':rut'=>$id),
																			)), 'idenfermedad', 'idenfermedad');

		$criteria = new CDbCriteria();
		$criteria->addNotInCondition('idenfermedad', $arrayhistorial);
		
		$enfermedades = Enfermedades::model()->findAll($criteria);

		return CHtml::listData($enfermedades, 'idenfermedad', 'nombre');
	}

	public static function getEnfermedades($id) //Devuelve las enfermedades que el donante NO TIENE CURADAS actualmente.
	{
		$arrayhistorial = CHtml::listData(Historialenfermedades::model()->findAll(array('select'=>'idenfermedad',
																			'condition'=>'rut = :rut AND fecha_cura IS NULL', 
																			'params'=>array(':rut'=>$id),
																			)), 'idenfermedad', 'idenfermedad');

		$criteria = new CDbCriteria();
		$criteria->addNotInCondition('idenfermedad', $arrayhistorial);
		
		$enfermedades = Enfermedades::model()->findAll($criteria);

		return CHtml::listData($enfermedades, 'idenfermedad', 'nombre');
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Enfermedades the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
