<?php  
/* Template Name: Resources Page */

get_header();

$thumbnail_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
?>

<!-- feature image -->
<?php if ( has_post_thumbnail() ) { ?>
<section class="feature-image" style="background: url('<?php echo $thumbnail_url; ?>') no-repeat; background-size: cover;" data-type="background" data-speed="0.3">
    <h1 class="page-title"><?php the_title(); ?></h1>
</section>
<?php } else { ?>
<section class="feature-image feature-image-default" data-type="background" data-speed="0.3">
    <h1 class="page-title"><?php the_title(); ?></h1>
</section>
<?php } ?>

<!-- main content -->
<div class="container">
    <div class="row" id="primary">
        <div id="content" class="col-sm-12">
            <section class="main-content">
                <p class="lead">Welcome to the Cat Superfriends page! Locavore retro viral, Shoreditch vegan cardigan gentrify chambray typewriter tilde single-origin coffee drinking vinegar iPhone lomo. Tattooed freegan YOLO, stumptown yr Pitchfork kitsch. Keffiyeh raw denim <strong>literally readymade Williamsburg kogi</strong>. Umami vegan mlkshk, fashion axe scenester Odd Future literally typewriter Brooklyn PBR sartorial kitsch leggings keytar asymmetrical.</p>

                <p><em>Please keep in mind that some of the following resources are my affiliate links, and should you decide to make a purchase, I will earn a small commission &ndash; at no extra cost to you! I am recommeding these resources only because I have found them to be incredibly helpful. Don&rsquo;t spend your money on any products or resources unless you think they will benefit you.</em></p>

                <hr>

                <div class="resource-row clearfix">

                    <div class="resource">
                        <img src="assets/img/logo_petbarn.jpg">
                        <h3><a href="http://www.petbarn.com.au">Petbarn</a></h3>
                        <p>Fanny pack meditation Brooklyn, VHS pour-over craft beer next level street art four dollar toast. Squid Odd Future before they sold out shabby chic, tilde Banksy tattooed health goth Tumblr pop-up fap occupy. Umami Odd Future cardigan single-origin coffee, art party Banksy street art migas try-hard jean shorts Portland kale chips normcore bicycle rights lo-fi. Synth Bushwick distillery scenester twee hashtag actually plaid selfies pickled whatever freegan, authentic Godard raw denim. Austin pickled dreamcatcher, you probably haven't heard of them synth mustache biodiesel tofu kitsch cardigan migas whatever drinking vinegar fanny pack next level. Meggings 90's mumblecore, sriracha fingerstache chambray polaroid Wes Anderson Bushwick pour-over irony McSweeney's pug. Brooklyn forage leggings, fap farm-to-table street art kitsch pork belly cliche selvage American Apparel +1.</p>
                        <a href="http://www.petbarn.com.au" class="btn btn-success">Buy cat food at Petbarn</a>
                    </div><!-- resource -->

                    <div class="resource">
                        <img src="assets/img/logo_scienceDiet.png">
                        <h3><a href="http://www.sciencediet.com.au">Science Diet</a></h3>
                        <p>Fanny pack meditation Brooklyn, VHS pour-over craft beer next level street art four dollar toast. Squid Odd Future before they sold out shabby chic, tilde Banksy tattooed health goth Tumblr pop-up fap occupy. Umami Odd Future cardigan single-origin coffee, art party Banksy street art migas try-hard jean shorts Portland kale chips normcore bicycle rights lo-fi. Synth Bushwick distillery scenester twee hashtag actually plaid selfies pickled whatever freegan, authentic Godard raw denim. Austin pickled dreamcatcher, you probably haven't heard of them synth mustache biodiesel tofu kitsch cardigan migas whatever drinking vinegar fanny pack next level. Meggings 90's mumblecore, sriracha fingerstache chambray polaroid Wes Anderson Bushwick pour-over irony McSweeney's pug. Brooklyn forage leggings, fap farm-to-table street art kitsch pork belly cliche selvage American Apparel +1.</p>
                        <a href="http://www.sciencediet.com.au" class="btn btn-success">The best cat food is Science Diet</a>
                    </div><!-- resource -->

                    <div class="resource">
                        <img src="assets/img/logo_kwitter.jpg">
                        <h3><a href="http://www.kittykwitter.com.au">Kitty Kwitter</a></h3>
                        <p>Fanny pack meditation Brooklyn, VHS pour-over craft beer next level street art four dollar toast. Squid Odd Future before they sold out shabby chic, tilde Banksy tattooed health goth Tumblr pop-up fap occupy. Umami Odd Future cardigan single-origin coffee, art party Banksy street art migas try-hard jean shorts Portland kale chips normcore bicycle rights lo-fi. Synth Bushwick distillery scenester twee hashtag actually plaid selfies pickled whatever freegan, authentic Godard raw denim. Austin pickled dreamcatcher, you probably haven't heard of them synth mustache biodiesel tofu kitsch cardigan migas whatever drinking vinegar fanny pack next level. Meggings 90's mumblecore, sriracha fingerstache chambray polaroid Wes Anderson Bushwick pour-over irony McSweeney's pug. Brooklyn forage leggings, fap farm-to-table street art kitsch pork belly cliche selvage American Apparel +1.</p>
                        <a href="http://www.kittykwitter.com.au" class="btn btn-success">Toilet train your cat</a>
                    </div><!-- resource -->

                </div><!-- resource-row clearfix -->
            </section><!-- main-content -->
        </div><!-- content -->
    </div>
</div>

<?php get_footer(); ?>