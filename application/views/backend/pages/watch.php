<div class="container-fluid flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-md-9">
            <h4 class="font-weight-bold py-3 mb-0">Dashboard</h4>
            <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="#">Library</a></li>
                    <li class="breadcrumb-item active">Watch</li>
                </ol>
            </div>
        </div>
        <div class="col-md-3">
            <div class="row">
                <div class="col-md-6">
                    <div class="float-sm-right text-zero">
                        <button type="button" class="btn btn-primary" onclick="showAjaxModal('<?php echo base_url('modal/popup/model_add_video_collection/');?>')">Add Collection</button>
                    </div>                    
                </div>
                <div class="col-md-6">
                    <div class="float-sm-right text-zero">
                        <button type="button" class="btn btn-primary"><a onclick="showAjaxModal('<?php echo base_url('modal/popup/model_add_video/');?>')">Add Video</a></button>
                    </div>                    
                </div>
            </div>            
        </div>
    </div>
    <div class="row">       
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
                                        aria-selected="true">Todays Release</a>
                                    </li>
                                    <li class="nav-item w-150">
                                        <a class="nav-link nav-butn" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
                                        aria-selected="false"nav-butn>Featured</a>
                                    </li>
                                    <li class="nav-item w-150">
                                        <a class="nav-link nav-butn" id="messages-tab" data-toggle="tab" href="#messages" role="tab" aria-controls="messages"
                                        aria-selected="false">Trending</a>
                                    </li>
                                    <li class="nav-item w-150">
                                        <a class="nav-link nav-butn" id="collection-tab" data-toggle="tab" href="#collection" role="tab" aria-controls="collection"
                                            aria-selected="false">Collection Name</a>
                                    </li>    
                                </ul>
                            </div>  
                            <div class="tab-content m-7rem">
                                <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <?php $videodata = $this->crud_model->get_videos_by_collection("Latest");
                                    foreach ($videodata as $key ):?>
                                    <div class="tab_01  mb-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <img src="http://3.16.150.40:8000/api<?php echo $key->Image;?>" style="border: 2px dotted #b6b0b0; height: 250px; width: 250px;">
                                                    </div>
                                                    <div class="col-md-9 ">
                                                        <div class="row ">                                                
                                                            <div class="col-md-6 form-group mb-3">
                                                                <label for="Heading">Title</label>
                                                                <input class="form-control" id="Heading" name="Title" type="text" value="<?php echo $key->VideoTitle;?>" />
                                                            </div>
                                                            <div class="col-md-6 form-group mb-3">
                                                                <label for="Heading_2">Video Url</label>
                                                                <input class="form-control" id="Heading_2" name="Coupon" type="text" value="<?php echo $key->YoutubeURL;?>" />
                                                            </div>
                                                            <div class="col-md-4 form-group mb-3">
                                                                <label for="Heading">Views</label>
                                                                <input class="form-control" id="Heading" name="Title" type="text"  value="<?php echo $key->Views;?>" />
                                                            </div>
                                                            <div class="col-md-4 form-group mb-3">
                                                                <label for="Heading_2">Likes</label>
                                                                <input class="form-control" id="Heading_2" name="Coupon" type="text" value="<?php echo $key->Likes;?>" />
                                                            </div>
                                                            <div class="col-md-4 form-group mb-3">
                                                                <div style="margin-top: 15px;">
                                                                    <button class="btn btn-outline-primary m-1" type="button"><a onclick="showAjaxModal('<?php echo base_url('modal/popup/model_edit_video/'.$key->id);?>')">Edit</a></button>
                                                                    <button class="btn btn-outline-primary m-1" type="button"><a onclick="confirm_modal('<?php echo base_url('admin/watch/deleteVideo/'.$key->id);?>');">Delete</a></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach;?>                                       
                                </div>
                                <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">       
                                    <?php $videodata = $this->crud_model->get_videos_by_collection("Featured");
                                    foreach ($videodata as $key ):?>
                                    <div class="tab_01  mb-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <img src="http://3.16.150.40:8000/api<?php echo $key->Image;?>" style="border: 2px dotted #b6b0b0; height: 250px; width: 250px;">
                                                    </div>
                                                    <div class="col-md-9 ">
                                                        <div class="row ">                                                
                                                            <div class="col-md-6 form-group mb-3">
                                                                <label for="Heading">Title</label>
                                                                <input class="form-control" id="Heading" name="Title" type="text" value="<?php echo $key->VideoTitle;?>" />
                                                            </div>
                                                            <div class="col-md-6 form-group mb-3">
                                                                <label for="Heading_2">Video Url</label>
                                                                <input class="form-control" id="Heading_2" name="Coupon" type="text" value="<?php echo $key->YoutubeURL;?>" />
                                                            </div>
                                                            <div class="col-md-4 form-group mb-3">
                                                                <label for="Heading">Views</label>
                                                                <input class="form-control" id="Heading" name="Title" type="text"  value="<?php echo $key->Views;?>" />
                                                            </div>
                                                            <div class="col-md-4 form-group mb-3">
                                                                <label for="Heading_2">Likes</label>
                                                                <input class="form-control" id="Heading_2" name="Coupon" type="text" value="<?php echo $key->Likes;?>" />
                                                            </div>
                                                            <div class="col-md-4 form-group mb-3">
                                                                <div style="margin-top: 15px;">
                                                                    <button class="btn btn-outline-primary m-1" type="button"><a onclick="showAjaxModal('<?php echo base_url('modal/popup/model_edit_video/'.$key->id);?>')">Edit</a></button>
                                                                    <button class="btn btn-outline-primary m-1" type="button"><a onclick="confirm_modal('<?php echo base_url('admin/watch/deleteVideo/'.$key->id);?>');">Delete</a></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach;?>                                 
                                </div>
                                <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">      
                                    <?php $videodata = $this->crud_model->get_videos_by_collection("Trending");
                                    foreach ($videodata as $key ):?>
                                    <div class="tab_01  mb-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <img src="http://3.16.150.40:8000/api<?php echo $key->Image;?>" style="border: 2px dotted #b6b0b0; height: 250px; width: 250px;">
                                                    </div>
                                                    <div class="col-md-9 ">
                                                        <div class="row ">                                                
                                                            <div class="col-md-6 form-group mb-3">
                                                                <label for="Heading">Title</label>
                                                                <input class="form-control" id="Heading" name="Title" type="text" value="<?php echo $key->VideoTitle;?>" />
                                                            </div>
                                                            <div class="col-md-6 form-group mb-3">
                                                                <label for="Heading_2">Video Url</label>
                                                                <input class="form-control" id="Heading_2" name="Coupon" type="text" value="<?php echo $key->YoutubeURL;?>" />
                                                            </div>
                                                            <div class="col-md-4 form-group mb-3">
                                                                <label for="Heading">Views</label>
                                                                <input class="form-control" id="Heading" name="Title" type="text"  value="<?php echo $key->Views;?>" />
                                                            </div>
                                                            <div class="col-md-4 form-group mb-3">
                                                                <label for="Heading_2">Likes</label>
                                                                <input class="form-control" id="Heading_2" name="Coupon" type="text" value="<?php echo $key->Likes;?>" />
                                                            </div>
                                                            <div class="col-md-4 form-group mb-3">
                                                                <div style="margin-top: 15px;">
                                                                    <button class="btn btn-outline-primary m-1" type="button"><a onclick="showAjaxModal('<?php echo base_url('modal/popup/model_edit_video/'.$key->id);?>')">Edit</a></button>
                                                                    <button class="btn btn-outline-primary m-1" type="button"><a onclick="confirm_modal('<?php echo base_url('admin/watch/deleteVideo/'.$key->id);?>');">Delete</a></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach;?>                                                                               
                                </div>
                                <div class="tab-pane" id="collection" role="tabpanel" aria-labelledby="collection-tab">
                                    <div class="tab_01  mb-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
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
                                                                                                                             
                                                                        <th class="th-lg" style="width:200px !important;">
                                                                            <a href="">#
                                                                            <i class="fas fa-sort ml-1"></i>
                                                                            </a>
                                                                        </th>
                                                                        <th class="th-lg">
                                                                            <a href="">Collection Name
                                                                            <i class="fas fa-sort ml-1"></i>
                                                                            </a>
                                                                        </th> 
                                                                        <th class="th-lg">
                                                                            <a href="">Action
                                                                                <i class="fas fa-sort ml-1"></i>
                                                                            </a>
                                                                        </th>                                                   
                                                                    </tr>
                                                                </thead>
                                                                <!--Table head-->
                                                        
                                                                <!--Table body-->
                                                                <tbody>
                                                                    <?php $data = $this->crud_model->get_video_collection();
                                                                     $count = 1;
                                                                    foreach ($data as $key ):?>
                                                                    <tr>
                                                                                                                          
                                                                        <td><?php echo $count++;?></td>
                                                                        <td><?php echo $key->CollectionType;?></td>
                                                                        <td>
                                                                            <button class="btn btn-outline-primary m-1" type="button"><a onclick="confirm_modal('<?php echo base_url('admin/watch/deleteCollection/'.$key->id);?>');">Delete</a></button>
                                                                        </td>                       
                                                                    </tr>
                                                                    <?php endforeach;?>
                                                                   
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
                                        </div>
                                    </div>                                        
                                    <!-- <div class="tab_01  mb-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <img src="<?php echo base_url();?>assets/img/mobileFashions/fashio2.png" style="border: 2px dotted #b6b0b0;">
                                                    </div>

                                                    <div class="col-md-9 pt-x">
                                                        <div class="row  ml-1">
                                                            <div class="input-group mb-3">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">Title:</span>
                                                                </div>
                                                                <input type="text" class="form-control">
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
                                                                
                                                                <button type="button" class="p-xx1">Add to Collection</button>
                                                            </div>


                                                            <div class="flex-fill col-xs-12">
                                                                
                                                                <button type="button" class="p-xx1">Delete</button>
                                                            </div>

                                                            <div class="flex-fill col-xs-12">
                                                                
                                                                <input type="text" class="form-control" placeholder="Search blog posts...">
                                                            </div>
                                                        </div>                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  -->                                                      
                                </div>        
                            </div>                            
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <img src="<?php echo base_url();?>assets/img/mobileFashions/01.png">
                </div>            
            </div>
        </div>
    </div> 
</div>