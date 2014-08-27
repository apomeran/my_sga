<?php

/**
 * This is the model class for table "curso_materia".
 *
 * The followings are the available columns in table 'curso_materia':
 * @property integer $id
 * @property integer $curso
 * @property integer $materia
 * @property integer $profesor
 *
 * The followings are the available model relations:
 * @property Curso $curso0
 * @property Materia $materia0
 * @property Docentes $profesor0
 */
class CursoMateria extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'curso_materia';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('curso, materia, profesor', 'required'),
			array('curso, materia, profesor', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, curso, materia, profesor', 'safe', 'on'=>'search'),
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
			'curso0' => array(self::BELONGS_TO, 'Curso', 'curso'),
			'materia0' => array(self::BELONGS_TO, 'Materia', 'materia'),
			'profesor0' => array(self::BELONGS_TO, 'Docentes', 'profesor'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'curso' => 'Curso',
			'materia' => 'Materia',
			'profesor' => 'Profesor',
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
		$criteria->compare('curso',$this->curso);
		$criteria->compare('materia',$this->materia);
		$criteria->compare('profesor',$this->profesor);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return CursoMateria the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
