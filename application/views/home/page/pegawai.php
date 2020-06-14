<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="overview-wrap">
				<h2 class="title-1"><i class="fas fa-user"></i> Data Pegawai</h2>
			</div><br>
		</div>
	</div>
	<div class="row py-3">
		<div class="col-lg-12">
			<form class="form-header float-right" action="<?=base_url('home/pegawai')?>" method="POST">
				<input class="au-input au-input--xl" type="text" name="cari" placeholder="Cari berdasarkan nama" />
				<button class="au-btn--submit" type="submit">
					<i class="zmdi zmdi-search"></i>
				</button>
			</form>
		</div>
	</div>
	<table class="table table-striped" id="example">
		<thead class="thead-dark">
			<tr>
				<th scope="col">#</th>
				<th scope="col">NIK</th>
				<th scope="col">Nama</th>
				<th scope="col">No Telepon</th>
				<th scope="col">Alamat</th>
				<th scope="col">Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php
            $no=1+$this->uri->segment(3);
            foreach($pegawai as $m => $data){
        ?>
			<tr>
				<th scope="row"><?=$no++?></th>
				<td><?=$data->nik;?></td>
				<td><?=$data->nama?></td>
				<td><?=$data->no_hp?></td>
				<td><?=$data->kecamatan?></td>
				<td>
					<a href="<?=base_url('home/pageedit/'.$data->nik)?>"><button class="btn btn-primary btn-sm"><i
								class="fas fa-edit"></i></button></a>
					<a href="<?=base_url('home/detail/'.$data->nik)?>" class="btn btn-success btn-sm"><i
							class="fas fa-eye"></i></a>
					<button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus<?=$data->nik?>"><i
							class="fas fa-trash-alt"></i></button></a>

				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table><br>
	<!-- pagination start -->

	<?=$this->pagination->create_links();?>

	<!-- pagination end -->

	<div class="row">
		<div class="col-md-12">
			<div class="copyright">
				<p>Copyright © 2020 Pekalongan. All rights reserved. by <a href="#">AdminPTK</a>.</p>
			</div>
		</div>
	</div>
</div>
