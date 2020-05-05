<div class="container-fluid flex-grow-1 container-p-y">
    <h4 class="font-weight-bold py-3 mb-0">Dashboard</h4>
    <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
            <li class="breadcrumb-item"><a href="#">Library</a></li>
            <li class="breadcrumb-item active">Home Video</li>
        </ol>
    </div>
    <div class="row">
        <!-- 1st row Start -->
        <div class="col-lg-12">
            <div class="row">
                <div class="col-md-9">
                    <div class="card mb-4">
                        <div class="card-header bg-002B6 text-white p-3">
                            <h6 class="card-title mb-1 font-weight-bold">Home Video</h6>
                        </div>                        
                        <div class="card-body">
                            <form id="data" method="PUT" enctype="multipart/form-data"> 
                                <div class="row p-5">
                                    <div class="forms w-100">
                                        <div class="form-group mb-3">
                                            <h4 class="font-weight-bold txt-8b888e" for="VideoTitle">Video Title:</h4>
                                            <input type="text" class="form-control" placeholder="video title..." id="VideoTitle" name="VideoTitle" value="<?php echo $video->VideoTitle;?>">
                                        </div>

                                        <div class="form-group">
                                            <h4 class="font-weight-bold txt-8b888e" for="VideoLink">Video Link or ID</h4>
                                            <input type="text" class="form-control" placeholder="video link..." id="VideoLink" name="VideoLink" value="<?php echo $video->VideoLink;?>">
                                        </div>
                                    </div>
                                    <div class="img-up w-100 text-center mx-auto my-3 d-flex justify-content-center text-center">
                                        <div class="image-upload">
                                            <div class="upload-btn-wrapper">
                                                <button class="btn">Upload a Media</button>
                                                <input type="file" class="" name="Image" id="Image" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="my-2 w-100 d-flex justify-content-center text-center">
                                        <div class="float-sm-right text-zero">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                        <!-- <button type="submit" class="btn p-xx w-25" style="padding:0.7rem !important;border-radius:10px;">Update</button>
                                        <button type="button" class="btn p-xx w-25" style="padding:0.7rem !important;border-radius:10px;">Live</button> -->
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <img src="<?php echo base_url();?>assets/img/mobileFashions/03.png">
                </div>
                
                
                
            </div>
        </div>
        
        <!-- 1st row Start -->
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.0.js" integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=" crossorigin="anonymous"></script>
<script type="text/javascript">
    $("form#data").submit(function(e) {
        e.preventDefault();    
        var url = "http://18.191.31.131:8000/api/home_video/?id=1";
        var method = $(this).attr('method');
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
               window.location.href='<?php echo base_url() ?>admin/homePage_video';
            }
            else
            {
               window.location.href='<?php echo base_url() ?>admin/dashboard';
               throw new Error('go');
            }
        });
    });
</script>