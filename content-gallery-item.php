<div id="<?php get_part($the_video_id); ?>" class="item <?php get_part($the_video_status); ?>">
    <a href="<?php get_part($the_video_permalink); ?>"></a>
    
    <div class="screenshot" style="background-image: url('<?php get_part($the_video_thumbnail); ?>');">
    </div>
    
    <h2><?php limit_text($the_video_title, '25'); ?></h2>
</div>