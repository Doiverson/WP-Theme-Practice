<?php
/**
 * Created by PhpStorm.
 * User: doiverson
 * Date: 2019-01-17
 * Time: 13:37
 */
?>

<?php get_header(); ?>


	<section class="row">
		<div class="small-12 columns text-center">
			<div class="leader">

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<h1><?php the_title(); ?></h1>
					<p><?php the_content(); ?></p>

				<?php endwhile; else : ?>

					<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>

				<?php endif; ?>

			</div>
		</div>
	</section>


<?php get_footer(); ?>
