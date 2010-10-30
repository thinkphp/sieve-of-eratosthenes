<?php
$oldtime = microtime(true);
if($_GET['n'] && isset($_GET['n'])) {
   $n = $_GET['n'];
} else {
   $n = 100000; 
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
   <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
   <title>Number.toEratosthene() - Native Method MooTools</title>
   <link rel="stylesheet" href="http://yui.yahooapis.com/2.7.0/build/reset-fonts-grids/reset-fonts-grids.css" type="text/css">
   <link rel="stylesheet" href="http://yui.yahooapis.com/2.7.0/build/base/base.css" type="text/css">
   <style type="text/css">
   html,body{font-family: georgia,verdana,sans-serif,arial;font-size: 15px}
   h1{ font-size:200%; margin:0; padding-bottom:10px; color:#393;}
   h1 span{color: #111}
   form{background:#b4f08a;padding: 5px;-moz-box-shadow:5px 5px 7px rgba(33, 33, 33, 0.7);width: 100%}
   #primenumber {margin: 5px;padding: 3px;font-size: 30px}
   #ft{font-size:80%;color:#888;text-align:left;margin:2em 0;font-size: 16px}
   #ft p a{color:#93C37D;}
   </style>
   <script src="http://www.google.com/jsapi?key=ABQIAAAA1XbMiDxx_BTCY2_FkPh06RRaGTYH6UMl8mADNa0YKuWNNa8VNxQEerTAUcfkyrr6OwBovxn7TDAH5Q"></script>
   <script type="text/javascript">google.load("mootools", "1.3");</script>
   <script type="text/javascript" src="Number.toEratosthenes-yui-compressed.js"></script>
   <script type="text/javascript">
   (function($){
        window.addEvent('domready',function(){
            $('f').addEvent('submit', function(e){
                if(e) {e.stop();}
                var n = $('n').get('value').toInt(); 
                if(!n) {return false;}
                   var vec = [];
                       vec = (n).toEratosthenes(); 
                   if(window.console){console.log(vec);} 
                   var s = ''; 
                       for(var i=0;i<vec.length;i++) {
                           s += vec[i] + ', ';
                       } 
                       $('primenumber').set('text',s);
             }); 
             $('f').fireEvent('submit');  
        });         
   })(document.id);
   </script>
</head>
<body>
<div id="doc" class="yui-t7">
   <div id="hd" role="banner"><h1>Number.<span>to</span>Eratosthenes()</h1></div>

   <div id="bd" role="main">
	<div class="yui-g">
         <form id="f" name="f">
         <label for="n">N = </label><input type="text" id="n" value="<?php echo$n; ?>"/><input type="submit" value="go">
         </form>  
         <div id="primenumber"></div>
	</div>
	</div>
<div id="ft"><p>Created by @<a href="http://twitter.com/thinkphp">thinkphp</a> | You can download on <a href="http://mootools.net/forge/download/Number_toEratosthenes/v1.0">forge</a> | Time spent: <?php echo microtime(true)-$oldtime;?></p></div>
</div>
</body>
</html>