<?php

function profound_setup() 
{
    register_nav_menu('primary', __('Primary Menu','pitchdasboard'));
}
add_action( 'init', 'profound_setup' );

function wptuts_styles_with_the_lot()
{
    // Register the style like this for a theme:
    wp_register_style( 'custom-style', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css', array(), '20120208', 'all' );
    // For either a plugin or a theme, you can then enqueue the style:
    wp_enqueue_style( 'custom-style' );
    
	wp_register_style( 'custom-style2', get_template_directory_uri() . '/vendor/metisMenu/metisMenu.min.css', array(), '20120208', 'all' );
    // For either a plugin or a theme, you can then enqueue the style:
    wp_enqueue_style( 'custom-style2' );
	
	wp_register_style( 'custom-style3', get_template_directory_uri() . '/dist/css/sb-admin-2.css', array(), '20120208', 'all' );
    // For either a plugin or a theme, you can then enqueue the style:
    wp_enqueue_style( 'custom-style3' );
	
	wp_register_style( 'custom-style4', get_template_directory_uri() . '/vendor/morrisjs/morris.css', array(), '20120208', 'all' );
    // For either a plugin or a theme, you can then enqueue the style:
    wp_enqueue_style( 'custom-style4' );
	
	wp_register_style( 'custom-style5', get_template_directory_uri() . '/vendor/font-awesome/css/font-awesome.min.css', array(), '20120208', 'all' );
    // For either a plugin or a theme, you can then enqueue the style:
    wp_enqueue_style( 'custom-style5' );
	/*
	 // Register the script like this for a theme:
    wp_register_script( 'custom-script', get_template_directory_uri() . '/vendor/jquery/jquery.min.js', array(), '20120208',true );
    // For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script( 'custom-script');
	*/
	// Register the script like this for a theme:
    wp_register_script( 'custom-script2', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js', array(), '20120208',true );
    // For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script( 'custom-script2');
	
	// Register the script like this for a theme:
    wp_register_script( 'custom-script3', get_template_directory_uri() . '/vendor/metisMenu/metisMenu.min.js', array(), '20120208',true );
    // For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script( 'custom-script3');
	
	// Register the script like this for a theme:
    wp_register_script( 'custom-script4', get_template_directory_uri() . '/vendor/raphael/raphael.min.js', array(), '20120208',true );
    // For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script( 'custom-script4');
	
	// Register the script like this for a theme:
    wp_register_script( 'custom-script5', get_template_directory_uri() . '/vendor/morrisjs/morris.min.js', array(), '20120208',true );
    // For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script( 'custom-script5');
	
	// Register the script like this for a theme:
    wp_register_script( 'custom-script6', get_template_directory_uri() . '/data/morris-data.js', array(), '20120208',true );
    // For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script( 'custom-script6');
	
	
	// Register the script like this for a theme:
    wp_register_script( 'custom-script7', get_template_directory_uri() . '/dist/js/sb-admin-2.js', array(), '20120208',true );
    // For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script( 'custom-script7');
	/**/
	
}
add_action( 'wp_enqueue_scripts', 'wptuts_styles_with_the_lot' );


//This function below will NOT reset the user's password when they are confirmed by the "New User Approve" plugin. If we remove this function, then the user will always get a reset new password when they are approved, and we do not want that to happen

function profound_logo() {
    
    //$logo_img = profound_get_option('logo_img');
	$logo_img = get_option('logo_img');
            
         if( empty($logo_img)): ?>
        
        <div id="site-title" class="site-title">
                <a href="<?php echo esc_url( home_url( '/' ) ) ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ) . ' | ' . esc_attr( get_bloginfo('description') ) ?>" rel="home"><?php echo esc_html(get_bloginfo( 'name', 'display' )) ?></a>
            </div>
            <?php if(!get_option('disable_site_desc')): ?>
                <div id="site-description" class="site-description"><?php echo esc_html( get_bloginfo( 'description' ) ) ?></div>
            <?php endif; ?>
        <?php else: ?>
        
            <div id="site-title">
                <a href="<?php echo esc_url( home_url( '/' ) ) ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ) ?>" rel="home"><img src="<?php echo esc_url( get_option('logo_img') ) ?>"/></a>
            </div>

        <?php endif;
}
function profound_get_social_section_individual_icon($option, $title, $icon) {
    $output = '';

    if(get_option($option)){
        $output .= '<div class="social-icons">';
        $output .= '<a href="'.esc_url(get_option($option)).'" title="'.esc_attr($title).'" target="_blank"><i class="mdf mdf-'.esc_attr($icon).'"></i></a>';
        $output .= '</div>';
    }
    return $output;
    
}
function profound_social_section_show() {    
    
    if(!get_option('disable_social_section')):

    $output = false;

    $output .= profound_get_social_section_individual_icon('facebook', 'Facebook', 'facebook');
    $output .= profound_get_social_section_individual_icon('twitter', 'Twitter', 'twitter');
    $output .= profound_get_social_section_individual_icon('google-plus', 'Google+', 'google-plus');
    $output .= profound_get_social_section_individual_icon('linkedin', 'Linkedin', 'linkedin');
    $output .= profound_get_social_section_individual_icon('instagram', 'Instagram', 'instagram');
    $output .= profound_get_social_section_individual_icon('pinterest', 'Pinterest', 'pinterest');
    $output .= profound_get_social_section_individual_icon('skype', 'Skype', 'skype');
    $output .= profound_get_social_section_individual_icon('tumblr', 'Tumblr', 'tumblr');
    $output .= profound_get_social_section_individual_icon('rss', 'RSS feed', 'rss');
    
    if($output !== false): ?>
    <div id="social-section" class="social-section">
        <?php echo $output ?>
    </div>
    <?php endif ?>
<?php
    endif;
}
function profound_nav() {
    /*
	wp_nav_menu(array(
        'theme_location' => 'primary',
        'container_id' => 'menu',
        'menu_class' => 'sf-menu profound_menu',
        'menu_id' => 'profound_menu',
        'fallback_cb' => 'profound_nav_fallback' // Fallback function in case no menu item is defined.
    ));
	
	wp_nav_menu(array(
        'theme_location' => 'primary',
        'container_id' => 'menu2',
        'menu_class' => 'sf-menu profound_menu',
        'menu_id' => 'profound_menu'
    ));
	*/
	profound_nav_fallback();
}

function profound_nav_fallback() 
{

?>

	<div id="menu">
    	<ul class="sf-menu" id="profound_menu">
			<?php
            	wp_list_pages( 'title_li=&sort_column=menu_order&depth=3');
            ?>
        </ul>
    </div>
<?php
}


function pitch_dashboard_nav() {
/*
<div id="menu">
    	<ul class="sf-menu" id="profound_menu">
			<?php
            	wp_list_pages( 'title_li=&sort_column=menu_order&depth=3');
            ?>
        </ul>
    </div>
	*/
$tempMediaQuery="Submit Media Queries";	
if( current_user_can('expert_source') ) 
{  
	$tempMediaQuery="Media Queries";	
} 



?>
	
    
	
	<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="https://www.pitch.asia">Pitch.Asia</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                <!-- /.dropdown -->
                
                <!-- /.dropdown -->
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="/dashboard"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        
                        <li>
                            <a href="/mediaquery"><i class="fa fa-edit fa-fw"></i> <?php echo("$tempMediaQuery"); ?></a>
                        </li>
						<li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> News<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/news">News</a>
                                </li>
                                <li>
                                    <a href="/news-chinese">News Chinese</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						<li>
                            <a href="/jobs"><i class="fa fa-bar-chart-o fa-fw"></i> Jobs<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/post-a-job">Post A Job</a>
                                </li>
                                <li>
                                    <a href="/job-dashboard">Manage Jobs</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						<li>
                            <a href="/messageboard/forum/general-message-board/"><i class="fa fa-table fa-fw"></i> Message Board</a>
                        </li>
						<li>
                            <a href="/profile"><i class="fa fa-table fa-fw"></i> Profile</a>
                        </li>
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
		
<?php
}

function ignore_new_user_autopass() {
	return true;
}

add_filter( 'new_user_approve_bypass_password_reset', 'ignore_new_user_autopass' );



//This changes the bbpress plugin role names given to users
function my_custom_roles( $role, $user_id, $user_role ) {
	if( $role == 'Keymaster' )
		return 'Board Admin';

	return $role;
}

add_filter( 'bbp_get_user_display_role', 'my_custom_roles', 10, 3 );



function listing_published_send_email($post_id) {
   $post = get_post($post_id);
   $author = get_userdata($post->post_author);
   $message = "
      Hi ".$author->display_name.",
      Your Pitch.Asia job listing, ".$post->post_title." has just been approved at ".get_permalink( $post_id )."

You can visit https://www.Pitch.Asia and login to manage your job listing.

Many thanks,
Pitch.Asia
https://www.Pitch.Asia
   ";
   wp_mail($author->user_email, "Your job listing is online", $message);
}
add_action('publish_job_listing', 'listing_published_send_email');




add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'media_query',
    array(
      'labels' => array(
        'name' => __( 'Media Queries' ),
        'singular_name' => __( 'Media Query' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'media-query'),
        'show_ui'               => true,
		'supports'              => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail' ),
    )
  );
  register_post_type( 'pitchasianews',
    array(
      'labels' => array(
        'name' => __( 'PitchAsia News Posts' ),
        'singular_name' => __( 'PitchAsia News Post' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'pitchasianews'),
        'show_ui'               => true,
		'supports'              => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail' ),
    )
  );
}


function my_taxonomies_media_query() {
  $labels = array(
    'name'              => _x( 'Media Query Categories', 'taxonomy general name' ),
    'singular_name'     => _x( 'Media Query Category', 'taxonomy singular name' ),
    'search_items'      => __( 'Search Media Query Categories' ),
    'all_items'         => __( 'All Media Query Categories' ),
    'parent_item'       => __( 'Parent Media Query Category' ),
    'parent_item_colon' => __( 'Parent Media Query Category:' ),
    'edit_item'         => __( 'Edit Media Query Category' ), 
    'update_item'       => __( 'Update Media Query Category' ),
    'add_new_item'      => __( 'Add New Media Query Category' ),
    'new_item_name'     => __( 'New Media Query Category' ),
    'menu_name'         => __( 'Media Query Categories' ),
  );
  $args = array(
    'labels' => $labels,
    'hierarchical' => true,
  );
  register_taxonomy( 'media_query_category', 'media_query', $args );
}
add_action( 'init', 'my_taxonomies_media_query', 0 );






function my_taxonomies_pitchasianews() {
  $labels = array(
    'name'              => _x( 'PitchAsia News Categories', 'taxonomy general name' ),
    'singular_name'     => _x( 'PitchAsia News Category', 'taxonomy singular name' ),
    'search_items'      => __( 'Search PitchAsia News Categories' ),
    'all_items'         => __( 'All PitchAsia News Categories' ),
    'parent_item'       => __( 'Parent PitchAsia News Category' ),
    'parent_item_colon' => __( 'Parent PitchAsia News Category:' ),
    'edit_item'         => __( 'Edit PitchAsia News Category' ), 
    'update_item'       => __( 'Update PitchAsia News Category' ),
    'add_new_item'      => __( 'Add New PitchAsia News Category' ),
    'new_item_name'     => __( 'New PitchAsia News Category' ),
    'menu_name'         => __( 'PitchAsia News Categories' ),
  );
  $args = array(
    'labels' => $labels,
    'hierarchical' => true,
  );
  register_taxonomy( 'pitchasianews_category', 'pitchasianews', $args );
}
add_action( 'init', 'my_taxonomies_pitchasianews', 0 );




//This adds a bubble showing the number of pending posts in a category within the admin area
//If we want to add a new custom post type, we just add it to the array in the same way we just added "media_query"
function show_pending_number($menu) {    
    $types = array("post", "page", "custom-post-type", "media_query", "job_listing");
    $status = "pending";
    foreach($types as $type) {
        $num_posts = wp_count_posts($type, 'readable');
        $pending_count = 0;
        if (!empty($num_posts->$status)) $pending_count = $num_posts->$status;

        if ($type == 'post') {
            $menu_str = 'edit.php';
        } else {
            $menu_str = 'edit.php?post_type=' . $type;
        }

        foreach( $menu as $menu_key => $menu_data ) {
            if( $menu_str != $menu_data[2] )
                continue;
            $menu[$menu_key][0] .= " <span class='update-plugins count-$pending_count'><span class='plugin-count'>" . number_format_i18n($pending_count) . '</span></span>';
            }
        }
    return $menu;
}
add_filter('add_menu_classes', 'show_pending_number');





/***********************EDITED BY RAVI 9-DEC-2015**************************/
function emailAlias($email,$frdemail,$action) {
	$whmusername = "pitchasia";
	$whmpassword = "NEWMnUUj74RfgWeLD2EzDEo4S8ScNEW";
	
	if($action == 'add'){
	$query = "https://192.111.132.84:2083/cpsess1973261420/execute/Email/add_forwarder?domain=mediaquery.pitchasia.com&email=$email&fwdopt=fwd&fwdemail=$frdemail";
	} elseif ($action == 'delete') {
	$query = "https://192.111.132.84:2083/cpsess1973261420/execute/Email/delete_forwarder?address=$email&forwarder=$frdemail";
	}
	 
	$curl = curl_init();                                // Create Curl Object
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER,0);       // Allow self-signed certs
	curl_setopt($curl, CURLOPT_SSL_VERIFYHOST,0);       // Allow certs that do not match the hostname
	curl_setopt($curl, CURLOPT_HEADER,0);               // Do not include header in output
	curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);       // Return contents of transfer on curl_exec
	$header[0] = "Authorization: Basic " . base64_encode($whmusername.":".$whmpassword) . "\n\r";
	curl_setopt($curl, CURLOPT_HTTPHEADER, $header);    // set the username and password
	curl_setopt($curl, CURLOPT_URL, $query);            // execute the query
	$result = curl_exec($curl);
	if ($result == false) {
	    error_log("curl_exec threw error \"" . curl_error($curl) . "\" for $query");   
	                                                    // log error if curl exec fails
	}
	curl_close($curl);
}

