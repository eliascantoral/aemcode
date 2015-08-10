<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function get_categorylist($cat = null){
    $args = array(
      'orderby' => 'name',
      'parent' => 0
      );
    $categories = get_categories( $args );
    ?><div class="sidebox">
        <h4>TEMAS</h4>
        <?php 
        foreach ( $categories as $category ) {
            echo '<a href="' . get_category_link( $category->term_id ) .'" class="itemlist">'. $category->name . ' <span class="badge">'. $category->count .'</span> </a><br>';
        }    
    ?></div><?php    
}
