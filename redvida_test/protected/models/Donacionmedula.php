<?php

/**
 * This is the model class for table "donacionmedula".
 *
 * The followings are the available columns in table 'donacionmedula':
 * @property integer $id_donacionmedula
 * @property integer $cantidad_medula
 * @property string $d_medula_observaciones
 *
 * The followings are the available model relations:
 * @property Historialdonacionmedula[] $historialdonacionmedulas
 */
class Donacionmedula extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'donacionmedula';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cantidad_medula', 'required'),
			array('cantidad_medula', 'numerical', 'integerOnly'=>true),
			array('d_medula_observaciones', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_donacionmedula, cantidad_medula, d_medula_observaciones', 'safe', 'on'=>'search'),
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
			'historialdonacionmedulas' => array(self::HAS_MANY, 'Historialdonacionmedula', 'id_donacionmedula'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_donacionmedula' => 'Id Donacionmedula',
			'cantidad_medula' => 'Cantidad Medula',
			'd_medula_observaciones' => 'Observaciones de Donación de Medula',
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

		$criteria->compare('id_donacionmedula',$this->id_donacionmedula);
		$criteria->compare('cantidad_medula',$this->cantidad_medula);
		$criteria->compare('d_medula_observaciones',$this->d_medula_observaciones,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Donacionmedula the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
