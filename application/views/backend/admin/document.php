<div class="section-body">
            <div class="row">
              <div class="col-12">
              <div class="card">
                  <div class="card-header">
                    <h4>Data Document</h4>
                  </div>
                  <form action="<?= base_url('admin/update_document') ?>" method="post">
                    <div class="card-body">
                      <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Link Petunjuk Pelaksana</label>
                        <div class="col-sm-12 col-md-7">
                          <input type="text" class="form-control" name="juklak" value="<?= $doc['juklak'] ?>">
                        </div>
                      </div>
                      <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Link Petunjuk Teknis</label>
                        <div class="col-sm-12 col-md-7">
                          <input type="text" class="form-control" name="juknis" value="<?= $doc['juknis'] ?>">
                        </div>
                      </div>
                      <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Link Jadwal Kegiatan</label>
                        <div class="col-sm-12 col-md-7">
                          <input type="text" class="form-control" name="jadwal" value="<?= $doc['jadwal'] ?>">
                        </div>
                      </div>
                      <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                          <button class="btn btn-primary">Update</button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>