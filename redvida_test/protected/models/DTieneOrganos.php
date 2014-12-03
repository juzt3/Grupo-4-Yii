<?php

/**
 * This is the model class for table "d_tiene_organos".
 *
 * The followings are the available columns in table 'd_tiene_organos':
 * @property integer $id_tiene_organos
 * @property string $rut
 * @property integer $id_organo
 * @property string $transplantado
 *
 * The followings are the available model relations:
 * @property OrganosDonables $idOrgano
 * @property Donantes $rut0
 */
class DTieneOrganos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'd_tiene_organos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('rut, id_organo', 'required'),
			array('id_organo', 'numerical', 'integerOnly'=>true),
			array('rut', 'length', 'max'=>10),
			array('transplantado', 'length', 'max'=>2),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_tiene_organos, rut, id_organo, transplantado', 'safe', 'on'=>'search'),
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
			'idOrgano' => array(self::BELONGS_TO, 'OrganosDonables', 'id_organo'),
			'rut0' => array(self::BELONGS_TO, 'Donantes', 'rut'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_tiene_organos' => 'Id Tiene Organos',
			'rut' => 'Rut',
			'id_organo' => 'Id Organo',
			'transplantado' => 'Transplantado',
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

		$criteria->compare('id_tiene_organos',$this->id_tiene_organos);
		$criteria->compare('rut',$this->rut,true);
		$criteria->compare('id_organo',$this->id_organo);
		$criteria->compare('transplantado',$this->transplantado,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DTieneOrganos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public static function getOrganosDisponibles($id_organo) // devuelve una lista de organos disponibles filtrado por tipo de organo
	{
		$donantesmuertos = CHtml::listData(Donantes::model()->findAll(array('select'=>'rut',
															'condition'=>'fecha_muerte IS NULL')), 'rut', 'rut');

		$criteria = new CDbCriteria;
		$criteria->addCondition('id_organo = :id_organo AND transplantado = "No"');
		$criteria->params = array(':id_organo'=>$id_organo);
		$criteria->addNotInCondition('rut', $donantesmuertos);

		$organos_posibles = DTieneOrganos::model()->findAll($criteria);
		return CHtml::listData($organos_posibles, 'rut', 'rut');
	}

	public function afterSave() 
	{
	    $donante = new Donantes;
	    $donante = $donante->findByPk($this->rut);
	    $donante->fecha_muerte = new CDbExpression('NOW()');
	    $donante->habilitado = 'No';
	    $donante->save();

	    return parent::afterSave();
	}
}
