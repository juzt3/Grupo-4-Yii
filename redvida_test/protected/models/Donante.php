<?php

/**
 * This is the model class for table "donante".
 *
 * The followings are the available columns in table 'donante':
 * @property string $nombres
 * @property string $apellidos
 * @property string $rut
 * @property string $direccion
 * @property string $comuna
 * @property string $tiposangre
 * @property string $alergias
 * @property string $centromedico
 * @property string $donanteorganos
 * @property string $email
 * @property string $telefono
 * @property string $celular
 * @property string $habilitado
 *
 * The followings are the available model relations:
 * @property Historialenfermedades[] $historialenfermedades
 */
class Donante extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'donante';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombres, apellidos, rut, direccion, comuna, tiposangre, centromedico, celular', 'required'),
			array('nombres, apellidos', 'length', 'max'=>100),
			array('rut, telefono, celular', 'length', 'max'=>10),
			array('comuna', 'length', 'max'=>50),
			array('tiposangre', 'length', 'max'=>3),
			array('centromedico', 'length', 'max'=>5),
			array('donanteorganos, habilitado', 'length', 'max'=>1),
			array('alergias, email', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('nombres, apellidos, rut, direccion, comuna, tiposangre, alergias, centromedico, donanteorganos, email, telefono, celular, habilitado', 'safe', 'on'=>'search'),
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
			'historialenfermedades' => array(self::HAS_MANY, 'Historialenfermedades', 'rut'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'nombres' => 'Nombres',
			'apellidos' => 'Apellidos',
			'rut' => 'Rut',
			'direccion' => 'Direccion',
			'comuna' => 'Comuna',
			'tiposangre' => 'Tiposangre',
			'alergias' => 'Alergias',
			'centromedico' => 'Centromedico',
			'donanteorganos' => 'Donanteorganos',
			'email' => 'Email',
			'telefono' => 'Telefono',
			'celular' => 'Celular',
			'habilitado' => 'Habilitado',
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

		$criteria->compare('nombres',$this->nombres,true);
		$criteria->compare('apellidos',$this->apellidos,true);
		$criteria->compare('rut',$this->rut,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('comuna',$this->comuna,true);
		$criteria->compare('tiposangre',$this->tiposangre,true);
		$criteria->compare('alergias',$this->alergias,true);
		$criteria->compare('centromedico',$this->centromedico,true);
		$criteria->compare('donanteorganos',$this->donanteorganos,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('celular',$this->celular,true);
		$criteria->compare('habilitado',$this->habilitado,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Donante the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
