<div class="mycard">
<hr/>
<h2>Registering an account</h2><hr/>
<?php $attributes = array("name" => "signupform");
      echo form_open("signup/index", $attributes);?>

                  <form>
                    <div class="row mb-20">
                      <div class="col-md-4" >
                        <label>First Name</label>
                        <input class="form-control" name="fname" placeholder="Your First Name" type="text" value="<?php echo set_value('fname'); ?>" />
        <span class="text-danger"><?php echo form_error('fname'); ?></span>
                      </div>
                      <div class="col-md-4">
                        <label>Last Name</label>
                        <input class="form-control" name="lname" placeholder="Last Name" type="text" value="<?php echo set_value('lname'); ?>" />
        <span class="text-danger"><?php echo form_error('lname'); ?></span>
                      </div><br>
                    </div> 
                    <div class="row">
                      <div class="col-md-8 mb-20">
                        <label>Email</label>
                       <input class="form-control" name="email" placeholder="Email" type="text" value="<?php echo set_value('email'); ?>" />
        <span class="text-danger"><?php echo form_error('email'); ?></span>
                      </div><br>
                      <div class="clearfix"></div>
                      <div class="col-md-8 mb-20">
                       <label for="subject">Password</label>
        <input class="form-control" name="password" placeholder="Password" type="password" />
        <span class="text-danger"><?php echo form_error('password'); ?></span>
                      </div><br>
                      <div class="clearfix"></div>
                      <div class="col-md-8 mb-20">
                       <label for="subject">Confirm Password</label>
        <input class="form-control" name="cpassword" placeholder="Confirm Password" type="password" />
        <span class="text-danger"><?php echo form_error('cpassword'); ?></span>
                      </div>
                     
                    </div>
                    <div class="row mb-10"><br>
                     <div class="form-group" style="margin-left: 20px;">
        <button name="submit" type="submit" class="btn btn-default">Signup</button>
        <button name="cancel" type="reset" class="btn btn-info">Cancel</button><br>
        <br>
<div class="mess">
         <?php echo form_close(); ?>
      <?php echo $this->session->flashdata('msg'); ?>
</div>
      </div>
                    </div>
                  </form>
                </div>
