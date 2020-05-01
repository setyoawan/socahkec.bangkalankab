 

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


          <div class="row">
            <div class="col-lg-8">
              
              <?= form_open_multipart('admin/edit'); ?>
              <?php echo $this->session->flashdata('message') ?>

              <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="email" id="email" value="<?= $user['email']; ?>" readonly>
                  
                </div>
              </div>

              <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                  <input type="text" autocomplete="off" class="form-control" name="name" id="name" value="<?= $user['nama']; ?>">
                  <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                  
                </div>
              </div>

              <div class="form-group row">
                <div class="col-sm-2">Foto</div>
                <div class="col-sm-10">
                  <div class="row">
                    <div class="col-sm-3">
                      <img src="<?= base_url('assets/img/profile/') . $user['foto'] ?>" class="img-thumbnail">
                    </div>

                    <div class="col-sm-9">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image" id="image">
                        <label class="custom-file-label" for="image">Choose file</label>
                        
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>



              <div class="form-group row justify-content-end">
                
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary">Edit</button>
                  
                </div>
              </div>
                
                
              </form>
              
            </div>

          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
