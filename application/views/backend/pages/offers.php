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
            <div class="float-sm-right text-zero">
                <button type="button" class="btn btn-primary"><a onclick="showAjaxModal('<?php echo base_url('modal/popup/model_add_offers/');?>')">Add Offers</a></button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-md-9">
                    <div class="card mb-4">
                        <div class="card-header bg-002B6 text-white p-3">
                            <h6 class="card-title mb-1 font-weight-bold">Offers</h6>
                        </div>
                        <div class="card-body">
                            <div class="my-4 d-flex justify-content-center text-center"></div>  
                            <div class="tab-content m-7rem">
                                <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <?php foreach ($offers as $row):;?>                                   
                                    <div class="tab_01  mb-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <img src="http://18.191.31.131:8000/api<?php echo $row->Image;?>" style="border: 2px dotted #b6b0b0; height: 200px; width: 200px;">
                                                    </div>
                                                    <div class="col-md-9 pt-x">
                                                        <div class="row  ml-1">
                                                            <div class="input-group mb-3">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">Title:</span>
                                                                </div>
                                                                <input type="text" class="form-control" value="<?php echo $row->Title;?>">
                                                            </div>
                                                        </div>
                                                        <div class="d-flex">                                            
                                                            <div class="flex-fill col-xs-6">
                                                                <button type="button" class="p-xx1"><a onclick="showAjaxModal('<?php echo base_url('modal/popup/model_edit_offers/'.$row->id);?>')">Edit</a></button>
                                                            </div>
                                                            <div class="flex-fill col-xs-6">
                                                                <button type="button" class="p-xx1"><a onclick="confirm_modal('<?php echo base_url('admin/offers/delete/'.$row->id);?>');">Delete</a></button>
                                                            </div>
                                                        </div>                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach;?>                                           
                                </div>                                                                  
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <img src="<?php echo base_url();?>assets/img/mobileFashions/03.png">
                </div>   
            </div>
        </div>     
    </div>
</div>