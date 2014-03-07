<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    
    <!-- Page Meta -->
    <title><?php get_text($page_title); ?></title>
    <?php get_meta($page_meta); ?>
    
    <!-- Tame the Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,700' rel='stylesheet' type='text/css'>
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,400italic,700italic" rel="stylesheet" type="text/css">
    
    <!-- Theme Styles -->
    <link rel="stylesheet" href="<?php get_setting($theme_url); ?>/assets/css/style.css">
    
    <!-- Favicon -->
    <?php if (is_image('favicon')) { ?>
    <link href="<?php get_setting($site_url); ?>/uploads/favicon.png" rel="shortcut icon">
    <?php } else { ?>
    <link href="<?php get_setting($assets_url); ?>/images/favicon.png" rel="shortcut icon">
    <?php } ?>
    
    <?php get_includes('header'); ?>
</head>

<?php if (is_page('about')) { ?>
<body class="<?php get_body_class($video_service); ?>" <?php if (is_image('background')) { ?>style="background-image: url('<?php get_setting($site_url); ?>/uploads/background.jpg');"<?php } ?>>
<?php } else { ?>
<body class="<?php get_body_class($video_service); ?>" style="background-image: url('<?php get_video('thumbnail', ''); ?>');">
<?php } ?>
    <a id="nav" class="icon-menu toggle" href="#header"></a>
    
    <header id="header">
        <div class="content">
            <?php if (is_image('logo')) { ?>
            <a href="<?php get_setting($site_url); ?>"><img src="<?php get_setting($site_url); ?>/uploads/logo.png" /></a>
            <?php } ?>
            <h1><a href="<?php get_setting($site_url); ?>"><?php get_text($site_title); ?></a></h1>
            <p><?php get_text($site_description); ?></p>
            
            <nav id="menu">
                <ul>
                    <li class="<?php if (is_page('home')) { echo('current'); } ?>"><a href="<?php get_setting($site_url); ?>/">Home</a></li>
                    <li class="<?php if (is_page('about')) { echo('current'); } ?>"><a href="<?php get_setting($site_url); ?>/about">About</a></li>
                    <?php if (is_setting($profile_email)) { ?>
                    <li><a href="mailto:<?php get_setting($profile_email); ?>">Contact</a></li>
                    <?php } ?>
                    <?php if (is_setting($profile_facebook)) { ?>
                    <li class="facebook"><a href="http://facebook.com/<?php get_setting($profile_facebook); ?>">Facebook</a></li>
                    <?php } ?>
                    <?php if (is_setting($profile_twitter)) { ?>
                    <li class="twitter"><a href="http://twitter.com/<?php get_setting($profile_twitter); ?>">Twitter</a></li>
                    <?php } ?>
                    <?php if ($video_service == 'youtube') { ?>
                    <li class="youtube"><a href="http://youtube.com/<?php get_setting($youtube_username); ?>">YouTube</a></li>
                    <?php } ?>
                    <?php if ($video_service == 'vimeo') { ?>
                    <li class="vimeo"><a href="http://vimeo.com/<?php get_setting($vimeo_username); ?>">Vimeo</a></li>
                    <?php } ?>
                </ul>
            </nav>
        </div>
    </header>
    
    <?php if (is_page('home') || is_page('single')) {
        
        // The Video Gallery Template
        get_template_part('content-gallery');
        
    } elseif (is_page('about')) {
    
        // The About Page Template
        get_template_part('content-about');
        
    } else {
        
        // The 404 Page Template
        get_template_part('content-404');
        
    } ?>
    
    <footer id="footer">
        <div class="content">
            <span><?php get_text($footer_text); ?></span>
        </div>
    </footer>
    
    <?php get_includes('footer'); ?>
    
    <script src="<?php get_setting($theme_url); ?>/assets/js/app.js"></script>
    
    <?php get_analytics(); ?>
</body>
</html>