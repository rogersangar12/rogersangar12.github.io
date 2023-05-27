<!--**********************************
            Content body start
        ***********************************-->

<div class="content-body">
	<div class="col-lg-6">
		<?php Flasher::flash(); ?>
	</div>
	<!-- row -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-12">
				<div class="row">
					<div class="col-xl-6">
						<div class="row">
							<div class="col-xl-12">
								<div class="card tryal-gradient">
									<div class="card-body tryal row">
										<div class="col-xl-7 col-sm-6">
											<h2>Yuk berinvestasi untuk akhirat</h2>
											<span>"Jangan menunggu kaya untuk bersedekah, sebaliknya, bersedekahlah untuk membuka pintu rezeki"</span>

										</div>
										<div class="col-xl-5 col-sm-6">
											<img src="<?= BASEURL; ?>/template/images/mosque.png" alt="" class="sd-shape">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6">
						<div class="row">
							<div class="col-xl-12">
								<div class="row">
									<div class="col-xl-6 col-sm-6">
										<div class="card">
											<div class="card-body d-flex px-4 pb-0 justify-content-between">
												<div>
													<h4 class="fs-18 font-w600 mb-4 text-nowrap">Pemasukan Infaq</h4>
													<div class="d-flex align-items-center">
														<h2 class="fs-32 font-w700 mb-4"><?= $data['pemasukan'] ?>,00</h2>

													</div>
												</div>

											</div>
										</div>
									</div>
									<div class="col-xl-6 col-sm-6">
										<div class="card">
											<div class="card-body d-flex px-4 pb-0 justify-content-between">
												<div>
													<h4 class="fs-18 font-w600 mb-4 text-nowrap">Pengeluaran Infaq</h4>
													<div class="d-flex align-items-center">
														<h2 class="fs-32 font-w700 mb-4"><?= $data['pengeluaran'] ?>,00</h2>

													</div>
												</div>

											</div>
										</div>
									</div>
									<div class="col-xl-6 col-sm-6">
										<div class="card">
											<div class="card-body d-flex px-4 pb-0 justify-content-between">
												<div>
													<h4 class="fs-18 font-w600 mb-4 text-nowrap">Pengeluaran Infaq</h4>
													<div class="d-flex align-items-center">
														<h2 class="fs-32 font-w700 mb-4"><?= $data['pemasukan'] - $data['pengeluaran'] ?>,00</h2>

													</div>
												</div>

											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--**********************************
            Content body end
        ***********************************-->