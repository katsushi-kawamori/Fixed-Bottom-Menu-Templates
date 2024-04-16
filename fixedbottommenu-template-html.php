<?php
/**
 * Fixed Bottom Menu Template Default HTML File
 *
 * @package WordPress
 * @subpackage Fixed Bottom Menu
 * @since Fixed Bottom Menu 2.00
 * @version 1.00
 */

?>

<div id="fixed-bottom-menu">
	<div class="fixed-bottom-menu-container">
		<?php
		for ( $i = 1; $i <= $this->column; $i++ ) {
			$column_value = $this->colmun_filters( $i, $icon_type );
			?>
			<div class="fixed-bottom-menu-item">
				<a href="<?php echo esc_url( $column_value['url'] ); ?>">
				<?php if ( 'dash' === $column_value['icon_type'] ) : ?>
					<span class="dashicons dashicons-<?php echo esc_attr( $column_value['icon'] ); ?>"></span>
				<?php else : ?>
					<?php do_action( 'fbm_icon_view', $column_value['icon'], $column_value['icon_type'] ); ?>
				<?php endif; ?>
				<br>
				<span class="fixed-bottom-menu-text"><?php echo esc_html( $column_value['text'] ); ?></span>
				</a>
			</div>
			<?php
		}
		?>
	</div>
</div>
<?php
