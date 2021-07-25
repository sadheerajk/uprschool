<!DOCTYPE html>
<html>
    <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Profile Photo</title>

     </head> 
    <body>
    <div class="container" style="margin-top: 130px;">
    </div>



    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                
      
                <h3 class="modal-title"><?=$firstname?></h3>

            </div>
            <div class="modal-body form">
                <form id="form" action="<?php echo base_url()?>signup/photo" class="form-horizontal" enctype="multipart/form-data">
                    <input type="hidden" value="" name="id"/> 
                    <div class="form-body">
                        
                    
                        <div class="form-group">
                            <label class="control-label col-md-3" id="label-photo">Upload Photo </label>
                            <div class="col-md-9">
                                <input name="image" type="file">
                                <span class="help-block"></span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" id="btnSave"  class="btn btn-primary">Upload</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Skip</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->
</body>
</html>
