<?php $img = array('gov-usda-xl.jpg','gov-usda-xl.gif','gov-usda-xl.png'); ?>
<div class="content" id="vectorArt">
  <h1>display vector art</h1>
  <div class="text">
    <p>Why not use me for everything? Because I&rsquo;m actually very bad at some things my friends do very well.</p>
    <p>For graphics with fewer than 256 colors, particularly ones created in a vector art program like <a href="http://inkscape.org/en/">Inkscape</a>, Gif works best.</p>
  </div>
  <div class="images">
    <div class="image jpg"><?php iDims($img[0]); iSize($img[0]);?></div>
    <div class="image gif"><?php iDims($img[1]); iSize($img[1]);?></div>
    <div class="image png"><?php iDims($img[2]); iSize($img[2]);?></div>
    <p class="caption">logo by <a href="https://github.com/seanherron/Gov-Webicons">Sean Herron</a></p>
  </div>
  <div class="text">
    <p>Gif beats Ping and I by actually throwing out colors she&rsquo;s not using. In this case, all but 16 colors were discarded.</p>
  </div>
</div><!-- #content #vectorArt -->
