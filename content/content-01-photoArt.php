<?php $img01 = array('gov-usda-xl.jpg','gov-usda-xl.gif','gov-usda-xl.png'); ?>
<div class="content" id="photoArt">
  <h1>display vector art</h1>
  <div class="text">
    <p>If you want to display a photo, I&rsquo;m probably your best choice. That&rsquo;s because I can render millions of colors and show a reasonably sharp image far more cheaply than my friends Gif and Ping.</p>
    <p>As you can see, I&rsquo;m the lightest graphic by a fair margin. Your visitors will be able to download me much faster than my friends. Also, Gif looks terrible because she&rsquo;s limited to just 256 colors. Ping can also do millions of colors, but at a greater cost.</p>
  </div>
  <div class="images">
    <div class="image jpg"><?php iDims($img01[0]); iSize($img01[0]);?></div>
    <div class="image gif"><?php iDims($img01[1]); iSize($img01[1]);?></div>
    <div class="image png"><?php iDims($img01[2]); iSize($img01[2]);?></div>
    <p class="caption">logo by <a href="https://github.com/seanherron/Gov-Webicons">Sean Herron</a></p>
  </div>
  <div class="text">
    <p>Gif beats Ping and I by actually throwing out colors she&rsquo;s not using. In this case, all but 16 colors were discarded.</p>
  </div>
</div><!-- .content #photoArt -->
