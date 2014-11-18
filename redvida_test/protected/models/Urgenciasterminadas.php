<?php

/**
 * This is the model class for table "urgenciasterminadas".
 *
 * The followings are the available columns in table 'urgenciasterminadas':
 * @property string $rut
 * @property string $nombre_paciente
 * @property string $apellido_pat
 * @property string $apellido_mat
 * @property string $afiliacion
 * @property string $enfermedad
 * @property string $grado_urgencia
 * @property string $necesidad_transplante
 * @property string $fecha_ini
 * @property string $fecha_fin
 * @property integer $centro_medico
 */
class Urgenciasterminadas extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'urgenciasterminadas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('rut, nombre_paciente, apellido_pat, apellido_mat, afiliacion, enfermedad, grado_urgencia, necesidad_transplante, fecha_ini, centro_medico', 'required'),
			array('centro_medico', 'numerical', 'integerOnly'=>true),
			array('rut', 'length', 'max'=>10),
			array('nombre_paciente', 'length', 'max'=>30),
			array('apellido_pat, apellido_mat, afiliacion', 'length', 'max'=>50),
			array('enfermedad, necesidad_transplante', 'length', 'max'=>100),
			array('grado_urgencia', 'length', 'max'=>1),
			array('fecha_fin', 'safe'),
			array('nombre_paciente', 'ext.alpha', 'allAccentedLetters' => true, 'allowSpaces' => true),
			array('apellido_pat', 'ext.alpha', 'allAccentedLetters' => true, 'allowSpaces' => true),
			array('apellido_mat', 'ext.alpha', 'allAccentedLetters' => true, 'allowSpaces' => true),
			array('afiliacion', 'ext.alpha', 'allAccentedLetters' => true, 'allowSpaces' => true),
			array('enfermedad', 'ext.alpha', 'allAccentedLetters' => true, 'allowSpaces' => true),
			array('necesidad_transplante', 'ext.alpha', 'allAccentedLetters' => true, 'allowSpaces' => true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('rut, nombre_paciente, apellido_pat, apellido_mat, afiliacion, enfermedad, grado_urgencia, necesidad_transplante, fecha_ini, fecha_fin, centro_medico', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'rut' => 'Rut',
			'nombre_paciente' => 'Nombres Paciente',
			'apellido_pat' => 'Apellido Paterno',
			'apellido_mat' => 'Apellido Materno',
			'afiliacion' => 'Afiliacion',
			'enfermedad' => 'Enfermedad',
			'grado_urgencia' => 'Grado Urgencia',
			'necesidad_transplante' => 'Necesidad Transplante',
			'fecha_ini' => 'Fecha Inicio',
			'fecha_fin' => 'Fecha Fin',
			'centro_medico' => 'Centro Medico',
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

		$criteria->compare('rut',$this->rut,true);
		$criteria->compare('nombre_paciente',$this->nombre_paciente,true);
		$criteria->compare('apellido_pat',$this->apellido_pat,true);
		$criteria->compare('apellido_mat',$this->apellido_mat,true);
		$criteria->compare('afiliacion',$this->afiliacion,true);
		$criteria->compare('enfermedad',$this->enfermedad,true);
		$criteria->compare('grado_urgencia',$this->grado_urgencia,true);
		$criteria->compare('necesidad_transplante',$this->necesidad_transplante,true);
		$criteria->compare('fecha_ini',$this->fecha_ini,true);
		$criteria->compare('fecha_fin',$this->fecha_fin,true);
		$criteria->compare('centro_medico',$this->centro_medico);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Urgenciasterminadas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
