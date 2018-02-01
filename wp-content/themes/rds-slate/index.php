<?php get_header(); ?>

	<div class="row">

		<div class="col-sm-8 blog-main">

			<?php get_template_part( 'content', get_post_format() ); ?>

		</div> <!-- /.blog-main -->
        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
        
            <?php get_sidebar(); ?>
            
        </div><!-- /.blog-sidebar -->

	</div> <!-- /.row -->

<?php get_footer(); ?>