<?php $logoImg = get_header_image();?>
<!DOCTYPE html>
<html>
<head>
    <link href="<?php echo get_template_directory_uri();?>/style.css" rel="stylesheet" />
</head>
<header>
    <div class="header-contact">
        <p>Contact Us - 03 9509 0311 </p>
    </div>
    <figure>
        <a href="<?php echo site_url()?>">
            <img src="<?php echo $logoImg?>" alt="Website header or logo">
        </a>
    </figure>
    <div class='menu-section'>
        <?php wp_nav_menu(array('
    theme_location'=>'header'));?>
    <div class='menu-btn'></div>
    </div>

</header>

</html>