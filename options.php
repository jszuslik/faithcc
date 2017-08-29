<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 *
 */
function optionsframework_option_name() {
    // This gets the theme name from the stylesheet (lowercase and without spaces)
    $themename = 'faithcc';
    $optionsframework_settings = get_option('optionsframework');
    $optionsframework_settings['id'] = $themename;
    update_option('optionsframework', $optionsframework_settings);
    // echo $themename;
}
/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 */
function optionsframework_options() {

    $options = array();
    $options[] = array(
        'name' => __('Header Options', 'options_check'),
        'type' => 'heading');
    $options[] = array(
        'name' => __('Facebook Link', 'options_check'),
        'desc' => __('Paste your Facebook URL here.', 'options_check'),
        'id' => 'facebook_link',
        'std' => 'https://www.facebook.com/',
        'type' => 'text');
    $options[] = array(
        'name' => __('SoundCloud Link', 'options_check'),
        'desc' => __('Paste your SoundCloud URL here.', 'options_check'),
        'id' => 'soundcloud_link',
        'std' => 'https://www.soundcloud.com/',
        'type' => 'text');
    $options[] = array(
        'name' => __('Twitter Link', 'options_check'),
        'desc' => __('Paste your Twitter URL here.', 'options_check'),
        'id' => 'twitter_link',
        'std' => 'https://www.twitter.com/',
        'type' => 'text');
    $options[] = array(
        'name' => __('YouTube Link', 'options_check'),
        'desc' => __('Paste your YouTUbe URL here.', 'options_check'),
        'id' => 'youtube_link',
        'std' => 'https://www.youtube.com/',
        'type' => 'text');

    return $options;
}
