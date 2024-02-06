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
                
                <div class="card card-bordered">
                    <div class="card-inner card-inner-lg">
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h4 class="nk-block-title">Register</h4>
                                <div class="nk-block-des">
                                    <p>Create New Dashlite Account</p>
                                </div>
                            </div>
                        </div>
                        <?php $form = ActiveForm::begin(['id' => 'register-form']); ?>
                            <div class="form-group">
                                <div class="form-control-wrap">
                                <?= $form->field($model, 'username')->textInput(['autofocus' => true ,'class' => 'form-control form-control-lg','placeholder'=>'Enter your name']) ?>
                                
                                </div>
                            </div>
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
                            <?= $form->field($model, 'password_repeat')->passwordInput(['class'=>'form-control form-control-lg','placeholder'=>'Confirm your passcode']) ?>
                            </div>
                            <div class="form-group">
                            <?= $form->field($model, 'role')->dropDownList(
                                    ['1' => 'Admin', '2' => 'Manager', '3' => 'User'],
                                    ['prompt' => 'Select an option', 'class' => 'form-control form-control-lg']
                                ) ?>

                            </div>
                            <div class="form-group">
                            <?= Html::submitButton('Register', ['class' => 'btn btn-lg btn-primary btn-block', 'name' => 'register-button']) ?>
                            </div>
                           
                    <?php ActiveForm::end(); ?>
                        <div class="form-note-s2 text-center pt-4"> Already have an account? <a href="login"><strong>Sign in instead</strong></a>
                        
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
