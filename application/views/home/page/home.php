<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="overview-wrap">
				<h2 class="title-1">Dashboard</h2>
			</div>
		</div>
	</div>
	<div class="row m-t-25">
		<div class="col-sm-6 col-lg-3">
			<div class="overview-item overview-item--c1">
				<div class="overview__inner">
					<div class="overview-box clearfix">
						<div class="icon">
							<i class="zmdi zmdi-account-o"></i>
						</div>
						<div class="text">
							<h2><?=$pns?></h2>
							<span>PNS</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-lg-3">
			<div class="overview-item overview-item--c2">
				<div class="overview__inner">
					<div class="overview-box clearfix">
						<div class="icon">
							<i class="zmdi zmdi-account-o"></i>
						</div>
						<div class="text">
							<h2><?=$gty?></h2>
							<span>GTY/PTY</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-lg-3">
			<div class="overview-item overview-item--c3">
				<div class="overview__inner">
					<div class="overview-box clearfix">
						<div class="icon">
							<i class="zmdi zmdi-account-o"></i>
						</div>
						<div class="text">
							<h2><?=$honorer?></h2>
							<span>Guru Honorer</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-lg-3">
			<div class="overview-item overview-item--c4">
				<div class="overview__inner">
					<div class="overview-box clearfix">
						<div class="icon">
							<i class="zmdi zmdi-account-o"></i>
						</div>
						<div class="text">
							<h2><?=$cpns?></h2>
							<span>CPNS</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- aaaa -->
	<div class="col-lg-6">
		<div class="au-card m-b-30">
			<div class="au-card-inner">
				<h3 class="title-2 m-b-40">Total Data Pegawai</h3>
				<canvas id="chart"></canvas>
			</div>
		</div>
	</div>
	<!-- aaaa -->

	<div class="row">
		<div class="col-md-12">
			<div class="copyright">
				<p>Copyright © 2020 Pekalongan. All rights reserved. by <a href="#">AdminPTK</a>.
				</p>
			</div>
		</div>
	</div>
</div>

<script src="<?=base_url()?>asset/vendor/chartjs/Chart.bundle.min.js"></script>
<script type="text/javascript">

	var ctx = document.getElementById("chart");
	if (ctx) {
		ctx.height = 150;
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["PNS", "GTY/PTY", "Honorer", "CPNS"],
				datasets: [{
					label: "Pegawai",
					data: [<?=$pns?>, <?=$gty?>, <?=$honorer?>, <?=$cpns?>],
					borderColor: "rgba(0, 123, 255, 0.9)",
					borderWidth: "0",
					backgroundColor: "rgba(0, 123, 255, 0.5)"
				}]
			},
			options: {
				legend: {
					position: 'top',
					labels: {
						fontFamily: 'Poppins'
					}

				},
				scales: {
					xAxes: [{
						ticks: {
							fontFamily: "Poppins"

						}
					}],
					yAxes: [{
						ticks: {
							beginAtZero: true,
							fontFamily: "Poppins"
						}
					}]
				}
			}
		});
	}

</script>
