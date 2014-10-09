<?php

/**
 * This is the model class for table "centrosmedicos".
 *
 * The followings are the available columns in table 'centrosmedicos':
 * @property integer $cod_cm
 * @property string $nombre_cm
 * @property string $direccion_cm
 * @property integer $contacto_cm
 * @property string $director_cm
 * @property string $especialidad_cm
 * @property string $gubernamental_cm
 */
class Centrosmedicos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'centrosmedicos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre_cm, direccion_cm, contacto_cm, director_cm, especialidad_cm, gubernamental_cm', 'required'),
			array('contacto_cm', 'numerical', 'integerOnly'=>true),
			array('nombre_cm, director_cm, especialidad_cm, gubernamental_cm', 'length', 'max'=>50, 'min'=>2),
			array('direccion_cm', 'length', 'max'=>100, 'min'=>6),
			array('contacto_cm', 'length', 'max'=>100, 'min'=>6),
			array('nombre_cm', 'ext.alpha', 'allAccentedLetters' => true, 'allowSpaces' => true),
			array('director_cm', 'ext.alpha', 'allAccentedLetters' => true, 'allowSpaces' => true),
			array('especialidad_cm', 'ext.alpha', 'allAccentedLetters' => true, 'allowSpaces' => true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('cod_cm, nombre_cm, direccion_cm, contacto_cm, director_cm, especialidad_cm, gubernamental_cm', 'safe', 'on'=>'search'),
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
			'cod_cm' => 'Codigo Centro Medico',
			'nombre_cm' => 'Nombre Centro Medico',
			'direccion_cm' => 'Direccion Centro Medico',
			'contacto_cm' => 'Nro Contacto',
			'director_cm' => 'Director',
			'especialidad_cm' => 'Especialidad',
			'gubernamental_cm' => 'Gubernamental',
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

		$criteria->compare('cod_cm',$this->cod_cm);
		$criteria->compare('nombre_cm',$this->nombre_cm,true);
		$criteria->compare('direccion_cm',$this->direccion_cm,true);
		$criteria->compare('contacto_cm',$this->contacto_cm);
		$criteria->compare('director_cm',$this->director_cm,true);
		$criteria->compare('especialidad_cm',$this->especialidad_cm,true);
		$criteria->compare('gubernamental_cm',$this->gubernamental_cm,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Centrosmedicos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
