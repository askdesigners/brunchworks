<?php /* Template Name: Podcast Index page */
 get_header(); ?>

	<!-- section -->
	<section class="episodeIndexCol">
		<header>
			<h1>Brunchworks Podcast Episodes</h1>
		</header>

		<?php

		// The Query
		$query = new WP_Query( array(
			'category_name' => 'podcast',
			'orderby' => 'date',
			'order' => 'ASC'
		));

		// The Loop
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();?>
				<article class="podcastEpisode">
					<h2 class="episodeTitle">
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</h2>

					<div class="episodeSummary">
						<?php the_excerpt(); ?>
					</div>
				</article>
			<?php }
		} else {
			// no posts found
		}
		/* Restore original Post Data */
		wp_reset_postdata();
		?>		

	</section>

<?php get_footer(); ?>
