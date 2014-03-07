<div id="video-container">
    <?php get_video('all', 'content-video'); ?>
</div> 

<div id="gallery-container">
    <a class="description icon-text toggle" href="#gallery-description"></a>
    
    <div id="gallery-description" class="description-text">
        <h3><?php get_text($gallery_title); ?></h3>
        <p><?php get_text($gallery_description); ?></p>
    </div>
    
    <div id="gallery">
        <?php get_videos('gallery', 'content-gallery-item'); ?>
        
        <div id="pagination">
            <?php get_pagination('icon-left', 'icon-right'); ?>
        </div>
    </div>
</div>

