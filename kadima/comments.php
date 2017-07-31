<?php if ( post_password_required() ) : ?>
	<p><?php _e( 'This post is password protected. Enter the password to view any comments.', 'kadima' ); ?></p>
	<?php return; endif; ?>
    <?php if ( have_comments() ) : ?>

	<?php endif; ?>
<?php if ( comments_open() ) : ?>

<?php endif; // If registration required and not logged in ?>