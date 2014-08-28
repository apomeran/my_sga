<?php

/**
 * This is the model class for table "curso".
 *
 * The followings are the available columns in table 'curso':
 * @property integer $cursoid
 * @property integer $ano_calendario
 * @property string $ano_academico
 * @property integer $nivelid
 * @property integer $turnoid
 * @property string $division_salita
 *
 * The followings are the available model relations:
 * @property Alumnos[] $alumnoses
 * @property Nivel $nivel
 * @property Turnos $turno
 * @property CursoAlumno[] $cursoAlumnos
 */
class Curso extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'curso';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ano_academico', 'required'),
			array('ano_calendario, nivelid, turnoid', 'numerical', 'integerOnly'=>true),
			array('division_salita', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('cursoid, titular, ano_calendario, ano_academico, nivelid, turnoid, division_salita', 'safe', 'on'=>'search'),
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
			'alumnoses' => array(self::HAS_MANY, 'Alumnos', 'cursoactualid'),
			'nivel' => array(self::BELONGS_TO, 'Nivel', 'nivelid'),
			'turno' => array(self::BELONGS_TO, 'Turnos', 'turnoid'),
			'cursoAlumnos' => array(self::HAS_MANY, 'CursoAlumno', 'curso'),
		);
	}
	
	public function getPeriodoName(){
	if	($this->nivelid == 1){ // JARDIN
		    return "N/A";
		}
		if($this->nivelid == 2){ // PRIMARIA
			return "Bimestre";
		}
		if($this->nivelid == 3){ // SECUNDARIO
			return "Trimestre";
		}
	}
	
	public function getPeriodosCount(){
	if	($this->nivelid == 1){ // JARDIN
		    return -1;
		}
		if($this->nivelid == 2){ // PRIMARIA
			return 4;
		}
		if($this->nivelid == 3){ // SECUNDARIO
			return 3;
		}
	}
	
	public function getLayout(){
		
		if($this->nivelid == 1){ // JARDIN
		    return 'N/A';
		}
		if($this->nivelid == 2){ // PRIMARIA
			return '  <th>Materia</th>  <th>1º Bimestre</th>   <th>2º Bimestre</th>   <th>3º Bimestre</th> <th>4º Bimestre</th> ';
		}
		if($this->nivelid == 3){ // SECUNDARIO
			return '  <th>Materia</th>  <th>1º Trimestre</th>   <th>2º Trimestre</th>   <th>3º Trimestre</th>';
		}
	
	}
	
	public function getMinLayout(){
		
		if($this->nivelid == 1){ // JARDIN
		    return 'N/A';
		}
		if($this->nivelid == 2){ // PRIMARIA
			return '  <th></th>  <th>1º Bimestre</th>   <th>2º Bimestre</th>   <th>3º Bimestre</th> <th>4º Bimestre</th> ';
		}
		if($this->nivelid == 3){ // SECUNDARIO
			return '  <th></th>  <th>1º Trimestre</th>   <th>2º Trimestre</th>   <th>3º Trimestre</th>';
		}
	
	}
	
	public function getNombre(){
		return  $this->ano_calendario . " - " . $this->ano_academico . " " . $this->division_salita . " (" . $this->nivel->nombre . ") (" . $this->turno->nombre . ") ";
	}
	
	
	public function getAcademico() {
				$list = array('Jardin' => 'Jardin','1º'=>'1º', '2º'=>'2º' , '3º'=>'3º', '4º' => '4º', '5º' => '5º', '6º' => '6º', '7º' => '7º' , );
                return $list;
    }
	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cursoid' => 'Cursoid',
			'ano_calendario' => 'Ano Calendario',
			'ano_academico' => 'Ano Academico',
			'nivelid' => 'Nivelid',
			'turnoid' => 'Turnoid',
			'division_salita' => 'Division Salita',
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
	 
	public function getInasistencias(){
		return array( "0.25" => "Tarde (0.25)" , "0.5" => "Media Falta (0.5)" , "1" => "Falta Completa (1.0)");
	}
	
	
	
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('cursoid',$this->cursoid);
		$criteria->compare('ano_calendario',$this->ano_calendario);
		$criteria->compare('ano_academico',$this->ano_academico,true);
		$criteria->compare('nivelid',$this->nivelid);
		$criteria->compare('turnoid',$this->turnoid);
		$criteria->compare('division_salita',$this->division_salita,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Curso the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
