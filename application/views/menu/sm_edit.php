
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
            <h4>Halaman edit data menu!</h4>
            </div>
        </div>

    <div class="row">
        <div class="col">
            
            <form action="<?= base_url('menu/update'); ?>" method="post">

            <input type="hidden" name="id" value="<?= $submenu['id']; ?>">

            <label for="title">Judul </label>
            <input class="form-control" type="text" name="title" id="title" required="required" readonly="readonly" value="<?php echo $submenu['title']; ?>"> 
            <br>


            <label for="menu_id">Menu id </label>
            <select class="form-control" id="menu_id" name="menu_id">
                    <option value="<?php echo $submenu["menu_id"]; ?>" ><?php echo $submenu["menu_id"]; ?></option>
                    <option value="1" > admin </option>
                    <option value="2" > operator </option>
                    <option value="3" > menu </option>
            </select>


            <label for="url">url </label>
            <input class="form-control" type="text" name="url" id="url" required="required" readonly="readonly" value="<?php echo $submenu['url']; ?>"> 
            <br>

            <label for="icon">icon </label>
            <input class="form-control" type="text" name="icon" id="icon" required="required" value="<?php echo $submenu['icon']; ?>"> 
            <br>

            <label for="is_active">is active </label>
            <input class="form-control" type="text" name="is_active" id="is_active" readonly="readonly" value="<?php echo $submenu['is_active']; ?>"> 
            <br>

            

        </div><!--tutup COL-->
    </div><!--tutup row-->
        
    <div class="row mt-2">

        

        <div class="col">
        <button class="btn btn-primary   float-right" type="submit" name="submit">edit data</button>
        </div>

    </div>

    

    </form>
    


</div><!--TUTUP CONTAINER-->




    
</body>


</html>