//publish a post
add_action('save_post','save_post_callback');
function save_post_callback($post_id){

	global $post;
    if (isset($post) && $post->post_type != 'media_query'){
        return;
    }	
	$status = get_post_status( $post_id );
	
	$alias = $post_id .date("y").date("m").rand(100,9999).'@mediaquery.pitchasia.com';
	
    if ( ! get_post_meta( $post_id, 'mail_alias', $alias, false ) ) {
		if ( ! add_post_meta( $post_id, 'mail_alias', $alias, true )  )	{	
           update_post_meta ( $post_id, 'mail_alias', $alias );
		}
	}		

	$email =  get_post_meta( $post_id, 'contact_email', false );
	$t_email =  get_post_meta( $post_id, 'mail_alias', false );
	
	$name = explode('@',$t_email[0]);

	if($status == 'publish'){
		emailAlias($name[0],$email[0],'add');
	
	} else {		
		emailAlias($t_email[0],$email[0],'delete');
	}

}


//Delete a post
add_action('delete_post','delete_post_callback');

function delete_post_callback(){
		
	global $post;
	
	(isset($_GET['pid']))? $post_id = $_GET['pid'] : $post_id = $post->ID;
	
	if (get_post_type($post_id) != 'media_query'){
        return;
    }

	$email =  get_post_meta( $post_id, 'contact_email', false );
	$t_email =  get_post_meta( $post_id, 'mail_alias', false );
	emailAlias($t_email[0],$email[0],'delete');				
}
