
<?php
/*
Plugin Name: Custom Metaboxes
Plugin URI:
Description: Adds Metaboxes to the AliveGene Website
Version: 1.0
Author: HirajDey
Author URI:
License: GNU General Public License v2 or later
licence URI: LICENSE
*/


function homebanner_add_metaboxes(){

		//Check if post has 'brave-choice-to-make-sec' term from 'sections' taxonomy. If not don't add metabox.
		if(has_term( 'home-banner', 'banners', $post ) ){
	     
	     add_meta_box('ga-metaboxes', 'Section Heading', 'homebanner_metaboxes_container', 'home',  'normal', 'high', null);

	  }

}

add_action('add_meta_boxes', 'homebanner_add_metaboxes');


function homebanner_metaboxes_container($post) {

  wp_nonce_field(basename(__FILE__), "meta-box-nonce" );

  ?>

  <div class="metabox">

  	<label style="display: block;font-weight:400;padding: 15px 0" for="cisthedMetaBox">Heading A :</label>
   	<input style="width: 100%;padding: 10px;" type="text" name="input-metabox-homebanner-headingA" value="<?php echo get_post_meta($post->ID, "input-metabox-homebanner-headingA", true ); ?>">

   	<label style="display: block;font-weight:400;padding: 15px 0" for="cisthedMetaBox">Heading B :</label>
   	<input style="width: 100%;padding: 10px;" type="text" name="input-metabox-homebanner-headingB" value="<?php echo get_post_meta($post->ID, "input-metabox-homebanner-headingB", true ); ?>">

   	<label style="display: block;font-weight:400;padding: 15px 0" for="cisthedMetaBox">Heading C :</label>
   	<input style="width: 100%;padding: 10px;" type="text" name="input-metabox-homebanner-headingC" value="<?php echo get_post_meta($post->ID, "input-metabox-homebanner-headingC", true ); ?>">

  </div>

  <?php

}


add_action('save_post', 'homebanner_save_metaboxes');

	function homebanner_save_metaboxes($post_id){

   if (!isset($_POST["meta-box-nonce"]) || !wp_verify_nonce($_POST["meta-box-nonce"], basename(__FILE__)))
       return $post_id;

   if(!current_user_can("edit_post", $post_id))
       return $post_id;

   if(defined("DOING_AUTOSAVE") && DOING_AUTOSAVE)
       return $post_id;

    $input_metabox_HA ='';
    $input_metabox_HB ='';
    $input_metabox_HC ='';


    if(isset($_POST["input-metabox-homebanner-headingA"])) {
      $input_metabox_HA = $_POST["input-metabox-homebanner-headingA"];
    }
    update_post_meta($post_id, "input-metabox-homebanner-headingA",$input_metabox_HA);


    if(isset($_POST["input-metabox-homebanner-headingB"])) {
      $input_metabox_HB = $_POST["input-metabox-homebanner-headingB"];
    }
    update_post_meta($post_id, "input-metabox-homebanner-headingB",$input_metabox_HB);


    if(isset($_POST["input-metabox-homebanner-headingC"])) {
      $input_metabox_HC = $_POST["input-metabox-homebanner-headingC"];
    }
    update_post_meta($post_id, "input-metabox-homebanner-headingC",$input_metabox_HC);

}



function there_billion_add_metaboxes(){

    //Check if post has 'brave-choice-to-make-sec' term from 'sections' taxonomy. If not don't add metabox.
    if(has_term( 'there-are-billion-sec', 'home-sections', $post ) ){
       
       add_meta_box('ga-metaboxes', 'Section Heading', 'there_billion_metaboxes_container', 'home',  'normal', 'high', null);

    }

}

add_action('add_meta_boxes', 'there_billion_add_metaboxes');


function there_billion_metaboxes_container($post) {

  wp_nonce_field(basename(__FILE__), "meta-box-nonce" );

  ?>

  <div class="metabox">

    <label style="display: block;font-weight:400;padding: 15px 0" for="therebillionMetaBox">Heading A :</label>
    <input style="width: 100%;padding: 10px;" type="text" name="input-metabox-there_billion-headingA" value="<?php echo get_post_meta($post->ID, "input-metabox-there_billion-headingA", true ); ?>">

  </div>

  <?php

}


add_action('save_post', 'there_billion_save_metaboxes');

  function there_billion_save_metaboxes($post_id){

   if (!isset($_POST["meta-box-nonce"]) || !wp_verify_nonce($_POST["meta-box-nonce"], basename(__FILE__)))
       return $post_id;

   if(!current_user_can("edit_post", $post_id))
       return $post_id;

   if(defined("DOING_AUTOSAVE") && DOING_AUTOSAVE)
       return $post_id;

    $input_metabox_HA ='';


    if(isset($_POST["input-metabox-there_billion-headingA"])) {
      $input_metabox_HA = $_POST["input-metabox-there_billion-headingA"];
    }
    update_post_meta($post_id, "input-metabox-there_billion-headingA",$input_metabox_HA);

}


function conversation_cart_add_metaboxes(){

    //Check if post has 'brave-choice-to-make-sec' term from 'sections' taxonomy. If not don't add metabox.
    if(has_term( 'starts-with-conversation-cart', 'home-sections', $post ) ){
       
       add_meta_box('ga-metaboxes', 'Video Text Box', 'conversation_cart_metaboxes_container', 'home',  'normal', 'high', null);

    }

     //Check if post has 'brave-choice-to-make-sec' term from 'sections' taxonomy. If not don't add metabox.
    if(has_term( 'how-it-works-cart', 'individual-sections', $post ) ){
       
       add_meta_box('ga-metaboxes', 'Video Text Box', 'conversation_cart_metaboxes_container', 'individual',  'normal', 'high', null);

    }

}

add_action('add_meta_boxes', 'conversation_cart_add_metaboxes');


function conversation_cart_metaboxes_container($post) {

  wp_nonce_field(basename(__FILE__), "meta-box-nonce" );

  ?>

  <div class="metabox">

    <label style="display: block;font-weight:400;padding: 15px 0" for="conversationCartMetaBox">Video Text :</label>
    <input style="width: 100%;padding: 10px;" type="text" name="input-metabox-conversationVideoText" value="<?php echo get_post_meta($post->ID, "input-metabox-conversationVideoText", true ); ?>">

  </div>

  <?php

}


add_action('save_post', 'conversation_cart_save_metaboxes');

  function conversation_cart_save_metaboxes($post_id){

   if (!isset($_POST["meta-box-nonce"]) || !wp_verify_nonce($_POST["meta-box-nonce"], basename(__FILE__)))
       return $post_id;

   if(!current_user_can("edit_post", $post_id))
       return $post_id;

   if(defined("DOING_AUTOSAVE") && DOING_AUTOSAVE)
       return $post_id;

    $input_metabox_video_text ='';


    if(isset($_POST["input-metabox-conversationVideoText"])) {
      $input_metabox_video_text = $_POST["input-metabox-conversationVideoText"];
    }

    update_post_meta($post_id, "input-metabox-conversationVideoText",$input_metabox_video_text);

}






