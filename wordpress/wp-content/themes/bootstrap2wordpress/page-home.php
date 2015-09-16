<?php
/*
	Template Name: Home Page
*/

// Custom Fields
	$prelaunch_price = get_post_meta( 11, 'prelaunch_price', true );
	$launch_price = get_post_meta( 11, 'launch_price', true );
	$final_price = get_post_meta( 11, 'final_price', true );
	$course_url = get_post_meta( 11, 'course_url', true );
	$button_text = get_post_meta( 11, 'button_text', true );
	$optin_text = get_post_meta( 11, 'optin_text', true );
	$optin_button_text = get_post_meta( 11, 'optin_button_text', true );

// Advanced Custom Fields
	$income_feature_image = get_field('income_feature_image');
	$income_section_title = get_field('income_section_title');
	$income_section_description = get_field('income_section_description');
	$reason_1_title = get_field('reason_1_title');
	$reason_1_description = get_field('reason_1_description');
	$reason_2_title = get_field('reason_2_title');
	$reason_2_description = get_field('reason_2_description');

	$who_feature_image = get_field('who_feature_image');
	$who_section_title = get_field('who_section_title');
	$who_section_body = get_field('who_section_body');

	$features_section_image = get_field('features_section_image');
	$features_section_title = get_field('features_section_title');
	$features_section_body = get_field('features_section_body');

