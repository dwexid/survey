<div class="row">
	<div class="col-md-offset-1 col-md-10">
		<?php if($this->session->userdata('error') != null): ?>
			<div class="alert alert-warning"><?=$this->session->userdata('error'); $this->session->unset_userdata('error');?></div>
		<?php endif; ?>
		<form method="post" action="<?=base_url('index.php/do_survey/get_result')?>">
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
					<?php $i=0; foreach($soal as $s): ?>
					<tr>
						<th><?=$i?></th>
						<td>
							<?=$s->uraian?>
							<input type="hidden" name="survey-<?=$i?>" value="<?=$s->id?>">	
						</td>
						<?php for($j=1;$j<6;$j++) echo "<td align='center'><input type='radio' name='jwb-".$i."' value='".$j."'></td>" ?>
					</tr>
					<?php $i++; endforeach; ?>
				</tbody>
			</table>
			<input type="hidden" name="nim" value="112">
			<button type="submit" class="btn btn-info">Kirim</button>
		</form>
	</div>
</div>