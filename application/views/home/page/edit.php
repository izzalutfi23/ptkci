<div class="app-main__outer">

	<div class="row">
		<div class="col-md-12">
			<div class="overview-wrap">
				<h2 class="title-1">Edit Data Pegawai</h2>
			</div><br>
		</div>
	</div>

	<!-- Table -->
	<div class="row">
		<div class="col-md-12">
			<div class="main-card mb-3 card">
				<div class="card-header">Edit Data Pegawai</div>
				<div class="table-responsive">
					<div class="container" style="margin-top: 20px; margin-bottom: 20px;">
						<form action="<?=base_url('home/prosesedit')?>" method="post">
							<div class="row">
								<div class="col-md-6">
									<div class="main-card mb-3 card">
										<div class="card-body">
											<h5 class="card-title">Data Pribadi</h5>
											<div class="position-relative form-group">
												<label class="">Nama</label>
												<input name="nama" type="text" value="<?=$peg->nama?>"
													class="form-control" required="required">
											</div>
											<div class="position-relative form-group">
												<label class="">Gelar</label>
												<input name="gelar" type="text" value="<?=$peg->gelar?>"
													class="form-control" required="required">
											</div>
											<div class="position-relative form-group">
												<label class="">NIK</label>
												<input name="nik" type="number" value="<?=$peg->nik?>" readonly
													class="form-control" required="required">
											</div>
											<div class="position-relative form-group">
												<label class="">NUPTK</label>
												<input name="nuptk" type="text" value="<?=$peg->nuptk?>"
													class="form-control" required="required">
											</div>
											<div class="position-relative form-group">
												<label class="">Jenis Kelamin</label>
												<select name="j_kel" class="form-control" required="required">
													<option value="L" <?= ($peg->j_kel == 'L') ? 'selected' : '' ?>>
														Laki-laki</option>
													<option value="P" <?= ($peg->j_kel == 'P') ? 'selected' : '' ?>>
														Perempuan</option>
												</select>
											</div>
											<div class="position-relative form-group">
												<label class="">Tempat Lahir</label>
												<input name="tmp_lahir" type="text" value="<?=$peg->tmp_lahir?>"
													class="form-control" required="required">
											</div>
											<div class="position-relative form-group">
												<label class="">Tgl Lahir</label>
												<input name="tgl_lahir" type="date" value="<?=$peg->tgl_lahir?>"
													class="form-control" required="required">
											</div>
											<div class="position-relative form-group">
												<label class="">No Telepon</label>
												<input name="no_hp" type="number" value="<?=$peg->no_hp?>"
													class="form-control" required="required">
											</div>
										</div>
									</div>
									<div class="main-card mb-3 card">
										<div class="card-body">
											<h5 class="card-title">Unit Kerja/Tempat Tugas</h5>
											<div class="position-relative form-group">
												<label class="">Status Tugas</label>
												<input name="status_tgs" type="text" value="<?=$peg->status_tgs?>"
													class="form-control" required="required">
											</div>
											<div class="position-relative form-group">
												<label class="">Jenjang</label>
												<input name="jenjang" type="text" value="<?=$peg->jenjang?>"
													class="form-control" required="required">
											</div>
											<div class="position-relative form-group">
												<label class="">Tempat Tugas</label>
												<input name="tempat_tgs" type="text" value="<?=$peg->tempat_tgs?>"
													class="form-control" required="required">
											</div>
											<div class="position-relative form-group">
												<label class="">NPSN</label>
												<input name="npsn" type="text" value="<?=$peg->npsn?>"
													class="form-control" required="required">
											</div>
											<div class="position-relative form-group">
												<label class="">Kecamatan</label>
												<input name="kecamatan" type="text" value="<?=$peg->kecamatan?>"
													class="form-control" required="required">
											</div>
											<div class="position-relative form-group">
												<label class="">Kabupaten</label>
												<input name="kabupaten" type="text" value="<?=$peg->kabupaten?>"
													class="form-control" required="required">
											</div>
										</div>
									</div>
									<div class="main-card mb-3 card">
										<div class="card-body">
											<h5 class="card-title">Kepegawaian</h5>
											<div class="position-relative form-group">
												<label class="">Jenis PTK</label>
												<input name="jenis_ptk" type="text" value="<?=$peg->jenis_ptk?>"
													class="form-control" required="required">
											</div>
											<div class="position-relative form-group">
												<label class="">Status Kepegawain</label>
												<select name="status_kepegawaian" class="form-control">
													<option value="PNS">PNS</option>
													<option value="GTY/PTY">GTY/PTY</option>
													<option value="Honor">HONORER</option>
													<option value="CPNS">CPNS</option>
												</select>
											</div>
											<div class="position-relative form-group">
												<label class="">Mapel yg Diajarkan</label>
												<input name="mapel_ajar" type="text" value="<?=$peg->mapel_ajar?>"
													class="form-control" required="required">
											</div>
											<div class="position-relative form-group">
												<label class="">Jam Ajar Perminggu</label>
												<input name="jam_ajarminggu" type="text"
													value="<?=$peg->jam_ajarminggu?>" class="form-control"
													required="required">
											</div>
											<div class="position-relative form-group">
												<label class="">Kepsek</label>
												<select name="kepsek" class="form-control">
													<option value="Tidak"
														<?= ($peg->kepsek == 'Tidak') ? 'selected' : '' ?>>TIDAK
													</option>
													<option value="Ya" <?= ($peg->kepsek == 'Ya') ? 'selected' : '' ?>>
														YA</option>
												</select>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="main-card mb-3 card">
										<div class="card-body">
											<h5 class="card-title">Khusus PNS</h5>
											<div class="position-relative form-group">
												<label class="">NIP</label>
												<input name="nip" type="text" value="<?=$peg->nip?>"
													class="form-control" required="required">
											</div>
											<div class="position-relative form-group">
												<label class="">SK CPNS</label>
												<input name="sk_cpns" type="text" value="<?=$peg->sk_cpns?>"
													class="form-control" required="required">
											</div>
											<div class="position-relative form-group">
												<label class="">Tgl CPNS</label>
												<input name="tgl_cpns" type="date" value="<?=$peg->tgl_cpns?>"
													class="form-control" required="required">
											</div>
											<div class="position-relative form-group">
												<label class="">SK Pengangkatan</label>
												<input name="sk_pengangkatan" type="text"
													value="<?=$peg->sk_pengangkatan?>" class="form-control"
													required="required">
											</div>
											<div class="position-relative form-group">
												<label class="">TMT Pengangkatan</label>
												<input name="tmt_pengangkatan" type="date"
													value="<?=$peg->tmt_pengangkatan?>" class="form-control"
													required="required">
											</div>
											<div class="position-relative form-group">
												<label class="">Golongan</label>
												<input name="golongan" type="text" value="<?=$peg->golongan?>"
													class="form-control" required="required">
											</div>
											<div class="position-relative form-group">
												<label class="">TMT Golongan</label>
												<input name="tmt_gol" type="date" class="form-control"
													value="<?=$peg->tmt_gol?>" required="required">
											</div>
											<div class="position-relative form-group">
												<label class="">Masa Kerja (Tahun)</label>
												<input name="masa_kerjatahun" type="text"
													value="<?=$peg->masa_kerjatahun?>" class="form-control"
													required="required">
											</div>
											<div class="position-relative form-group">
												<label class="">Masa Kerja (Bulan)</label>
												<input name="masa_kerjabulan" type="text"
													value="<?=$peg->masa_kerjabulan?>" class="form-control"
													required="required">
											</div>
										</div>
									</div>
									<div class="main-card mb-3 card">
										<div class="card-body">
											<h5 class="card-title">Kualifikasi Pendidikan Terakhir</h5>
											<div class="position-relative form-group">
												<label class="">Pendidikan</label>
												<input name="pendidikan" type="text" value="<?=$peg->pendidikan?>"
													class="form-control" required="required">
											</div>
											<div class="position-relative form-group">
												<label class="">Bidang Studi Pendidikan Terakhir</label>
												<input name="b_studipend" type="text" value="<?=$peg->b_studipend?>"
													class="form-control" required="required">
											</div>
										</div>
									</div>
									<div class="main-card mb-3 card">
										<div class="card-body">
											<h5 class="card-title">Data Sertifikasi</h5>
											<div class="position-relative form-group">
												<label class="">Bidang Studi Sertifikasi</label>
												<input name="b_studisertifikasi" type="text"
													value="<?=$peg->b_studisertifikasi?>" class="form-control"
													required="required">
											</div>
										</div>
									</div>
									<button type="submit" class="btn btn-primary pull-right">Edit</button>
								</div>
							</div>
						</form>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>



<!-- Footer -->
<div class="row">
	<div class="col-md-12">
		<div class="copyright">
			<p>Copyright © 2020 Pekalongan. All rights reserved. by <a href="#">AdminPTK</a>.</p>
		</div>
	</div>
</div>
<!-- End footer -->

</div>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
</div>
</div>
