<?php

/**
 * This is the model class for table "historialenfermedades".
 *
 * The followings are the available columns in table 'historialenfermedades':
 * @property integer $idhistorial
 * @property string $rut
 * @property integer $idenfermedad
 * @property string $fecha
 * @property string $fecha_cura
 *
 * The followings are the available model relations:
 * @property Donantes $rut0
 * @property Enfermedades $idenfermedad0
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
			array('rut, idenfermedad', 'required'),
			array('idenfermedad', 'numerical', 'integerOnly'=>true),
			array('rut', 'length', 'max'=>10),
			//array('fecha','compare','compareValue'=>date('Y-m-d'),'operator'=>'<=', 'message'=>'La fecha es invalida.'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idhistorial, rut, idenfermedad, fecha, fecha_cura', 'safe', 'on'=>'search'),
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
			'rut0' => array(self::BELONGS_TO, 'Donantes', 'rut'),
			'idenfermedad0' => array(self::BELONGS_TO, 'Enfermedades', 'idenfermedad'),
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
			'idenfermedad' => 'Enfermedad',
			'fecha' => 'Fecha de registro',
			'fecha_cura'=>'Fecha de curación/Borrado',
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
		$criteria->compare('idenfermedad',$this->idenfermedad);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('fecha_cura',$this->fecha_cura,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function searchByRut($rut)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('rut',$rut,false);

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

	public function beforeSave() 
	{
	    if ($this->isNewRecord){
	        $this->fecha = new CDbExpression('NOW()');
	        $donante = new Donantes;
	        $donante = $donante->findByPk($this->rut);
	        $donante->habilitado='No';
	        $donante->save();
	    }

	    return parent::beforeSave();
	}
}
