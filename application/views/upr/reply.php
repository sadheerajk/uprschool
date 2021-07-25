
<div class="cm" style="background-color: #fff;height: 400px;width: 800px; margin-top: 110px;margin-left: 300px; border:4px solid black;">
            <?php
                              $url = (!empty($_SERVER['HTTPS'])) ? "https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] : "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']; 

 $id= basename( $url);

?>
     
                        <form method="post" action="<?=base_url()?>index.php/experts/addcomment/<?php echo $id;?>">
                           
                            <fieldset>
                              <input type="hidden" name="firstname" value="<?=$firstname?>">
                              <input type="hidden" name="lastname" value="<?=$lastname?>">
                              <input type="hidden" name="photo" value="<?=$photo?>">
                             
                        <textarea class="form-control" style="height:100px;margin-left: 120px;width: 600px;margin-top: 50px; border-top: 2px solid #777;border-bottom: 2px solid #777; border-left: 2px solid #777;border-right: 2px solid #777; " placeholder="Give Answer" id="comment" onfocus="hi();"  name="comment" type="text" required=""></textarea>
                                <br><br><br><br>

                                <button type="submit" style=" margin-left: 120px; height:40px; margin-top: -70px;" class="btn btn-primary"><i  autofocus></i>Answer</a>
                                </div>
