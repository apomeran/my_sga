<?php

/**
 * Overload of CWebUser to set some more methods.
 */
class SGAUser extends CWebUser
{

		public function isValidSon($id){
			
			if (Yii::app()->user->isStandardUser() && !Yii::app()->user->isAdmin() && !Yii::app()->user->isPreceptor()){
				$padres = Padres::model()->findByAttributes(array('usuario'=>$this->id));
				$alumnos = Alumnos::model()->findAllByAttributes(array(), "padreid = " .$padres->idpadre. " OR madreid = " .$padres->idpadre);
				foreach($alumnos as $a){
					if ($id == $a->idalumno)
						return true;
				}
			}
			
			if (Yii::app()->user->isExclusivePreceptor()){
				$alumno = Alumnos::model()->findByPk($id);
				if ($alumno == null)
					return false;
				return $this->isValidCurso($alumno->cursoactualid);
			}
			
			
			return Yii::app()->user->isAdmin();
		}

		
		public function getSons(){
			$id_sons = array();
			$padres = Padres::model()->findByAttributes(array('usuario'=>$this->id));
			$alumnos = Alumnos::model()->findAllByAttributes(array(), "padreid = " .$padres->idpadre. " OR madreid = " .$padres->idpadre);
			$i = 0;
			foreach($alumnos as $a){
				$id_sons[$i][0] = $a->idalumno;
				$id_sons[$i][1] = "(" . $a->codigoalumno .")";
				$i++;
			}
			return $id_sons;
		}
		
		public function isAdmin(){
		   if (!Yii::app()->user->isGuest)
			return $this->rol >= 3;
		   return false;
		}
		
		public function isValidCurso($id){
			
			if ($this->rol == 2){
				$r = Preceptores::model()->findAllByAttributes(array(), "usuario = " . $this->id . " AND curso = " . $id);
				return (count($r) > 0);
			}
			return false;
		}
		
		public function getPreceptorCursos(){
			$response = array();
			
			if (Yii::app()->user->isExclusivePreceptor()){
			
				$r = Preceptores::model()->findByAttributes(array(), "usuario = " . $this->id );
			    $response = Curso::model()->findAllByAttributes(array(), "nivelid != 1 AND cursoid = " . $r->curso0->cursoid);
			}
			if (Yii::app()->user->isExclusiveAdmin()){
			
				$response = Curso::model()->findAllByAttributes(array(), "nivelid != 1");
			}
			
			return $response;
		}
		
		public function isPreceptor(){
		   if (!Yii::app()->user->isGuest)
 			return $this->rol >= 2;
		   return false;	
		}
		
		public function isExclusivePreceptor(){
		   if (!Yii::app()->user->isGuest)
 			return $this->rol == 2;
		   return false;	
		}
		
		public function isExclusiveAdmin(){
		   if (!Yii::app()->user->isGuest)
 			return $this->rol == 3;
		   return false;	
		}
		
		public function isStandardUser(){
		   if (!Yii::app()->user->isGuest)
			return $this->rol >= 1;
		   return false;
		}
		
		public function getuserName(){
			return $this->username;
		}
		
		
       
}