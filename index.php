<?php 

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
else if (is_page('login'))
{
	$data='<div class="login" id="wpuf-login-form">';
	

    $message = apply_filters( 'login_message', '' );
    if ( ! empty( $message ) ) {
		$data .=$message . "\n";
    }
    
    $data .=WPUF_Login::init()->show_errors();
    $data .=WPUF_Login::init()->show_messages();
$data .='</div>';

$data .='<div class="ig-container">';
    $data .='<div class="row">';
                    $data .='<div class="col-md-6 no-padding">';
                $data .='<div class="mm_login_form">';
                    $data .='<div class="page-header">';
                        $data .='<h3>Sign in</h3>';
                    $data .='</div>';
                    
		$data .='<form name="loginform" id="loginform" action="https://www.pitch.asia/login/" method="post">';
			
			 $data .='<div class="form-group">';
				$data .='<label for="user_login">Username</label>';
				$data .='<input type="text" name="log" id="user_login" class="form-control" value="" size="20" />';
			$data .='</div>';
			$data .='<div class="form-group">';
				$data .='<label for="user_pass">Password</label>';
				$data .='<input type="password" name="pwd" id="user_pass" class="form-control" value="" size="20" />';
			$data .='</div>';
			
			$data .='<p class="login-remember"><label><input name="rememberme" type="checkbox" id="rememberme" value="forever" /> Remember Me</label>';
			$data .='<a class="pull-right" href="https://www.pitch.asia/login/?action=lostpassword">Forgot password?</a></p>';
			$data .='<p class="login-submit">';
				$data .='<button type="submit" name="wp-submit" id="wp-submit" class="btn btn-primary">Sign In</button>';
				$data .='<input type="hidden" name="redirect_to" value="https://www.pitch.asia/job/add-a-job/" />';
			$data .="</p>";
			
		$data .="</form>                </div>";
            $data .="</div>";
            $data .='<div class="col-md-6 no-padding">';
                $data .='<div class="mm_sign_up">';
                    $data .='<div class="page-header">';
                        $data .="<h3>Sign Up</h3>";
                    $data .="</div>";
                    $data .="<p>Sign up to become a registered member of Pitch.Asia!</p>";


$data .='<a href="https://www.pitch.asia/www.pitch.asia/register-expertsource/" class="button-green">&nbsp;&nbsp; Expert Register &nbsp;&nbsp;</a>&nbsp;&nbsp;<a href="https://www.pitch.asia/register-journalist/" class="button-blue">&nbsp;&nbsp; Journalist Register &nbsp;&nbsp;</a>';



                $data .="</div>";
            $data .="</div>";
                $data .='<div class="clearfix"></div>';
    $data .="</div>";
$data .="</div>";
	echo("$data");
}
else if (is_page('profile'))
{
	$data=do_shortcode('[wpuf_profile type="profile" id="71430"]');
	
	echo("$data");

}
else
{

//require get_template_directory()."/pages2/index.html";
    wp_nav_menu();
    get_sidebar();
    _e('Menu', 'profound');
}
wp_footer();
	
//require get_template_directory()."/dist/index.html"; 
?>