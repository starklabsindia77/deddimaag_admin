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
                            <h6 class="card-title mb-1 font-weight-bold">Home Sections</h6>
                        </div>
                        
                        <div class="card-body">
                            <div class="row p-5">
                                <div class="buttons mx-auto">
                                    <button type="button" class="p-xx btn-block adju">Section One</button>
                                    <button type="button" class="p-xx btn-block adju">Section One</button>
                                    <button type="button" class="p-xx btn-block adju">Section One</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <img src="<?php echo base_url();?>assets/img/mobileFashions/05.png">
                </div>
                
                
                
            </div>
        </div>
    </div>  
</div>

<!-- <script type="text/javascript">
    $( ".buttons mx-auto" ).sortable({
        delay: 150,
        stop: function() {
            var selectedData = new Array();
            $('.row_position>tr').each(function() {
                selectedData.push($(this).attr("id"));
            });
            //updateOrder(selectedData);
        }
    });


    /* function updateOrder(data) {
        $.ajax({
            url:"ajaxPro.php",
            type:'post',
            data:{position:data},
            success:function(){
                alert('your change successfully saved');
            }
        })
    } */
</script> -->