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
  .images {display:inline;width:244px;height:136px;}
  .caption {width:inherit;height:20px;}
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
    <div class="imageBox">
      <div class="images"><?php iDims($img00[0]); iSize($img00[0]);?></div>
      <div class="images"><?php iDims($img00[1]); iSize($img00[1]);?></div>
      <div class="images"><?php iDims($img00[2]); iSize($img00[2]);?></div>
    </div>
    <p><a href="#two" data-role="button">Show page "two"</a></p>        
  </div><!-- /content -->
  <div data-role="footer" data-theme="d">
    <h4>Page Footer</h4>
  </div><!-- /footer -->
</div><!-- /page -->
<?php $img01 = array('jay-peg-landscape.jpg','gif-landscape.gif','ping-landscape.png'); ?>
<!-- Page -->
<div data-role="page" id="two">
  <div data-role="header">
    <h1>Transparency</h1>
  </div><!-- /header -->
  <div data-role="content">      
    <p>For instance, I can&rsquo;t do transparency, Gif can do it in a limited way, and Ping pretty much nails it.</p>
    <ul class="images">
      <li class="image jpg"><?php iDims($img01[0]); iSize($img01[0]);?></li>
      <li class="image gif"><?php iDims($img01[1]); iSize($img01[1]);?></li>
      <li class="image png"><?php iDims($img01[2]); iSize($img01[2]);?></li>
    </ul>
    <p><a href="#one" data-direction="reverse" data-role="button">Back to page "one"</a></p>     
    <p><a href="#three" data-role="button">Show page "three"</a></p>     
  </div><!-- /content -->
  <div data-role="footer" data-theme="d">
    <h4>Page Footer</h4>
  </div><!-- /footer -->
</div><!-- /page -->
<!-- Page -->
<?php $img02 = array('photo-landscape.jpg','photo-landscape.gif','photo-landscape.png'); ?>
<div data-role="page" id="three">
  <div data-role="header">
    <h1>display photo art</h1>
  </div><!-- /header -->
  <div data-role="content" >    
    <p>If you want to display a photo, I&rsquo;m probably your best choice. That&rsquo;s because I can render millions of colors and show a reasonably sharp image more cheaply than my friends Gif and Ping. I can also employ <a href="https://en.wikipedia.org/wiki/Lossy_compression">lossy compression</a>, something my friends can&rsquo;t do.</p>
    <p>As you can see, I&rsquo;m the lightest graphic. Your visitors will be able to download me faster than my friends. Also, Gif looks terrible because she can&rsquo;t do as many colors. Ping can also do millions of colors, but at a much greater cost.</p>
    <ul class="images">
      <li class="image jpg"><?php iDims($img02[0]); iSize($img02[0]);?></li>
      <li class="image gif"><?php iDims($img02[1]); iSize($img02[1]);?></li>
      <li class="image png"><?php iDims($img02[2]); iSize($img02[2]);?></li>
    </ul>
    <p><a href="#two" data-direction="reverse" data-role="button">Back to page "two"</a></p>     
    <p><a href="#four" data-role="button">Show page "four"</a></p>        
  </div><!-- /content -->
  <div data-role="footer" data-theme="d">
    <h4>Page Footer</h4>
  </div><!-- /footer -->
</div><!-- /page -->
<?php $img03 = array('gov-usda-xl.jpg','gov-usda-xl.gif','gov-usda-xl.png'); ?>
<!-- Page -->
<div data-role="page" id="four">
  <div data-role="header">
    <h1>Transparency</h1>
  </div><!-- /header -->
  <div data-role="content">      
    <p>Why not use me for everything? Because I&rsquo;m actually very bad at some things that my friends do very well.</p>
    <p>For graphics with fewer than 256 colors, particularly ones created in a vector art program like <a href="http://inkscape.org/en/">Inkscape</a>, Gif works best. She&rsquo;s more lightweight than me and has cleaner edges.</p>
    <ul class="images">
      <li class="image jpg"><?php iDims($img03[0]); iSize($img03[0]);?></li>
      <li class="image gif"><?php iDims($img03[1]); iSize($img03[1]);?></li>
      <li class="image png"><?php iDims($img03[2]); iSize($img03[2]);?></li>
    </ul>
    <p>Gif beats Ping and I on size by actually throwing out colors she&rsquo;s not using. In this case, all but 16 colors were discarded.</p>
    <p>Ping is also terrific at stuff like this, though he might cost a little more. He does <a href="#">transparency</a> better, too. </p>
    <p><a href="#three" data-direction="reverse" data-role="button">Back to page "three"</a></p>     
    <p><a href="#five" data-role="button">Show page "five"</a></p>        
  </div><!-- /content -->
  <div data-role="footer" data-theme="d">
    <h4>Page Footer</h4>
  </div><!-- /footer -->
</div><!-- /page -->
<?php $img04 = array('gov-usda-xl.jpg','gov-usda-xl.gif','gov-usda-xl.png'); ?>
<!-- Page -->
<div data-role="page" id="five">
  <div data-role="header">
    <h1>words in text</h1>
  </div><!-- /header -->
  <div data-role="content">      
    <p>One thing you shouldn&rsquo;t do with an image is words. Search engines are your bullhorn on the Web. Search engines read text. So, if you put your words inside an image, it&rsquo;s just like you&rsquo;re whispering.</p>
    <p>Also, by putting words in an image, you no longer have a good image choice. I will put artifacts around the edges of your type unless you turn off most or all of my compression, losing the cost savings I usually bring. Gif displays text well, provided you stay within her limitations (no more than 256 colors). And Ping can do text well, but he&rsquo;s expensive.</p>
    <ul class="images">
      <li class="image jpg"><?php iDims($img04[0]); iSize($img04[0]);?></li>
      <li class="image gif"><?php iDims($img04[1]); iSize($img04[1]);?></li>
      <li class="image png"><?php iDims($img04[2]); iSize($img04[2]);?></li>
    </ul>
    <p><a href="#four" data-direction="reverse" data-role="button">Back to page "four"</a></p>     
    <p><a href="#six" data-role="button">Show page "six"</a></p>        
  </div><!-- /content -->
  <div data-role="footer" data-theme="d">
    <h4>Page Footer</h4>
  </div><!-- /footer -->
</div><!-- /page -->
</body>
</html>
