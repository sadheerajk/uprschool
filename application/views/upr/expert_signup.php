<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Uprschool | Sign Up</title>

<link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo base_url().'/images/ico.png';?>" />
</head>

<body style="background-color: #e9e9e9;">

<div id="wrapper" style="background-color: #e9e9e9;">


   

<style type="text/css">
    .card{
 
     background: #fff;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
    margin-left: 200px;
    margin-top: 20px;
    margin-right: 300px;
    width: 900px;
}

</style>
                <?php $attributes = array("name" => "signupform","enctype"=> "multipart/form-data");
      echo form_open("experts", $attributes);?>
<div class="col-md-6">
            <div class="card">
              <h3 class="card-title">Registering an Expert</h3>
              <div class="card-footer"></div>
              <div class="card-body">
                <div class="form-horizontal" >
                
                  <div class="form-group">
                    <label class="control-label col-md-3">Firstname</label>
                    <div class="col-md-8">
                      <input type="text" name="fname" placeholder="Type your Firstname" value="<?php echo set_value('fname'); ?>" class="form-control" />
                      <span class="text-danger"><?php echo form_error('fname'); ?></span>
                    </div>
                  </div>

                   <div class="form-group">
                    <label class="control-label col-md-3">Lastname</label>
                    <div class="col-md-8">
                      <input type="text" name="lname" placeholder="Type your Lastname" value="<?php echo set_value('lname'); ?>" class="form-control" />
                      <span class="text-danger"><?php echo form_error('lname'); ?></span>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-3">Email</label>
                    <div class="col-md-8">
                      <input type="email" name="email" placeholder="Enter email address" value="<?php echo set_value('email'); ?>" class="form-control col-md-8" />
                      <span class="text-danger"><?php echo form_error('email'); ?></span>
                    </div>
                  </div>

            

               

                  <div class="form-group">
                    <label class="control-label col-md-3">Birthday</label>
                    <div class="col-md-8">
                      <input type="date" name="date" class="form-control col-md-8">
                      <span class="text-danger"><?php echo form_error('date'); ?></span>
                    </div>

                  </div>

                        <div class="form-group">
                    <label class="control-label col-md-3">Password</label>
                    <div class="col-md-8">
                      <input type="password" name="password" placeholder="Password" class="form-control col-md-8">
                      <span class="text-danger"><?php echo form_error('password'); ?></span>
                    </div>
                    </div>
                    <div class="form-group">
                    <label class="control-label col-md-3">Repeat</label>
                    <div class="col-md-8">
                      <input type="password" name="cpassword" placeholder="Repeat Password" class="form-control col-md-8">
                      <span class="text-danger"><?php echo form_error('cpassword'); ?></span>
                    </div>

                  </div>
                     <div class="form-group">
                    <label class="control-label col-md-3">Gender</label>
                    <div class="col-md-9">
                      <div class="radio-inline">
                        <label>
                          <input type="radio" name="sex" value="Male">Male
                        </label>
                      </div>
                      <div class="radio-inline">
                        <label>
                          <input type="radio" name="sex" value="Female">Female
                        </label>
                      </div>
                      <span class="text-danger"><?php echo form_error('sex'); ?></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3">Identity Proof</label>
                    <div class="col-md-8">
                      <input type="file" class="form-control" name="image">
                     
                    </div>
                 
                 </div>
                  
                

               <div class="form-group">
                    <label class="control-label col-md-3"> Expert Type</label>
                    <div class="col-md-8">
                       

                        <select name="e_type" id="demoSelect" class="form-control select2-hidden-accessible" class="form-control col-md-8" tabindex="-1" aria-hidden="true">
                  <optgroup label="Select Expert" name="e_type">
                  <option>Select Expert</option>
                    <option name="cplusplus" value="cplusplus">C++ Expert</option>
                    <option name="html" value="html">HTML + Javascript Expert</option>
                    <option name="php" value="php" >PHP Expert</option>
        
                  </optgroup>
                  <span class="text-danger"><?php echo form_error('e_type'); ?></span>
                </select>
                      </div>
                    </div>
                  

                </div>
              </div>
              <div class="card-footer">
                <div class="row" style="margin-left: 100px;">
                  <div class="col-md-8 col-md-offset-3">
                    <button type="submit" name="submit" class="btn btn-primary icon-btn"><i class="fa fa-fw fa-lg fa-check-circle"></i>Register</button>&nbsp;&nbsp;&nbsp;<a href="#" class="btn btn-default icon-btn"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a><br>
 <?php echo form_close(); ?>
      <?php echo $this->session->flashdata('msg'); ?> 
                  </div>
                          
     
                </div>
              </div>
            </div>

          </div>

    
                                                        
</div>
</div>
</div>
                    <!-- /.panel -->
                 
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->

</body>

</html>
