<div class="app-main__outer">

	<div class="row">
		<div class="col-md-12">
			<div class="overview-wrap">
				<h2 class="title-1">Tambah Data Pegawai</h2>
			</div><br>
		</div>
	</div>

	<!-- Table -->
	<div class="row">
		<div class="col-md-12">
			<div class="main-card mb-3 card">
				<div class="card-header">Tambah Data Pegawai</div>
				<div class="table-responsive">
					<div class="container" style="margin-top: 20px; margin-bottom: 20px;">
						<form action="<?=base_url('home/prosesadd')?>" method="post">
							<div class="row">
								<div class="col-md-6">
									<div class="main-card mb-3 card">
										<div class="card-body">
											<h5 class="card-title">Data Pribadi</h5>
											<div class="position-relative form-group">
												<label class="">Nama</label>
												<input name="nama" type="text" placeholder="Ex : Sutoyo"
													class="form-control" required="required">
											</div>
											<div class="position-relative form-group">
												<label class="">Gelar</label>
												<input name="gelar" type="text" placeholder="Ex : S. Kom"
													class="form-control" required="required">
											</div>
											<div class="position-relative form-group">
												<label class="">NIK</label>
												<input name="nik" type="number" placeholder="Ex : 3456789098765432"
													class="form-control" required="required">
											</div>
											<div class="position-relative form-group">
												<label class="">NUPTK</label>
												<input name="nuptk" type="text" placeholder="Ex : 7054762664300060"
													class="form-control" required="required">
											</div>
											<div class="position-relative form-group">
												<label class="">Jenis Kelamin</label>
												<select name="j_kel" class="form-control" required="required">
													<option value="L">Laki-laki</option>
													<option value="P">Perempuan</option>
												</select>
											</div>
											<div class="position-relative form-group">
												<label class="">Tempat Lahir</label>
												<input name="tmp_lahir" type="text" placeholder="Ex : Rembang"
													class="form-control" required="required">
											</div>
											<div class="position-relative form-group">
												<label class="">Tgl Lahir</label>
												<input name="tgl_lahir" type="date" class="form-control"
													required="required">
											</div>
											<div class="position-relative form-group">
												<label class="">No Telepon</label>
												<input name="no_hp" type="number" placeholder="Ex : 09875434653345"
													class="form-control" required="required">
											</div>
										</div>
									</div>
									<div class="main-card mb-3 card">
										<div class="card-body">
											<h5 class="card-title">Unit Kerja/Tempat Tugas</h5>
											<div class="position-relative form-group">
												<label class="">Status Tugas</label>
												<input name="status_tgs" type="text" placeholder="Ex : Induk"
													class="form-control" required="required">
											</div>
											<div class="position-relative form-group">
												<label class="">Jenjang</label>
												<input name="jenjang" type="text" placeholder="Ex : SD"
													class="form-control" required="required">
											</div>
											<div class="position-relative form-group">
												<label class="">Tempat Tugas</label>
												<input name="tempat_tgs" type="text" placeholder="Ex :  SMP Salafiyah"
													class="form-control" required="required">
											</div>
											<div class="position-relative form-group">
												<label class="">NPSN</label>
												<input name="npsn" type="text" placeholder="Ex : 20331678"
													class="form-control" required="required">
											</div>
											<div class="position-relative form-group">
												<label class="">Kecamatan</label>
												<input name="kecamatan" type="text" placeholder="Ex : Bendan"
													class="form-control" required="required">
											</div>
											<div class="position-relative form-group">
												<label class="">Kabupaten</label>
												<input name="kabupaten" type="text" placeholder="Ex : Pekalongan"
													class="form-control" required="required">
											</div>
										</div>
									</div>
									<div class="main-card mb-3 card">
										<div class="card-body">
											<h5 class="card-title">Kepegawaian</h5>
											<div class="position-relative form-group">
												<label class="">Jenis PTK</label>
												<input name="jenis_ptk" type="text" placeholder="Ex : Pendidik/Guru"
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
												<input name="mapel_ajar" type="text" placeholder="Ex : Bahasa Indonesia"
													class="form-control" required="required">
											</div>
											<div class="position-relative form-group">
												<label class="">Jam Ajar Perminggu</label>
												<input name="jam_ajarminggu" type="text" placeholder="Ex : 20"
													class="form-control" required="required">
											</div>
											<div class="position-relative form-group">
												<label class="">Kepsek</label>
												<select name="kepsek" class="form-control">
													<option value="TIDAK">TIDAK</option>
													<option value="YA">YA</option>
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
												<input name="nip" type="text" placeholder="Ex : 201401012010011003"
													class="form-control" required="required">
											</div>
											<div class="position-relative form-group">
												<label class="">SK CPNS</label>
												<input name="sk_cpns" type="text"
													placeholder="Ex : 856/I03.03.1/KP/2000" class="form-control"
													required="required">
											</div>
											<div class="position-relative form-group">
												<label class="">Tgl CPNS</label>
												<input name="tgl_cpns" type="date" class="form-control"
													required="required">
											</div>
											<div class="position-relative form-group">
												<label class="">SK Pengangkatan</label>
												<input name="sk_pengangkatan" type="text"
													placeholder="Ex : 856/I03.03.1/KP/2000" class="form-control"
													required="required">
											</div>
											<div class="position-relative form-group">
												<label class="">TMT Pengangkatan</label>
												<input name="tmt_pengangkatan" type="date" class="form-control"
													required="required">
											</div>
											<div class="position-relative form-group">
												<label class="">Golongan</label>
												<input name="golongan" type="text" placeholder="Ex : IV B"
													class="form-control" required="required">
											</div>
											<div class="position-relative form-group">
												<label class="">TMT Golongan</label>
												<input name="tmt_gol" type="date" class="form-control"
													required="required">
											</div>
											<div class="position-relative form-group">
												<label class="">Masa Kerja (Tahun)</label>
												<input name="masa_kerjatahun" type="text" placeholder="Ex : 20"
													class="form-control" required="required">
											</div>
											<div class="position-relative form-group">
												<label class="">Masa Kerja (Bulan)</label>
												<input name="masa_kerjabulan" type="text" placeholder="Ex : 20"
													class="form-control" required="required">
											</div>
										</div>
									</div>
									<div class="main-card mb-3 card">
										<div class="card-body">
											<h5 class="card-title">Kualifikasi Pendidikan Terakhir</h5>
											<div class="position-relative form-group">
												<label class="">Pendidikan</label>
												<input name="pendidikan" type="text" placeholder="Ex : S1"
													class="form-control" required="required">
											</div>
											<div class="position-relative form-group">
												<label class="">Bidang Studi Pendidikan Terakhir</label>
												<input name="b_studipend" type="text"
													placeholder="Ex : Teknik Informatika" class="form-control"
													required="required">
											</div>
										</div>
									</div>
									<div class="main-card mb-3 card">
										<div class="card-body">
											<h5 class="card-title">Data Sertifikasi</h5>
											<div class="position-relative form-group">
												<label class="">Bidang Studi Sertifikasi</label>
												<input name="b_studisertifikasi" type="text"
													placeholder="Ex : Bahasa Indonesia" class="form-control"
													required="required">
											</div>
										</div>
									</div>
									<button type="submit" class="btn btn-primary pull-right">Tambah</button>
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
