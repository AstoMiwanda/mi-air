<!DOCTYPE html>
<html lang="en">

<head>
	<title>Mi-Air | List Ticket</title>
	<?php require_once 'template/metacss.php' ?>
</head>

<body>

	<div class="super_container">

		<?php require_once 'template/navheader.php' ?>

		<!-- Home -->

		<div class="row">
			<div class="col" style="background-image:url('<?=base_url()?>assets/images/news_6_black.jpg');padding:160px 0 25px 0;background-repeat:no-repeat;background-size:cover;background-position:center;">
				<div class="container">
					<div class="row">
						<div class="col">
							<h1 style="color:rgb(255,255,255);">Tiket Pesawat</h1>
							<h4 style="color:#f1f1f1;">Pesan tiket dan berlibur kemanapun anda suka</h4>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Contact -->

        <?php foreach ($detail_ticket->result() as $value_detail_ticket) { ?>
		<section style="margin:50px 0;">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="detail-ticket-box" style="border-radius:3px;width:100%;background-color:#f8fcff;box-shadow:0 6px 16px 0 rgba(34,34,34,.2);padding:25px 50px;">
							<div class="row d-flex justify-content-center align-items-center" style="margin-bottom:50px;">
								<div class="col-6 col-sm-6 col-md-3 col-lg-2 d-flex justify-content-start order-1 order-sm-1 order-md-1">
									<div style="width:60px;height:60px;background-image:url(&quot;indonesian-rupiah.png&quot;);background-size:contain;background-repeat:no-repeat;background-position:center;"></div>
								</div>
								<div class="col-12 col-sm-12 col-md-6 col-lg-8 order-3 order-sm-3 order-md-2">
									<h3 class="text-center" style="color:#222222;padding-bottom: 16px;border-bottom: 1px solid #aaaaaa;"><?php echo $value_detail_ticket->description_transportation_type; ?></h3>
								</div>
								<div class="col-6 col-sm-6 col-md-3 col-lg-2 d-flex justify-content-end order-2 order-sm-2 order-md-3">
									<p class="text-truncate text-center" style="width:120px;padding:8px 0;background-color:#40a0f9;color:rgb(255,255,255);margin:0;border-radius:3px;"><?php echo $value_detail_ticket->description_transportation; ?><br /></p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 col-lg-6">
									<div class="row">
										<div class="col-12 col-sm-5 col-md-4 col-lg-4">
											<div class="row">
												<div class="col">
													<h6 style="color:#444444;margin-bottom:16px;">Pesawat</h6>
												</div>
												<div class="col-1 d-none d-sm-flex">
													<h6>:</h6>
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-7 col-md-8 col-lg-8">
											<p style="color:#696969;"><?php echo $value_detail_ticket->description_transportation_type; ?></p>
										</div>
									</div>
									<div class="row">
										<div class="col-12 col-sm-5 col-md-4 col-lg-4">
											<div class="row">
												<div class="col">
													<h6 style="color:#444444;margin-bottom:16px;">Kelas</h6>
												</div>
												<div class="col-1 d-none d-sm-flex">
													<h6>:</h6>
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-7 col-md-8 col-lg-8">
											<p style="color:#696969;"><?php echo $value_detail_ticket->description_transportation; ?></p>
										</div>
									</div>
									<div class="row">
										<div class="col-12 col-sm-5 col-md-4 col-lg-4">
											<div class="row">
												<div class="col">
													<h6 style="color:#444444;margin-bottom:16px;">Kode Kursi</h6>
												</div>
												<div class="col-1 d-none d-sm-flex">
													<h6>:</h6>
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-7 col-md-8 col-lg-8">
											<p style="color:#696969;">A08</p>
										</div>
									</div>
									<div class="row">
										<div class="col-12 col-sm-5 col-md-4 col-lg-4">
											<div class="row">
												<div class="col">
													<h6 style="color:#444444;margin-bottom:16px;">Dari</h6>
												</div>
												<div class="col-1 d-none d-sm-flex">
													<h6>:</h6>
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-7 col-md-8 col-lg-8">
											<p style="color:#696969;"><?php echo $value_detail_ticket->rute_from; ?></p>
										</div>
									</div>
									<div class="row">
										<div class="col-12 col-sm-5 col-md-4 col-lg-4">
											<div class="row">
												<div class="col">
													<h6 style="color:#444444;margin-bottom:16px;">Tujuan</h6>
												</div>
												<div class="col-1 d-none d-sm-flex">
													<h6>:</h6>
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-7 col-md-8 col-lg-8">
											<p style="color:#696969;"><?php echo $value_detail_ticket->rute_to; ?></p>
										</div>
									</div>
								</div>
								<div class="col-md-12 col-lg-6">
									<div class="row">
										<div class="col-12 col-sm-5 col-md-4 col-lg-5">
											<div class="row">
												<div class="col">
													<h6 style="color:#444444;margin-bottom:16px;">Tanggal Keberangkatan</h6>
												</div>
												<div class="col-1 d-none d-sm-flex">
													<h6>:</h6>
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-7 col-md-8 col-lg-7">
											<p style="color:#696969;"><?php echo $value_detail_ticket->depart_date; ?></p>
										</div>
									</div>
									<div class="row">
										<div class="col-12 col-sm-5 col-md-4 col-lg-5">
											<div class="row">
												<div class="col">
													<h6 style="color:#444444;margin-bottom:16px;">Waktu Keberangkatan</h6>
												</div>
												<div class="col-1 d-none d-sm-flex">
													<h6>:</h6>
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-7 col-md-8 col-lg-7">
											<p style="color:#696969;"><?php echo $value_detail_ticket->depart_time; ?> WIB</p>
										</div>
									</div>
									<div class="row">
										<div class="col-12 col-sm-5 col-md-4 col-lg-5">
											<div class="row">
												<div class="col">
													<h6 style="color:#444444;margin-bottom:16px;">Tanggal Sampai</h6>
												</div>
												<div class="col-1 d-none d-sm-flex">
													<h6>:</h6>
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-7 col-md-8 col-lg-7">
											<p style="color:#696969;"><?php echo $value_detail_ticket->refer_date; ?></p>
										</div>
									</div>
									<div class="row">
										<div class="col-12 col-sm-5 col-md-4 col-lg-5">
											<div class="row">
												<div class="col">
													<h6 style="color:#444444;margin-bottom:16px;">Waktu Sampai</h6>
												</div>
												<div class="col-1 d-none d-sm-flex">
													<h6>:</h6>
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-7 col-md-8 col-lg-7">
											<p style="color:#696969;"><?php echo $value_detail_ticket->refer_time; ?> WIB</p>
										</div>
									</div>
								</div>
							</div>
							<div class="row d-flex align-items-end" style="margin-top:16px;">
								<div class="col-md-12 col-lg-6">
									<div class="row">
										<div class="col-12 col-sm-5 col-md-4 col-lg-4">
											<div class="row">
												<div class="col">
													<h6 style="color:#444444;margin-bottom:16px;">Harga</h6>
												</div>
												<div class="col-1 d-none d-sm-flex">
													<h6>:</h6>
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-7 col-md-8 col-lg-8">
											<h6 style="color:#40a0f9;margin-bottom:16px;">Rp <?php echo $value_detail_ticket->price; ?>.00<br /></h6>
										</div>
									</div>
									<div class="row">
										<div class="col-12 col-sm-5 col-md-4 col-lg-4">
											<div class="row">
												<div class="col">
													<h6 style="color:#444444;margin:0;">Kode Booking</h6>
												</div>
												<div class="col-1 d-none d-sm-flex">
													<h6 style="margin:0;">:</h6>
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-7 col-md-8 col-lg-8">
											<p style="color:#696969;margin:0;"><?php echo $kode_booking ?></p>
										</div>
									</div>
								</div>
								<div class="col-md-12 col-lg-6"><button class="btn btn-outline-primary" type="button" style="width:100%;font-weight:500;">Booking
										Sekarang</button></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
        <?php } ?>

		<?php require_once 'template/footer.php' ?>

	</div>

	<?php require_once 'template/metajs.php' ?>

	<script type="text/javascript">
		$(".nav-ticket").last().addClass("active");
		$(".navm-ticket").last().addClass("active");

	</script>
</body>

</html>
