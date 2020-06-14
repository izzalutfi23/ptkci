<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="overview-wrap">
				<h2 class="title-1"><i class="fas fa-address-card"></i> Informasi Kepegawaian</h2>
			</div>
		</div>
	</div>
	<div class="row m-t-25">
		<div class="col-md-12">
			<!-- Informasi start -->
			<div class="card text-center">
				<div class="card-header bg-dark text-light">
					Pensiunan
				</div>
				<div class="card-body">
                    <?php
                        foreach($pegawai as $data){
                    ?>
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<?php
                        $bday = new DateTime($data->tgl_lahir); // Your date of birth
                        $today = new Datetime(date('Y-m-d'));
						$diff = $today->diff($bday);
						if(60-$diff->y>-1){
							printf("<strong>%s</strong> ",$data->nama); echo "Akan segera pensiun ";
							printf('%d Tahun, %d Bulan, %d Hari', 60-$diff->y, $diff->m, $diff->d);
							printf("\n");
							printf("lagi");
						}
						else{
							printf("<strong>%s</strong> ",$data->nama); echo "Sudah Pensiun sejak ";
							printf('%d Tahun, %d Bulan, %d Hari', (60-$diff->y)*-1, $diff->m, $diff->d);
							printf("\n");
							printf("yang lalu");
						}
                    ?>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
                    <?php } ?>
				</div>
			</div>
			<!-- informasi end -->
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="copyright">
				<p>Copyright © 2020 Pekalongan. All rights reserved. by <a href="#">AdminPTK</a>.</p>
			</div>
		</div>
	</div>
</div>
