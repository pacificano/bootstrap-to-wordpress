<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap to Wordpress
 */

?>

<?php wp_footer(); ?>

	<!-- sign up -->
	<section id="signup" data-type="background" data-speed="0.5">

		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					
					<h2>Are you ready to take your coding skills to the <strong>next level</strong></h2>
					<p><a href="#" class="btn btn-lg btn-block btn-success">Yes, sign me up!</a></p>

				</div>
			</div>
		</div>
		
	</section>


	<!-- footer -->
	<footer>

		<div class="container">
		
			<div class="col-sm-3">
				<p><a href="/"><img src="assets/img/logo.png" alt="cat logo"></a></p>
			</div>
			<div class="col-sm-6">
				<nav>
					<ul class="list-unstyled list-inline">
						<li><a href="">Home</a></li>
						<li><a href="">Blog</a></li>
						<li><a href="">Resources</a></li>
						<li><a href="">Contact</a></li>
						<li class="signup-link"><a href="">Sign up now</a></li>
					</ul>
				</nav>
			</div>
			<div class="col-sm-3">
				<p class="pull-right">&copy; 2015 Billy Trejo</p>
			</div>

		</div>
		
	</footer>


	<!-- modal -->
	<div class="modal fade" id="myModal">
		
		<div class="modal-dialog">
			
			<div class="modal-content">
				
				<div class="modal-header">
					
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
					</button>

					<h4 class="modal-title" id="myModalLabel"><i class="fa fa-envelope"></i> Subscribe to our Mailing List</h4>
					

				</div><!-- modal header -->

				<div class="modal-body">
					
					<p>Simply enter your name and email! As a thank you for joining us, we're going to give you one of our best-selling courses, <em>for free!</em></p>

					<form class="form-inline" role="form">
						<div class="form-group">
							<label class="sr-only" for="subscribe-name">Your first name</label>
							<input type="text" class="form-control" id="subscribe-name" placeholder="Your first name">
						</div>
						<div class="form-group">
							<label class="sr-only" for="subscribe-email">and your email</label>
							<input type="text" class="form-control" id="subscribe-email" placeholder="and your email">
						</div>

						<input type="submit" class="btn btn-danger" value="Subscribe!">
					</form>

					<hr>

					<p><small>By providing your email you consent to receiving occassional promotional emails &amp; newsletters.<br>No spam. Just good stuff. We respect your privacy &amp; you may unsubscribe at any time.</small></p>

				</div><!-- modal body -->

			</div><!-- modal content -->
		</div><!-- modal dialog -->

	</div><!-- modal -->

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>

</body>
</html>
