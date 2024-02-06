
<div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="components-preview wide-md mx-auto">
                                    <div class="nk-block-head nk-block-head-lg wide-sm">
                                    <h2>Manager dashboard</h2>    
                                    </div><!-- nk-block-head -->
                                    <div class="nk-block nk-block-lg">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content d-flex justify-content-between">
                                                <h4 class="nk-block-title">Project List</h4>
                                                <a href="/auth/logout" class="btn btn-danger">logout</a>
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
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $count = 1;
                                                     foreach($projects as $project){
                                                      
                                             ?>
                                                    <tr class="tb-tnx-item">
                                                        <td class="tb-tnx-id">
                                                            <a href="#"><span><?php echo $count++; ?></span></a>
                                                        </td>
                                                        <td class="tb-tnx-info">
                                                            <div class="tb-tnx-desc">
                                                                <span class="title"><?php echo $project->title; ?></span>
                                                            </div>
                                                        </td>
                                                        <td class="tb-tnx-info">
                                                            <div class="tb-tnx-desc">
                                                                <span class="title"><?php echo $project->description; ?></span>
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
