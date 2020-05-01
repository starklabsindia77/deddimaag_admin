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
                            <div class="row p-5">
                                <div class="forms w-100">
                                    <div class="form-group mb-3">
                                        <h4 class="font-weight-bold txt-8b888e" for="search">Video Title:</h4>
                                        <input type="input" class="form-control" placeholder="video title..." id="">
                                    </div>

                                    <div class="form-group">
                                        <h4 class="font-weight-bold txt-8b888e" for="search">Video Link or ID</h4>
                                        <input type="input" class="form-control" placeholder="video link..." id="">
                                    </div>
                                </div>
                                <div class="img-up w-100 text-center mx-auto my-3 d-flex justify-content-center text-center">
                                    <div class="image-upload">
                                        <label for="file-input">
                                            <img src="<?php echo base_url();?>assets/img/mobileFashions/fileupload.png"/>
                                        </label>                                        
                                        <input id="file-input" type="file" />
                                    </div>
                                </div>
                                <div class="my-2 w-100 d-flex justify-content-center text-center">
                                    <button type="button" class="btn p-xx w-25" style="padding:0.7rem !important;border-radius:10px;">Update</button>
                                    <button type="button" class="btn p-xx w-25" style="padding:0.7rem !important;border-radius:10px;">Live</button>
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
        
        <!-- 1st row Start -->
    </div>
</div>