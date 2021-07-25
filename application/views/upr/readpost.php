<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Uprschool | <?=$posts['title']?> | <?=$posts['cate']?></title>
<link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo base_url().'/images/ico.png';?>" />
</head>
<link href="<?php echo base_url('editors/e/codemirror.css')?>" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('editors/e/midnight.css')?>" rel="stylesheet" type="text/css">
    <script type='text/javascript' src="<?php echo base_url('editors/e/codemirror.js')?>"></script>
    <script type='text/javascript' src="<?php echo base_url('editors/e/clike.js')?>"></script>
    <script type='text/javascript' src="<?php echo base_url('editors/e/php.js')?>"></script> 
    <script type='text/javascript' src="<?php echo base_url('editors/e/xml.js')?>"></script>
    <script type='text/javascript' src="<?php echo base_url('editors/e/css.js')?>"></script>
<script type='text/javascript' src="<?php echo base_url('editors/e/javascript.js')?>"></script>
        
<script type='text/javascript' src="<?php echo base_url('editors/e/htmlmixed.js')?>"></script>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">




<body style="background-color: #e9e9e9;overflow-x: hidden;">


<div id="wrapper" style="background-color: #e9e9e9;">

<style type="text/css">
            
                .navbar{
   background: #fff;
    min-height: 50px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
    position: relative;
    margin-bottom: 30px;

                }
                </style>
        <nav class="navbar navbar-default navbar-static-top" style="background-color: #fff; height: 110px;" role="navigation" style=" height:100px;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
                <a class="navbar-brand" href="<?php echo base_url().'index.php/home/index'?>"><div class="logo" style="margin-top:20px; margin-left:30px;"><img src="<?php echo base_url().'/images/uprlogo.png';?>" style="margin-top:-35px;"  height="100"></div></font></a>
            </div>
            <!-- /.navbar-header -->


            <div>
                           <form method="post" action="<?php echo base_url().'index.php/search/find'?>">
                            <div class="input-group custom-search-form" style="width:670px; margin-left:300px;margin-top:30px;">

                                <input type="text" class="form-control" name="book_name" required="" size="80px" placeholder="Search or Find Anything">
                                <span class="input-group-btn">
                                <button class="btn btn-default"  style="height:34px;" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>

                            </div>
</form>
        
</div>

<?php if ($this->session->userdata('login')){ ?>
<ul class="nav navbar-top-links navbar-right" style="margin-top:-57px; ">
   
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">  
                         <i ><img class="img-circle user-image" width="40" src="<?=base_url()?>/profiles/<?=$photo?>" ></i>  <strong>   <?=$firstname?>  <?=$lastname?> </strong>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="<?php echo base_url().'index.php/profile/index'?>"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li><a href="<?php echo base_url().'index.php/accounts/lock'?>"><i class="fa fa-lock fa-lg"></i> Lock</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url().'index.php/accounts/logout'?>"><i class="fa fa-sign-out fa-fw"></i> Logout  <strong><?=$firstname?>  <?=$lastname?></strong></a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                
            </ul>

 <?php } else{ ?>
                                
                <div class="buttons" style="margin-top:-47px;margin-left:1100px;">
                    <a href="<?php echo base_url().'index.php/signup/index'?>"><button type="button" class="btn btn-default">Sign Up</button></a>
                    <a href="<?php echo base_url().'index.php/login/index'?>"><button type="button" class="btn btn-info">Log in</button></a>     
                    <?php } ?>         
           </div>
      </a>
      </div>
        <style type="text/css">
            
                .navbar-default{
   background: #fff;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2)
        

                }
                </style>
          <style type="text/css">
            
                .navbar-default{
   background: #fff;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
    

                }
                </style>

            <!-- /.navbar-static-side -->
        </nav>
</nav>
</div>

        <div id="page-wrapper"  style="background-color: #e9e9e9; margin-top: -30px;margin-left: 50px;margin-right: 200px; width: 1300px;">
<style type="text/css">
    .panel h3{
        margin-left: 20px;
    }

</style>
                <div class="row" style="margin-left: -30px;">
                <div class="col-lg-8" >
             <div class="pafsdkflnel" style="margin-top:10px;" >
                    <div class="panel panel-default" style="margin-left: 10px;margin-top:0px; margin-right: 20px;background-color: #fff;">
                          
                        <h3 style="margin-left:20px; "> <?=$posts['title']?><h3>
                        <hr/>
                             <iframe width="740" style="margin-top:-10px; " height="360" src="<?=$posts['video']?>?autoplay=1" frameborder="0" allowfullscreen></iframe>
                           
                         <hr/>

