<?php

namespace app\controllers;
use yii\web\Controller;
use Yii;
use app\models\LoginForm;
use app\models\RegistrationForm;
use app\models\User;


class AuthController extends Controller
{
    public function actionLogin(){

        
        $model = new LoginForm;
        // print_r($model);
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
           $user = Yii::$app->user->identity;
           if($user->user_type == 1){
            return $this->redirect(['admin/dashboard']);
           }elseif($user->user_type == 2){
            return $this->redirect(['manager/dashboard']);
           }elseif($user->user_type == 3){
            return $this->redirect(['user/dashboard']);
           }
        }
        return $this->render('login',['model'=>$model]);
    }
    public function actionRegister(){

        $model = new RegistrationForm();
        
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
           
            $user = new User();
            $user->username = $model->username;
            $user->email = $model->email;
            $user->setPassword($model->password);
            $user->user_type = $model->role;
           
            if($user->save()){
                Yii::$app->session->setFlash('success', 'Registration successful. You can now log in.');
                return $this->redirect(['auth/login']);
            }
        }
        return $this->render('register',['model'=>$model]);
    }

    public function actionLogout(){
        Yii::$app->user->logout();

        return $this->goHome();
    }
}