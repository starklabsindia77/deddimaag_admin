<?php $info = $this->crud_model->get_videos_by_id($param2);
  $video = $info[0];
?> 

<form id="data" method="PUT" enctype="multipart/form-data">   
    <div class="row">
        <div class="col-md-6 form-group mb-3">
            <label for="Heading">Title</label>
            <input class="form-control" id="Heading" name="VideoTitle" type="text" value="<?php echo $video->VideoTitle;?>" />
        </div>
        <div class="col-md-6 form-group mb-3">
            <label for="Heading_2">CollectionType</label>
            <select id="Heading_2" name="CollectionType" class="form-control">
                    <option value="<?php echo $video->CollectionType;?>"><?php echo $video->CollectionType;?></option>
                    <?php 
                    $State = $this->crud_model->get_video_collection();
                    foreach($State as $row):
                    ?>
                    <option value="<?php echo  $row->CollectionType;?>">
                    <?php echo  $row->CollectionType;?></option>
                    <?php endforeach;?>
            </select>
        </div>
        <div class="col-md-12 form-group mb-3">
            <label for="Heading_3">Youtube Link</label>
            <input class="form-control" id="Heading_3" name="YoutubeURL" type="text" value="<?php echo $video->YoutubeURL;?>" />
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
        var url = "http://18.191.31.131:8000/api/videos/?id=<?php echo $video->id;?>";
        var method = $(this).attr('method');
        var form = $('#data')[0];
        // Create an FormData object
        var data = new FormData(form);
        var crsftoken = "csrftoken="+"<?php echo $this->session->userdata('cookie');?>";
        var sessionId = "sessionid="+"<?php echo $this->session->userdata('cookie_2');?>";
        // console.log(crsftoken+";"+sessionId);
        $.ajax({
            url:url,
            type:"put",
            enctype: 'multipart/form-data',
            processData: false,  // Important!
            contentType: false,
            cache: false,
            headers: {"Cookie" : sessionId+"; "+crsftoken},
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