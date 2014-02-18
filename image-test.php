<!DOCTYPE html> 
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <title>web graphics for you</title> 
  <?php include '/var/www/jpgorgiforpng/html/includes/funcs.php'; ?>
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.css" />
  <style type="text/css">
  .ui-content {max-width:760px;margin:0 auto;}
  .images {position:relative;display:inline;width:244px;height:150px;}
  .imageBox {width:750px;height:170px;padding:0;}
  .caption {position:absolute;left:0px;top:20px;}
  </style>
  <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
  <script src="http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.js"></script>
</head> 
<body> 
<!-- Page -->
<?php $img00 = array('jay-peg-landscape.jpg','gif-landscape.gif','ping-landscape.png'); ?>
<div data-role="page" id="one">
  <div data-role="header">
    <h1>Hi, I'm Jay.</h1>
  </div><!-- /header -->
  <div data-role="content" >    
    <p>Hi, my name is Jay Peg. I&rsquo;m a Web graphic and these are my friends Gif and Ping.</p>
    <p>We can help your website look great, but you should know what our strengths and weaknesses are first.</p>
    <ul class="imageBox">
     <li class="images"><img width="244" height="136" alt="jay-peg-landscape.jpg" src="/content/images/jay-peg-landscape.jpg"><span class="caption">jay-peg-landscape.jpg: 12078 bytes </span></li>
     <li class="images"><img width="244" height="136" alt="jay-peg-landscape.jpg" src="/content/images/jay-peg-landscape.jpg"><span class="caption">jay-peg-landscape.jpg: 12078 bytes </span></li>
     <li class="images"><img width="244" height="136" alt="jay-peg-landscape.jpg" src="/content/images/jay-peg-landscape.jpg"><span class="caption">jay-peg-landscape.jpg: 12078 bytes </span></li>
    </ul>
    <p><a href="#two" data-role="button">Show page "two"</a></p>        
  </div><!-- /content -->
  <div data-role="footer" data-theme="d">
    <h4>Page Footer</h4>
  </div><!-- /footer -->
</div><!-- /page -->
</body>
</html>
