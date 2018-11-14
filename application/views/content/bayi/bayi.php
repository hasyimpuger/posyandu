<div class="panel panel-headline">
	<div class="panel-heading">
		<h3 class="panel-title">Data Anak</h3>
	</div>
	<div class="panel-body">
		<a href="<?php echo site_url('bayi/tambah_data_bayi') ?>" title="" class="btn btn-primary">Tambah Data Balita/Bayi</a>
		<hr>
		<?php if($this->session->flashdata('alert')) { ?>
			<div class="alert alert-success alert-dismissable">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<?php echo $this->session->flashdata('alert'); ?>
			</div>
		<?php } ?>
		<table class="table table-responsive table-striped table-hover table-bordered" id="mytable">
			<thead>
				<tr>
					<th>Nama Balita/Bayi</th>
					<th>Nama Ayah</th>
					<th width="25%">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($bayi as $b): ?>
					<tr>
						<td><?php echo $b->nama_bayi ?></td>
						<td><?php echo $b->nama_ayah ?></td>
						<td>
							<div class="btn-group">
								<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#detail-<?php echo $b->id_bayi;  ?>">Detail</button>
								<div id="detail-<?php echo $b->id_bayi; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="editLabel-<?php echo $b->id_bayi; ?>" aria-hidden="true">
									<div class="modal-dialog">

										<!-- Modal content-->
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4 class="modal-title" id="editLabel-<?php echo $b->id_bayi ?>">Detail <?php echo $b->nama_bayi; ?></h4>
											</div>
											<div class="modal-body">
												<table class="table table-bordered">
													<tr>
														<td><label>Nama Bayi</label></td>
														<td><?php echo $b->nama_bayi; ?></td>
													</tr>
													<tr>
														<td><label>Tanggal Lahir</label></td>
														<td><?php echo $b->tanggal_lahir; ?></td>
													</tr>
													<tr>
														<td><label>Jenis Kelamin</label></td>
														<td><?php echo $b->jenis_kelamin; ?></td>
													</tr>
													<tr>
														<td><label>Nama Ayah</label></td>
														<td><?php echo $b->nama_ayah; ?></td>
													</tr>
													<tr>
														<td><label>Nama Ibu</label></td>
														<td><?php echo $b->nama_ibu; ?></td>
													</tr>
													<tr>
														<td><label>Foto</label></td>
														<td><img src="<?php echo base_url('assets/foto/').$b->foto_bayi; ?>" width="100" height="160" class="img-thumbnail"></td>
													</tr>
												</table>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											</div>
										</div>

									</div>
								</div>
								<a href="<?php echo base_url('bayi/edit_data_bayi/').$b->id_bayi ?>" title="" class="btn btn-sm btn-warning">Edit</a>
								<a href="<?php echo base_url('bayi/hapus_data_bayi/').$b->id_bayi ?>" title="" class="btn btn-sm btn-danger">Hapus</a>
							</div>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>

