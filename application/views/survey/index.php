<div class="row">
	<div class="col-md-offset-1 col-md-10">
		<form method="post" action="#">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>Aspek yang dinilai</th>
						<th colspan="5">Nilai</th>
					</tr>
					<tr>
						<th colspan="2">A. Kategori Survey</th>
						<?php for($i=1;$i<6;$i++) echo "<th style='text-align:center'>$i</th>" ?>
					</tr>
				</thead>
				<tbody>
					<?php $i=1; foreach($soal as $s): ?>
					<tr>
						<th><?=$i?></th>
						<td>
							<?=$s->uraian?>
							<input type="hidden" name="soal-<?=$i?>" value="<?=$s->id?>">	
						</td>
						<?php for($j=1;$j<6;$j++) echo "<td align='center'><input type='radio' name='hasil-".$i."' value='".$j."'></td>" ?>
					</tr>
					<?php $i++; endforeach; ?>
				</tbody>
			</table>
			<button type="submit" class="btn btn-info">Kirim</button>
		</form>
	</div>
</div>