<?php 

use Carbon_Fields\Container;
use Carbon_Fields\Field;

// for events
/*
Container::make('post_meta', 'Date event')
		 ->show_on_post_type('events')
		 ->set_context('side')
		 ->set_priority('default')
		 ->add_fields( [
			 Field::make('date', 'event_date')
			] 
		);
*/
// for team
Container::make('post_meta', 'Add information team member')
		 ->show_on_post_type('team')
		 ->add_fields( [
   		    Field::make('text', 'name_employee', 'Name'),
			Field::make('text', 'spec_employee', 'Specialization'),
	    	Field::make('text', 'facebook_employee', 'Link facebook'),
    		Field::make('text', 'twitter_employee', 'Link twitter'),
    		Field::make('text', 'google-plus_employee', 'Link google plus'),
    		Field::make('text', 'linkedin_employee', 'Link linkedin'),
    		Field::make('text', 'pinterest_employee', 'Link pinterest'),
			 
			] 
		);

// for works
Container::make('post_meta', 'Project info')
		 ->show_on_post_type('work')
		 ->add_fields( [
   		    Field::make('text', 'project_info_for', 'For'),
			Field::make('text', 'project_info_category', 'Category'),
    		Field::make('date', 'project_info_date_start', 'Date Start')->set_width(50),
    		Field::make('date', 'project_info_date_finished', 'Date Finished')->set_width(50),
    		Field::make('text', 'project_info_URL', 'URL')->help_text('Example: <i>https://www.google.com</i>'),
			] 
		);
Container::make( 'post_meta', 'Skills project' )
		 ->show_on_post_type('work')
		 ->add_fields( array(
						Field::make( 'complex', 'Project_skill', 'Skill' )
							->add_fields( array(
								Field::make( 'text','name','Name skill')->help_text( 'Example: <i>Photoshop</i>' )
									 ->set_width( 20 ),
								Field::make( 'text','description','Description skill')->help_text( 'Example: <i>Donec tincidunt tortor et velit ornare aliquet</i>' )
									 ->set_width( 25 ),
								Field::make( 'text','spec','% skill' )->help_text( 'Example: <i>20</i>' )
									 ->set_width( 20 ),
							 )
							)
				) );
Container::make( 'post_meta', 'Slider pictures work' )
		 ->show_on_post_type('work')
		 ->add_fields( array(
						Field::make( 'complex', 'Pictures_for_slider', 'Pictures for the slider' )
							->add_fields( array(
								Field::make( 'image','Picture_slider','Picture')					 
							   )
							)
							
				) );

// for prices
Container::make('post_meta', 'Highlight')
		 ->show_on_post_type('prices')
		 ->add_fields( [
   		    Field::make('checkbox', 'price_hight', 'Highlight price'),
  		  ] 
		);
Container::make('post_meta', 'Information for prices')
		 ->show_on_post_type('prices')
		 ->add_fields( [
   		    Field::make('text', 'price_price', 'Price')->set_width(50),
   		    Field::make('text', 'price_term', 'Term for prices')->set_width(50),
   		  ] 
		);
Container::make( 'post_meta', 'Suggestions' )
		 ->show_on_post_type('prices')
		 ->add_fields( array(
						Field::make( 'complex', 'suggestions', 'Suggestions' )
							->add_fields( array(
								Field::make( 'text','price_suggestion','Text suggestion')				 
							   )
							)
				) );		 
Container::make('post_meta', 'Link for button')
		 ->show_on_post_type('prices')
		 ->add_fields( [
   		    Field::make('text', 'price_link', 'Link'),
  		  ] 
		);
// for prices
Container::make('post_meta', 'Information about the author')
		 ->show_on_post_type('testimonials')
		 ->add_fields( [
   		    Field::make('text', 'testimonial_author_name', 'Name')->set_width(50),
   		    Field::make('text', 'testimonial_author_prof', 'Profession')->set_width(50),
   		  ] 
		);
// for facts
Container::make('post_meta', 'Information fact')
		 ->show_on_post_type('facts')
		 ->add_fields( [
   		    Field::make('text', 'facts_value', 'Value'),
   		  ] 
		);


// for  post
// format gallery
Container::make( 'post_meta', 'Slider post' )
		 ->show_on_post_type('post')
		 ->show_on_post_format('gallery')
		 ->add_fields( array(
						Field::make( 'complex', 'post_pic_gallery', 'Pictures for gallery' )
							->add_fields( array(
								Field::make( 'image','picture_gallery','Picture')					 
							   )
							)
				) );
// format audio
Container::make('post_meta', 'Recording music')
		 ->show_on_post_type('post')
		 ->show_on_post_format('audio')
		 ->add_fields( [
   		    Field::make('file', 'music_record', 'Track')
   		    ->set_type('audio')
   		    ->set_value_type('url'),
   		  ] 
		);
// format video
Container::make('post_meta', 'Recording video')
		 ->show_on_post_type('post')
		 ->show_on_post_format('video')
		 ->add_fields( [
   		    Field::make('file', 'video_record', 'Track')
   		    ->set_type('video')
   		    ->set_value_type('url'),
   		  ] 
		);		 
// format quote
Container::make('post_meta', 'Quote Author')
		 ->show_on_post_type('post')
		 ->show_on_post_format('quote')
		 ->add_fields( [
   		    Field::make('text', 'quote_author', 'Name author'),
   		  ] 
		);		 

