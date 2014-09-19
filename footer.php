<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">

			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				if ( ! is_404() )
					get_sidebar( 'footer' );
			?>

			<div id="site-generator">
				<?php do_action( 'twentyeleven_credits' ); ?>
			    <div style="font-weight:bold;">Copyright &copy; 2014-&nbsp; 陕西正大家政 版权所有 | 陕ICP备xxx号</div>
				<a href="<?php echo esc_url( __( 'http://www.jingwuyuan.net', 'zhaoge' ) ); ?>" title="<?php esc_attr_e( '技术支持', 'zhaoge' ); ?>"><?php printf( __( 'powered by %s', 'zhaoge' ), 'lampkid' ); ?></a>
			</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js" type="text/javascript"></script>

<?php require_once "qqservice.php" ?>

<script src="<?php echo get_template_directory_uri(); ?>/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

<!--[if lte IE 6]>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/bsie/js/bootstrap-ie.js"></script>
<![endif]-->
</body>
</html>