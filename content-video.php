<a class="description icon-text toggle" href="#video-description"></a>

<div id="video-description" class="description-text">
    <h2><?php get_part($the_video_title); ?></h2>
    <p><?php get_part($the_video_description); ?></p>
    
    <div class="share">
        <a class="icon-twitter" href="https://twitter.com/intent/tweet?text=&quot;<?php get_part($the_video_title); ?>&quot;%20<?php get_part($the_video_permalink); ?>%20via%20&#64;<?php get_setting($profile_twitter); ?>" data-dnt="true" title="Share on Twitter"></a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        <a class="icon-facebook" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2F<?php get_part($the_video_permalink); ?>" target="_blank" title="Share on Facebook"></a>
    </div>
</div>

<div id="video">
    <?php get_part($the_video_embed); ?>
</div>