<?php /* Template Name: Lander1 */
 get_header(); ?>

	<!-- section -->
	<section class="landerCol">

		<!-- article -->
		<article>
			<div class="introText top">
			<?php if (have_posts()) : while (have_posts()) : the_post();?>
				<?php the_content(); ?>
			<?php endwhile; endif; ?>
			</div>
			<br class="clear">
			<!-- Begin MailChimp Signup Form -->
			<div id="mc_embed_signup">
				<form action="//brunchworks.us9.list-manage.com/subscribe/post?u=c3ac7902966eb0e46f89f1436&amp;id=525aef9519" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
				    <div id="mc_embed_signup_scroll">
						<p class="introText">Sign up to start building your creative confidence.</p>
						<div class="mc-field-group">
							<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Email Address">
						</div>
						<div id="mce-responses" class="clear">
							<div class="response" id="mce-error-response" style="display:none"></div>
							<div class="response" id="mce-success-response" style="display:none"></div>
						</div>
					    <div style="position: absolute; left: -5000px;">
					    	<input type="text" name="b_c3ac7902966eb0e46f89f1436_525aef9519" tabindex="-1" value="">
					    </div>
					    <div class="clear">
					    	<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
					    </div>
				    </div>
				</form>
			</div>
			<!--End mc_embed_signup-->


		</article>
		<!-- /article -->

	</section>
	<section id="latestEpisode">
		<div class="landerCol">
			<h4>Listen to the latest podcast episode</h4>
			<iframe scrolling="no" frameborder="0" style="width:100%;height:150px;border:0;overflow:hidden;" src="http://app.stitcher.com/widget/f/76680"></iframe>
		</div>
		<?php get_footer(); ?>
	</section>
	<!-- /section -->
	<video autoplay loop>
		<source src="<?php echo get_template_directory_uri(); ?>/vid/grass.mp4" type="video/mp4">
		<source src="<?php echo get_template_directory_uri(); ?>/vid/grass.ogg" type="video/ogg">
		<source src="<?php echo get_template_directory_uri(); ?>/vid/grass.webm" type="video/webm">
	</video>
	<img src="<?php echo get_template_directory_uri(); ?>/img/waves.jpg" alt="crash!" class="videoFallback"/>

<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
