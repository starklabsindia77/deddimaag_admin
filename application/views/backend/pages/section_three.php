<div class="container-fluid flex-grow-1 container-p-y">
    <h4 class="font-weight-bold py-3 mb-0">Dashboard</h4>
    <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
            <li class="breadcrumb-item"><a href="#">Library</a></li>
            <li class="breadcrumb-item active">Watch</li>
        </ol>
    </div>
    <div class="row">
        <!-- 1st row Start -->
        <div class="col-lg-12">
            <div class="row">
                <div class="col-md-9">
                    <div class="card mb-4">
                        <div class="card-header bg-002B6 text-white p-3">
                            <h6 class="card-title mb-1 font-weight-bold">Watch</h6>
                        </div>
                        <div class="card-body">
                            <div class="my-4 d-flex justify-content-center text-center">



                                <!--tabs and 3 buttons-->
                                <ul class="nav nav-tabs text-center" id="myTab" role="tablist">
                                    <li class="nav-item w-150">
                                      <a class="nav-link active nav-butn" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                                        aria-selected="true">Men</a>
                                    </li>
                                    <li class="nav-item w-150">
                                      <a class="nav-link nav-butn" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
                                        aria-selected="false"nav-butn>Women</a>
                                    </li>
                                    <li class="nav-item w-150">
                                      <a class="nav-link nav-butn" id="messages-tab" data-toggle="tab" href="#messages" role="tab" aria-controls="messages"
                                        aria-selected="false">Kids</a>
                                    </li>
                                   
                                    
                                  </ul>
                                </div>  
                                  <div class="tab-content m-7rem">
                                    <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">

                                       <div class="tab_01 mb-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <img src="<?php echo base_url();?>assets/img/mobileFashions/upload.png" style="border: 2px dotted #b6b0b0;">
                                                    </div>

                                                    <div class="col-md-9 pt-x">
                                                        <div class="row  ml-1">
                                                            <div class="row  ml-1">
                                                                <div class="input-group mb-3">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text">Title:</span>
                                                                    </div>
                                                                    <input type="text" class="form-control" placeholder="Collection Name">
                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text"><i class="fa fa-edit"></i></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex">
                                                            <div class="flex-fill col-xs-12">
                                                                
                                                                <button type="button" class="p-xx1">Add Image</button>
                                                            </div>

                                                            <div class="flex-fill col-xs-12">
                                                                
                                                                <button type="button" class="p-xx1">Select Collection</button>
                                                            </div>


                                                            <div class="flex-fill col-xs-12">
                                                                
                                                                <button type="button" class="p-xx1">Delete</button>
                                                            </div>

                                                           
                                                        </div>


                                                        
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                       </div>

                                       <div class="tab_01  mb-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <img src="<?php echo base_url();?>assets/img/mobileFashions/fashio2.png" style="border: 2px dotted #b6b0b0;">
                                                    </div>

                                                    <div class="col-md-9 pt-x">
                                                        <div class="row  ml-1">
                                                            <div class="row  ml-1">
                                                                <div class="input-group mb-3">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text">Title:</span>
                                                                    </div>
                                                                    <input type="text" class="form-control" placeholder="Collection Name">
                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text"><i class="fa fa-edit"></i></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex">
                                                            <div class="flex-fill col-xs-12">
                                                                
                                                                <button type="button" class="p-xx1">Add Image</button>
                                                            </div>

                                                            <div class="flex-fill col-xs-12">
                                                                
                                                                <button type="button" class="p-xx1">Select Collection</button>
                                                            </div>


                                                            <div class="flex-fill col-xs-12">
                                                                
                                                                <button type="button" class="p-xx1">Delete</button>
                                                            </div>

                                                           
                                                        </div>


                                                        
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                       </div>

                                       
                                       <div class="tab_01  mb-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="image-upload">
                                                            <label for="file-input">
                                                              <img src="<?php echo base_url();?>assets/img/mobileFashions/upload.png" style="cursor:pointer;border:2px dotted #b6b0b0;"/>
                                                            </label>
                                                          
                                                            <input id="file-input" type="file" />
                                                          </div>
                                                    </div>

                                                    <div class="col-md-9 pt-x">
                                                        <div class="row  ml-1">
                                                            <div class="input-group mb-3">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">Title:</span>
                                                                </div>
                                                                <input type="text" class="form-control" placeholder="Collection Name">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text"><i class="fa fa-edit"></i></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex">
                                                            <div class="flex-fill col-xs-12">
                                                                
                                                                <button type="button" class="p-xx1">Add Image</button>
                                                            </div>

                                                            <div class="flex-fill col-xs-12">
                                                                
                                                                <button type="button" class="p-xx1">Select Collection</button>
                                                            </div>


                                                            <div class="flex-fill col-xs-12">
                                                                
                                                                <button type="button" class="p-xx1">Delete</button>
                                                            </div>

                                                          
                                                        </div>


                                                        
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                       </div>
                                                
                                       
                                       
                                    </div>
                                   
                                   
                                  </div>


                                <!--tabs and 3 buttons-->



                           
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <img src="<?php echo base_url();?>assets/img/mobileFashions/06.png">
                </div>
               
               
                
            </div>
        </div>
        
        <!-- 1st row Start -->
    </div>
</div>