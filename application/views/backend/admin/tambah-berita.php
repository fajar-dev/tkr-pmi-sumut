<div class="section-body">
<div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Berita Baru</h4>
                  </div>
                  <div class="card-body">
                  <?php echo form_open_multipart('admin/add_berita');?>
                  <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Foto</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="file" name="foto" class="form-control" required>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">judul</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="judul" class="form-control" required>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">isi</label>
                      <div class="col-sm-12 col-md-7">
                        <textarea name="isi" class="summernote" required></textarea>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button class="btn btn-primary">Publish</button>
                      </div>
                    </div>
                  </div>
                  <?php echo form_close(); ?>   
                </div>
              </div>
            </div>
</div>