<div class="col-md-12">
	<div><h3>Edit soal</h3></div>
	<hr>
	<div class="row">
		<div class="col-sm-offset-2 col-sm-8">
			<form class="form-horizontal" method="post" action="<?=base_url().'index.php/home/update/'.$res->id?>">
				<div class="form-group">
					<label class="control-label col-sm-3">Uraian 1</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="soal" value="<?=$res->uraian?>">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-3 col-sm-8">
						<input type="hidden" name="update">
						<button type="submit" class="btn btn-info">Tambahkan</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
