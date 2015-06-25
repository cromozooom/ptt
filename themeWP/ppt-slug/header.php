<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package ptt
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<!-- Demo navbar -->
<div class="navbar yamm navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="#" class="navbar-brand">PPT</a>
		</div>
		<div id="navbar-collapse-1" class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown yamm-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">ABOUT US<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li>
							<!-- Content container to add padding-->
							<div class="yamm-content">
								<div class="row">
									<ul class="col-sm-8 list-unstyled">
										<li>
											<p><strong><a href="#">Quality &amp; Corporate Social Responsibility</a></strong></p>
											<hr/>
											<ul class="list-unstyled">
												<li class="col-sm-12"><a href="#">OUR COMMITMENT</a>
													<hr/>
													<ul class="col-sm-6">
														<li><a href="#">People</a></li>
														<li><a href="#">Health &amp; Safety</a></li>
														<li><a href="#">Environment</a></li>
													</ul>
													<ul class="col-sm-6">
														<li><a href="#">Procurement</a></li>
														<li><a href="#">Business Ethics</a></li>
														<li><a href="#">Conflict-Free Minerals</a></li>
													</ul>
												</li>
												<li class="col-sm-12">
													<hr/><a href="#">Quality and csr issue notification</a>
												</li>
											</ul>
										</li>
									</ul>
									<ul class="col-sm-4 list-unstyled">
										<li>
											<p><strong><a href="#">COMPANY</a></strong></p>
											<hr/>
										</li>
										<li>
											<p><strong><a href="#">CAREERS</a></strong></p>
											<hr/>
										</li>
										<li>
											<p><strong><a href="#">CONTACT</a></strong></p>
											<hr/>
										</li>
										<li>
											<p><strong><a href="#">SOCIAL NETWORK</a></strong></p>
										</li>
									</ul>
								</div>
							</div>
						</li>
					</ul>
				</li>
				<li class="dropdown yamm-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">SOLUTIONS<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li>
							<!-- Content container to add padding -->
							<div class="yamm-content">
								<div class="row">
									<?php

										$defaults = array(
											'theme_location'  => '',
											'menu'            => 'Solutions_NetworkEquipmentManufacturers',
											'container'       => 'nav',
											'container_class' => '',
											'container_id'    => '',
											'menu_class'      => 'col-sm-6',
											'menu_id'         => '',
											'echo'            => true,
											'fallback_cb'     => 'wp_page_menu',
											'before'          => '',
											'after'           => '',
											'link_before'     => '',
											'link_after'      => '',
											'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
											'depth'           => 0,
											'walker'          => ''
										);

										wp_nav_menu( $defaults );

									?>

									<?php

										$defaults = array(
											'theme_location'  => '',
											'menu'            => 'Solutions_NetworkEquipmentManufacturers',
											'container'       => 'ul',
											'container_class' => '',
											'container_id'    => '',
											'menu_class'      => 'col-sm-3',
											'menu_id'         => '',
											'echo'            => true,
											'fallback_cb'     => 'wp_page_menu',
											'before'          => '',
											'after'           => '',
											'link_before'     => '',
											'link_after'      => '',
											// 'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
											'depth'           => 0,
											'walker'          => ''
										);

										wp_nav_menu( $defaults );

									?>

									<?php

										$defaults = array(
											'theme_location'  => '',
											'menu'            => 'Solutions_NetworkEquipmentManufacturers',
											'container'       => 'ul',
											'container_class' => '',
											'container_id'    => '',
											'menu_class'      => 'col-sm-3',
											'menu_id'         => '',
											'echo'            => true,
											'fallback_cb'     => 'wp_page_menu',
											'before'          => '',
											'after'           => '',
											'link_before'     => '',
											'link_after'      => '',
											// 'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
											'depth'           => 0,
											'walker'          => ''
										);

										wp_nav_menu( $defaults );

									?>

									<!--ul class="col-sm-6 list-unstyled">
										<li>
											<p><strong><a href="#">Network Equipment Manufacturers</a></strong></p>
											<hr/>
											<ul>
												<li><a href="#">SIMULATION OVER THE RADIO INTERFACES (GSM, UMTS/HSPA+, LTE)
														<ul>
															<li><a href="#">Inter-RAT & Handover Testing</a></li>
															<li><a href="#">Load & Stress Testing</a></li>
														</ul></a></li>
												<li><a href="#">QoS TESTING
														<ul>
															<li><a href="#">Real World Simulation (Fading, Mobility and Smartphones)</a></li>
														</ul></a></li>
												<li><a href="#">CORE NETWORK ELEMENTS SOLUTIONS
														<ul>
															<li><a href="#">Core Network Simulating Solutions</a></li>
															<li><a href="#">IP-PBX Testing</a></li>
															<li><a href="#">SMSC Load Testing</a></li>
														</ul></a></li>
												<li><a href="#">SYSTEM AND INTEGRATION TESTING
														<ul>
															<li><a href="#">Core Network Simulating Solutions</a></li>
															<li><a href="#">IP-PBX Testing</a></li>
															<li><a href="#">SMSC Load Testing</a></li>
														</ul></a></li>
											</ul>
										</li>
									</ul>
									<ul class="col-sm-3 list-unstyled">
										<li>
											<p><strong><a href="#">Operators &amp; Service Providers</a></strong></p>
											<hr/>
											<ul>
												<li><a href="#">ACCEPTANCE TESTING
														<ul>
															<li><a href="#">Handover &amp; inter-RAT</a></li>
															<li><a href="#">IP-PBX Testing Suite</a></li>
															<li><a href="#">QoS Testing</a></li>
															<li><a href="#">SMSC Load Testing</a></li>
														</ul></a></li>
												<li><a href="#">QUALITY ASSURANCE
														<ul>
															<li><a href="#">Extensive Monitoring System</a></li>
														</ul></a></li>
												<li><a href="#">REVENUE ASSURANCE
														<ul>
															<li><a href="#">Ticket Producer</a></li>
														</ul></a></li>
											</ul>
										</li>
									</ul>
									<ul class="col-sm-3 list-unstyled">
										<li>
											<p><strong><a href="#">Vertical Solutions</a></strong></p>
											<hr/>
											<ul>
												<li><a href="#">ERTMS APPLICATION TESTING</a></li>
												<li><a href="#">EMERGENCY MANAGEMENT
														<ul>
															<li><a href="#">EmergencyNET – Request for info</a></li>
														</ul></a></li>
											</ul>
										</li>
									</ul-->
								</div>
							</div>
						</li>
					</ul>
				</li>
				<li class="dropdown yamm-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">PRODUCTS<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li>
							<!-- Content container to add padding -->
							<div class="yamm-content">
								<div class="row">
									<ul class="col-sm-12 list-unstyled">
										<li>
											<p><strong><a href="#">Products Overview</a></strong></p>
										</li>
									</ul>
									<ul class="col-sm-5 list-unstyled">
										<li><a href="#">MULTITERMINAL SIMULATION OVER THE RADIO INTERFACE
												<hr/>
												<ul>
													<li><a href="#">MsSIM – GSM/EDGE and Evolved-EDGE</a></li>
													<li><a href="#">3GSIM  – UMTS and HSPA/HSPA+</a></li>
													<li><a href="#">UeSIM – LTE and LTE-Advanced</a></li>
												</ul></a></li>
									</ul>
									<ul class="col-sm-4 list-unstyled">
										<li><a href="#">WIRED INTERFACE SIMULATION
												<hr/>
												<ul>
													<li><a href="#">Abis Tester – GSM Load &amp; Stress Testing</a></li>
													<li><a href="#">Iub Tester – UMTS Load &amp; Stress over STM-1 and IP</a></li>
												</ul></a></li>
									</ul>
									<ul class="col-sm-3 list-unstyled">
										<li><a href="#">COMMON ARCHITECTURE
												<hr/>
												<ul>
													<li><a href="#">Software Defined Radio Solutions</a></li>
													<li><a href="#">Wire-Speed Solutions</a></li>
												</ul></a></li>
									</ul>
								</div>
							</div>
						</li>
					</ul>
				</li>
				<li class="dropdown"><a data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">RESOURCES<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="#">Product Brochures</a></li>
						<li><a href="#">Technical Support</a></li>
					</ul>
				</li>
				<li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">News</a></li>
				<li>
					<form role="search" class="navbar-form navbar-left">
						<div class="form-group">
							<input type="text" placeholder="Search" class="form-control"/>
						</div>
						<button type="submit" class="btn btn-default">Submit</button>
					</form>
				</li>
			</ul>
		</div>
	</div>
</div>



<div id="page" class="hfeed site container-fluid">

	<!-- zona de adminiastrare site -->
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ppt-slug' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<p class="site-description"><?php bloginfo( 'description' ); ?></p>
		</div><!-- .site-branding -->



		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
				<?php esc_html_e( 'Primary Menu', 'ppt-slug' ); ?>
			</button>

			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->




	</header><!-- #masthead -->
	

	<div id="content" class="site-content">
