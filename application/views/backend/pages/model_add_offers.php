<form id="data" method="POST" enctype="multipart/form-data">   
    <div class="row">
        <div class="col-md-6 form-group mb-3">
            <label for="Heading">Title</label>
            <input class="form-control" id="Heading" name="Title" type="text" />
        </div>
        <div class="col-md-6 form-group mb-3">
            <label for="Heading_2">Coupon</label>
            <input class="form-control" id="Heading_2" name="Coupon" type="text" value="DedDimaag" />
        </div>
        <div class="col-md-12 form-group mb-3">
            <div class="upload-btn-wrapper">
                <button class="btn">Upload a Media</button>
                <input type="file" class="" name="Image" id="Image" />
            </div>
        </div>                                 
        <div class="col-md-12 form-group mb-3">
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
        var url = "http://18.191.31.131:8000/api/codes/";
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
               window.location.href='<?php echo base_url() ?>admin/offers';
            }
            else
            {
               window.location.href='<?php echo base_url() ?>admin/dashboard';
               throw new Error('go');
            } 
        });
    });
</script>