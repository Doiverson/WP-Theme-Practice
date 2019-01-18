
<!--	(テンプレートを追加の場合はテンプレート名の記載は必須)-->

<?php
/**
 * Template Name: Left Side Bar 　
 * Created by PhpStorm.
 * User: doiverson
 * Date: 2019-01-17
 * Time: 17:53
 */
?>

<?php get_header(); ?>

	<section class="two-column row no-max pad">
		<div class="small-12 columns">
			<div class="row">

				<!-- Primary Column -->
				<div class="small-12 medium-7 medium-offset-1 medium-push-4 columns">
					<div class="primary">


						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

							<h1><?php the_title(); ?></h1>
							<p><?php the_content(); ?></p>

						<?php endwhile; else : ?>

							<p><?php esc_html_e( 'Sorry, no pages found' ); ?></p>

						<?php endif; ?>

					</div>
				</div>


				<!-- Secondary Column -->
				<div class="small-12 medium-4 medium-pull-8 columns">
					<div class="secondary">
						<h2 class="module-heading">Sidebar</h2>
					</div>
				</div>

			</div>
		</div>
	</section>


<?php get_footer(); ?>