</div>
</div>
<!-- END MAIN CONTENT-->
<!-- END PAGE CONTAINER-->
</div>

</div>

<!-- modal start -->
<?php
	$peg = $this->db->select('nik');
	$peg = $this->db->get('pegawai')->result();

	foreach($peg as $dat){
?>
<div class="modal fade" id="hapus<?=$dat->nik?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Peringatan</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				Apakah anda yakin ingin menghapus data dengan NIK <strong><?=$dat->nik?></strong>
			</div>
			<div class="modal-footer">
				<a href="<?=base_url('home/delpeg/'.$dat->nik)?>"><button type="button"
						class="btn btn-danger">Hapus</button></a>
			</div>
		</div>
	</div>
</div>
<?php } ?>
<!-- modal end -->

<!-- Jquery JS-->
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<!-- Bootstrap JS-->
<script src="<?=base_url()?>asset/vendor/bootstrap-4.1/popper.min.js"></script>
<script src="<?=base_url()?>asset/vendor/bootstrap-4.1/bootstrap.min.js"></script>
<!-- Vendor JS       -->
<script src="<?=base_url()?>asset/vendor/slick/slick.min.js">
</script>
<script src="<?=base_url()?>asset/vendor/wow/wow.min.js"></script>
<script src="<?=base_url()?>asset/vendor/animsition/animsition.min.js"></script>
<script src="<?=base_url()?>asset/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
</script>
<script src="<?=base_url()?>asset/vendor/counter-up/jquery.waypoints.min.js"></script>
<script src="<?=base_url()?>asset/vendor/counter-up/jquery.counterup.min.js">
</script>
<script src="<?=base_url()?>asset/vendor/circle-progress/circle-progress.min.js"></script>
<script src="<?=base_url()?>asset/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="<?=base_url()?>asset/vendor/select2/select2.min.js">
</script>

<!-- Main JS-->
<script src="<?=base_url()?>asset/js/main.js"></script>

<!-- Datatable -->
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script>
	$(document).ready(function () {
		$('#example').DataTable({
			"paging": false,
			"bInfo": false,
			"searching": false
		});

	});

</script>

</body>

</html>
<!-- end document-->
