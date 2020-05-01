 

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

          <div class="row">

        <!--Card Example mmengambil function index di controller ADMIN -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary border-bottom-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Data Artikel</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $total_artikel; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="far fa-newspaper fa-2x text-gray-300"></i>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success border-bottom-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Data Kegiatan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $total_kegiatan; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-newspaper fa-2x text-gray-300"></i>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info border-bottom-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Data gambar</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $total_gambar; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-images fa-2x text-gray-300"></i>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


          <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Log Aktivitas</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Time</th>
                            <th>User</th>
                            <th>Deskripsi</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($log as $l) {
                            ?>
                            <tr>

                                <td><?php echo $l->log_time ?></td>
                                <td><?php echo $l->log_user ?></td>
                                <td><?php echo $l->log_desc ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      
