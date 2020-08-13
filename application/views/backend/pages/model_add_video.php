<form id="data" method="POST" enctype="multipart/form-data">   
    <div class="row">
        <div class="col-md-6 form-group mb-3">
            <label for="VideoTitle">Title</label>
            <input class="form-control" id="VideoTitle" name="VideoTitle" type="text" />
        </div>
        <div class="col-md-6 form-group mb-3">
            <label for="CollectionType">CollectionType</label>
            <select id="CollectionType" name="CollectionType" class="form-control">
                    <option value="">Select</option>
                    <?php 
                    $State = $this->crud_model->get_video_collection();
                    foreach($State as $row):
                    ?>
                    <option value="<?php echo  $row->id;?>">
                    <?php echo  $row->CollectionType;?></option>
                    <?php endforeach;?>
            </select>
        </div>
        <div class="col-md-12 form-group mb-3">
            <label for="YoutubeURL">Youtube Link</label>
            <input class="form-control" id="YoutubeURL" name="YoutubeURL" type="text" />
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
        var url = "http://3.16.150.40:8000/api/videos/";
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
               window.location.href='<?php echo base_url() ?>admin/watch';
            }
            else
            {
               window.location.href='<?php echo base_url() ?>admin/dashboard';
               throw new Error('go');
            } 
        });
    });
</script>