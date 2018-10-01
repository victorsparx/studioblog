<?php
/**
 * The template for displaying Comments
 *
 * The area of the page that contains both current comments
 * and the comment form. The actual display of comments is
 * handled by a callback to studioblog_comment() which is
 * located in the functions.php file.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>
<?php if ( have_comments() ) : ?>
<div class="row comments-bor">
       <div class="col-md-6 col-xs-6">
        <div class="comments-h1">
          <h1>	<?php
				printf(
					_n( 'One Comentários %2$s&rdquo;', '%1$s Comentários %2$s&rdquo;', get_comments_number(), 'studioblog' ),
					number_format_i18n( get_comments_number() ),
					'<span>' . '' . '</span>'
				);
			?></h1>
        </div>
     </div>

     <div class="col-md-6 col-xs-6">
        <div class="comments-h1">
          <h2>Sort by <select>
            <option value="volvo">Oldest</option>
            <option value="saab">Saab</option>
            <option value="opel">Opel</option>
            <option value="audi">Audi</option>
          </select></h2>
        </div>
     </div>
   </div>
<div id="comments" class="comments-area">

	<?php // You can start editing here -- including this comment! ?>

		<div class="commentlist">
			<?php
			wp_list_comments(
				array(
					'callback' => 'studioblog_comment',
					'style'    => 'ol',
				)
			);
			?>
		</div><!-- .commentlist -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-below" class="navigation" role="navigation">
			<h1 class="assistive-text section-heading"><?php _e( 'Comment navigation', 'studioblog' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'studioblog' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'studioblog' ) ); ?></div>
		</nav>
		<?php endif; // check for comment navigation ?>

		<?php
		/* If there are no comments and comments are closed, let's leave a note.
		 * But we only want the note on posts and pages that had comments in the first place.
		 */
		if ( ! comments_open() && get_comments_number() ) :
			?>
		<p class="nocomments"><?php _e( 'Comments are closed.', 'studioblog' ); ?></p>
		<?php endif; ?>

	<?php endif; // have_comments() ?>

	<?php comment_form(); ?>

</div><!-- #comments .comments-area -->