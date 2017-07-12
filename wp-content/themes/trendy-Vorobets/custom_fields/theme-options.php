<?php 

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'theme_options', 'Theme options' )
    -> set_icon( 'dashicons-art' )
	-> add_tab( 'Header', array(
		Field::make("image", "logo-header", "Logotype")->set_value_type('url')->set_width(50),
		Field::make("image", "bg-header", "Background header")->set_value_type('url')->set_width(50),
		Field::make('text', 'up_title_header', 'Up title header')->set_default_value('WE ARE'),
		Field::make('text', 'down_title_header', 'Down title header')->set_default_value('DESIGNING'),
		Field::make('text', 'subtitle_header', 'Subtitle header')->set_default_value('And We Are Doing It Well'),
		Field::make('text', 'link_down_btn', 'Link for "button down"'),
	) )
    -> add_tab( 'FIND US', array(
		Field::make('image', 'bg-find-us', 'Background "FIND US" ')->set_value_type('url'),
		Field::make('text', 'title_find_us', 'Title')->set_default_value('Find us'),
    	Field::make('text', 'subtitle_find_us', 'Subtitle'),
    	Field::make('text', 'phones_find_us', 'Phones')->help_text('New line through &lt;br&gt;')->set_width(33),
    	Field::make('text', 'office_addr_find_us', 'Office address')->help_text('New line through &lt;br&gt;')->set_width(33),
    	Field::make('text', 'emails_find_us', 'Emails')->help_text('New line through &lt;br&gt;')->set_width(33),
    ) )
    -> add_tab( 'Footer', array(
    	Field::make('text', 'copy_footer', 'Text from the left footer'),
    	Field::make('text', 'url_facebook', 'Link facebook'),
    	Field::make('text', 'url_google-plus', 'Link google plus'),
    	Field::make('text', 'url_twitter', 'Link twitter'),
    	Field::make('text', 'url_linkedin', 'Link linkedin'),
    	Field::make('text', 'url_pinterest', 'Link pinterest'),
    	Field::make('text', 'url_vk', 'Link vkontakte'),
    	Field::make('text', 'url_dribbble', 'Link dribbble'),
    	Field::make('text', 'url_flickr', 'Link flickr'),
    	Field::make('text', 'url_rss', 'Link rss'),
    ) )
    -> add_tab( 'Blog', array(
        Field::make('text', 'title_blog', 'Title BLOG'),
        Field::make('text', 'subtitle_blog', 'Subtitle BLOG'),
    ) );
		 