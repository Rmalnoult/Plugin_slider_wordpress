<?php
if(function_exists("register_field_group"))
{
  register_field_group(array (
    'id' => 'acf_galerie-2',
    'title' => 'galerie',
    'fields' => array (
      array (
        'key' => 'field_5326fd4dde147',
        'label' => 'image',
        'name' => 'image',
        'type' => 'repeater',
        'sub_fields' => array (
          array (
            'key' => 'field_5326fde7de149',
            'label' => 'URL',
            'name' => 'url',
            'type' => 'text',
            'column_width' => '',
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'formatting' => 'html',
            'maxlength' => '',
          ),
          array (
            'key' => 'field_5326fe43de14a',
            'label' => 'caption',
            'name' => 'caption',
            'type' => 'text',
            'column_width' => '',
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'formatting' => 'html',
            'maxlength' => '',
          ),
          array (
            'key' => 'field_5326fe50de14b',
            'label' => 'image',
            'name' => 'image',
            'type' => 'image',
            'column_width' => '',
            'save_format' => 'object',
            'preview_size' => 'thumbnail',
            'library' => 'all',
          ),
        ),
        'row_min' => 0,
        'row_limit' => '',
        'layout' => 'table',
        'button_label' => 'Add Row',
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'post',
          'order_no' => 0,
          'group_no' => 0,
        ),
      ),
    ),
    'options' => array (
      'position' => 'normal',
      'layout' => 'no_box',
      'hide_on_screen' => array (
      ),
    ),
    'menu_order' => 0,
  ));
}