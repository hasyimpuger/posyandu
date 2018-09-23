<div class="panel panel-headline">
	<div class="panel-heading">
		<h3 class="panel-title">Edit Data Balita/Bayi</h3>
	</div>
	<div class="panel-body">
		<hr>
		<?php echo form_open('bayi/tambah_data_bayi/'.$bayi->id_bayi); ?>
			<div class="form-group">
				<label for="nama">Nama Bayi</label>
				<input type="text" name="nama" class="form-control" value="<?php echo $bayi->nama_bayi; ?>">
				<div style="color: red"><?php echo form_error('nama'); ?></div>
			</div>
			<div class="form-group">
				<label for="tanggal">Tanggal Lahir</label>
				<input type="text" name="tanggal" class="form-control" id="flatpickr" value="<?php echo $bayi->tanggal_lahir; ?>">
				<div style="color: red"><?php echo form_error('tanggal'); ?></div>	
			</div>
			<div class="form-group">
				<label for="ayah">Nama Ayah</label>
				<input type="text" name="ayah" class="form-control" value="<?php echo $bayi->nama_ayah; ?>">
				<div style="color: red"><?php echo form_error('ayah'); ?></div>
			</div>
			<div class="form-group">
				<label for="ibu">Nama Ibu</label>
				<input type="text" name="ibu" class="form-control" value="<?php echo $bayi->nama_ibu; ?>">
				<div style="color: red"><?php echo form_error('ibu'); ?></div>
			</div>
			<div class="form-group">
				<label for="status">Status</label>
				<select name="status" class="form-control">
					<option value="<?php echo $bayi->status ?>"><?php echo $bayi->status ?></option>
					<option value="Tidak Aktif">Tidak Aktif</option>
					<option value="Aktif">Aktif</option>
				</select>	
			</div>
			<input type="submit" name="simpan" class="btn btn-md btn-info" value="Simpan">
		<?php echo form_close(); ?>
	</div>
</div>