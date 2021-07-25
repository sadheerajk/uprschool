<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title>Expert Log In | Uprschool</title>
    <link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo base_url().'/images/ico.png';?>" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')
    -->
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1>Expert</a> | Login </h1>
      </div>
      <div class="login-box">
        <div class="login-form">
         <?php $attributes = array("name" => "loginform");
      echo form_open("experts/e_login", $attributes);?>
   
          
          <div class="form-group">

            <label class="control-label">USERNAME</label>
            <input type="text" name="email" value="<?php echo set_value('email'); ?>" placeholder="Email" autofocus class="form-control">
            <span class="text-danger"><?php echo form_error('email'); ?></span>
          </div>
          <div class="form-group">
            <label class="control-label">PASSWORD</label>
            <input type="password" name="password" value="<?php echo set_value('password'); ?>" placeholder="Password" class="form-control">
            <span class="text-danger"><?php echo form_error('password'); ?></span>
          </div>
              <div class="form-group">
                        <select name="e_type" id="demoSelect" class="form-control select2-hidden-accessible" class="form-control col-md-8" tabindex="-1" aria-hidden="true">  
                  <option>Select Expert</option>
                    <option name="cplusplus" value="cplusplus">C++ Expert</option>
                    <option name="html" value="html">HTML + Javascript Expert</option>
                    <option name="php" value="php" >PHP Expert</option>
                </select>
                <span class="text-danger"><?php echo form_error('e_type'); ?></span>
</div>
          <div class="form-group">
            <div class="utility">
              <div class="animated-checkbox">
                <label class="semibold-text">
                  <input type="checkbox"><span class="label-text">Stay Signed in</span>
                </label>
              </div>
              <p class="semibold-text mb-0"><a id="toFlip" href="#">Forgot Password ?</a></p>
            </div>
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block">SIGN IN <i class="fa fa-sign-in fa-lg"></i></button>
          </div>
          <?php echo form_close(); ?>

    <span class="text-danger" style="font-size: 14px;font-weight: bold;"><?php echo $this->session->flashdata('msg'); ?></span>
  
    </div>
        </form>
        <form action="index.html" class="forget-form">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Forgot Password ?</h3>
          <div class="form-group">
            <label class="control-label">EMAIL</label>
            <input type="text" placeholder="Email" class="form-control">
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block">RESET <i class="fa fa-unlock fa-lg"></i></button>
          </div>
          <div class="form-group mt-20">
            <p class="semibold-text mb-0"><a id="noFlip" href="#"><i class="fa fa-angle-left fa-fw"></i> Back to Login</a></p>
          </div>
        </form>
      </div>
    </section>
  </body>

</html>