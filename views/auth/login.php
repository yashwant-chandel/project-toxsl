<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'login';
$this->params['breadcrumbs'][] = $this->title;
?> <div class="nk-app-root">
<!-- main @s -->
<div class="nk-main ">
    <!-- wrap @s -->
    <div class="nk-wrap nk-wrap-nosidebar">
        <!-- content @s -->
        <div class="nk-content ">
            <div class="nk-block nk-block-middle nk-auth-body wide-xs">
            <?php if (Yii::$app->session->hasFlash('success')): ?>
   <span class="text-success"><?php echo Yii::$app->session->getFlash('success');  ?></span>
<?php endif; ?>
                <div class="card card-bordered">
                    <div class="card-inner card-inner-lg">
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h4 class="nk-block-title">Login</h4>
                                <div class="nk-block-des">
                                </div>
                            </div>
                        </div>
                        <?php $form = ActiveForm::begin(['id' => 'register-form']); ?>
                            
                            <div class="form-group">
                                <div class="form-control-wrap">
                                <?= $form->field($model, 'email')->textInput(['type'=>'email','class' => 'form-control form-control-lg','placeholder'=>'Enter your email address or username']) ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-control-wrap">
                                <?= $form->field($model, 'password')->passwordInput(['id'=>'password','class'=>'form-control form-control-lg','placeholder'=>'Enter your passcode']) ?>    
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-lg btn-primary btn-block">login</button>
                            </div>
                            <?php ActiveForm::end(); ?>
                        <div class="form-note-s2 text-center pt-4"> Don't have an account? <a href="register"><strong>Sign up instead</strong></a>
                        </div>
                        
                    </div>
                </div>
            </div>
            
        </div>
        <!-- wrap @e -->
    </div>
    <!-- content @e -->
</div>
<!-- main @e -->
</div>
