<?php get_header(); ?>

	<div class="row">

		<div class="col-sm-12 blog-main">

			<?php get_template_part( 'content', get_post_format() ); ?>

		</div>

	</div> <!-- /.row -->

<?php get_footer(); ?>