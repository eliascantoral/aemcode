<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title><?php wp_title( ' | ', true, 'right' ); ?></title>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<?php wp_head(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bootstrap/css/bootstrap-theme.min.css">

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jqueryui/jquery-ui.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/bootstrap/js/bootstrap.min.js"></script>


<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/images/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/images/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/images/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/images/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/images/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/images/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/images/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/images/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/images/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_template_directory_uri(); ?>/images/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/images/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/images/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/images/favicon-16x16.png">
<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/images/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/images/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

</head>
<body <?php body_class(); ?>>
    <header>
        <div id="header_wrapper" class="container-fluid"> 
              <div class="container">  
                    <div class="row">
                        <div class="col-sm-6 header-logo">
                            <a href="<?php echo home_url(); ?>"><?php echo get_bloginfo( 'name' );?></a>
                        </div>
                        <div class="col-sm-6">
                                  <div class="navbar-right">
                                        <form class="navbar-form navbar-left" role="search">
                                          <div class="form-group">
                                              <input type="text" class="form-control" id="searchinput" name="s" placeholder="Buscar" value="<?php echo isset($_GET["s"])?$_GET["s"]:"";?>">
                                          </div>
                                        </form>
                                  </div>                                                        
                        </div>
                    </div>
              </div>            
        </div>      
        <div class="container">
            <?php 
            // WP_Query arguments
                $args = array (
                        'post_type'              => array( 'banner' ),
                        'posts_per_page'         => '3',
                        'order'                  => 'DESC',
                        'orderby'                => 'date',
                );

                // The Query
                $banner = new WP_Query( $args );               
                // The Loop
                if ( $banner->have_posts() ) {
                        $totalpost = $banner->found_posts;
                        ?>
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">


                                          <!-- Wrapper for slides -->
                                          <div class="carousel-inner" role="listbox">                            
                                             <?php      
                                                $i=0;
                                                while ( $banner->have_posts() ) {
                                                        $banner->the_post();?>
                                                            <div class="item <?php echo $i==0?'active':'';?>">
                                                                <?php 
                                                                    $i++;
                                                                    $url = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) );
                                                                ?>
                                                                <img src="<?php echo $url?>" alt="Banner">
                                                              <div class="carousel-caption">
                                                               
                                                              </div>
                                                            </div>                                    
                                                            <?php
                                                }
                                            ?>
                                            </div>

                                             <!-- Controls -->
                                             <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                               <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                               <span class="sr-only">Previous</span>
                                             </a>
                                             <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                               <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                               <span class="sr-only">Next</span>
                                             </a>
                            </div>                                                 
                                                <?php
                } else {
                        // no posts found
                }
                /* Restore original Post Data */
                wp_reset_postdata();                                
            ?>         
        </div>
        <div class="row"></div>
        <div class="container">
            
        </div>
    </header>    
    <div id="content_wrapper" class="container-fluid">
        <div class="container">