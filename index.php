<?php 
/*
wp_head();
if (is_page('register-expertsource')) 
{
	//$data="<head><script src='dist/assets/jquery-3.1.1.js'></script></head>";
	$data="<img src='https://www.pitch.asia/wp-content/uploads/register-expert-steps.png' alt='Register = Expert' width='700' height='120' class='aligncenter size-full wp-image-132' />";
	$data .=do_shortcode('[wpuf_profile type="registration" id="15"]');
	echo("$data");
}
else if (is_page('register-journalist')) 
{
	$data="<img class='aligncenter size-full wp-image-130' src='https://www.pitch.asia/wp-content/uploads/register-journo-steps.png' alt='Register - Journalist' width='700' height='120' />";
	$data .=do_shortcode('[wpuf_profile type="registration" id="75"]');
	echo("$data");
}
else if (is_page('profile'))
{
	$data=do_shortcode('[wpuf_profile type="profile" id="71430"]');
	echo("$data");
}
else
{

require get_template_directory()."/dist/index.html";
}
wp_footer();
	
//require get_template_directory()."/dist/index.html"; 
*/
wp_head();
require get_template_directory()."/pages2/index.html";
wp_footer();
?>