

<!-- [ content ] Start -->
<div class="container-fluid flex-grow-1 container-p-y">
    <h4 class="font-weight-bold py-3 mb-0">Suggestion</h4>
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
                            <h6 class="card-title mb-1 font-weight-bold">Suggestion</h6>
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
                                                    <a href="">Username
                                                    <i class="fas fa-sort ml-1"></i>
                                                    </a>
                                                </th>
                                                <th class="th-lg">
                                                    <a href="">Email
                                                    <i class="fas fa-sort ml-1"></i>
                                                    </a>
                                                </th>                                               
                                                <th class="th-lg">
                                                    <a href="">Suggestion
                                                        <i class="fas fa-sort ml-1"></i>
                                                    </a>
                                                </th>                                                    
                                            </tr>
                                        </thead>
                                        <!--Table head-->
                                
                                        <!--Table body-->
                                        <tbody>
                                            <?php foreach ($suggestion as $key ):?>
                                            <tr>
                                                <td><?php echo $key->Username;?></td>
                                                <td><?php echo $key->Email;?></td>                                
                                                <td><?php echo $key->Suggestion;?></td>
                                            </tr>
                                            <?php endforeach;?>
                                           
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
                <div class="col-md-3">
                    <img src="<?php echo base_url();?>assets/img/mobileFashions/01.png">
                </div>
                
                
                
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