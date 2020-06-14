<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="overview-wrap">
				<h2 class="title-1"><i class="fas fa-user"></i> Detail Pegawai</h2>
			</div>
		</div>
	</div>
	<div class="row m-t-25">
		<div class="col-md-7">
			<div class="card mb-3" style="max-width: 540px;">
				<div class="row no-gutters">
					<div class="col-md-4">
						<img src="<?=base_url()?>asset/images/icon/userfoto.png" style="padding:7px;" class="card-img"
							alt="...">
					</div>
					<div class="col-md-8">
						<div class="card-body">
							<h5 class="card-title">Detail Lengkap Pegawai</h5>
							<table class="table">
								<tbody>
									<tr>
										<th scope="row">NIK</th>
										<td>:</td>
										<td><?=$pegawai->nik?></td>
									</tr>
									<tr>
										<th scope="row">Nama</th>
										<td>:</td>
										<td><?=$pegawai->nama?></td>
									</tr>
									<tr>
										<th scope="row">Tgl. Lahir</th>
										<td>:</td>
										<td><?=date('d M Y', strtotime($pegawai->tgl_lahir))?></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-5">
			<!-- alert start -->
			<div class="card text-center">
				<div class="card-header bg-primary text-light">
					ALERT
				</div>
				<div class="card-body">
					<h5 class="card-title">MASA PENSIUN <u><?=$pegawai->nama?></u> AKAN BERAKHIR PADA</h5>
					<p class="card-text">
                    <?php
                        $bday = new DateTime($pegawai->tgl_lahir); // Your date of birth
                        $today = new Datetime(date('Y-m-d'));
                        $diff = $today->diff($bday);
                        printf('%d Tahun, %d Bulan, %d Hari', 60-$diff->y, $diff->m, $diff->d);
                        printf("\n");
                    ?>
					</p>
					<P>
						<h2>Lagi</h2>
					</P>
				</div>
			</div>
			<!-- alert end -->
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
