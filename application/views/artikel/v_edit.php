
<!DOCTYPE html>
<html>
<head>
    <title>edit data</title>
    <link rel="stylesheet" type="text/css" href="../cssb/bootstrap.min.css">
</head>
<body>

<div class="container bg-light pb-4">
        <div class="row">
            <div class="col">
            <h4>Halaman edit data artikel!</h4>
            </div>
        </div>

    <div class="row">
        <div class="col">
            <?php foreach ($artikel as $u) : ?>
            <form action="<?php echo base_url() . 'crud/update'; ?>" method="post">

            <input type="hidden" name="id" value="<?php echo $u->id ?>">

            <label for="judul">Judul </label>
            <input class="form-control" type="text" name="judul_artikel" id="judul" required="required" value="<?php echo $u->judul_artikel ?>"> 
            <br>
            
            <label for="isi artikel">isi artikel </label>
            <textarea class="form-control" type="text" name="isi_artikel" id="isi artikel" style="height: 400px;"><?php echo $u->isi_artikel  ?></textarea>
            <br>

            

        </div><!--tutup COL-->
    </div><!--tutup row-->
        
    <div class="row mt-2">

        

        <div class="col">
        <button class="btn btn-primary   float-right" type="submit" name="submit">edit data</button>
        </div>

    </div>

    

    </form>
    <?php endforeach; ?>


</div><!--TUTUP CONTAINER-->




    
</body>
<script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('isi_artikel');
</script>
</html>