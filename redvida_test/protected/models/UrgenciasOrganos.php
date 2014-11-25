<?php

/**
 * This is the model class for table "urgencias_organos".
 *
 * The followings are the available columns in table 'urgencias_organos':
 * @property integer $id_urgencia_organo
 * @property integer $cod_cm
 * @property integer $id_organo
 * @property integer $id_enfermedad_urgencia
 * @property string $rut
 * @property string $nombre_paciente
 * @property string $apellido_pat
 * @property string $apellido_mat
 * @property string $afiliacion
 * @property string $grado_urgencia
 * @property string $fecha_ini
 * @property string $fecha_fin
 *
 * The followings are the available model relations:
 * @property OrganosDonables $idOrgano
 * @property EnfermedadesUrgencia $idEnfermedadUrgencia
 * @property Centrosmedicos $codCm
 */
class UrgenciasOrganos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'urgencias_organos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cod_cm, id_organo, rut, nombre_paciente, apellido_pat, apellido_mat, afiliacion, grado_urgencia', 'required'),
			array('cod_cm, id_organo, id_enfermedad_urgencia', 'numerical', 'integerOnly'=>true),
			array('rut', 'length', 'max'=>10),
			array('nombre_paciente', 'length', 'max'=>30),
			array('apellido_pat, apellido_mat, afiliacion', 'length', 'max'=>50),
			array('grado_urgencia', 'length', 'max'=>1),
			array('fecha_fin', 'safe'),
			array('nombre_paciente', 'ext.alpha', 'allAccentedLetters' => true, 'allowSpaces' => true),
			array('apellido_pat', 'ext.alpha', 'allAccentedLetters' => true, 'allowSpaces' => true),
			array('apellido_mat', 'ext.alpha', 'allAccentedLetters' => true, 'allowSpaces' => true),
			array('afiliacion', 'ext.alpha', 'allAccentedLetters' => true, 'allowSpaces' => true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_urgencia_organo, cod_cm, id_organo, id_enfermedad_urgencia, rut, nombre_paciente, apellido_pat, apellido_mat, afiliacion, grado_urgencia, fecha_ini, fecha_fin', 'safe', 'on'=>'search'),
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
			'idEnfermedadUrgencia' => array(self::BELONGS_TO, 'EnfermedadesUrgencia', 'id_enfermedad_urgencia'),
			'codCm' => array(self::BELONGS_TO, 'Centrosmedicos', 'cod_cm'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_urgencia_organo' => 'Id Urgencia Organo',
			'cod_cm' => 'Cod Cm',
			'id_organo' => 'Id Organo',
			'id_enfermedad_urgencia' => 'Id Enfermedad Urgencia',
			'rut' => 'Rut',
			'nombre_paciente' => 'Nombre Paciente',
			'apellido_pat' => 'Apellido Pat',
			'apellido_mat' => 'Apellido Mat',
			'afiliacion' => 'Afiliacion',
			'grado_urgencia' => 'Grado Urgencia',
			'fecha_ini' => 'Fecha Ini',
			'fecha_fin' => 'Fecha Fin',
		);
	}

	public function validateRut($attribute, $params) 
	{
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

		$criteria->compare('id_urgencia_organo',$this->id_urgencia_organo);
		$criteria->compare('cod_cm',$this->cod_cm);
		$criteria->compare('id_organo',$this->id_organo);
		$criteria->compare('id_enfermedad_urgencia',$this->id_enfermedad_urgencia);
		$criteria->compare('rut',$this->rut,true);
		$criteria->compare('nombre_paciente',$this->nombre_paciente,true);
		$criteria->compare('apellido_pat',$this->apellido_pat,true);
		$criteria->compare('apellido_mat',$this->apellido_mat,true);
		$criteria->compare('afiliacion',$this->afiliacion,true);
		$criteria->compare('grado_urgencia',$this->grado_urgencia,true);
		$criteria->compare('fecha_ini',$this->fecha_ini,true);
		$criteria->compare('fecha_fin',$this->fecha_fin,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return UrgenciasOrganos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}


		public function getGradoUrgencia()
	{
		return array(1=>'Muy Bajo', 2=>'Bajo', 3=>'Normal', 4=>'Alto', 5=>'Muy Alto');
     	            
	}


	public function beforeSave() 
	{
	    if ($this->isNewRecord)
	        $this->fecha_ini = new CDbExpression('NOW()');

	    return parent::beforeSave();
	}
}
