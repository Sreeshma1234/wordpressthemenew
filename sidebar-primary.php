<?php
$twitter = get_field('instagram','option');
$facebook = get_field('facebook','option');
$instagram = get_field('twitter','option');
$github = get_field('github','option');
$mail = get_field('email','option');
?>
<section id="header">
<?php $sidebar = get_field('sidebar');?>
	<header>
		<span class="image avatar"><img src="<?php echo esc_url( $sidebar['sideimage']['url']  ,'option'); ?>" alt="<?php echo esc_attr( $sidebar['sideimage']['alt'] ,'option' ); ?>"></span>
		<h1 id="logo"><a href="#"><?php the_field('profile_name', 'option'); ?></a></h1>
		<p><?php the_field('profile', 'option'); ?></p>
	</header>
<nav id="nav">
				<div id="menu">
                                    <?php
									  wp_nav_menu(
										array(
											'theme_location' => 'side-menu',
											'menu_class' => 'menu',
											'container' => 'ul'
											)
										)
									;?>

                </div>
               
</nav>
<footer>
<ul class="icons">
					<?php if($twitter): ?>
					<li><a href="<?php echo $twitter?>" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
					<?php endif; ?>
					<?php if($facebook): ?>
						<li><a href="<?php echo $facebook?>" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
					<?php endif; ?>
					<?php if($instagram): ?>
						<li><a href="<?php echo $instagram?>" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                    <?php endif; ?>
                    <?php if($github): ?>
						<li><a href="<?php echo $github?>" class="icon brands fa-github"><span class="label">Github</span></a></li>
					<?php endif; ?>
					<?php if($mail): ?>
						<li><a href="<?php echo $mail?>" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
					<?php endif; ?>					
                </ul>
</footer>
</section>