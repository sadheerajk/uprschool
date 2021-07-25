
<style>
.header {
 width: 800px;
 height: 100px;
 background: #fff;
 color: #555;
 border: 3px solid #ccc;
 -webkit-border-radius: 10px;
 -moz-border-radius: 10px;
 -ms-border-radius: 10px;
 border-radius: 10px;
 border-top: 3px solid #ddd;
 padding: 1em 2em;
 margin: 0 auto;
 margin-left: 280px;
 
}

#container {
 width: 450px;
 height: 400px;
 background: #fff;
 color: #555;
 border: 3px solid #ccc;
 -webkit-border-radius: 10px;
 -moz-border-radius: 10px;
 -ms-border-radius: 10px;
 border-radius: 10px;
 border-top: 3px solid #ddd;
 padding: 1em 2em;
 margin: 0 auto;
 margin-left: 400px;
 -webkit-box-shadow: 3px 7px 5px #000;
 -moz-box-shadow: 3px 7px 5px #000;
 -ms-box-shadow: 3px 7px 5px #000;
 box-shadow: 3px 7px 5px #000;
}
</style>
<!DOCTYPE html>
<html lang="en">
<head>        

    <link rel="icon" type="image/vnd.microsoft.icon" href="http://localhost/upr/images/ico.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <link href="css/stylesheets.css" rel="stylesheet" type="text/css">
    <link href="css/codemirror/theme/midnight.css" rel="stylesheet" type="text/css">
    <script type='text/javascript' src='js/plugins/codemirror/codemirror.js'></script>
    <script type='text/javascript' src="js/plugins/codemirror/addon/edit/matchbrackets.js"></script>
    <script type='text/javascript' src="js/plugins/codemirror/mode/htmlmixed/htmlmixed.js"></script>
    <script type='text/javascript' src="js/plugins/codemirror/mode/xml/xml.js"></script>
    <script type='text/javascript' src="js/plugins/codemirror/mode/javascript/javascript.js"></script>
    <script type='text/javascript' src="js/plugins/codemirror/mode/css/css.js"></script>
    <script type='text/javascript' src="js/plugins/codemirror/mode/clike/clike.js"></script>
    <script type='text/javascript' src="js/plugins/codemirror/mode/php/php.js"></script>    
    <script type='text/javascript' src='js/plugins/uniform/jquery.uniform.min.js'></script>
    <script type='text/javascript' src='js/plugins/tinymce/tinymce.min.js'></script>
    <script type='text/javascript' src='js/plugins.js'></script>    
    <script type='text/javascript' src='js/actions.js'></script>
    <script type='text/javascript' src='js/settings.js'></script>
    <script type='text/javascript' src='ajax.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<title>Uprschool | Script Editor</title>
<body style="background-color: #fff;">

    <div class="header"><img src="http://localhost/upr/images/uprlogo.png" height="80" width="90" style="margin-left: 100px;margin-top: -5px;"><h3 style="margin-left: 200px;margin-top: -50px;">Uprchool - Algorithm Solution (Script + Execution)<h3></div>
                  
                    <div class="content np" style="width: 680px;margin-top: 15px;margin-left: 10px;">

<style type="text/css">
textarea {
  margin-top: 10px;
  margin-left: 50px;
width: 600px;
height: 420px;
  -moz-border-bottom-colors: none;
  -moz-border-left-colors: none;
  -moz-border-right-colors: none;
  -moz-border-top-colors: none;
  background: none repeat scroll 0 0 rgba(0, 0, 0, 0.07);
  border-color: -moz-use-text-color #FFFFFF #FFFFFF -moz-use-text-color;
  border-image: none;
  border-radius: 6px 6px 6px 6px;
  border-style: none solid solid none;
  border-width: medium 1px 1px medium;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.12) inset;
  color: #555555;
  font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
  font-size: 1em;
  line-height: 1.4em;
  padding: 5px 8px;
  transition: background-color 0.2s ease 0s;
}


textarea:focus {
    background: none repeat scroll 0 0 #FFFFFF;
    outline-width: 0;
}
</style>


<textarea placeholder="Type your Scrip here" rows="20"  name="code" id="codeEditor2" cols="40" class="ui-autocomplete-input" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true"></textarea>


                                          
                                    </div>  
           
            <button  type="submit" name="submit"  style="margin-top:30px;margin-left: 620px; width: 60px;background-color: red" class="btn btn-primary">Run</button>

   <div id="container" style="margin-top: -500px;margin-left: 700px;width: 640px;height: 420px;">
   <div id="codeEditor_view">
      <iframe style="border: none;" src="code.php"></iframe>   
   </div>
<script>



$(document).ready(function(){
    $("button").click(function(){
    var show_code=$("#codeEditor2").val();
$("#codeEditor_view").html(show_code);
//window.alert(show_code);
var infoo="code="+show_code;
$.ajax({
    data: infoo,
    type:"POST",
    url:"run.php",
    success: function(msg){
 $("#codeEditor_view").load(location.href+" #codeEditor_view>*","");     
    }
});

        
    });
});

</script>
 
    

   
   </div>
     
</body>

</html>
