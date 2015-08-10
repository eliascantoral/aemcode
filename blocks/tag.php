<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function get_taglist($tag = null){
        $args = array(
          'orderby' => 'count',
          'order' => 'DESC',
          'number' => 10,
          'parent' => 0
          );    
        $tags = get_tags($args);
        ?><div class="sidebox">
        <h4>ETIQUETAS</h4>
        <?php 
        foreach ( $tags as $tag ) {
            echo '<a href="' . get_tag_link( $tag->term_id ) .'" class="itemlist">'. $tag->name .'</a> ';
        }
        ?></div><?php         
}
