<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?> data-bs-theme="dark">

<head>

	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php wp_head(); ?>

</head>






<body <?php body_class(); ?>>


	<!-- Header -->

	<nav class="navbar navbar-expand-lg" aria-label="Offcanvas navbar large">
		<div class="container-xxl px-5 mt-2 mb-3">

			<a class="navbar-brand" href="/">
				<svg xmlns="http://www.w3.org/2000/svg" class="bi" width="40" height="40" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
					<path d="m396.8 274.6l-3.8 4.8c-10.9 13.1-21.1 21.4-39 21.4c-23.4 0-40-19.2-40-45.8v-.6c0-25.6 17.3-45.1 40-45.1c15 0 26.2 6.1 37.8 20.5l4.2 5.1 50.9-39.4-3.8-5.1c-20.8-28.8-50.6-43.5-88.3-43.5c-27.8 0-53.4 9.6-73.3 26.6v-22.7h-66.9v90.9l-70.7-90.9H83.2v208.6h66.9v-94.7l73.9 94.7h57.3v-22.1c19.5 17 44.5 25.9 71 25.9c39.7 0 68.8-15 91.8-46.7l3.8-5.4-51.2-36.5zm-166.7 71.7l-93.4-120v120H96V163.5h41l90.2 115.8V163.5h40.6v23.4c-15 18.9-23.4 42.6-23.4 67.8v.6c0 25.6 8.3 49.3 23.4 68.2v22.7h-37.8zm121.9 3.8c-25.6 0-49.3-9.6-66.9-26.9c-17.9-17.6-27.5-41.6-27.5-67.8v-.6c0-54.4 41.6-95.4 96.6-95.4c31.7 0 55.7 10.9 73.9 33L397.4 216c-12.8-14.1-26.9-20.5-43.8-20.5c-30.4 0-53.1 25-53.1 58.2v.6c0 33.6 23 58.9 53.1 58.9c21.4 0 34.9-9.9 45.1-21.4l30.4 21.8c-20.2 25-44.2 36.2-77.4 36.2zm141.1 143H18.9V18.9h474.2v474.2zm-457-17.6h439.4V36.2H36.2v439.4z" />
				</svg>
				<span class="fw-bold">Online</span>
			</a>

			<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbar2Label">
				<div class="offcanvas-header">
					<h5 class="offcanvas-title" id="offcanvasNavbar2Label">Menu</h5>
					<button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
				</div>
				<div class="offcanvas-body">
					<ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="#">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Link</a>
						</li>
					</ul>

					<hr class="divider">

					<div class="dropdown text-end">
						<a href="#" class="d-block link-body-emphasis text-decoration-none" data-bs-toggle="dropdown" aria-expanded="false">
							<img src="https://github.com/mfragale.png" alt="mdo" width="40" height="40" class="rounded-circle">
						</a>
						<ul class="dropdown-menu text-small dropdown-menu-end">
							<li><a class="dropdown-item" href="#">New project...</a></li>
							<li><a class="dropdown-item" href="#">Settings</a></li>
							<li><a class="dropdown-item" href="#">Profile</a></li>
							<li>
								<hr class="dropdown-divider">
							</li>
							<li><a class="dropdown-item" href="#">Sign out</a></li>
						</ul>
					</div>

				</div>
			</div>

		</div>
	</nav>