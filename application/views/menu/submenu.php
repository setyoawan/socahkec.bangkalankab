 

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
         

          <div class="row">
            <div class="col-lg">
            <!--error-->
            <?php if (validation_errors()) : ?>
            <div class="alert alert-danger" role="alert"> 
            <?= validation_errors(); ?>
            </div> 
            <?php endif; ?>
            <!--berhasil-->
            <?= $this->session->flashdata('message'); ?>
            <!--
            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#NewSubMenuModal">Add New submenu</a>
        -->
                <table class="table table-hover">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Sub Menu</th>
                    <th scope="col">Menu</th>
                    <th scope="col">Url</th>
                    <th scope="col">Icon</th>
                    <th scope="col">Active</th>
                    <th scope="col">Action</th>
                    
                </tr>
                </thead>
                <tbody>
                <?php $i = 1; ?>
                <?php foreach ($subMenu as $sm) : ?> 
                <tr>
                    <th scope="row"><?= $i; ?></th>
                    <td><?php echo $sm["title"]; ?></td>
                    <td><?php echo $sm["menu_id"]; ?></td>
                    <td><?php echo $sm["url"]; ?></td>
                    <td><?php echo $sm["icon"]; ?></td>
                    <td><?php echo $sm["is_active"]; ?></td>
                   
                    <td>
                        <a href="<?= base_url(); ?>menu/edit/<?= $sm['id']; ?>" class="badge badge-success">Edit</a> 
                    </td>
                </tr>
                <?php $i++; ?>
		        <?php endforeach; ?>
                </tbody>
            </table>

            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!--MODAL-->

      <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="NewSubMenuModal" tabindex="-1" role="dialog" aria-labelledby="NewSubMenuModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="NewSubMenuModalLabel">Add New Sub Menu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('menu/submenu') ?>" method="post">
      <div class="modal-body">
        <div class="form-group">
            <input type="text" class="form-control" id="title" name="title" placeholder="submenu title">
        </div>

        <div class="form-group">
            <select name="menu_id" id ="menu_id" class="form-control"> 
            <option value="">Select Menu</option>
            <?php foreach ($menu as $m) : ?>
            <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
            <?php endforeach; ?> 
            </select>
        
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="url" name="url" placeholder="submenu url">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="icon" name="icon" placeholder="submenu icon">
        </div>
        <div class="form-group">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" value="1" class="custom-control-input" id="is_active" name="is_active" checked>
                <label class="custom-control-label" for="is_active">Active?</label>
            </div>
        </div>

        ...
      </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Add</Address></button>
            </div>
      </form>
    </div>
  </div>
</div>
