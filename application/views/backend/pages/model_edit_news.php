<?php $info = $this->crud_model->get_news_id($param2);
?> 

<form   id="data" method="PUT" enctype="multipart/form-data">
   
    <div class="row">
        <div class="col-md-12 form-group mb-3">
            <label for="Title">Heading</label>
            <input type="text" class="form-control" id="Title" name="Title" value="<?php echo $info[0]->Title;?>" />
        </div>
        <div class="col-md-6 form-group mb-3">
            <label for="SubHeading">Sub Heading</label>
            <input class="form-control" id="SubHeading" name="SubTitle" type="text" value="<?php echo $info[0]->SubTitle;?>"/>
        </div>
        <div class="col-md-6 form-group mb-3">
            <label for="ContributedBy">Contributed By</label>
            <input class="form-control" id="ContributedBy" name="ContributedBy" type="text" value="<?php echo $info[0]->ContributedBy
            ;?>"/>
        </div>
        <div class="col-md-4 form-group mb-3">
            <label for="InstaID">Insta ID</label>
            <input class="form-control" type="text" id="InstaID"  name="InstagramId" value="<?php echo $info[0]->InstagramId;?>"/>
        </div>
        <div class="col-md-4 form-group mb-3">
            <label for="FacebookID">Facebook ID</label>
            <input class="form-control" type="text" id="FacebookID" name="FaceBookId" value="<?php echo $info[0]->FaceBookId;?>"/>
        </div>
        <div class="col-md-4 form-group mb-3">
            <label for="TwitterID">Twitter ID</label>
            <input class="form-control" id="TwitterID" type="text" name="TwitterId" value="<?php echo $info[0]->TwitterId;?>"/>
        </div>
        <div class="col-md-12 form-group mb-3">
            <label for="Content">Content</label>
            <textarea class="form-control" id="Content" name="Content" style="height: 300px;"><?php echo $info[0]->Content;?></textarea>
        </div>
        <div class="col-md-6 form-group mb-3">
            <div class="upload-btn-wrapper">
                <button class="btn">Upload a Media</button>
                <input type="file" class="" name="Image" id="Image" />
            </div>
        </div>                                       
        
        <div class="col-md-6 form-group mb-3">
            <div class="float-sm-right text-zero">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div> 
    </div>
</form>
<script src="https://code.jquery.com/jquery-3.5.0.js" integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=" crossorigin="anonymous"></script>
<script type="text/javascript">
    $("form#data").submit(function(e) {
        e.preventDefault();    
        //var formData = new FormData(this);
        var url = "http://18.191.31.131:8000/api/news/?id=<?php echo $info[0]->id;?>";
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