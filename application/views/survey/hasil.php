<div class="row">
	<div class="col-md-offset-2 col-md-8">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>Hasil Survey</h4>
			</div>
			<div class="panel-body">
				<table class="table table-striped">
					<tr>
						<td>Jumlah Partisipan:</td>
						<td><?=$result->partisipan?></td>
					</tr>
					<tr>
						<td>Total Bobot:</td>
						<td><?=$result->total_bobot?></td>
					</tr>
					<tr>
						<td>Jumlah soal:</td>
						<td><?=$jml_soal?></td>
					</tr>
					<tr>
						<td><h5><b>Hasil Total (total bobot/soal)</b></h5></td>
						<td><h5><b><?=number_format($result->total_bobot/$jml_soal,2)?></b></h5></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>