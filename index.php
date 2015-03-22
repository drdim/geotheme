<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<?php if ( is_user_logged_in() ) {
	do_action( 'geo_main_page_view_hook' );
} else {
   // FORM REGISTER OR FORM LOGIN
	$args = array(
		'echo'           => true,
		'form_id'        => 'loginform',
		'label_username' => __( 'Username' ),
		'label_password' => __( 'Password' ),
		'label_remember' => __( 'Remember Me' ),
		'label_log_in'   => __( 'Log In' ),
		'id_username'    => 'user_login',
		'id_password'    => 'user_pass',
		'id_remember'    => 'rememberme',
		'id_submit'      => 'wp-submit',
		'remember'       => true,
		'value_username' => NULL,
		'value_remember' => false
	);

	?>
	<h2 class="center">Login</h2>
	<div class="loginFormWrapper"><?php wp_login_form( $args );?></div>
	<h2 class="center">Register</h2>
	<div class="registerFormWrapper">
		<?php echo do_shortcode( '[wppb-register]' );?>
	</div>
<?php
} ?>

<?php get_footer(); ?>
