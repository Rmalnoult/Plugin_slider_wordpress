<?php

class shortcode {

	function __construct() {
		add_shortcode( 'gal', array( __CLASS__, 'shortcode_gallerie' ));
		add_shortcode( 'foo', array( __CLASS__, 'shortcode_foo' ));
		add_action('init', array($this, 'enqueue'));
	}


	function enqueue(){
			wp_enqueue_script( 'jssor1', 'http://code.jquery.com/jquery-latest.min.js');		 
			wp_enqueue_script( 'lib', SLIDER_WP_URL . '/slides/jquery.slides.min.js');
			wp_enqueue_script( 'lib', SLIDER_WP_URL . '/slides/main.js');

		
	}

	public static function shortcode_gallerie($atts) {

		extract(shortcode_atts( array(
			'id' => '',
			), $atts ));



		$images = get_field('image', $id);
		


		if ( empty($images) || !is_array($images) ) {
			return false;
		};

// var_dump($images);

		$return .= ' <style>
    				
    				#slides {
     					 display:none;
    				};
  					</style>
  					<script>
					    $(function(){
					      $("#slides").slidesjs({
					        width: 940,
					        height: 528
					      });
					    });
				  </script>
				  <ul id="slides">';

		foreach ($images as $image) {			
							$return .= '<img src="' . $image["image"]["url"] . '" />';
		};
		$return .= '</ul>';

		return $return;
	}
}