<!-- [ content ] Start -->
<div class="container-fluid flex-grow-1 container-p-y">
    <h4 class="font-weight-bold py-3 mb-0">Dashboard</h4>
    <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
            <li class="breadcrumb-item"><a href="#">Library</a></li>
            <li class="breadcrumb-item active">Data</li>
        </ol>
    </div>
    <div class="row">
        <!-- 1st row Start -->
        <div class="col-lg-12">
            <div class="row">
                <div class="col-md-9">
                    <div class="card mb-4">
                        <div class="card-header bg-002B6 text-white p-3">
                            <h6 class="card-title mb-1 font-weight-bold">News</h6>
                        </div>
                        <div class="card-body">
                            <div class="my-4 d-flex justify-content-center text-center">
                                <!--tabs and 3 buttons-->
                                <ul class="nav nav-tabs text-center" id="myTab" role="tablist">
                                    <li class="nav-item w-150">
                                        <a class="nav-link active nav-butn ash-btn" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                                        aria-selected="true">Posted</a>
                                    </li>
                                    <li class="nav-item w-150">
                                        <a class="nav-link nav-butn ash-btn" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
                                        aria-selected="false"nav-butn>Create</a>
                                    </li>
                                    <li class="nav-item w-150">
                                        <a class="nav-link nav-butn ash-btn" id="messages-tab" data-toggle="tab" href="#messages" role="tab" aria-controls="messages"
                                        aria-selected="false">Received</a>
                                    </li>
                                    
                                    </ul>
                                </div>  
                                    <div class="tab-content m-7rem">
                                    <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">

                                        <div class="droping">
                                            <div class="input-group">
                                                <select class="custom-select">
                                                    <option>Filter</option>
                                                    <option>One</option>
                                                    <option>Two</option>
                                                    <option>Three</option>
                                                </select>
                                                <input type="text" class="form-control" placeholder="Search blog posts...">
                                                <span class="input-group-append">
                                                    <button class="btn p-xx" type="button">Go!</button>
                                                </span>
                                            </div>
                                        </div>


                                        <div class="table-responsive">
                                            <!-- Table with panel -->
                                            <div class="card card-cascade narrower">

                                                <!--Card image-->
                                            
                                                <!--/Card image-->
                                            
                                                <div class="px-4">
                                            
                                                <div class="table-wrapper">
                                                    <!--Table-->
                                                    <table class="table table-hover mb-0">
                                            
                                                    <!--Table head-->
                                                    <thead>
                                                        <tr>
                                                        <th>
                                                            <input class="form-check-input" type="checkbox" id="checkbox">
                                                            <label class="form-check-label" for="checkbox" class="mr-2 label-table"></label>
                                                        </th>
                                                        
                                                        <th class="th-lg" style="width:200px !important;">
                                                            <a href="">Title
                                                            <i class="fas fa-sort ml-1"></i>
                                                            </a>
                                                        </th>
                                                        <th class="th-lg">
                                                            <a href="">Blog
                                                            <i class="fas fa-sort ml-1"></i>
                                                            </a>
                                                        </th>
                                                        <th class="th-lg" style="width:200px !important;">
                                                            <a href="">Author
                                                            <i class="fas fa-sort ml-1"></i>
                                                            </a>
                                                        </th>
                                                        <th class="th-lg">
                                                            <a href="">Date
                                                            <i class="fas fa-sort ml-1"></i>
                                                            </a>
                                                        </th>
                                                        
                                                        </tr>
                                                    </thead>
                                                    <!--Table head-->
                                            
                                                    <!--Table body-->
                                                    <tbody>
                                                        <tr>
                                                        <th scope="row">
                                                            <input class="form-check-input" type="checkbox" id="checkbox1">
                                                            <label class="form-check-label" for="checkbox1" class="label-table"></label>
                                                        </th>
                                                        
                                                        <td><img src="<?php echo base_url();?>assets/img/mobileFashions/product.png" class="mr-2"><span><a href="#" class="mr-2" style="color:#147ee1">environment</a></span><span class="badge badge-default"> hidden</span></td>
                                                        <td>News</td>
                                                        <td>Word fashions</td>
                                                        <td>02-03-2020</td>
                                                        
                                                        </tr>
                                                        <tr>
                                                        <th scope="row">
                                                            <input class="form-check-input" type="checkbox" id="checkbox2">
                                                            <label class="form-check-label" for="checkbox2" class="label-table"></label>
                                                        </th>
                                                        
                                                        <td><img src="<?php echo base_url();?>assets/img/mobileFashions/product.png" class="mr-2"><span><a href="#" class="mr-2" style="color:#147ee1">environment</a></span><span class="badge badge-default"> hidden</span></td>
                                                        <td>News</td>
                                                        <td>Venky brands</td>
                                                        <td>02-03-2020</td>
                                                        
                                                        </tr>
                                                        <tr>
                                                        <th scope="row">
                                                            <input class="form-check-input" type="checkbox" id="checkbox3">
                                                            <label class="form-check-label" for="checkbox3" class="label-table"></label>
                                                        </th>
                                                        
                                                        <td><img src="<?php echo base_url();?>assets/img/mobileFashions/product.png" class="mr-2"><span><a href="#" class="mr-2" style="color:#147ee1">environment</a></span><span class="badge badge-default"> hidden</span></td>
                                                        <td>News</td>
                                                        <td>Manasa flowers</td>
                                                        <td>03-03-2020</td>
                                                        
                                                        </tr>
                                                        <tr>
                                                        <th scope="row">
                                                            <input class="form-check-input" type="checkbox" id="checkbox4">
                                                            <label class="form-check-label" for="checkbox4" class="label-table"></label>
                                                        </th>
                                                        
                                                        <td><img src="<?php echo base_url();?>assets/img/mobileFashions/product.png" class="mr-2"><span><a href="#" class="mr-2" style="color:#147ee1">environment</a></span><span class="badge badge-default"> hidden</span></td>
                                                        <td>News</td>
                                                        <td>Priay Brands</td>
                                                        <td>05-03-2020</td>
                                                        
                                                        </tr>
                                                        <tr>
                                                        <th scope="row">
                                                            <input class="form-check-input" type="checkbox" id="checkbox5">
                                                            <label class="form-check-label" for="checkbox5" class="label-table"></label>
                                                        </th>
                                                        
                                                        <td><img src="<?php echo base_url();?>assets/img/mobileFashions/product.png" class="mr-2"><span><a href="#" class="mr-2" style="color:#147ee1">environment</a></span><span class="badge badge-default"> hidden</span></td>
                                                        <td>News</td>
                                                        <td>Nandaka Impressions</td>
                                                        <td>07-03-2020</td>
                                                        
                                                        </tr>
                                                    </tbody>
                                                    <!--Table body-->
                                                    </table>
                                                    <!--Table-->
                                                </div>
                                            
                                                </div>
                                            
                                            </div>
                                            <!-- Table with panel -->
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        
                                    <div class="forms">
                                        <div class="form-group mb-3">
                                            <h4 class="font-weight-bold txt-8b888e" for="search">Main Heading:</h4>
                                            <input type="input" class="form-control" placeholder="Enter Main Heading.." id="">
                                        </div>

                                        <div class="form-group">
                                            <h4 class="font-weight-bold txt-8b888e" for="search">Sub Heading:</h4>
                                            <input type="input" class="form-control" placeholder="Enter Main Heading.." id="">
                                        </div>
                                    </div>


                                    <div class="baddg">
                                        
                                            <button type="button" class="btn  p-xx">Cover Media</button>
                                            <button type="button" class="btn  p-xx">Contributed By</button>
                                            <button type="button" class="btn  p-xx">Insta ID</button>
                                            <button type="button" class="btn  p-xx">Facebook ID</button>
                                            <button type="button" class="btn  p-xx">Twitter ID</button>
                                    </div>

                                    <div class="txt-editor">
                                        <img src="<?php echo base_url();?>assets/img/mobileFashions/editortext.png" class="img-fluid" style="width:100%">
                                    </div>

                                    <div class="my-2 d-flex justify-content-center text-center">
                                        <button type="button" class="btn p-xx">Update</button>
                                        <button type="button" class="btn p-xx">Live</button>
                                    </div>
                                    </div>
                                    <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">
                                        <div class="droping">
                                            <div class="input-group">
                                                <select class="custom-select">
                                                    <option>Filter</option>
                                                    <option>One</option>
                                                    <option>Two</option>
                                                    <option>Three</option>
                                                </select>
                                                <input type="text" class="form-control" placeholder="Search blog posts...">
                                                <span class="input-group-append">
                                                    <button class="btn p-xx" type="button">Go!</button>
                                                </span>
                                            </div>
                                        </div>


                                        <div class="table-responsive">
                                            <!-- Table with panel -->
                                            <div class="card card-cascade narrower">

                                                <!--Card image-->
                                            
                                                <!--/Card image-->
                                            
                                                <div class="px-4">
                                            
                                                <div class="table-wrapper">
                                                    <!--Table-->
                                                    <table class="table table-hover mb-0">
                                            
                                                    <!--Table head-->
                                                    <thead>
                                                        <tr>
                                                        <th>
                                                            <input class="form-check-input" type="checkbox" id="checkbox">
                                                            <label class="form-check-label" for="checkbox" class="mr-2 label-table"></label>
                                                        </th>
                                                        
                                                        <th class="th-lg" style="width:200px !important;">
                                                            <a href="">Title
                                                            <i class="fas fa-sort ml-1"></i>
                                                            </a>
                                                        </th>
                                                        <th class="th-lg">
                                                            <a href="">Blog
                                                            <i class="fas fa-sort ml-1"></i>
                                                            </a>
                                                        </th>
                                                        <th class="th-lg" style="width:200px !important;">
                                                            <a href="">Author
                                                            <i class="fas fa-sort ml-1"></i>
                                                            </a>
                                                        </th>
                                                        <th class="th-lg">
                                                            <a href="">Date
                                                            <i class="fas fa-sort ml-1"></i>
                                                            </a>
                                                        </th>
                                                        
                                                        </tr>
                                                    </thead>
                                                    <!--Table head-->
                                            
                                                    <!--Table body-->
                                                    <tbody>
                                                        <tr>
                                                        <th scope="row">
                                                            <input class="form-check-input" type="checkbox" id="checkbox1">
                                                            <label class="form-check-label" for="checkbox1" class="label-table"></label>
                                                        </th>
                                                        
                                                        <td><img src="<?php echo base_url();?>assets/img/mobileFashions/product1.png" class="mr-2"><span><a href="#" class="mr-2" style="color:#147ee1">environment</a></span><span class="badge badge-default"> hidden</span></td>
                                                        <td>News</td>
                                                        <td>Word fashions</td>
                                                        <td>02-03-2020</td>
                                                        
                                                        </tr>
                                                        <tr>
                                                        <th scope="row">
                                                            <input class="form-check-input" type="checkbox" id="checkbox2">
                                                            <label class="form-check-label" for="checkbox2" class="label-table"></label>
                                                        </th>
                                                        
                                                        <td><img src="<?php echo base_url();?>assets/img/mobileFashions/product1.png" class="mr-2"><span><a href="#" class="mr-2" style="color:#147ee1">environment</a></span><span class="badge badge-default"> hidden</span></td>
                                                        <td>News</td>
                                                        <td>Venky brands</td>
                                                        <td>02-03-2020</td>
                                                        
                                                        </tr>
                                                        <tr>
                                                        <th scope="row">
                                                            <input class="form-check-input" type="checkbox" id="checkbox3">
                                                            <label class="form-check-label" for="checkbox3" class="label-table"></label>
                                                        </th>
                                                        
                                                        <td><img src="<?php echo base_url();?>assets/img/mobileFashions/product1.png" class="mr-2"><span><a href="#" class="mr-2" style="color:#147ee1">environment</a></span><span class="badge badge-default"> hidden</span></td>
                                                        <td>News</td>
                                                        <td>Manasa flowers</td>
                                                        <td>03-03-2020</td>
                                                        
                                                        </tr>
                                                        <tr>
                                                        <th scope="row">
                                                            <input class="form-check-input" type="checkbox" id="checkbox4">
                                                            <label class="form-check-label" for="checkbox4" class="label-table"></label>
                                                        </th>
                                                        
                                                        <td><img src="<?php echo base_url();?>assets/img/mobileFashions/product1.png" class="mr-2"><span><a href="#" class="mr-2" style="color:#147ee1">environment</a></span><span class="badge badge-default"> hidden</span></td>
                                                        <td>News</td>
                                                        <td>Priay Brands</td>
                                                        <td>05-03-2020</td>
                                                        
                                                        </tr>
                                                        <tr>
                                                        <th scope="row">
                                                            <input class="form-check-input" type="checkbox" id="checkbox5">
                                                            <label class="form-check-label" for="checkbox5" class="label-table"></label>
                                                        </th>
                                                        
                                                        <td><img src="<?php echo base_url();?>assets/img/mobileFashions/product1.png" class="mr-2"><span><a href="#" class="mr-2" style="color:#147ee1">environment</a></span><span class="badge badge-default"> hidden</span></td>
                                                        <td>News</td>
                                                        <td>Nandaka Impressions</td>
                                                        <td>07-03-2020</td>
                                                        
                                                        </tr>
                                                    </tbody>
                                                    <!--Table body-->
                                                    </table>
                                                    <!--Table-->
                                                </div>
                                            
                                                </div>
                                            
                                            </div>
                                            <!-- Table with panel -->
                                        </div> 
                                        
                                    </div>
                                    
                                    </div>


                                <!--tabs and 3 buttons-->



                            
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <img src="<?php echo base_url();?>assets/img/mobileFashions/01.png">
                </div>
                
                
                
            </div>
        </div>
        
        <!-- 1st row Start -->
    </div>
    
    <!--<div class="row">
        
        <div class="col-xl-5">
            <div class="card mb-4">
                <div class="card-header with-elements">
                    <h6 class="card-header-title mb-0">Tasks</h6>
                    <div class="card-header-elements ml-auto">
                        <button type="button" class="btn btn-default btn-xs md-btn-flat">Show more</button>
                    </div>
                </div>
                <div style="height: 310px" id="tasks-inner">
                    <div class="card-body">
                        <p class="text-muted small">Today</p>
                        <div class="custom-controls-stacked">
                            <label class="ui-todo-item custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label">Buy products</span>
                                <span class="ui-todo-badge badge badge-outline-default font-weight-normal ml-2">58 mins left</span>
                            </label>
                            <label class="ui-todo-item custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label">Reply to emails</span>
                            </label>
                            <label class="ui-todo-item custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label">Write blog post</span>
                                <span class="ui-todo-badge badge badge-outline-default font-weight-normal ml-2">20 hours left</span>
                            </label>
                            <label class="ui-todo-item custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" checked>
                                <span class="custom-control-label">Wash my car</span>
                            </label>
                        </div>
                    </div>
                    <hr class="m-0">
                    <div class="card-body">
                        <p class="text-muted small">Tomorrow</p>
                        <div class="custom-controls-stacked">
                            <label class="ui-todo-item custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label">Buy antivirus</span>
                            </label>
                            <label class="ui-todo-item custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label">Jane's Happy Birthday</span>
                            </label>
                            <label class="ui-todo-item custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label">Call mom</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Type your task">
                        <div class="input-group-append">
                            <button type="button" class="btn btn-primary">Add</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->

</div>
<!-- [ content ] End -->