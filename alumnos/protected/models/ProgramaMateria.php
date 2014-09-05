<?php

/**
 * This is the model class for table "programa_materia".
 *
 * The followings are the available columns in table 'programa_materia':
 * @property integer $id
 * @property integer $programa
 * @property integer $materia
 *
 * The followings are the available model relations:
 * @property Materia $materia0
 * @property Programas $programa0
 */
class ProgramaMateria extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'programa_materia';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('programa, materia', 'required'),
            array('programa, materia', 'numerical', 'integerOnly' => true),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, programa, materia', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'materia0' => array(self::BELONGS_TO, 'Materia', 'materia'),
            'programa0' => array(self::BELONGS_TO, 'Programas', 'programa'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'programa' => 'Programa',
            'materia' => 'Materia',
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
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('programa', $this->programa);
        $criteria->compare('materia', $this->materia);

        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return ProgramaMateria the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
