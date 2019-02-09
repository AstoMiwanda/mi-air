<!-- Search -->

<div class="home_search">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="home_search_container">
					<div class="home_search_title">Cari untuk perjalanan anda</div>
					<div class="home_search_content">
						<form action="<?php base_url() ?>ListTicket" method="POST" class="home_search_form" id="home_search_form">
							<div class="d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
								<input type="text" class="search_input search_input_1" name="kota" placeholder="Kota" required="required">
								<input type="text" class="search_input search_input_2" name="keberangkatan" placeholder="Keberangkatan" required="required">
								<input type="text" class="search_input search_input_3" name="tujuan" placeholder="Tujuan" required="required">
								<input type="text" class="search_input search_input_4" name="harga" placeholder="Harga" required="required">
								<button type="submit" name="submit" class="home_search_button">Cari</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
