

<!-- [ content ] Start -->
<div class="container-fluid flex-grow-1 container-p-y">
    <h4 class="font-weight-bold py-3 mb-0">News</h4>
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
                                                        <th class="th-lg">
                                                            <a href="">Date
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
                                                    <?php foreach ($news as $key ):?>
                                                    <tr>
                                                                                                          
                                                        <td><img src="http://18.191.31.131:8000/api<?php echo $key->Image;?>" class="mr-2" style="width: 40px; height: 40px;"><span><a href="#" class="mr-2" style="color:#147ee1"><?php echo $key->Title;?></a></span></td>
                                                        <td>News</td>
            
                                                        <td><?php echo $key->PostedDate;?></td>
                                                        <td>
                                                            <button class="btn btn-outline-primary m-1" type="button"><a onclick="showAjaxModal('<?php echo base_url('modal/popup/model_edit_news/'.$key->id);?>')">Edit</a></button>
                                                            <button class="btn btn-outline-primary m-1" type="button"><a onclick="confirm_modal('<?php echo base_url('admin/news/delete/'.$key->id);?>');">Delete</a></button>
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
                                <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <form action="http://3.16.150.40:8000/api/news/" id="data" method="POST" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-12 form-group mb-3">
                                                <label for="Heading">Heading</label>
                                                <input class="form-control" id="Heading" name="Title" type="text" />
                                            </div>
                                            <div class="col-md-6 form-group mb-3">
                                                <label for="SubHeading">Sub Heading</label>
                                                <input class="form-control" id="SubHeading" name="SubTitle" type="text" />
                                            </div>
                                            <div class="col-md-6 form-group mb-3">
                                                <label for="ContributedBy">Contributed By</label>
                                                <input class="form-control" id="ContributedBy" name="ContributedBy" type="text" />
                                            </div>
                                            <div class="col-md-4 form-group mb-3">
                                                <label for="InstaID">Insta ID</label>
                                                <input class="form-control" type="text" id="InstaID"  name="InstagramId" />
                                            </div>
                                            <div class="col-md-4 form-group mb-3">
                                                <label for="FacebookID">Facebook ID</label>
                                                <input class="form-control" type="text" id="FacebookID" name="FaceBookId" />
                                            </div>
                                            <div class="col-md-4 form-group mb-3">
                                                <label for="TwitterID">Twitter ID</label>
                                                <input class="form-control" id="TwitterID" type="text" name="TwitterId" />
                                            </div>
                                            <div class="col-md-12 form-group mb-3">
                                                <label for="Content">Content</label>
                                                <textarea class="form-control" id="Content" name="Content" style="height: 300px;"></textarea>
                                            </div>
                                            <div class="col-md-6 form-group mb-3">
                                                <div class="upload-btn-wrapper">
                                                    <button class="btn">Upload a Media</button>
                                                    <input type="file" class="" name="Image" id="Image" />
                                                </div>
                                            </div>                                       
                                            
                                            <div class="col-md-6 form-group mb-3">
                                                <div class="float-sm-right text-zero">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div> 
                                        </div>
                                    </form>
                                    <script src="https://code.jquery.com/jquery-3.5.0.js" integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=" crossorigin="anonymous"></script>
                                    <script type="text/javascript">
                                        $("form#data").submit(function(e) {
                                            e.preventDefault();    
                                            //var formData = new FormData(this);
                                            var url = $(this).attr('action');
                                            var method = $(this).attr('method');
                                            //var data = $(this).serialize();
                                            console.log(data);
                                            var form = $('#data')[0];

                                            // Create an FormData object
                                            var data = new FormData(form);
                                            $.ajax({
                                                url:url,
                                                type:method,
                                                enctype: 'multipart/form-data',
                                                processData: false,  // Important!
                                                contentType: false,
                                                cache: false,
                                                data:data
                                            }).done(function(data){
                                               if(data !== '')
                                                {
                                                   window.location.href='<?php echo base_url() ?>admin/news';
                                                }
                                                else
                                                {
                                                   window.location.href='<?php echo base_url() ?>admin/dashboard';
                                                   throw new Error('go');
                                                } 
                                            });
                                        });
                                    </script>  
                                    
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
                                                    <?php $cus_news =$this->crud_model->customer_news_api();

                                                    foreach ($cus_news as $key ):?>
                                                    <tr>
                                                                                                          
                                                        <td><img src="http://18.191.31.131:8000/api<?php echo $key->Image;?>" class="mr-2" style="width: 40px; height: 40px;"><span><a href="#" class="mr-2" style="color:#147ee1"><?php echo $key->ArticleTitle;?></a></span></td>
                                                        <td>News</td>
                                                        <th><?php echo $key->CustomerName;?></th>
            
                                                        <td><?php echo $key->CustomerPostedDate;?></td>
                                                        <td>
                                                            <button class="btn btn-outline-primary m-1" type="button"><a onclick="showAjaxModal('<?php echo base_url('modal/popup/model_edit_news/'.$key->id);?>')">View</a></button>
                                                            
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