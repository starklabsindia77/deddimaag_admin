<script type="text/javascript">
	function showAjaxModal(url)
	{
		// LOADING THE AJAX MODAL
		jQuery('#modal_ajax').modal('show', {backdrop: 'true'});

		// SHOW AJAX RESPONSE ON REQUEST SUCCESS
		$.ajax({
			url: url,
			success: function(response)
			{
				jQuery('#modal_ajax .modal-body').html(response);
			}
		});
	}
</script>
    <!-- (Ajax Modal)-->


    <div class="modal fade bd-example-modal-lg" id="modal_ajax" tabindex="-1" role="dialog" aria-labelledby="modal_ajax" aria-hidden="true" >
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5> -->
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
             

                </div>
                <!-- <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary ml-2" type="button">Save changes</button>
                </div> -->
            </div>
        </div>
    </div>



    <script type="text/javascript">
    function confirm_modal(delete_url, modal_type)
    {
        if (modal_type === 'generic_confirmation') {
            jQuery('#modal-generic_confirmation').modal('show', {backdrop: 'static'});
            document.getElementById('update_link').setAttribute('href' , delete_url);
        }
        else{
            jQuery('#modal-4').modal('show', {backdrop: 'static'});
            document.getElementById('delete_link').setAttribute('href' , delete_url);
        }
    }
    </script>

    <!-- (Normal Modal)-->
    <div class="modal fade" id="modal-4">
        <div class="modal-dialog">
            <div class="modal-content" style="margin-top:100px;">

                <div class="modal-header">
                    <h4 class="modal-title" style="text-align:center;">Are you sure to delete this information ?</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>


                <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
                    <a href="#" class="btn btn-danger" id="delete_link"><?php echo 'delete';?></a>
                    <button type="button" class="btn btn-info" data-dismiss="modal"><?php echo 'cancel';?></button>
                </div>
            </div>
        </div>
    </div>

    <!-- (generic_confirmation Modal)-->
    <div class="modal fade" id="modal-generic_confirmation">
        <div class="modal-dialog">
            <div class="modal-content" style="margin-top:100px;">

                <div class="modal-header">
                    <h4 class="modal-title" style="text-align:center;"><?php echo 'are_you_sure_to_update_this_information'; ?> ?</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>


                <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
                    <a href="#" class="btn btn-danger" id="update_link"><?php echo 'yes';?></a>
                    <button type="button" class="btn btn-info" data-dismiss="modal"><?php echo 'no';?></button>
                </div>
            </div>
        </div>
    </div>
