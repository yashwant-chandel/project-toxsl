<?php

namespace app\controllers;
use yii\web\Controller;
use Yii;
use app\models\User;
use app\models\Projects;


class ManagerController extends Controller
{
    public function actionDashboard(){
        $projects = Projects::find()->all();
       
        return $this->render('mdashboard',['projects'=>$projects]);
    }

}