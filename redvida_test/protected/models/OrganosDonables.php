<?php

/**
 * This is the model class for table "organos_donables".
 *
 * The followings are the available columns in table 'organos_donables':
 * @property integer $id_organo
 * @property string $nombre_organo
 *
 * The followings are the available model relations:
 * @property UrgenciasOrganos[] $urgenciasOrganoses
 */
class OrganosDonables extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'organos_donables';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre_organo', 'required'),
			array('nombre_organo', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_organo, nombre_organo', 'safe', 'on'=>'search'),
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
			'urgenciasOrganoses' => array(self::HAS_MANY, 'UrgenciasOrganos', 'id_organo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_organo' => 'Id Organo',
			'nombre_organo' => 'Nombre Organo',
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

		$criteria->compare('id_organo',$this->id_organo);
		$criteria->compare('nombre_organo',$this->nombre_organo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return OrganosDonables the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public static function getOrganosdonables()
	{
		$organos = Organosdonables::model()->findAll();
		return CHtml::listData($organos, 'id_organo', 'nombre_organo');
	}
}