get_header(); ?>

	<!-- hero -->
    <section id="hero" data-type="background" data-speed="0.5">
    	<article>
    		<div class="container clearfix">
    			<div class="row">
    				
    				<div class="col-sm-5">
    					<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/photo-1.jpg" alt="Cat badge" class="logo">
    				</div><!-- col -->

    				<div class="col-sm-7 hero-text">
    					<h1><?php bloginfo('name'); ?></h1>
    					<p class="lead"><?php bloginfo('description'); ?></p>

    					<div id="price-timeline">
    						<div class="price active">
    							<h4>Pre-Launch<small>Price ends soon</small></h4>
    							<span><?php echo $prelaunch_price; ?></span>
    						</div><!-- price -->
    						<div class="price">
    							<h4>Launch price<small>Coming soon!</small></h4>
    							<span><?php echo $launch_price; ?></span>
    						</div><!-- price -->
    						<div class="price">
    							<h4>Final price<small>Coming soon!</small></h4>
    							<span><?php echo $final_price; ?></span>
    						</div><!-- price -->
    					</div><!-- price-timeline -->

    					<p><a href="<?php echo $course_url; ?>" class="btn btn-lg btn-danger" role="button"><?php echo $button_text; ?></a></p>

    				</div><!-- col -->

    			</div><!-- row -->
    		</div><!-- container -->
    	</article>
    	
    </section>


    <!-- opt-in -->
	<section id="optin">

		<div class="container">
			
			<div class="row">
				
				<div class="col-sm-8">
					<p class="lead"><?php echo $optin_text; ?></p>
				</div><!-- col -->

				<div class="col-sm-4">
					<button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal"><?php echo $optin_button_text; ?></button>
				</div><!-- col -->

			</div>

		</div>
		
		
	</section>


	<!-- boost your income -->
	<section id="boost-income">
		<div class="container">
			
			<div class="section-header">

				<!-- if user uploaded an image -->
				<?php if( !empty($income_feature_image) ) : ?>
					<img src="<?php echo $income_feature_image['url']; ?>" alt="<?php echo $income_feature_image['alt']; ?>">
				<?php endif; ?>

				<h2><?php echo $income_section_title; ?></h2>
			</div>

			<p class="lead"><?php echo $income_section_description; ?></p>

			<div class="row">
				<div class="col-sm-6">
					<h3><?php echo $reason_1_title; ?></h3>
					<p><?php echo $reason_1_description; ?></p>
				</div>
				<div class="col-sm-6">
					<h3><?php echo $reason_2_title; ?></h3>
					<p><?php echo $reason_2_description; ?></p>
				</div>
			</div>

		</div>
		
	</section>


	<!-- who benefits -->
	<section id="who-benefits">

		<div class="container">

			<div class="section-header">
				
				<!-- if user uploaded an image -->
				<?php if( !empty($who_feature_image) ) : ?>
					<img src="<?php echo $who_feature_image['url']; ?>" alt="<?php echo $who_feature_image['alt']; ?>">
				<?php endif; ?>

				<h2><?php echo $who_section_title; ?></h2>
			</div>
			
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<?php echo $who_section_body; ?>
				</div>
			</div>
		</div>
		
	</section>


	<!-- course features -->
	<section id="course-features">
		<div class="container">
			
			<div class="section-header">
				<!-- if user uploaded an image -->
				<?php if( !empty($features_section_image) ) : ?>
					<img src="<?php echo $features_section_image['url']; ?>" alt="<?php echo $features_section_image['alt']; ?>">
				<?php endif; ?>

				<h2><?php echo $features_section_title; ?></h2>

				<!-- if user uploaded an image -->
				<?php if( !empty($features_section_body) ) : ?>
					<p class="lead"><?php echo $features_section_body; ?></p>
				<?php endif; ?>

			</div>

			<div class="row">

				<?php $loop = new WP_Query( array( 'post_type' => 'course_feature', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

				<?php while( $loop->have_posts() ) : $loop->the_post(); ?>
					
					<div class="col-sm-2">
						<i class="<?php the_field('course_feature_icon'); ?>"></i>
						<h4><?php the_title(); ?></h4>
					</div>

				<?php endwhile; ?>

			</div>

		</div>
		
	</section>


	<!-- project features -->
	<section id="project-features">
		<div class="container">
			
			<h2>Final Cat Features</h2>
			<p class="lead">Fusce tincidunt nunc nulla, ut faucibus eros fermentum sit amet. Donec dictum tincidunt dui, id egestas nisl condimentum non. Nam in velit sodales, laoreet elit sed, mattis nisi. Aenean sagittis enim id sagittis hendrerit. Aliquam posuere ac nisi ac sollicitudin. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec nibh diam, sodales in sodales in, laoreet ac est. Integer hendrerit dignissim dui, non gravida ex aliquet quis. Mauris vel enim eget neque semper eleifend non eu lorem. In at suscipit urna, eget maximus ex. Integer rutrum bibendum est ac lacinia.</p>

			<div class="row">
				<div class="col-sm-4">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-cat4.png" alt="cat sneakers">
					<h3>Cats Loves To Wear Slippers &amp; Little Top Hats</h3>
					<p>Sometimes they will smoke a pipe and talk about politics and history.</p>
				</div>
				<div class="col-sm-4">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-cat5.png" alt="cat bowl">
					<h3>Cats Loves His Little Bowl</h3>
					<p>This cat here is wondering where his food is because he is super hungry.</p>
				</div>
				<div class="col-sm-4">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-cat6.png" alt="cat beaten up">
					<h3>Cats Loves To Bang, Bro. Just Let Him Bang</h3>
					<p>This cat is an ultimate fighter and is coming off a split decision loss.</p>
				</div>
			</div>
		</div>
		
	</section>


	<!-- video featurette -->
	<section id="featurette">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<h2>Watch this silly little cat</h2>
					<iframe width="100%" height="415" src="https://www.youtube.com/embed/uFWQZzMe5kk?rel=0" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
		
	</section>


	<!-- instructor -->
	<section id="instructor">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-md-6">
					<div class="row">
						<div class="col-lg-8">
							<h2>Your Cat Wrangler <small>Billy Trejo</small></h2>
						</div>
						<div class="col-lg-4">
							<a href="http://www.twitter.com/pacificano" target="_blank" class="badge social twitter"><i class="fa fa-twitter"></i></a>
							<a href="http://www.facebook.com/pacificano" target="_blank" class="badge social facebook"><i class="fa fa-facebook"></i></a>
							<a href="http://www.google.com/pacificano" target="_blank" class="badge social gplus"><i class="fa fa-google-plus"></i></a>
						</div>
					</div>

					<p class="lead">Fusce tincidunt nunc nulla, ut faucibus eros fermentum sit amet. Donec dictum tincidunt dui, id egestas nisl condimentum non. Nam in velit sodales, laoreet elit sed, mattis nisi.</p> 

					<p>Aenean sagittis enim id sagittis hendrerit. Aliquam posuere ac nisi ac sollicitudin. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec nibh diam, sodales in sodales in, laoreet ac est. Integer hendrerit dignissim dui, non gravida ex aliquet quis. Mauris vel enim eget neque semper eleifend non eu lorem. In at suscipit urna, eget maximus ex. Integer rutrum bibendum est ac lacinia.</p>

					<p>Aenean sagittis enim id sagittis hendrerit. Aliquam posuere ac nisi ac sollicitudin. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec nibh diam, sodales in sodales in, laoreet ac est. Integer hendrerit dignissim dui, non gravida ex aliquet quis. Mauris vel enim eget neque semper eleifend non eu lorem. In at suscipit urna, eget maximus ex. Integer rutrum bibendum est ac lacinia.</p>

					<hr>

					<h3>The Numbers <small>They Don't Lie</small></h3>

					<div class="row">

						<div class="col-xs-4">
							<div class="num">
								<div class="num-content">
									26,070+ <span>cats</span>
								</div><!-- num-content -->
							</div><!-- num -->
						</div><!-- end col -->
						<div class="col-xs-4">
							<div class="num">
								<div class="num-content">
									568 <span>kittens</span>
								</div><!-- num-content -->
							</div><!-- num -->
						</div><!-- end col -->
						<div class="col-xs-4">
							<div class="num">
								<div class="num-content">
									8 <span>meowers</span>
								</div><!-- num-content -->
							</div><!-- num -->
						</div><!-- end col -->

					</div><!-- row -->

				</div><!-- end col -->
			</div>
		</div>
		
	</section>


	<!-- testimonials -->
	<section id="kudos">

		<div class="container">
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2">
						
						<h2>What People Are Saying About Cats</h2>

						<!-- testimonial -->
						<div class="row testimonial">
							<div class="col-sm-4">
								<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/portrait-1.jpg" alt="Jonny">
							</div>
							<div class="col-sm-8">
								<blockquote>
									Typewriter Schlitz cliche scenester Marfa. Wayfarers Echo Park sustainable, selvage aesthetic meditation 3 wolf moon Schlitz disrupt chambray stumptown bespoke. 3 wolf moon 8-bit Bushwick pop-up, seitan migas quinoa twee single-origin coffee locavore lo-fi. Umami Thundercats cronut, cardigan flexitarian McSweeney's vegan whatever crucifix gluten-free twee hella lumbersexual pickled. VHS kitsch fashion axe, cold-pressed meditation four loko whatever. High Life chambray master cleanse, hella ennui McSweeney's food truck post-ironic kogi farm-to-table cold-pressed synth. DIY Tumblr swag, bicycle rights before they sold out pour-over retro food truck Williamsburg direct trade raw denim beard pickled Echo Park.
									<cite>&ndash;Jonny, a rich cat</cite>
								</blockquote>
							</div>
						</div>

						<!-- testimonial -->
						<div class="row testimonial">
							<div class="col-sm-4">
								<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/portrait-2.jpg" alt="Samuel">
							</div>
							<div class="col-sm-8">
								<blockquote>
									Sartorial Banksy single-origin coffee meggings art party try-hard, mixtape salvia deep v gentrify. Vice hella ennui, normcore seitan health goth +1 shabby chic next level dreamcatcher tofu brunch. Tumblr YOLO sartorial, Brooklyn McSweeney's Godard organic. +1 heirloom vinyl you probably haven't heard of them deep v. Letterpress photo booth Odd Future fap gluten-free migas ethical. VHS paleo deep v pickled Vice. Sartorial Helvetica farm-to-table beard, pork belly slow-carb artisan keytar pour-over locavore freegan.
									<cite>&ndash;Samuel, a very rich cat</cite>
								</blockquote>
							</div>
						</div>

						<!-- testimonial -->
						<div class="row testimonial">
							<div class="col-sm-4">
								<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/portrait-3.jpg" alt="Gruffigans">
							</div>
							<div class="col-sm-8">
								<blockquote>
									Godard polaroid leggings, plaid organic trust fund Tumblr normcore High Life Shoreditch taxidermy. Kitsch flannel polaroid High Life butcher, 90's listicle keffiyeh. Pug Wes Anderson tousled Odd Future. Pop-up Tumblr taxidermy food truck fap. Lomo tilde kogi synth, Intelligentsia Carles 3 wolf moon hella you probably haven't heard of them cliche health goth ugh pork belly Neutra. Literally kale chips pug messenger bag meditation. Kickstarter Echo Park Vice, ethical Etsy single-origin coffee kitsch.
									<cite>&ndash;Gruffigans, a very, very rich cat</cite>
								</blockquote>
							</div>
						</div>

					</div>
				</div>
			</div>	

	</section>

<?php get_footer(); ?>
