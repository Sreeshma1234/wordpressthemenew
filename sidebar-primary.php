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
        <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
        <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
        <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
        <li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
        <li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
    </ul>
</footer>