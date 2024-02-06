<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'project';
$this->params['breadcrumbs'][] = $this->title;
?>
 <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="components-preview wide-md mx-auto">
                                  
                                    <div class="nk-block nk-block-lg">
                                    <?php if (Yii::$app->session->hasFlash('success')): ?>
                                    <span class="text-success"><?php echo Yii::$app->session->getFlash('success');  ?></span>
                                    <?php endif; ?>
                                        <div class="card card-bordered card-preview">
                                            <div class="card-inner">
                                                <div class="preview-block">
                                                    <span class="preview-title-lg overline-title">Add Projects</span>
                                                   
                                                        <div class="col-sm-6">
                                                        <?php $form = ActiveForm::begin(['id' => 'register-form']); ?> 
                                                            <div class="form-group">
                                                                <input type="hidden" name="id" value="<?php if(isset($editdata)){ echo $editdata->id; } ?>">
                                                                <div class="form-control-wrap">
                                                                    <?php if(isset($editdata)){ ?>
                                                                <?= $form->field($model, 'title')->textInput(['class'=>'form-control form-control-lg','placeholder'=>'Enter title here','value'=>$editdata->title]) ?>
                                                                <?php }else{?>   
                                                                    <?= $form->field($model, 'title')->textInput(['class'=>'form-control form-control-lg','placeholder'=>'Enter title here']) ?>
                                                                    <?php } ?>
                                                                <!-- <input type="text" class="form-control" id="title" name="title" placeholder="Enter your title"> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                            <?php if(isset($editdata)){ ?>
                                                            <?= $form->field($model, 'description')->textarea([
                                                                    'class' => 'form-control form-control-lg',
                                                                    'placeholder' => 'Enter description here',
                                                                    'value' => $editdata->description
                                                                ]) ?>
                                                                <?php }else{ ?>
                                                                    <?= $form->field($model, 'description')->textarea([
                                                                    'class' => 'form-control form-control-lg',
                                                                    'placeholder' => 'Enter description here'
                                                                ]) ?>
                                                                <?php } ?>
                                                            </div>
                                                        </div>
                                                        <div class="form-group mt-4">
                                                            <button class="btn btn-primary">submit</button>
                                                        </div>
                                                        <?php ActiveForm::end(); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .card-preview -->
                                        
                            </div>
                        </div>
                    </div>
                </div>

                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="components-preview wide-md mx-auto">
                                    <div class="nk-block-head nk-block-head-lg wide-sm">
                                        
                                    </div><!-- nk-block-head -->
                                    <div class="nk-block nk-block-lg">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <h4 class="nk-block-title">Project List - With Action</h4>
                                                
                                            </div>
                                        </div>
                                        <div class="card card-bordered card-preview">
                                            <table class="table table-tranx">
                                                <thead>
                                                    <tr class="tb-tnx-head">
                                                        <th class="tb-tnx-id"><span class="">#</span></th>
                                                        <th class="tb-tnx-info">
                                                            <span class="tb-tnx-desc d-none d-sm-inline-block">
                                                                <span>Title</span>
                                                            </span>
                                                        </th>
                                                        <th class="tb-tnx-info">
                                                            <span class="tb-tnx-desc d-none d-sm-inline-block">
                                                                <span>Description</span>
                                                            </span>
                                                        </th>
                                                        <th class="tb-tnx-action">
                                                            <span>&nbsp;</span>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $count = 1;
                                                     foreach($allprojects as $projects){
                                             ?>
                                                    <tr class="tb-tnx-item">
                                                        <td class="tb-tnx-id">
                                                            <a href="#"><span><?php echo $count++; ?></span></a>
                                                        </td>
                                                        <td class="tb-tnx-info">
                                                            <div class="tb-tnx-desc">
                                                                <span class="title"><?php echo $projects->title; ?></span>
                                                            </div>
                                                        </td>
                                                        <td class="tb-tnx-info">
                                                            <div class="tb-tnx-desc">
                                                                <span class="title"><?php echo $projects->description; ?></span>
                                                            </div>
                                                        </td>
                                                       
                                                        <td class="tb-tnx-action">
                                                            <div class="dropdown">
                                                                <a href="/site/project/?id=<?php echo $projects->id; ?>" class="btn btn-primary">Edit</a>
                                                                <a href="/site/project/?delete_id=<?php echo $projects->id;  ?>" class="btn btn-danger">Delete</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <?php } ?>
                                                   
                                                </tbody>
                                            </table>
                                        </div><!-- .card-preview -->
                                    </div><!-- nk-block -->
                                    
                            </div>
                        </div>
                    </div>
                </div>