<?php

namespace app\controllers;
use yii\web\Controller;
use Yii;
use app\models\User;


class AdminController extends Controller
{
    public function actionDashboard(){

        $userlist = User::find()->all();
       
        return $this->render('adashboard',['userlist'=>$userlist]);
    }

}