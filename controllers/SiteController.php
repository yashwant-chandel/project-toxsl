<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\Projects;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionProject(){
       
        $model = new Projects();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if(Yii::$app->request->post()['id']){
                $project = Projects::findOne(Yii::$app->request->post()['id']);
            }else{
                $project = new Projects();
            }
           
            $project->title = $model->title;
            $project->description = $model->description;
            if($project->save()){
                Yii::$app->session->setFlash('success', 'Successfully created project');
                return $this->redirect(['site/project']);
            }
        }
        $allprojects = Projects::find()->all();
        if(isset($_GET['id'])){
            $editdata = Projects::findOne($_GET['id']);
        }else{
            $editdata = null;
        }

        if(isset($_GET['delete_id'])){
            $deletedata = Projects::findOne($_GET['delete_id']);
            $deletedata->delete();
            Yii::$app->session->setFlash('success', 'Successfully deleted project');
            return $this->redirect(['site/project']);
        }else{

        }
        return $this->render('projects',['model'=>$model,'allprojects'=>$allprojects,'editdata'=>$editdata]);
    }
}
