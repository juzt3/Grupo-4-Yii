<?php

/**
 * This is the model class for table "CentrosMedicos".
 *
 * The followings are the available columns in table 'CentrosMedicos':
 * @property integer $cod_centro_medico
 * @property string $nombre_centro_medico
 * @property string $direccion
 * @property integer $contacto
 * @property string $director
 * @property string $especialidad
 * @property string $gubernamental
 */
class CentrosMedicos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'CentrosMedicos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('contacto', 'numerical', 'integerOnly'=>true),
			array('nombre_centro_medico, director, especialidad', 'length', 'max'=>50),
			array('direccion', 'length', 'max'=>100),
			array('gubernamental', 'length', 'max'=>2),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('cod_centro_medico, nombre_centro_medico, direccion, contacto, director, especialidad, gubernamental', 'safe', 'on'=>'search'),
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
			'cod_centro_medico' => 'Cod Centro Medico',
			'nombre_centro_medico' => 'Nombre Centro Medico',
			'direccion' => 'Direccion',
			'contacto' => 'Contacto',
			'director' => 'Director',
			'especialidad' => 'Especialidad',
			'gubernamental' => 'Gubernamental',
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

		$criteria->compare('cod_centro_medico',$this->cod_centro_medico);
		$criteria->compare('nombre_centro_medico',$this->nombre_centro_medico,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('contacto',$this->contacto);
		$criteria->compare('director',$this->director,true);
		$criteria->compare('especialidad',$this->especialidad,true);
		$criteria->compare('gubernamental',$this->gubernamental,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return CentrosMedicos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
