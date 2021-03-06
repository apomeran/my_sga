<?php

/**
 * This is the model class for table "alumnos".
 *
 * The followings are the available columns in table 'alumnos':
 * @property integer $idalumno
 * @property string $nombre
 * @property string $apellido
 * @property string $dni
 * @property integer $cursoactualid
 * @property string $codigoalumno
 * @property integer $padreid
 * @property integer $madreid
 *
 * The followings are the available model relations:
 * @property Curso $cursoactual
 * @property Padres $madre
 * @property Padres $padre
 * @property CursoAlumno[] $cursoAlumnos
 */
class Alumnos extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'alumnos';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('cursoactualid, padreid, madreid', 'numerical', 'integerOnly' => true),
            array('nombre, apellido, dni', 'length', 'max' => 255),
            array('codigoalumno', 'length', 'max' => 45),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('idalumno, nombre, apellido, dni, codigoalumno', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'cursoactual' => array(self::BELONGS_TO, 'Curso', 'cursoactualid'),
            'madre' => array(self::BELONGS_TO, 'Padres', 'madreid'),
            'padre' => array(self::BELONGS_TO, 'Padres', 'padreid'),
            'cursoAlumnos' => array(self::HAS_MANY, 'CursoAlumno', 'alumno'),
        );
    }

    public function getFullname() {
        return $this->nombre . " " . $this->apellido . " (" . $this->codigoalumno . ")";
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'idalumno' => 'Idalumno',
            'nombre' => 'Nombre',
            'apellido' => 'Apellido',
            'dni' => 'Dni',
            'cursoactualid' => 'Curso Actual Id',
            'codigoalumno' => 'Codigo del alumno',
            'padreid' => 'Padre Id',
            'madreid' => 'Madre Id',
            'fullname' => 'Nombre Completo Alumno',
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

        $criteria->compare('idalumno', $this->idalumno);
        $criteria->compare('nombre', $this->nombre, true);
        $criteria->compare('apellido', $this->apellido, true);
        $criteria->compare('dni', $this->dni, true);
        $criteria->compare('cursoactualid', $this->cursoactualid);
        $criteria->compare('codigoalumno', $this->codigoalumno, true);
        $criteria->compare('padreid', $this->padreid);
        $criteria->compare('madreid', $this->madreid);

        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Alumnos the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
