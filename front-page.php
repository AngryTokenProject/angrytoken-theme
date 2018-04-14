<?php
/**
 *  The template for displaying the front page.
 *
 *  @package WordPress
 *  @subpackage illdy
 */


get_header();
$ang_options = get_option('angrytoken_option_name');

?>
	<div class="container">

		<div class="angrymessage row">
            <h3>Decentralized Social Media Ads</h3>
            <hr>
            <div>
            <p><?php echo $ang_options['ang_message'];?></p>
                <img class="angrymsgimg" src="<?php echo site_url();?>/wp-content/uploads/2018/03/firma.png" />
           </div>  
        </div><!--/ .angrymessage .row-->
    </div><!--- container -->

    <div class="ext_container container">
		<div class="row">
            <div style="text-align: center" class="slinksnip">
                <img class="snipad_img" src="<?php echo site_url();?>/wp-content/uploads/snipad.svg"/>
                <img class="slinkad_img" src="<?php echo site_url();?>/wp-content/uploads/slinkad.svg"/>
                <p class="slinkad_txt"><?php echo $ang_options['ang_slinkad'];?></p>
                <p class="snipad_txt"><?php echo $ang_options['ang_snipad'];?></p>
            </div>
        </div><!--/.row-->
    </div><!-- ext_container -->

    <div class="eco_container">
        <div class="ecosystem row">
            <h3>Ecosystem</h3>
            <hr>
            <div style="text-align: center">
                <img src="<?php echo site_url();?>/wp-content/uploads/ecosystem.svg"/>
            </div>
        </div>
    </div><!--/eco_container-->

	<div class="container">
		<div class="empower row">
            <h3>Empowering & Rewarding</h3>
            <hr>
            <div style="text-align: center" class="empower_icons">
                <img class="ads_img" src="<?php echo site_url();?>/wp-content/uploads/ads.svg"/>
                <img class="creators_img" src="<?php echo site_url();?>/wp-content/uploads/creators.svg"/>
                <img class="visitors_img" src="<?php echo site_url();?>/wp-content/uploads/viewers.svg"/>
                <p class="advs_txt"><?php echo $ang_options['ang_ads'];?></p>
                <p class="creators_txt"><?php echo $ang_options['ang_creators'];?></p>
                <p class="visitors_txt"><?php echo $ang_options['ang_visitors'];?></p>
            </div>
        </div>
    </div>
    <div class="empower_container">
        <img src="<?php echo site_url();?>/wp-content/uploads/empowering.svg"/>
        <div class="empower_nofake">
            <h3>No more fake news</h3>
            <p><?php echo $ang_options['ang_nofake'];?></p>
        </div>
        <div class="empower_fasteasy">
            <h3>Fast & Easy</h3>
            <p><?php echo $ang_options['ang_fasteasy'];?></p>
        </div>
        <div class="empower_boost">
            <h3>Boost your revenue</h3>
            <p><?php echo $ang_options['ang_boost'];?></p>
        </div>
        <div class="empower_localnews">
            <h3>Give local news a global audience</h3>
            <p><?php echo $ang_options['ang_localnews'];?></p>
        </div>
    </div>

<?php
get_footer(); ?>
