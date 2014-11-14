<?php

/**
 * This is the model class for table "donacionsangre".
 *
 * The followings are the available columns in table 'donacionsangre':
 * @property integer $id_donacionsangre
 * @property integer $cantidad_sangre
 * @property string $dsangre_observaciones
 * @property string $tipo_sangre
 *
 * The followings are the available model relations:
 * @property Historialdonacionsangre[] $historialdonacionsangres
 */
class Donacionsangre extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'donacionsangre';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cantidad_sangre, tipo_sangre', 'required'),
			array('cantidad_sangre', 'numerical', 'integerOnly'=>true),
			array('tipo_sangre', 'length', 'max'=>3),
			array('dsangre_observaciones', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_donacionsangre, cantidad_sangre, dsangre_observaciones, tipo_sangre', 'safe', 'on'=>'search'),
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
			'historialdonacionsangres' => array(self::HAS_MANY, 'Historialdonacionsangre', 'id_donacionsangre'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_donacionsangre' => 'Id Donacionsangre',
			'cantidad_sangre' => 'Cantidad Sangre',
			'dsangre_observaciones' => 'Dsangre Observaciones',
			'tipo_sangre' => 'Tipo Sangre',
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

		$criteria->compare('id_donacionsangre',$this->id_donacionsangre);
		$criteria->compare('cantidad_sangre',$this->cantidad_sangre);
		$criteria->compare('dsangre_observaciones',$this->dsangre_observaciones,true);
		$criteria->compare('tipo_sangre',$this->tipo_sangre,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Donacionsangre the static model class
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

	public function afterSave() 
	{
	    if ($this->isNewRecord)
	    {
	       $bancodesangre = Bancodesangre::model()->find(array('condition'=>'tipo_sangre = :new_tipo_sangre', 
																'params'=>array(':new_tipo_sangre'=>$this->tipo_sangre),
																));
	       if($bancodesangre == null)
	       {
	       		$newbanco=new Bancodesangre;
	       		$newbanco->tipo_sangre = $this->tipo_sangre;
	       		$newbanco->cantidad = $this->cantidad_sangre;
	       		$newbanco->save();
	       }
	       else
	       {
	       		$bancodesangre->cantidad += $this->cantidad_sangre;
	       		$bancodesangre->save();
	       }

	    }
	    //Falta manejar las modificaciones de las donaciones
	    return parent::afterSave();
	}

	public function afterDelete()
	{
		$bancodesangre = Bancodesangre::model()->find(array('condition'=>'tipo_sangre = :new_tipo_sangre', 
																'params'=>array(':new_tipo_sangre'=>$this->tipo_sangre),
																));
		$bancodesangre->cantidad -= $this->cantidad_sangre;
		$bancodesangre->save();
	}
}
