<?php get_header(); ?>

			<div id="content">

				<div class="graphical-header">
					<img src="/wp-content/themes/brafton/library/images/page-headers/blank_header.png">
					<h1>Our <strong>Leadership</strong></h1>
				</div>

				<div id="inner-content" class="wrap cf">

						<div id="main" class="m-all t-all d-all cf" role="main">
							 <section class="entry-content m-all t-all d-all cf" itemprop="articleBody">

									<?php //brafton_share( 'top' ); ?>

											<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
												<article class="d-1of4 t-1of3 m-all exec_outer_container">
													<div class="exec_container">
														<?php the_post_thumbnail( 'full' ); ?>
														<div class="exec_info">
															<div class="exec_name"><?php the_title(); ?></div>
															<div class="exec_summary">
																<?php $summary = get_post_meta( $post->ID, 'exec_summary', true); 
																	echo $summary;
																?>
																<span class="seemore">Read More...</span>
															</div>
														</div>
													</div>
												</article>
												<div class="exec_info_onclick">
													<div class="exec_summary_onclick">
														<div class="exec_title_onclick">
															<div class="exec_name"><?php the_title(); ?></div>
														</div>
														<?php $hover_img = get_post_meta( $post->ID, 'exec_hover_img', true); ?>
														<img src="<?php echo $hover_img ?>"/>
														<div class="exec_content_onclick">
															<?php the_content(); ?>
														</div>
														<div class="exec_exit">
															X
														</div>
													</div>
												</div>

									<?php //No comments 
									//comments_template(); ?>

									<?php endwhile; else : ?>

									<article id="post-not-found" class="hentry cf">
										<header class="article-header">
											<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the page.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</section>

					</div>

				</div>

			<div class="exec_onclick_shadow">
			</div>

			</div>

			<div class="fixed-page-footer">

					<div class="contact_us">
						Request a Demo
					</div>

					<div class="contact_us">
						Contact Us
					</div>

					<div class="askamarketer">
						Ask A Marketer
					</div>
			</div>

			<script src="//app-sj04.marketo.com/js/forms2/js/forms2.js"></script>
			<form id="mktoForm_1337"></form>

			<div class="popup_form landing_page_popup">
				<div class="popup_form_inner">
					<h2>Schedule a meeting to see <strong>client examples</strong></h2>
					<?php get_template_part("marketoforms/landing_page_marketo_form"); ?>
				</div>
				<div class="popup_form_exit">X</div>

			</div>

			<div class="popup_form_shadow">
			</div>


<?php get_footer(); ?>
