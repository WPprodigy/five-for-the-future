<?php
namespace WordPressDotOrg\FiveForTheFuture\View;

use function WordPressDotOrg\FiveForTheFuture\get_views_path;

/**
 * @var array $messages
 * @var array $errors
 * @var bool $updated
 */

?>

<?php if ( $messages ) : ?>
	<div id="form-message" class="notice notice-success notice-alt">
		<?php foreach ( $messages as $message ) : ?>
			<p>
				<?php echo wp_kses_post( $message ); ?>
			</p>
		<?php endforeach; ?>
	</div>
<?php endif; ?>

<?php if ( $errors ) : ?>
	<div id="form-message" class="notice notice-error notice-alt">
		<?php foreach ( $errors as $error ) : ?>
			<p>
				<?php echo wp_kses_post( $error ); ?>
			</p>
		<?php endforeach; ?>
	</div>
<?php endif; ?>

<?php if ( $can_view_form ) : ?>
	<form class="pledge-form" id="5ftf-form-pledge-manage" action="" method="post" enctype="multipart/form-data">
		<?php
		require get_views_path() . 'inputs-pledge-org-info.php';
		require get_views_path() . 'manage-contributors.php';
		require get_views_path() . 'inputs-pledge-org-email.php';
		?>

		<div>
			<input
				type="submit"
				id="5ftf-pledge-submit"
				name="action"
				value="<?php esc_attr_e( 'Update Pledge', 'wporg' ); ?>"
			/>
		</div>
	</form>

<?php endif; ?>
