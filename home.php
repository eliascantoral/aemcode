<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/*
Template Name: Home page
*/
get_header();
?>
<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-9">
        <div class="main-menu">
            <?php 
                $pages = get_posts(array(
                        'post_type' => 'page',
                        'meta_key' => '_wp_page_template',
                        'meta_value' => 'mainpage.php',
                        'posts_per_page'   => 4,
                        'order'                  => 'ASC',
                        'orderby'                => 'date',                    
                ));
                foreach($pages as $page){                    
                    ?>
                        <div class="main-menu-item" align="center">
                            <?php $url = wp_get_attachment_url( get_post_thumbnail_id($page->ID) );?>
                            <a href="<?php get_permalink ($page->ID);?>"><img src="<?php echo $url?>" alt="item" width="100px"></a><br>
                            <a href="<?php get_permalink ($page->ID);?>"><?php echo $page->post_title;?></a>
                        </div>
                    <?php                         
                }
            ?>
            
        </div>
        
    </div>
 <div class="col-xs-6 col-sm-4 col-md-3">
      <?php get_categorylist();?>
      <?php get_taglist();?>
  </div>
  
</div>
<?php
get_footer();