 

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
         

          <div class="row">
            <div class="col-lg-4">
            <!--error-->
            <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
            <!--berhasil-->
            <?= $this->session->flashdata('message'); ?>
            <!--
            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#NewMenuModal">Add New Menu</a>
          -->
                <table class="table table-hover">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Menu</th>
                    <!--<th scope="col">Aksi</th>-->
                    
                </tr>
                </thead>
                <tbody>
                <?php $i = 1; ?>
                <?php foreach ($menu as $m) : ?> 
                <tr>
                    <th scope="row"><?= $i; ?></th>
                    <td><?php echo $m["menu"]; ?></td>
                   
                    <!--
                    <td>
                     CARA PAK DIKA NGOBAR=========================================================================
                    <a href="<?= base_url(); ?>menu/m_edit/<?= $m['id']; ?>" class="badge badge-success">Edit</a> 
				             CARA PAK DIKA NGOBAR=========================================================================
                    </td>
                    -->
                  
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
<div class="modal fade" id="NewMenuModal" tabindex="-1" role="dialog" aria-labelledby="NewMenuModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="NewMenuModalLabel">Add New Menu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('menu') ?>" method="post">
      <div class="modal-body">
        <div class="form-group">
            
            <input type="text" class="form-control" id="menu" name="menu" placeholder="Menu name">
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
