<div class="section-body">

<div class="row justify-content-center">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Data User</h4>
                    <div class="card-header-action">
                    <a href="#" class="btn btn-dark" data-toggle="modal" data-target="#user"><i class="fas fa-plus"></i> Tambah User</a>
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
                            <th>Markas</th>
                            <th>Username</th>
                            <th>date created</th>
                            <th>aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($user_list as $data) { ?>
                                        <tr>
                                            <td><?= $i++ ?></td>
                                            <td><?php echo htmlentities($data->name, ENT_QUOTES, 'UTF-8');?></td>
                                            <td><?php echo htmlentities($data->username, ENT_QUOTES, 'UTF-8');?></td>
                                            <td><?php echo htmlentities($data->log_created, ENT_QUOTES, 'UTF-8');?></td>
                                            <td>
                                              <a href="#" data-toggle="modal" data-target="#useredit<?= $data->id_user ?>"  class="btn btn-icon btn-warning"><i class="fas fa-pen"></i></a>
                                              <a href="<?= base_url('admin/hapus_user/'.$data->id_user) ?>"  class="btn btn-icon btn-danger"><i class="fas fa-times"></i></a>
                                            </td>
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

