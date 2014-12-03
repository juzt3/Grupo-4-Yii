<?php

/**
 * This is the model class for table "urgencias_medula_terminada".
 *
 * The followings are the available columns in table 'urgencias_medula_terminada':
 * @property integer $id_urgencia_medula_terminada
 * @property integer $cod_cm
 * @property integer id_enfermedad_urgencia
 * @property string $rut
 * @property string $nombre_paciente
 * @property string $apellido_pat
 * @property string $apellido_mat
 * @property string $afiliacion
 * @property string $grado_urgencia
 * @property string $tipo_transplante
 * @property string $fecha_ini
 * @property string $fecha_fin
 * @property string $motivo
 *
 * The followings are the available model relations:
 * @property Centrosmedicos $codCm
 */
class UrgenciasMedulaTerminada extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'urgencias_medula_terminada';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('rut, nombre_paciente, apellido_pat, apellido_mat, afiliacion, grado_urgencia, tipo_transplante, fecha_ini, motivo', 'required'),
			array('cod_cm, id_enfermedad_urgencia', 'numerical', 'integerOnly'=>true),
			array('rut', 'length', 'max'=>10),
			array('nombre_paciente', 'length', 'max'=>30),
			array('apellido_pat, apellido_mat, afiliacion', 'length', 'max'=>50),
			array('grado_urgencia', 'length', 'max'=>8),
			array('tipo_transplante', 'length', 'max'=>8),
			array('fecha_fin', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_urgencia_medula_terminada, cod_cm, rut, nombre_paciente, apellido_pat, apellido_mat, afiliacion, id_enfermedad_urgencia, grado_urgencia,tipo_transplante , fecha_ini, fecha_fin, motivo', 'safe', 'on'=>'search'),
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
			'codCm' => array(self::BELONGS_TO, 'Centrosmedicos', 'cod_cm'),
			'idEnfermedadUrgencia' => array(self::BELONGS_TO, 'EnfermedadesUrgencia', 'id_enfermedad_urgencia'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_urgencia_medula_terminada' => 'Id Urgencia Medula Terminada',
			'cod_cm' => 'Centro Medico',
			'id_enfermedad_urgencia' => 'Enfermedad',
			'rut' => 'Rut',
			'nombre_paciente' => 'Nombre Paciente',
			'apellido_pat' => 'Apellido Paterno',
			'apellido_mat' => 'Apellido Materno',
			'afiliacion' => 'Afiliacion',
			'grado_urgencia' => 'Grado Urgencia',
			'tipo_transplante' => 'Tipo de Transplante',
			'fecha_ini' => 'Fecha Inicio',
			'fecha_fin' => 'Fecha Fin',
			'motivo' => 'Motivo',
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

		$criteria->compare('id_urgencia_medula_terminada',$this->id_urgencia_medula_terminada);
		$criteria->compare('cod_cm',$this->cod_cm);
		$criteria->compare('id_enfermedad_urgencia',$this->id_enfermedad_urgencia);
		$criteria->compare('rut',$this->rut,true);
		$criteria->compare('nombre_paciente',$this->nombre_paciente,true);
		$criteria->compare('apellido_pat',$this->apellido_pat,true);
		$criteria->compare('apellido_mat',$this->apellido_mat,true);
		$criteria->compare('afiliacion',$this->afiliacion,true);
		$criteria->compare('grado_urgencia',$this->grado_urgencia,true);
		$criteria->compare('tipo_transplante',$this->tipo_transplante,true);
		$criteria->compare('fecha_ini',$this->fecha_ini,true);
		$criteria->compare('fecha_fin',$this->fecha_fin,true);
		$criteria->compare('motivo',$this->motivo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return UrgenciasMedulaTerminada the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function getUrgenciasMedula()
	{
		return array('Autologo'=>'Autologo', 'Alogeneico'=>'Alogeneico', 'Singeneico'=>'Singeneico');
     	            
	}

	public function getGradoUrgencia()
	{
		return array(1=>'Muy Bajo', 2=>'Bajo', 3=>'Normal', 4=>'Alto', 5=>'Muy Alto');
     	            
	}
}
