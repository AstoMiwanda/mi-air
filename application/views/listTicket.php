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

		<section style="margin-top:50px;">
			<div class="container">
				<div class="row">
					<div class="col">
						<h5 style="color:#333333;">Keberangkatan</h5>
					</div>
					<div class="col">
						<h5 class="text-right" style="color:#333333;">Tujuan</h5>
					</div>
				</div>
				
				<?php foreach ($data_ticket as $value_data_ticket) { ?>
				<a href="<?=base_url()?>DetailTicket/?id=<?php echo $value_data_ticket->id_rute ?>"><div class="row d-flex justify-content-center align-items-center" style="margin-top:32px;">
					<div class="col">
						<div class="row">
							<div class="col-6 col-md-5 col-lg-4"><img src="<?=base_url()?>assets/images/departures.png" style="width:100%;" />
								<div style="display:none;background-color:#40a0f9;position:absolute;width:100%;border-radius:3px;top:calc(50% - 13px);left:0;">
									<p class="text-center" style="color:rgb(255,255,255);line-height:26px;margin:0;">AirAsia</p>
								</div>
							</div>
							<div class="col-6 col-md-7 col-lg-8">
								<div class="row">
									<div class="col">
										<p style="margin:0;"><?php $currentDateTime = $value_data_ticket->depart_time;
										echo date('H:i', strtotime($currentDateTime))." WIB"; ?></p>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<h4 style="color: #222222;"><?php echo $value_data_ticket->rute_from ?></h4>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<h6 style="color: #444444;"><?php echo $value_data_ticket->depart_date ?></h6>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="row">
							<div class="col">
								<div style="background-color:#40a0f9;position:absolute;width:100%;border-radius:3px;top:calc(50% - 13px);">
									<p class="text-center" style="color:rgb(255,255,255);line-height:26px;margin:0;"><?php echo $value_data_ticket->description_transportation_type ?></p>
								</div>
							</div>
							<div class="col">
								<p class="text-center" style="margin-bottom:8px;color:#696969;font-style:italic;font-weight:500;"><?php echo $value_data_ticket->description_transportation ?></p>
							</div>
						</div>
						<div style="width:100%;height:1px;line-height:1px;background-color:#aaaaaa;"></div>
						<h6 class="text-center" style="color:#333333;margin-top:8px;"><?php echo "Rp ".$value_data_ticket->price.".00" ?></h6>
					</div>
					<div class="col">
						<div class="row">
							<div class="col-6 col-md-7 col-lg-8">
								<div class="row">
									<div class="col">
										<p style="margin:0;"><?php $currentDateTime = $value_data_ticket->refer_time;
										echo date('H:i', strtotime($currentDateTime))." WIB"; ?></p>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<h4 style="color: #222222;"><?php echo $value_data_ticket->rute_to ?></h4>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<h6 style="color: #444444;"><?php echo $value_data_ticket->refer_date ?></h6>
									</div>
								</div>
							</div>
							<div class="col-6 col-md-5 col-lg-4"><img src="<?=base_url()?>assets/images/landing.png" style="width:100%;" /></div>
						</div>
					</div>
				</div></a>
				<?php } ?>
				<nav class="d-flex justify-content-center align-items-center" style="margin:50px auto;">
					<!-- <ul class="pagination">
						<li class="page-item"><a class="page-link" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
						<li class="page-item"><a class="page-link">1</a></li>
						<li class="page-item"><a class="page-link">2</a></li>
						<li class="page-item"><a class="page-link">3</a></li>
						<li class="page-item"><a class="page-link">4</a></li>
						<li class="page-item"><a class="page-link">5</a></li>
						<li class="page-item"><a class="page-link" aria-label="Next"><span aria-hidden="true">»</span></a></li>
					</ul> -->
					<?php echo $pagination; ?>
				</nav>
			</div>
		</section>

		<?php require_once 'template/footer.php' ?>

	</div>

	<?php require_once 'template/metajs.php' ?>

	<script type="text/javascript">
		$(".nav-ticket").last().addClass("active");
		$(".navm-ticket").last().addClass("active");

	</script>
</body>

</html>
