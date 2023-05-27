
	<!--**********************************
        Main wrapper end
    ***********************************-->

	<!--**********************************
        Scripts
    ***********************************-->
	<!-- Required vendors -->
	<script src="<?= BASEURL; ?>/template/vendor/global/global.min.js"></script>
	<script src="<?= BASEURL; ?>/template/vendor/chart.js/Chart.bundle.min.js"></script>
	<script src="<?= BASEURL; ?>/template/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
	<script src="js/custom.min.js"></script>
	<script src="<?= BASEURL; ?>/template/js/dlabnav-init.js"></script>
	<script src="<?= BASEURL; ?>/template/js/styleSwitcher.js"></script>

	<!-- Apex Chart -->
	<script src="<?= BASEURL; ?>/template/vendor/apexchart/apexchart.js"></script>

	<script src="<?= BASEURL; ?>/template/vendor/chart.js/Chart.bundle.min.js"></script>

	<!-- Chart piety plugin files -->
	<script src="<?= BASEURL; ?>/template/vendor/peity/jquery.peity.min.js"></script>
	<!-- Dashboard 1 -->
	<script src="<?= BASEURL; ?>/template/js/dashboard/dashboard-1.js"></script>

	<script src="<?= BASEURL; ?>/template/vendor/owl-carousel/owl.carousel.js"></script>

	<script src="<?= BASEURL; ?>/template/js/custom.min.js"></script>
	<script src="<?= BASEURL; ?>/template/js/dlabnav-init.js"></script>
	<script src="<?= BASEURL; ?>/template/js/demo.js"></script>
	<script src="<?= BASEURL; ?>/template/js/styleSwitcher.js"></script>
	<script>
		function cardsCenter() {

			/*  testimonial one function by = owl.carousel.js */



			jQuery('.card-slider').owlCarousel({
				loop: true,
				margin: 0,
				nav: true,
				//center:true,
				slideSpeed: 3000,
				paginationSpeed: 3000,
				dots: true,
				navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
				responsive: {
					0: {
						items: 1
					},
					576: {
						items: 1
					},
					800: {
						items: 1
					},
					991: {
						items: 1
					},
					1200: {
						items: 1
					},
					1600: {
						items: 1
					}
				}
			})
		}

		jQuery(window).on('load', function() {
			setTimeout(function() {
				cardsCenter();
			}, 1000);
		});
	</script>
	<!-- Datatable -->
	<script src="<?= BASEURL; ?>/template/vendor/datatables/js/jquery.dataTables.min.js"></script>
	<script src="<?= BASEURL; ?>/template/js/plugins-init/datatables.init.js"></script>

	<script src="<?= BASEURL; ?>/template/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>

	<script src="<?= BASEURL; ?>/template/js/custom.min.js"></script>
	<script src="<?= BASEURL; ?>/template/js/dlabnav-init.js"></script>
	<script src="<?= BASEURL; ?>/template/js/demo.js"></script>
	<script src="<?= BASEURL; ?>/template/js/styleSwitcher.js"></script>
	</body>

	</html>