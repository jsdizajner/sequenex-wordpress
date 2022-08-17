	<footer class="page-footer container-lg pb-3">
		<div class="row text-left">
			<div class="col-12 col-xl-4">
				<div class="grid h-100">
					<img class="logo-img mb-3" width="261" src="<?php echo JSD_THEME_ASSETS_URI ?>/logo.svg" alt="Sequenex logo">
					<div class="row">
						<div class="col-6 col-md-12">
							<p class="text mb-3">704 J. Street, Suite 213<br />San Diego, CA 92101</p>
						</div>
						<div class="col-6 col-md-12">
							<a class="ternary" href="mailto:info@sequenex.com">info@sequenex.com</a><br />
							<a class="ternary" href="tel:4425152287">442-515-2287</a>
						</div>
					</div>
					<div class="copy align-self-end d-none d-xl-block">Copyright © 2020 Sequenex</div>
				</div>
			</div>
			<div class="col-12 col-lg-3 h-100">
				<h3 class="quadrary bold mt-4">Site</h3>
				<?php
				wp_nav_menu(array(
					'theme_location'  => 'primary',
					'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
					'container'       => 'ul',
					'container_class' => 'col-6 col-lg-12 navbar-nav ml-auto',
					'container_id'    => 'main-navigation',
					'menu_class'      => 'navbar-nav ml-auto',
					'li_class'        => '',
					'a_class'         => 'primary',
					'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
					'walker'          => new WP_Bootstrap_Navwalker(),
				));
				?>
			</div>
			<div class="col-12 col-lg-4 h-100">
				<h3 class="quadrary bold mt-4">Services</h3>
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link primary" href="<?php echo get_page_link(get_page_by_path('services')->ID); ?>">Diabetes Product Development</a>
					</li>
					<li class="nav-item">
						<a class="nav-link primary d-none d-lg-block" href="<?php echo get_page_link(get_page_by_path('services')->ID); ?>">Diabetes Software Consulting</a>
						<a class="nav-link primary d-lg-none" href="<?php echo get_page_link(get_page_by_path('services')->ID); ?>">Diabetes Software Consulting</a>
					</li>
					<li class="nav-item">
						<a class="nav-link primary" href="<?php echo get_page_link(get_page_by_path('services')->ID); ?>">Diabetes Staffing Augmentation</a>
					</li>
					<li class="nav-item">
						<a class="nav-link primary d-none d-lg-block" href="<?php echo get_page_link(get_page_by_path('services')->ID); ?>">The Sequenex Platform</a>
						<a class="nav-link primary d-lg-none" href="<?php echo get_page_link(get_page_by_path('services')->ID); ?>">The Sequenex Platform</a>
					</li>
				</ul>
			</div>
			<div class="col-12 pl-3 mt-5 copy align-self-end d-block d-xl-none">Copyright © 2020 Sequenex</div>
		</div>
	</footer>
	<?php wp_footer(); ?>
	</body>

	</html>