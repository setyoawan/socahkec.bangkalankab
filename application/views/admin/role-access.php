 

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
         

          <div class="row">
            <div class="col-lg">
            <!--error-->
           
            <!--berhasil-->
            <?= $this->session->flashdata('message'); ?>
            <h5>Role: <?= $role['role']; ?></h5>

            
                <table class="table table-hover">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Menu</th>
                    <th scope="col">Access</th>
                    
                </tr>
                </thead>
                <tbody>
                <?php $i = 1; ?>
                <?php foreach ($menu as $m) : ?> 
                <tr>
                    <th scope="row"><?= $i; ?></th>
                    <td><?php echo $m["menu"]; ?></td>
                   
                    <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="" <?= check_access($role['id'], $m['id']); ?>data-role="<?= $role['id']; ?>" data-menu="<?= $m['id']; ?>">
                      
                    </div>
                      
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


