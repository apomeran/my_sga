<?php

class SiteController extends Controller {

    /**
     * Declares class-based actions.
     */
    public function actions() {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
            ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page' => array(
                'class' => 'CViewAction',
            ),
        );
    }

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex() {
        // renders the view file 'protected/views/site/index.php'
        // using the default layout 'protected/views/layouts/main.php'
        $this->render('index');
    }

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError() {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

    /**
     * Displays the contact page
     */
    public function actionContact() {
        $model = new ContactForm;
        if (isset($_POST['ContactForm'])) {
            $model->attributes = $_POST['ContactForm'];
            if ($model->validate()) {
                $name = '=?UTF-8?B?' . base64_encode($model->name) . '?=';
                $subject = '=?UTF-8?B?' . base64_encode($model->subject) . '?=';
                $headers = "From: $name <{$model->email}>\r\n" .
                        "Reply-To: {$model->email}\r\n" .
                        "MIME-Version: 1.0\r\n" .
                        "Content-Type: text/plain; charset=UTF-8";

                mail(Yii::app()->params['adminEmail'], $subject, $model->body, $headers);
                Yii::app()->user->setFlash('contact', 'Thank you for contacting us. We will respond to you as soon as possible.');
                $this->refresh();
            }
        }
        $this->render('contact', array('model' => $model));
    }

    /**
     * Displays the login page
     */
    public function actionLogin() {
        $model = new LoginForm;

        // if it is ajax validation request
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        // collect user input data
        if (isset($_POST['LoginForm'])) {
            $model->attributes = $_POST['LoginForm'];
            // validate user input and redirect to the previous page if valid
            if ($model->validate() && $model->login())
                $this->redirect(Yii::app()->user->returnUrl);
        }
        // display the login form
        $this->render('login', array('model' => $model));
    }

    /**
     * Logs out the current user and redirect to homepage.
     */
    public function actionLogout() {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }
	
	public function getToken($token)
    {
        $model=Users::model()->findByAttributes(array('token'=>$token));
        if($model===null)
            throw new CHttpException(404,'The requested page does not exist.');
        return $model;
    }
 
 
        public function actionVerToken($token)
        {
            $model=$this->getToken($token);
            if(isset($_POST['Ganti']))
            {
                if($model->token==$_POST['Ganti']['tokenhid']){
                    $model->password=md5($_POST['Ganti']['password']);
                    $model->token="null";
                    $model->save();
                    Yii::app()->user->setFlash('ganti','<b>Password has been successfully changed! please login</b>');
                    $this->redirect('?r=site/login');
                    $this->refresh();
                }
            }
            $this->render('verifikasi',array(
            'model'=>$model,
        ));
        }
 
 
        public function actionForgot()
    {
         
            if(isset($_POST['Lupa']))
            {
				$getEmail=$_POST['Lupa']['email'];
				$getModel= User::model()->findByAttributes(array('email'=>$getEmail));
				if ($getModel == null){
					echo "No existe ningun usuario con dicho mail";die;
				}
                $getToken=rand(0, 99999);
                $getTime=date("H:i:s");
                $getModel->token=md5($getToken.$getTime);
                $namaPengirim="Owner Jsource Indonesia";
                $emailadmin="fahmi.j@programmer.net";
                $subjek="Resetear Clave Acceso - Instituto Amanecer / SIACCIA";
                $setpesan="Has exitosamente reseteado tu clave de acceso<br/>
                    <a href='http://yourdomain.com/index.php?r=site/vertoken/view&token=".$getModel->token."'>Haz click aqui para resetear tu clave</a>";
                if($getModel->validate())
				{
                $name='=?UTF-8?B?'.base64_encode($namaPengirim).'?=';
                $subject='=?UTF-8?B?'.base64_encode($subjek).'?=';
                $headers="From: $name <{$emailadmin}>\r\n".
                    "Reply-To: {$emailadmin}\r\n".
                    "MIME-Version: 1.0\r\n".
                    "Content-type: text/html; charset=UTF-8";
                $getModel->save();
                Yii::app()->user->setFlash('forgot','Un enlace para resetear tu clave ha sido enviado a tu email');
                mail($getEmail,$subject,$setpesan,$headers);
                $this->refresh();
            }
 
            }
        $this->render('forgot');
    }

}