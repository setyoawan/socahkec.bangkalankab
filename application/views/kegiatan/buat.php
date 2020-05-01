

<!DOCTYPE html>
<html>
<head>
	<title><?= $title; ?></title>
	
</head>
<body>


<div class="container bg-light pb-4">
	<div class="row">
		<div class="col">
		<h4>Form untuk memposting Kegiatan</h4>
		</div>
	</div>
	<div class="row">
	
	<div class="col">

		<?= form_open_multipart('crud2/tambah_aksi'); ?>
	            <div class="form-group">
	                <label for="gambar">Gambar</label>
	                
	                    <div class="row">
	                        
	                        <div class="col">
	                            <div class="custom-file">
	                                <input type="file" class="custom-file-input" id="gambar" name="gambar">
	                                <label class="custom-file-label" for="gambar">Choose file</label>
	                            </div>
	                        </div>
	                    </div>
	             
	            </div>
		<form method="post" action="">
			<label for="judul_kegiatan">Judul Kegiatan</label>
			<input class="form-control" type="text" name="judul_kegiatan" required="required" id="judul_kegiatan"><br>
			
			<label for="isi_kegiatan">Isi Kegiatan</label> 
			<textarea class="form-control" name="isi_kegiatan" required="required" id="isi_kegiatan" style="height: 315px;"></textarea><br>
			
			<button class="btn btn-primary  float-right" name="submit" type="submit">Buat</button>

		</form>
	</div>

	</div>
</div>




</body>

<script>
    //Replace the <textarea id="editor1"> with a CKEditor
    //instance, using default configuration.
    CKEDITOR.replace('isi_kegiatan');
</script>
</html>



