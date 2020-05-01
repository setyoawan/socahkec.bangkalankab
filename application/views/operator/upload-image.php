
 

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

          Upload foto Kegiatan
          <hr class="sidebar-divider d-none d-md-block mt-0">
          <div class="row">
            <div class="col-lg-8">
              <?php echo $this->session->flashdata('message') ?>
              <?= form_open_multipart('operator/uploadgaleri'); ?>

              <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Judul</label>
                <div class="col-sm-10">
                  <input type="text" autocomplete="off" class="form-control" id="judul" name="judul" required>
                  
                </div>
              </div>



              <div class="form-group row">
                <div class="col-sm-2">Foto</div>
                <div class="col-sm-10">
                  <div class="row">
                    <div class="col-sm-10">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="gambar" name="gambar">
                        <label class="custom-file-label" for="gambar">Choose file</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>



              <div class="form-group row justify-content-end">
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary">Upload</button>
                </div>
              </div>
                
                
              </form>
              
            </div>

          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
