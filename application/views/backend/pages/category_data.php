<!-- [ content ] Start -->
<div class="container-fluid flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-md-9">
            <h4 class="font-weight-bold py-3 mb-0">Category Info</h4>
            <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="#">Library</a></li>
                    <li class="breadcrumb-item active">Data</li>
                </ol>
            </div>
        </div>
        <div class="col-md-3">
            <div class="float-sm-right text-zero">
                <button type="button" class="btn btn-primary"><a onclick="showAjaxModal('<?php echo base_url('modal/popup/model_add_category/');?>')">Add Category</a></button>
            </div>
        </div>
    </div>
    
    <div class="row">
        <!-- 1st row Start -->
        <div class="col-lg-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-header bg-002B6 text-white p-3">
                            <h6 class="card-title mb-1 font-weight-bold">Category</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
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
                                                    <a href="">Category Id
                                                    <i class="fas fa-sort ml-1"></i>
                                                    </a>
                                                </th>
                                                <th class="th-lg">
                                                    <a href="">Titile
                                                    <i class="fas fa-sort ml-1"></i>
                                                    </a>
                                                </th>                                               
                                                <th class="th-lg">
                                                    <a href="">Status
                                                        <i class="fas fa-sort ml-1"></i>
                                                    </a>
                                                </th>
                                                <th class="th-lg">
                                                    <a href="">Created At
                                                        <i class="fas fa-sort ml-1"></i>
                                                    </a>
                                                </th>                                                       
                                            </tr>
                                        </thead>
                                        <!--Table head-->
                                       
                                
                                        <!--Table body-->
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td></td> 
                                                <td></td>                                  
                                                <td></td>
                                            </tr>                                           
                                        </tbody>
                                        <!--Table body-->
                                        </table>
                                        <!--Table-->
                                    </div>
                                
                                    </div>
                                
                                </div>
                            </div>
                                                      
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-3">
                    <img src="<?php echo base_url();?>assets/img/mobileFashions/01.png">
                </div> -->
                
                
                
            </div>
        </div>
        
        <!-- 1st row Start -->
    </div>
</div>
<!-- [ content ] End -->


<!-- custom scripts-->
<script type="text/javascript">
  $(document).ready(function() {
    $('#Content').summernote({height: 300});
    });
</script>