<?php

/**
 * This is the model class for table "donacionmedula".
 *
 * The followings are the available columns in table 'donacionmedula':
 * @property integer $id_donacionmedula
 * @property string $rut
 * @property integer $cantidad_medula
 * @property string $d_medula_observaciones
 * @property string $fecha_donacionmedula
 * @property string $fecha_expiracionmedula
 *
 * The followings are the available model relations:
 * @property Donantes $rut0
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
			array('cantidad_medula, fecha_expiracionmedula', 'required'),
			array('cantidad_medula', 'numerical', 'integerOnly'=>true),
			array('rut', 'length', 'max'=>10),
			array('d_medula_observaciones', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_donacionmedula, rut, cantidad_medula, d_medula_observaciones, fecha_donacionmedula, fecha_expiracionmedula', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_donacionmedula' => 'Id Donación de Medula',
			'rut' => 'Rut',
			'cantidad_medula' => 'Cantidad de Medula',
			'd_medula_observaciones' => 'Observaciones',
			'fecha_donacionmedula' => 'Fecha de Donación',
			'fecha_expiracionmedula' => 'Fecha Expiración',
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
		$criteria->compare('rut',$this->rut,true);
		$criteria->compare('cantidad_medula',$this->cantidad_medula);
		$criteria->compare('d_medula_observaciones',$this->d_medula_observaciones,true);
		$criteria->compare('fecha_donacionmedula',$this->fecha_donacionmedula,true);
		$criteria->compare('fecha_expiracionmedula',$this->fecha_expiracionmedula,true);

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

        public function beforeSave() 
	{ 
      
	    if ($this->isNewRecord){
	        $this->fecha_donacionmedula = new CDbExpression('NOW()');
	    }
           
            $this->fecha_expiracionmedula = date('Y-m-d', CDateTimeParser::parse($this->fecha_expiracionmedula, 'dd-MM-yyyy'));
            
	    return parent::beforeSave();
	}
	     
	protected function afterFind()
	{
	    $this->fecha_expiracionmedula = Yii::app()->dateFormatter->format('dd-MM-yyyy', $this->fecha_expiracionmedula);
	    $this->fecha_donacionmedula = Yii::app()->dateFormatter->format('dd-MM-yyyy', $this->fecha_donacionmedula);
	    return parent::afterFind();
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
