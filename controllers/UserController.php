<?php

namespace app\controllers;
use yii\web\Controller;
use Yii;
use app\models\User;


class UserController extends Controller
{
    public function actionDashboard(){

        
       
        return $this->render('udashboard');
    }

}