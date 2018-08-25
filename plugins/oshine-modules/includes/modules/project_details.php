<?php
/**************************************
			PORTFOLIO DETAILS
**************************************/
if ( ! function_exists( 'be_project_details' ) ) {
	function be_project_details( $atts, $content ) {
		extract( shortcode_atts( array (
			'style' => 'style1',
	        'alignment'=> 'left'
	    ),$atts ) );
	    global $be_themes_data;
	    $style = (!isset($style) || empty($style)) ? 'style1' : $style;
	    $alignment = (!isset($alignment) || empty($alignment) || 'style3' == $style ) ? 'left' : $alignment;	   
	    if($style == 'style2') {
	    	$alignment = 'initial';
	    }
		global $post;
		$output = '';
		$post_type = get_post_type();
		if( $post_type != 'portfolio' ) {
			return '';
		} else {
			$output .= '<div class="portfolio-details '.$style.' oshine-module" style="text-align: '.$alignment.'">';
			if((!is_page_template( 'gallery.php' )) || (!is_page_template( 'portfolio.php' ))) {
				if(get_post_meta($post->ID,'be_themes_portfolio_client',true)) {
					$output .= '<div class="gallery-side-heading-wrap portfolio-client clearfix"><h6 class="gallery-side-heading">'.__('Client', 'oshine-modules').'</h6>';
					$output .= '<p><span class="project-client">'.get_post_meta($post->ID, 'be_themes_portfolio_client', true).'</span></p></div>';
				}
				if(get_post_meta($post->ID,'be_themes_portfolio_architects',true)) {
					$output .= '<div class="gallery-side-heading-wrap portfolio-architects clearfix"><h6 class="gallery-side-heading">'.__('Architectes', 'oshine-modules').'</h6>';
					$output .= '<p><span class="project-architects">'.get_post_meta($post->ID, 'be_themes_portfolio_architects', true).'</span></p></div>';
				}
				if(get_post_meta($post->ID,'be_themes_portfolio_place',true)) {
					$output .= '<div class="gallery-side-heading-wrap portfolio-place clearfix"><h6 class="gallery-side-heading">'.__('Lieu', 'oshine-modules').'</h6>';
					$output .= '<p><span class="project-place">'.get_post_meta($post->ID, 'be_themes_portfolio_place', true).'</span></p></div>';
				}
				if(get_post_meta($post->ID,'be_themes_portfolio_area',true)) {
					$output .= '<div class="gallery-side-heading-wrap portfolio-area clearfix"><h6 class="gallery-side-heading">'.__('Surface', 'oshine-modules').'</h6>';
					$output .= '<p><span class="project-area">'.get_post_meta($post->ID, 'be_themes_portfolio_area', true).'</span></p></div>';
				}
				if(get_post_meta($post->ID,'be_themes_portfolio_budget',true)) {
					$output .= '<div class="gallery-side-heading-wrap portfolio-budget clearfix"><h6 class="gallery-side-heading">'.__('Budget', 'oshine-modules').'</h6>';
					$output .= '<p><span class="project-budget">'.get_post_meta($post->ID, 'be_themes_portfolio_budget', true).'</span></p></div>';
				}
				if(get_post_meta($post->ID,'be_themes_portfolio_calendar',true)) {
					$output .= '<div class="gallery-side-heading-wrap portfolio-calendar clearfix"><h6 class="gallery-side-heading">'.__('Calendrier', 'oshine-modules').'</h6>';
					$output .= '<p><span class="project-calendar">'.get_post_meta($post->ID, 'be_themes_portfolio_calendar', true).'</span></p></div>';
				}
				if(get_be_themes_portfolio_category_list($post->ID, true)) {
					$output .= '<div class="gallery-side-heading-wrap portfolio-category clearfix"><div class="gallery-cat-list-wrap">';
					$output .= '<h6 class="gallery-side-heading">'.__('Catégories', 'oshine-modules').'</h6>';
					$output .= '<p>'.get_be_themes_portfolio_category_list($post->ID, true).'</p>';
					$output .= '</div></div>';
				}
			}
			$output .= '<div class="gallery-side-heading-wrap portfolio-share clearfix"><h6 class="gallery-side-heading">'.__('Share This', 'oshine-modules').'</h6>';
			$output .= '<p>';
			$output .= be_get_share_button(get_permalink($post->ID), get_the_title($post->ID) , $post->ID);
			$output .= '</p></div>';
			if(get_post_meta($post->ID,'be_themes_portfolio_visitsite_url',true)) {
				if(!isset($be_themes_data['portfolio_visit_site_style']) || empty($be_themes_data['portfolio_visit_site_style'])) {
					$be_themes_data['portfolio_visit_site_style'] = 'style1';
				}				

				$output .= '<a href="'.get_post_meta($post->ID,'be_themes_portfolio_visitsite_url',true).'" class="mediumbtn be-button view-project-link '.$be_themes_data['portfolio_visit_site_style'].'-button" target="_blank">'.__('View Project', 'oshine-modules').'</a>';
			}
			$output .= '</div>';
			return $output;
		}

	}
	add_shortcode( 'project_details', 'be_project_details' );
}

add_filter( 'tatsu_project_details_shortcode_output_filter', 'oshine_project_details_tatsu_output' );
function oshine_project_details_tatsu_output( $tag ) {
	$output = '<div class="tatsu-module tatsu-notification tatsu-error">Portfolio Details Module - Preview Not Available, Please check the output in the front end</div>';
	return $output;
}

?>