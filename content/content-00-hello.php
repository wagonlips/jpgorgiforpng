<?php $img = array('/content/images/gov-usda-xl.jpg','/content/images/gov-usda-xl.gif','/content/images/gov-usda-xl.png'); ?>
<div class="content" id="hello">
  <h1>display vector art</h1>
  <div class="text">
    <p>Hi, my name is Jay Peg. I&rsquo;m a Web graphic and these are my friends Gif and Ping.</p>
    <p>We can help your website look great, but you should know what our strengths and weaknesses are first.</p>
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
</div><!-- .content #hello -->
