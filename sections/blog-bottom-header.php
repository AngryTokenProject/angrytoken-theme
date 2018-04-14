<?php
/**
 *    The template for dispalying the bottom header section in blog.
 *
 * @package    WordPress
 * @subpackage illdy
 *             * @TODO: https://developer.wordpress.org/reference/functions/get_the_archive_title/
 */
?>
<div class="bottom-header blog">
<?php echo do_shortcode('[crellyslider alias="main"]');?>
<div class="angryVideo">
    <video>
        <source src="<?php echo site_url();?>/wp-content/uploads/angrytoken.mp4" type="video/mp4">
    </video>
</div>
    <div class="angryPlay">
    <i class="fas fa-play"></i>
    <div>
</div><!--/.bottom-header.blog-->
