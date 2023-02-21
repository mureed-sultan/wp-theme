<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="<?php echo get_template_directory_uri();?>/style.css" rel="stylesheet"/>
    <title>HomePage</title>
  </head>
  <body>
    <?php get_header();?>
    <?php the_content();?>
    
    <?php get_footer()?>
</body>
<script src="<?php echo get_template_directory_uri( )?>/src/scripts/menu.js"></script>
</html>