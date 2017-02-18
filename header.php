<?php
/*
 * Header Section of Profound Theme.
 * 
 * @package Profound
 */
?>
<!DOCTYPE html >
<!--[if IE 6]>
<html id="ie6" <?php language_attributes() ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes() ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes() ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes() ?>>
<!--<![endif]-->

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
<?php
//Added to aid the WPUF Plugin accurately delete the mail_alias from virtual user table if
//a user manually deletes a media_query from their own frontend. This is necessary because
//WPUF plugin doesn't use the default Wordpress delete function. We also added something to
//functions.php for this delete to work.
if(isset($_GET['action']) && $_GET['action'] == 'del'){
	delete_post_callback();	
}
?>	
</head>

<body <?php body_class(); ?>>
    <div id="parent-wrapper" class="parent-wrapper grid-col-16">
        <div id="wrapper" class="wrapper grid-col-16">
            
            <div class="header-bg-section clearfix">
                <div id="header-section" class="header-section grid-col-16 clearfix">
				<div id="logo-section" class="logo-section grid-col-7 grid-float-left clearfix" style="float:left;"><?php profound_logo() ?></div>



<?php
if ( is_user_logged_in() ) {
	


} else {



	echo '<div align=right><br><br>';
	echo '<a href="https://www.pitch.asia/login/" class="btn btn-danger">&nbsp;&nbsp; LOGIN &nbsp;&nbsp;</a><br><br>';
	echo '<a href="https://www.pitch.asia/register-expertsource/" class="btn btn-success">&nbsp;&nbsp; Expert Source Registration &nbsp;&nbsp;</a>';
	echo '&nbsp;&nbsp;&nbsp;';
	echo '<a href="https://www.pitch.asia/register-journalist/" class="btn btn-primary">&nbsp;&nbsp; Journalist Registration &nbsp;&nbsp;</a>';
	echo '<br /><br /><strong>Join 20,000+ Journalists and 85,000+ Experts Building Great Stories!</strong>';
}
/*
<!--
            <div id="nav-section" class="nav-section grid-col-16 grid-float-left clearfix">
                <div id="primarymenu-resp" class="primarymenu-resp"><span><?php _e('Menu', 'profound') ?></span><i class="mdf mdf-bars"></i></div>
                <div id="primarymenu-section" class="primarymenu-section nav"><?php profound_nav() ?></div>
            </div>
			--!>
			
			
			
			
			
			<div id="main-section" class="main-section grid-col-16 clearfix">
*/

?>

</div>


                    <?php // profound_social_section_show() ?>
                </div><!-- header section ends -->
                
            </div><!-- header bg section ends -->
			<?php pitch_dashboard_nav(); ?>
			
                        
            <div id="page-wrapper">