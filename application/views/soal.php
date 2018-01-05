
	<div class="col-md-12">
		<div><h3 class="title">Data soal</h3></div>
		<hr class="bg-info">
		<table class="table table-striped">
			<thead>
				<tr>
					<th>No</th>
					<th>Uraian</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			<?php $i=1; foreach($soal as $s): ?>
				<tr>
					<td><?=$i++?></td>
					<td><?=$s->uraian?></td>
					<td>
						<a href="<?=base_url('index.php/home/edit')?>" class="btn btn-xs btn-primary">Edit</a>
						<a href="<?=base_url('index.php/home/delete/'.$s->id)?>" class="btn btn-xs btn-warning">Delete</a>
					</td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
		<a href="<?=base_url('index.php/home/add_soal')?>" class="btn btn-info">Tambah soal</a>
	</div>
	<!-- Modal -->