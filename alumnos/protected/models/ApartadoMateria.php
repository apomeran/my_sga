<?php

/**
 * This is the model class for table "apartado_materia".
 *
 * The followings are the available columns in table 'apartado_materia':
 * @property integer $id
 * @property integer $materia
 * @property integer $apartado
 *
 * The followings are the available model relations:
 * @property Apartado $apartado0
 * @property Materia $materia0
 * @property ApartadoMateriaNota[] $apartadoMateriaNotas
 */
class ApartadoMateria extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'apartado_materia';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('materia, apartado', 'required'),
			array('materia, apartado', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, materia, apartado', 'safe', 'on'=>'search'),
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
			'apartado0' => array(self::BELONGS_TO, 'Apartado', 'apartado'),
			'materia0' => array(self::BELONGS_TO, 'Materia', 'materia'),
			'apartadoMateriaNotas' => array(self::HAS_MANY, 'ApartadoMateriaNota', 'id_apartado_materia'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'materia' => 'Materia',
			'apartado' => 'Apartado',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('materia',$this->materia);
		$criteria->compare('apartado',$this->apartado);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ApartadoMateria the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
