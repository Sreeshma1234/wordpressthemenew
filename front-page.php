		<?php get_header();?>
		<?php $about = get_field('about');?>
		<?php $a_few_accomplishments = get_field('a_few_accomplishments');?>
		<?php $form = get_field('form');?>
		<?php $things_i_can_do_headings = get_field('things_i_can_do_headings');?>
		<?php $sidebar = get_field('sidebar');?>
		    <?php get_sidebar( 'primary' ); ?> 
				
		</section>

		<!-- Wrapper -->
<div id="wrapper">
      <div id="main">

						<!-- One -->
			  <section id="one">
				 <div class="image main" data-position="center">
				  <img src="<?php bloginfo('template_directory');?>/images/banner.jpg" alt="" />
				 </div>
					<div class="container">
						<header class="major">
							<h2><?php echo $about['title'];?></h2>
							<p><a href="http://html5up.net"><?php echo $about['description'];?></a></p>
						</header>
						<p><?php echo $about['paragraph'];?></p>
					</div>
				</section>

						<!-- Two -->
				<section id="two">
					<div class="container">
						<h3><?php echo $things_i_can_do_headings['things_i_can_do_heading'];?></h3>
						<p><?php echo $things_i_can_do_headings['things_i_can_do_description'];?></p>
						<ul class="feature-icons">
						<?php
							if( have_rows('things_i_can_do') ):						
							while ( have_rows('things_i_can_do') ) : the_row(); ?>							
							
							<li class="icon solid <?php echo the_sub_field('font_awesome_icon') ?>">							
							
							<?php echo the_sub_field('font_description') ?></li>

						<?php
							endwhile;
							else :						
							endif;?>									
						</ul>
					</div>
				</section>

						<!-- Three -->
				<section id="three">
					<div class="container">
						<h3><?php echo $a_few_accomplishments['accomplishment_title'];?></h3>
						<p><?php echo $a_few_accomplishments['accomplishment_paragraph'];?></p>
						<div class="features">
							<?php if( have_rows('article') ): ?>
							<?php while( have_rows('article') ): the_row();
								
								$image = get_sub_field('image');
								$article_heading = get_sub_field('article_heading');
								$article_para = get_sub_field('article_para');
							
							
							
							
							?>
							<article>
								<a href="#" class="image"><img src="<?php bloginfo('template_directory');?>/images/pic01.jpg" alt="" /></a>
								<div class="inner">
									<h4><?php echo $article_heading;?></h4>
									<p><?php echo $article_para?></p>
									</div>
								</article>
							<?php endwhile; ?>
							<?php endif; ?>

						</div>
					</div>
				</section>

						<!-- Four -->
				<section id="four">
					<div class="container">
						<h3><?php echo $form['contact_title'];?></h3>
						<p><?php echo $form['contact_para'];?></p>
						<form method="post" action="#">
							<div class="row gtr-uniform">
									<?php echo $form['contact_form'];?>
							</div>
						</form>
					</div>
				</section>
</div>
<?php get_footer();?>