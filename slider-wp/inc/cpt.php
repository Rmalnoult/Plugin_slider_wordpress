<?php
/*
Plugin Name: slider-wp - Galeries
Version: 1.0-todo
Plugin URI: 
Description: TODO - Custom post type Galeries
Author: Romain Malnoult & Julien Guyon
Author URI: http://www.romainmalnoult.com

----

Copyright 2012 - TODO Author

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

add_action( 'init', 'register_my_cpt_galerie', 10 );
function register_my_cpt_galerie() {
register_post_type( "galerie", array (
  'labels' => 
  array (
    'name' => 'Galeries',
    'singular_name' => 'Galerie',
    'add_new' => 'Ajouter',
    'add_new_item' => 'Ajouter une nouvelle entrée',
    'edit_item' => 'Modifier l\'entrée',
    'new_item' => 'Nouvelle entrée',
    'view_item' => 'Voir l\'entrée',
    'search_items' => 'Chercher une entrée',
    'not_found' => 'Aucune entrée trouvée',
    'not_found_in_trash' => 'Aucune entrée trouvée dans la corbeille',
    'parent_item_colon' => 'Entrée parente:',
  ),
  'description' => '',
  'publicly_queryable' => true,
  'exclude_from_search' => false,
  'map_meta_cap' => true,
  'capability_type' => 'post',
  'public' => true,
  'hierarchical' => false,
  'rewrite' => 
  array (
    'slug' => 'galerie',
    'with_front' => true,
    'pages' => true,
    'feeds' => true,
  ),
  'has_archive' => true,
  'query_var' => 'galerie',
  'supports' => 
  array (
    0 => 'title',
    1 => 'editor',
  ),
  'taxonomies' => 
  array (
  ),
  'show_ui' => true,
  'menu_position' => 30,
  'menu_icon' => false,
  'can_export' => true,
  'show_in_nav_menus' => true,
  'show_in_menu' => true,
) );
}