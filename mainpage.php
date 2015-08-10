<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*
Template Name: Main Page
*/
get_header();
?>
<div class="row">
<div class="col-xs-12 col-sm-6 col-md-9">Main page</div>    
<div class="col-xs-6 col-md-3">
      <?php get_categorylist();?>
      <?php get_taglist();?>
</div>
  
</div>
<?php
get_footer();