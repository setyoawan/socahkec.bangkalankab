

    

    

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
          <div class="row">
            <div class="col-lg-6">
              <?= $this->session->flashdata('message'); ?>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="<?= base_url('assets/img/profile/') . $user['foto']; ?>" >
            <div class="card-body">
              <h5 class="card-title"><?= $user['nama']; ?></h5>
              <p class="card-text"><?= $user['email']; ?></p>
              <p class="card-text"><small class="text-muted">Terdaftar sejak <?= date('d F Y', $user['date_created']); ?></small></p>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      