<style type="text/css">
.socialsharing_product{
    margin-left: 90px;
}
    .btn-default1 {
  color: #333;
  background-color: #fff;
  border:0px;
  border-color: #ccc; }
  .btn-default1:hover, .btn-default1:focus, .btn-default1:active, .btn-default1.active {
    color: #333;
    background-color: #ebebeb;
    border-color: #adadad; }
  .open .btn-default1.dropdown-toggle {
    color: #333;
    background-color: #ebebeb;
    border-color: #adadad; }
  .btn-default1:active, .btn-default1.active {
    background-image: none; }
  .open .btn-default1.dropdown-toggle {
    background-image: none; }
 

.btn-facebook:hover, .btn-twitter:hover, .btn-google-plus:hover, .btn-pinterest:hover {
  border-color: white; }

.btn-facebook i {
  color: #435f9f; }
.btn-facebook:hover {
  color: white;
  background-color: #435f9f; }
  .btn-facebook:hover i {
    color: white; }

.btn-twitter i {
  color: #00aaf0; }
.btn-twitter:hover {
  color: white;
  background-color: #00aaf0; }
  .btn-twitter:hover i {
    color: white; }

.btn-google-plus i {
  color: #e04b34; }
.btn-google-plus:hover {
  color: white;
  background-color: #e04b34; }
  .btn-google-plus:hover i {
    color: white; }

.btn-pinterest i {
  color: #ce1f21; }
.btn-pinterest:hover {
  color: white;
  background-color: #ce1f21; }
  .btn-pinterest:hover i {
    color: white; }

</style>

<script type="text/javascript">
   
    function twitter(){
     var str1 = "";   
var currentLocation = window.location.href;
var res = str1.concat(currentLocation);
      window.open('https://twitter.com/intent/tweet?text='+res, 'sharer','toolbar=0,status=0,width=640,height=445');
    }

      function facebook(){
     var str1 = "";   
var currentLocation = window.location.href;
var res = str1.concat(currentLocation);
     window.open('http://www.facebook.com/sharer.php?u=' + res, 'sharer', 'toolbar=0,status=0,width=660,height=445');
    }
        function gplus(){
     var str1 = "";   
var currentLocation = window.location.href;
var res = str1.concat(currentLocation);
     window.open('https://plus.google.com/share?url=' + res, 'sharer', 'toolbar=0,status=0,width=660,height=445');
    }
    
         function pinterest(){
     var str1 = "";   
var currentLocation = window.location.href;
var res = str1.concat(currentLocation);
          window.open('http://www.pinterest.com/pin/create/button/?media=' + res, 'sharerpinterest', 'toolbar=0,status=0,width=660,height=445');
    }
    
</script>

        <p class="socialsharing_product list-inline no-print" style="margin-left: 140px;">
                    <button data-type="twitter" type="button" class="btn btn-default1 btn-twitter social-sharing" onclick="twitter();">
                <i class="fa fa-twitter"></i>Tweet
                <!-- <img src="http://localhost/prestashop/modules/socialsharing/img/twitter.gif" alt="Tweet" /> -->
            </button>
                            <button data-type="facebook" type="button" class="btn btn-default1 btn-facebook social-sharing" onclick="facebook();">
                <i class="fa fa-facebook-f"></i> Share
                <!-- <img src="http://localhost/prestashop/modules/socialsharing/img/facebook.gif" alt="Facebook Like" /> -->
            </button>
                            <button data-type="google-plus" type="button" class="btn btn-default1 btn-google-plus social-sharing" onclick="gplus();">
                <i class="fa fa-google-plus"></i> Google+
                <!-- <img src="http://localhost/prestashop/modules/socialsharing/img/google.gif" alt="Google Plus" /> -->
            </button>
                            <button data-type="pinterest" type="button" class="btn btn-default1 btn-pinterest social-sharing" onclick="pinterest();">
                <i class="fa fa-pinterest"></i> Pinterest
                <!-- <img src="http://localhost/prestashop/modules/socialsharing/img/pinterest.gif" alt="Pinterest" /> -->
            </button>
            </p>

                        </div>
                     
                    <?php
                    $var='other';
                    $varr='Installation';
                     if($posts['cate']==$var || $posts['cate']==$varr){?>
                    <script type="text/javascript">
                        $(this).hide('.panel panel-default');
                    </script>
                        <?php }else{?>

                           

                        
                           <div  class="panel panel-default" style="margin-top: -20px;margin-left: 10px;margin-right: 20px;background-color: #fff;">
                              <h3>Script</h3>
                       
                             


<div class="content np" style="margin-left: 10px;margin-right: 18px;">

<textarea id="codeEditor2" >
<?php
    

       echo $posts['code'];
      
?>
</textarea>                        
                        <script>
                            var editor2 = CodeMirror.fromTextArea(document.getElementById("codeEditor2"), {
                                lineNumbers: true,
                                matchBrackets: true,
                                mode: "application/x-httpd-php",
                                indentUnit: 4,
                                indentWithTabs: true,
                                enterMode: "keep",
                                tabMode: "shift"                                                
                            });
                            editor2.setSize('100%','420px');
                            editor2.setOption("theme", 'midnight');

                        </script>                         
                  
            </div>           
        






                            <hr/>
                              <div class="buttons" style="margin-top:-10px; margin-left:7px;">
                            <p>



      <script type="text/javascript">
         
          $(document).ready(function() {
$('.exe').hide();

});
function run(){
   $('.exe').show('slow'); 

}
function ehide(){
   $('.exe').hide('fast'); 

}

    function go(){
     
      window.open('http://localhost/upr/editors/');
    }
 function gotoc(){
     
      window.open('http://localhost/upr/editors/compiler.php');
    }

      </script>  
       <?php
                    
                    $c='cplusplus';
                    
                     if($posts['cate']==$c ){?>


                                <button type="button" onclick="run();" ondblclick="ehide();" style="margin-left: 20px; width: 60px;background-color: red" class="btn btn-primary">Run</button>
                                <button type="button" onclick="gotoc();"  style="margin-left: 450px; width: 130px;background-color: green" class="btn btn-primary">Try my Script</button>
                               <?php }else{?>


                                <button type="button" onclick="run();" ondblclick="ehide();" style="margin-left: 20px; width: 60px;background-color: red" class="btn btn-primary">Run</button>
                                <button type="button" onclick="go();"  style="margin-left: 450px; width: 130px;background-color: green" class="btn btn-primary">Try my Script</button>
                                <?php }?>

                                <div class="exe">
                                 <div class="panel-body" style="width:500px;margin-left: 100px;margin-top: 20px;border-top: 5px solid #777;border-bottom: 5px solid #777; height: auto; ">
                               


 <?php
                    $php='php'; 
                    $cplus='cplusplus';
                    
                     if($posts['cate']==$php || $posts['cate']==$cplus ){?>
                    <p> <?php echo $var=$posts['des'];?></p>

                        <?php }else{ ?>  <p style="margin-left: 100px; "><?php echo $var=$posts['code'];?></p> <?php } ?>

                                </div>
                                </div>

                                                                
                            </p>
                            </div>
                        </div>

<?php }?>


                    </div>
                   
                 
         <style type="text/css">
          .panel panel-default{
  background: #fff; 
    min-height: 50px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
    position: relative;
    margin-bottom: 30px;
   margin-top: -20px;

                }


                
                </style>


                         <div  style=" margin-right: 20px;margin-left: 10px;margin-top: -20px;">

                       <div class="panel panel-default">

<?php $total=count($comments);?> 

 <h3>Discussion • <?php echo $total;?> </h3>
                           
    <hr/>



   <?php 
foreach ($comments as $m):?>
    <div id="Components" style="margin-left: 20px;">
<p><img class="img-circle user-image" width="40" src="<?=base_url()?>/profiles/<?=$m['photo']?>" ><strong><font size="3"  color="black" style="margin-left: 10px;"> <?=$m['firstname']?> <?=$m['lastname']?></font></strong> <br/>
<font style="margin-left: 60px; font-size: 16px; ">
    <?php
$str = $m['comment'];
$str = parse_smileys($str, base_url().'/smileys/');
echo $str;

?>

</font><br><font  style="font-size: 11px; margin-left: 60px;" color="gray"> <?=date('D d M Y g:i A',strtotime($m['date_added']))?></font></p>
<hr/>
</div>
                        
 <?php  endforeach;?>






           <?php if ($this->session->userdata('login')){ ?>

                
     <ul class="time" style="margin-top:10px; font-size:16px; width:350px; margin-left:100px;">
                    
                    <div class="cm">
            
                        <form method="post" enctype="multipart/form-data" action="<?php echo base_url()?>index.php/Comments/add_comment/<?=$posts['id']?>/<?=$posts['cate']?>/<?=$firstname?>/<?=$lastname?>/<?=$photo?>">
                            <fieldset>
                                     <textarea class="form-control" style="height:100px;margin-left: -120px;width: 600px; border-top: 2px solid #777;border-bottom: 2px solid #777; border-left: 2px solid #777;border-right: 2px solid #777; " placeholder="Any Question ?" id="comment" onfocus="hi();"  name="comment" type="text" required=""></textarea>
                                <br><br><br><br>
                              
                              <?php echo smiley_js(); ?>
                               

                                <button type="submit" style="width:60px; margin-left: -120px; height:40px; margin-top: -80px;" class="btn btn-primary"><i  autofocus></i>Ask</a>
                                </div>
                            </fieldset>

      <img onclick="ok();"  ondblclick="okk();" style="margin-top: -130px; margin-left: -110px;" src="<?php echo base_url().'images/smiley.png'?>" height="22">
    
      <script type="text/javascript">
         
          $(document).ready(function() {
$('.smile').hide();

});
function ok(){
   $('.smile').show('fast'); 
   
}
function hi(){
 $('.pic').hide('slow');   
}
function okk(){
   $('.smile').hide('fast'); 
}
function hf(){
   $('.file').show('fast'); 
   $('.smile').hide();
}

      </script>                  
<div class="smile" style="margin-left: 120px; border-style: double; border: 2px solid #ccc; width: 220px; margin-top: -100px;">

 <div style="margin-left: 5px;margin-top: 5px;margin-bottom: 5px;"><?php echo $smiley_table; ?></div>


</div>


                        </form>




<?php }else{ ?>



             

                            <ul class="time" style="margin-top:10px; font-size:16px; width:450px; margin-left:100px;">
                    <div class="cm">
                       
                        <form method="post" enctype="multipart/form-data" action="<?php echo base_url()?>index.php/Comments/add_comment/<?=$posts['id']?>/<?=$posts['cate']?>/">
                        
                            <fieldset>
                                <div class="form-group" >
                                    <input class="form-control" placeholder="Firstname" name="firstname" type="text" required="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Lastname" name="lastname" type="text" required="">
                                </div>
                                 <div class="form-group">
                                    <textarea class="form-control" id="comment" style="height:100px;" placeholder="Ask a question ?" required="" name="comment" type="text" ></textarea>
                                     <?php echo smiley_js(); ?>
                                    <input type="hidden" name="image" value="user.ico">
                                </div>
                                
                                <button type="submit" style="width:60px; height:40px;" class="btn btn-primary"><i  autofocus></i>ASK</a>
                            </fieldset>

     <img onclick="ook();" ondblclick="ookk();" style="margin-top: -85px; margin-left: 370px;" src="<?php echo base_url().'images/smiley.png'?>" height="22">
      <script type="text/javascript">
         
          $(document).ready(function() {
$('.msmile').hide();
$('.mfile').hide();
});
function ook(){
   $('.msmile').show('fast'); 
   $('.mfile').hide();
}
function ookk(){
   $('.msmile').hide('fast'); 
}
function mhf(){
   $('.mfile').show('fast'); 
   $('.msmile').hide();
}
function msf(){
   $('.mfile').hide('fast'); 
}
      </script>                  
<div class="msmile" style="margin-left: 160px;"><br>
<div class="smile" style="margin-left: 30px; margin-top: -60px; border-style: double; border: 2px solid #ccc; width: 220px;">

 <div style="margin-left: 10px;margin-top: 5px;margin-bottom: 5px;"><?php echo $smiley_table; ?></div>
</div>
</div>
<div class="mfile">
                      <input type="file" style="margin-left: 160px; margin-top: -40px; height: 40px;width: 250px;" class="form-control" name="image" >
                     
                    </div>
                        </form>
<?php   } ?>
                            </ul>
                        </div>
                        <!-- /.panel-body -->
                    </div>

                </div>
                <!-- /.col-lg-8 -->
                <style type="text/css">
                   .panel-body a:hover{
                
                text-decoration: none;
            }
                .panel{
   background: #fff;
    min-height: 50px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
    position: relative;
    margin-bottom: 30px;

                }
           
                </style>


                <div class="col-lg-4" style="background-color: #e9e9e9; width: 450px;margin-left: -30px;">
                    <div class="panel " style="margin-top:10px;  background-color: #fff;width: 420px; " >
                       
                     <h3 style="margin-left:110px;">Related Videos</h3>
                      <hr/>
                        <div class="panel-body" style="margin-left: 20px;">
                           <?php foreach ($cate as $c):?>
  <p style="margin-top: 20px;"> <iframe width="180"  height="100"  src="<?=$posts['video']?>" frameborder="0" allowfullscreen></iframe></p><br>
   <p style="margin-left: 190px; margin-top: -130px;"><a href=" <?php echo base_url()?>index.php/posts/readpost/<?=$c['id']?>/<?=$c['cate']?>"><font style="font-size:15px;"><?php echo $c['title']; ?></font></a><br>
    <font color="black"><?php echo $c['cate']; ?></font><br><font  style="font-size: 11px; margin-left: 0px;" color="gray"> <?=date('g M  Y',strtotime($c['date_added']))?></font></p>
                           
<br>

                         
                       <?php endforeach; ?>
                       <hr/>
                            <a href="<?php echo base_url()?>/index.php/search/index" class="btn btn-default" style="width: 200px; margin-left: 65px; margin-top: 10px; ">See more videos</a>
                        </div>
                        <!-- /.panel-body -->
                    
                    </div>
                    
                    <!-- /.panel -->
                
                    
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>


</body>

</html>

