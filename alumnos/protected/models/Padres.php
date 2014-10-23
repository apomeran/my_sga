<?php

/**
 * This is the model class for table "padres".
 *
 * The followings are the available columns in table 'padres':
 * @property integer $idpadre
 * @property integer $usuario
 * @property string $nombre
 * @property string $apellido
 * @property string $observaciones
 * @property string $dni
 * @property string $mail
 * @property string $telefono_fijo
 * @property string $telefono_celular
 *
 * The followings are the available model relations:
 * @property Alumnos[] $alumnoses
 * @property Alumnos[] $alumnoses1
 * @property User $usuario0
 */
class Padres extends CActiveRecord {
	
	
    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'padres';
    }
	
    
    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
			
            array('nombre, apellido, observaciones', 'length', 'max' => 255),
            array('dni, mail, telefono_fijo, telefono_celular', 'length', 'max' => 45),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('idpadre, nombre, apellido, observaciones, dni, mail, telefono_fijo, telefono_celular', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'alumnoses' => array(self::HAS_MANY, 'Alumnos', 'madreid'),
            'alumnoses1' => array(self::HAS_MANY, 'Alumnos', 'padreid'),
            'usuario0' => array(self::BELONGS_TO, 'User', 'usuario'),
        );
    }

    public function getFullname() {
        return $this->nombre . " " . $this->apellido;
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'idpadre' => 'Idpadre',
            'usuario' => 'Usuario',
            'nombre' => 'Nombre',
            'apellido' => 'Apellido',
            'observaciones' => 'Observaciones',
            'dni' => 'Dni',
            'mail' => 'Mail',
            'telefono_fijo' => 'Telefono Fijo',
            'telefono_celular' => 'Telefono Celular',
            'fullname' => "Nombre de Padre/Madre",
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

        $criteria->compare('idpadre', $this->idpadre);
        $criteria->compare('nombre', $this->nombre, true);
        $criteria->compare('apellido', $this->apellido, true);
        $criteria->compare('observaciones', $this->observaciones, true);
        $criteria->compare('dni', $this->dni, true);
        $criteria->compare('mail', $this->mail, true);
        $criteria->compare('telefono_fijo', $this->telefono_fijo, true);
        $criteria->compare('telefono_celular', $this->telefono_celular, true);

        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Padres the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
