<!doctype html>
<html lang="en">
<head>
<title>hello</title>
<meta charset="utf-8">
<?php include '/var/www/jpgorgiforpng/html/includes/funcs.php'; ?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.js"></script>
<style type="text/css">
li {display:inline;float:left;}
ul {width:840px;}
</style>
</head>
<body>
<?php $img00 = array('jay-peg-landscape.jpg','gif-landscape.gif','ping-landscape.png'); ?>
<div class="content" id="box1">
  <h1>web graphics for you</h1>
  <div class="text">
    <p>Hi, my name is Jay Peg. I&rsquo;m a Web graphic and these are my friends Gif and Ping.</p>
    <p>We can help your website look great, but you should know what our strengths and weaknesses are first.</p>
  </div>
  <ul class="images">
    <li class="image jpg"><?php iDims($img00[0]); iSize($img00[0]);?></li>
    <li class="image gif"><?php iDims($img00[1]); iSize($img00[1]);?></li>
    <li class="image png"><?php iDims($img00[2]); iSize($img00[2]);?></li>
  </ul>
  <div class="text">
  </div>
</div><!-- .content #hello -->
<?php $img01 = array('photo-landscape.jpg','photo-landscape.gif','photo-landscape.png'); ?>
<div class="content" id="box2" style="display:none;">
  <h1>display photo art</h1>
  <div class="text">
    <p>If you want to display a photo, I&rsquo;m probably your best choice. That&rsquo;s because I can render millions of colors and show a reasonably sharp image more cheaply than my friends Gif and Ping. I can also employ <a href="https://en.wikipedia.org/wiki/Lossy_compression">lossy compression</a>, something my friends can&rsquo;t do.</p>
    <p>As you can see, I&rsquo;m the lightest graphic. Your visitors will be able to download me faster than my friends. Also, Gif looks terrible because she can&rsquo;t do as many colors. Ping can do millions, and looks nearly as good as me, but at a much greater cost.</p>
  </div>
  <ul class="images">
    <li class="image jpg"><?php iDims($img01[0]); iSize($img01[0]);?></li>
    <li class="image gif"><?php iDims($img01[1]); iSize($img01[1]);?></li>
    <li class="image png"><?php iDims($img01[2]); iSize($img01[2]);?></li>
  </ul>
  <div class="text">
  </div>
</div><!-- .content #photoArt -->
<?php $img02 = array('gov-usda-xl.jpg','gov-usda-xl.gif','gov-usda-xl.png'); ?>
<div class="content" id="box3" style="display:none;">
  <h1>display vector art</h1>
  <div class="text">
    <p>For graphics with fewer than 256 colors, particularly ones created in a vector art program like <a href="http://inkscape.org/en/">Inkscape</a>, Gif works best. She&rsquo;s more lightweight and has cleaner edges.</p>
  </div>
  <ul class="images">
    <li class="image jpg"><?php iDims($img02[0]); iSize($img02[0]);?></li>
    <li class="image gif"><?php iDims($img02[1]); iSize($img02[1]);?></li>
    <li class="image png"><?php iDims($img02[2]); iSize($img02[2]);?></li>
    <p class="caption">logo by <a href="https://github.com/seanherron/Gov-Webicons">Sean Herron</a></p>
  </ul>
  <div class="text">
    <p>Ping is also terrific at stuff like this, though he might cost a little more. He does transparency better, too. </p>
    <p>Gif beats Ping and I on size by actually throwing out colors she&rsquo;s not using. In this case, all but 16 colors were discarded.</p>
  </div>
</div><!-- .content #vectorArt -->
<?php $img03 = array('gov-usda-xl.jpg','gov-usda-xl.gif','gov-usda-xl.png'); ?>
<div class="content" id="box3" style="display:none;">
  <h1>display vector art</h1>
  <div class="text">
    <p>Why not use me for everything? Because I&rsquo;m actually very bad at some things my friends do very well.</p>
    <p>For graphics with fewer than 256 colors, particularly ones created in a vector art program like <a href="http://inkscape.org/en/">Inkscape</a>, Gif works best.</p>
  </div>
  <ul class="images">
    <li class="image jpg"><?php iDims($img03[0]); iSize($img03[0]);?></li>
    <li class="image gif"><?php iDims($img03[1]); iSize($img03[1]);?></li>
    <li class="image png"><?php iDims($img03[2]); iSize($img03[2]);?></li>
    <p class="caption">logo by <a href="https://github.com/seanherron/Gov-Webicons">Sean Herron</a></p>
  </ul>
  <div class="text">
    <p>Gif beats Ping and I by actually throwing out colors she&rsquo;s not using. In this case, all but 16 colors were discarded.</p>
  </div>
</div><!-- .content #vectorArt -->
<button class="arrow" id="dec">&lt;</button>
<button class="arrow" id="inc">&gt;</button>
<script type="text/javascript">
var incValue = 1;
$( "#inc" ).click(function() {
  if (incValue < 3) {
    $( "#box" + incValue ).hide( "slow" );
    incValue++;
    $( "#box" + incValue ).show( "slow" );
  }
});
$( "#dec" ).click(function() {
  if (incValue > 1) {
    $( "#box" + incValue ).hide( "slow" );
    incValue--;
    $( "#box" + incValue ).show( "slow" );
  }
});
</script>
</body>
</html>
