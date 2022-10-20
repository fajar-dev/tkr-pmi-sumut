<div class="section-body">

<div class="row justify-content-center">
              <?php if($user['id_markas']==12){?>
                <div class="col-lg-4">
                <div class="card">
                  <div class="card-body">
                    <form action="<?= base_url('user/csv') ?>" method="post">
                      <div class="form-group">
                        <label>Markas</label>
                        <select class="form-control select2" name="markas">
                          <option selected disabled>-- Pilih Markas --</option>
                          <?php foreach ($markas as $data) { ?>
                          <option value="<?= $data->name ?>"><?= $data->name ?></option>
                          <?php } ?>
                        </select>
                        <div class="text-right">
                          <button class="btn btn-success mt-2" type="submit"><i class="fas fa-file-csv"></i> Export CSV</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <?php } ?>  
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Data Peserta</h4>
                    <div class="card-header-action">
                    <a href="#" class="btn btn-dark" data-toggle="modal" data-target="#peserta"><i class="fas fa-plus"></i> Tambah Peserta</a>
                  </div>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th class="text-center">
                              #
                            </th>
                            <th>Foto</th>
                            <th>Nama</th>
                            <th>Jenjang</th>
                            <th>Markas</th>
                            <th>ID Card</th>
                            <th>Hapus</th>
                          </tr>
                        </thead>
                        <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($peserta as $data) { ?>
                                        <tr>
                                            <td><?= $i++ ?></td>
                                            <td><img src="<?= base_url('file/'.$data->foto)?>" width="100" class="img-fluid" alt=""></td>
                                            <td><?php echo htmlentities($data->nama, ENT_QUOTES, 'UTF-8');?></td>
                                            <td><?php echo htmlentities($data->jenjang, ENT_QUOTES, 'UTF-8');?></td>
                                            <td><?php echo htmlentities($data->name, ENT_QUOTES, 'UTF-8');?></td>
                                            <td><a href="" class="btn btn-light" ><i class="fas fa-user"></i> ID Card</a></td>
                                            <td><a href="<?= base_url('user/hapus_peserta/'.$data->id_peserta) ?>" onclick="confirm('kamu yakin ingin menghapus peserta?')" class="btn btn-icon btn-danger"><i class="fas fa-times"></i></a></td>
                                        </tr>
                                        <?php } ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
</div>

