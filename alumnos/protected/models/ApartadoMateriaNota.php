<?php

/**
 * This is the model class for table "apartado_materia_nota".
 *
 * The followings are the available columns in table 'apartado_materia_nota':
 * @property integer $id
 * @property integer $id_apartado_materia
 * @property integer $alumno
 * @property integer $nota_conceptual
 * @property double $nota_numerica

 * @property integer $periodo
 * @property string $observaciones
 *
 * The followings are the available model relations:
 * @property Alumnos $alumno0
 * @property ApartadoMateria $idApartadoMateria
 * @property NotasConceptuales $notaConceptual
 */
class ApartadoMateriaNota extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'apartado_materia_nota';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('alumno', 'required'),
            array('id_apartado_materia, alumno, nota_conceptual, nota_numerica, periodo', 'numerical', 'integerOnly' => true),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, id_apartado_materia, alumno, periodo, observaciones', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'alumno0' => array(self::BELONGS_TO, 'Alumnos', 'alumno'),
            'idApartadoMateria' => array(self::BELONGS_TO, 'ApartadoMateria', 'id_apartado_materia'),
            'notaConceptual' => array(self::BELONGS_TO, 'NotasConceptuales', 'nota_conceptual'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'id_apartado_materia' => 'Id Apartado Materia',
            'alumno' => 'Alumno',
            'nota_conceptual' => 'Nota Conceptual',
            'periodo' => 'Periodo',
            'observaciones' => 'Observaciones',
            'nota_numerica' => 'Nota',
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
        $criteria->compare('id_apartado_materia', $this->id_apartado_materia);
        $criteria->compare('alumno', $this->alumno);
        $criteria->compare('nota_conceptual', $this->nota_conceptual);
        $criteria->compare('periodo', $this->periodo);
        $criteria->compare('observaciones', $this->observaciones, true);

        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return ApartadoMateriaNota the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
