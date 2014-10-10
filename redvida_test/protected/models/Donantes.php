<?php

/**
 * This is the model class for table "donantes".
 *
 * The followings are the available columns in table 'donantes':
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
class Donantes extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'donantes';
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
			array('nombres, apellidos', 'ext.alpha', 'allAccentedLetters' => true, 'allowSpaces' => true),
			array('rut, telefono, celular', 'length', 'max'=>10),
			array('rut', 'ext.alpha', 'allowNumbers' => true, 'extra' => array('-'), 'minChars' => 9, 'maxChars' => 10),
			array('rut', 'validateRut'),
			array('telefono, celular', 'ext.alpha', 'allowNumbers' => true),
			array('direccion, email', 'length', 'max'=>300),
			array('email', 'email'),
			array('comuna', 'length', 'max'=>50),
			array('comuna', 'ext.alpha', 'allowNumbers' => false),
			array('tiposangre', 'length', 'max'=>3),
			array('centromedico', 'length', 'max'=>5),
			array('centromedico', 'ext.alpha', 'allowNumbers' => true),
			array('donanteorganos, habilitado', 'length', 'max'=>2),
			array('alergias', 'safe'),
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

	public function validateRut($attribute, $params) {
        $data = explode('-', $this->rut);
        $evaluate = strrev($data[0]);
        $multiply = 2;
        $store = 0;
        for ($i = 0; $i < strlen($evaluate); $i++) {
            $store += $evaluate[$i] * $multiply;
            $multiply++;
            if ($multiply > 7)
                $multiply = 2;
        }
        isset($data[1]) ? $verifyCode = strtolower($data[1]) : $verifyCode = '';
        $result = 11 - ($store % 11);
        if ($result == 10)
            $result = 'k';
        if ($result == 11)
            $result = 0;
        if ($verifyCode != $result)
            $this->addError('rut', 'Rut inválido.');
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
	 * @return Donantes the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function getMenuSangre()
	{
		return array(
      	'O+'=>'O+', 'O-'=>'O-', 'A-'=>'A-', 'A+'=>'A+', 'B-'=>'B-', 'B+'=>'B+', 'AB-'=>'AB-', 'AB+'=>'AB+'
   		);
	}
}
