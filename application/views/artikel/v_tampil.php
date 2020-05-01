


        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tables</h1>
          
          <!--<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>-->
            
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tabel Data Artikel</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Judul</th>
                      <th>isi Artikel</th>
                      <th>Tanggal pembuatan</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                
                    
                    <?php
                    $no = 1;

                    foreach ($artikel as $u) :
                    ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo substr($u->judul_artikel, 0, 30); ?></td>
                        <td><p align="justify" ><?php echo substr($u->isi_artikel, 0, 50); ?></td>

                        <td><?php echo $u->tgl_artikel ?></td>
                        <td>
                            <?php echo anchor('crud/edit/' . $u->id, 'Edit'); ?> |
                            <?php echo anchor('crud/hapus/' . $u->id, 'Hapus'); ?>
                        </td>
                    </tr>
        
                    <?php endforeach; ?>
                    
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
