


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
        <div class="col-lg-12">
            <div class="row">
                <div class="col-md-9">
                    <div class="card mb-4">
                        <div class="card-header bg-002B6 text-white p-3">
                            <h6 class="card-title mb-1 font-weight-bold">Quotes</h6>
                        </div>
                        <div class="card-body">
                            <form action="http://3.16.150.40:8000/api/homepage_quotes/?id=1" id="data" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="Heading">Quote One</label>
                                        <input class="form-control" id="Heading" name="Quote1" type="text" value="<?php echo $quote[0];?>" />
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="SubHeading">Quote Two</label>
                                        <input class="form-control" id="SubHeading" name="Quote2" type="text" value="<?php echo $quote[1];?>" />
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="ContributedBy">Quote Three</label>
                                        <input class="form-control" id="ContributedBy" name="Quote3" type="text" value="<?php echo $quote[2];?>"/>
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="InstaID">Quote Four</label>
                                        <input class="form-control" type="text" id="InstaID"  name="Quote4" value="<?php echo $quote[3];?>" />
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="FacebookID">Quote Five</label>
                                        <input class="form-control" type="text" id="FacebookID" name="Quote5" value="<?php echo $quote[4];?>"/>
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="TwitterID">Quote Six</label>
                                        <input class="form-control" id="TwitterID" type="text" name="Quote6" value="<?php echo $quote[5];?>"/>
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="Content">Quote Seven</label>
                                        <input class="form-control" id="Content" name="Quote7" type="text" value="<?php echo $quote[6];?>"/>
                                    </div>
                                     <div class="col-md-6 form-group mb-3">
                                        <label for="FacebookID">Quote Eight</label>
                                        <input class="form-control" type="text" id="FacebookID" name="Quote8" value="<?php echo $quote[7];?>"/>
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="TwitterID">Quote Nine</label>
                                        <input class="form-control" id="TwitterID" type="text" name="Quote9" value="<?php echo $quote[8];?>"/>
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="Content">Quote Ten</label>
                                        <input class="form-control" type="text" id="Content" name="Quote10" value="<?php echo $quote[9];?>"/>
                                    </div>                                       
                                    
                                    <div class="col-md-12 form-group mb-3">
                                        <div class="float-sm-right text-zero">
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </div>
                                    </div> 
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <img src="<?php echo base_url();?>assets/img/mobileFashions/04.png">
                </div>             
            </div>
        </div>
    </div>    
</div>
<!-- [ content ] End -->


<script src="https://code.jquery.com/jquery-3.5.0.js" integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=" crossorigin="anonymous"></script>
<script type="text/javascript">
    $("form#data").submit(function(e) {
        e.preventDefault();    
        //var formData = new FormData(this);
        var url = $(this).attr('action');
        var method = "PUT";
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
               window.location.href='<?php echo base_url() ?>admin/dashboard';
            }
            else
            {
               window.location.href='<?php echo base_url() ?>admin/news';
               throw new Error('go');
            } 
        });
    });
</script>