</section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; PMI SUMUT 2022 <div class="bullet"></div> Develop By <a href="https://fajar-dev.my.id">fajar-dev</a>
        </div>
      </footer>
    </div>
  </div>

<!-- Modal -->
<div class="modal fade" id="setting" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Akun Setting</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="">
          <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" placeholder="Enter Username ..." value="<?= $user['username'] ?>" class="form-control">
          </div>
          <div class="form-group">
            <label>Password baru</label>
            <input type="pasword" name="username" placeholder="Enter New Password ..." class="form-control">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Simpan perubahan</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="peserta" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Peserta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo form_open_multipart('user/tambah_peserta');?>
          <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" placeholder="Nama Peserta ..."  class="form-control">
          </div>
          <div class="form-group">
            <label>Jenjang</label>
            <select class="form-control select2" name="jenjang">
              <option selected disabled>-- Pilih Jenjang --</option>
              <option value="KSR">KSR</option>
              <option value="TSR">TSR</option>
              <option value="DDS">DDS</option>
              <option value="Staff">Staff</option>
              <option value="Pengurus">Pengurus</option>
            </select>
          </div>
          <div class="form-group">
            <label>Markas</label>
            <select class="form-control select2" name="markas">
              <option selected disabled>-- Pilih Markas --</option>
              <?php foreach ($markas as $data) { ?>
              <option value="<?= $data->id ?>"><?= $data->name ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label>Foto</label>
            <input type="file" name="foto"  class="form-control">
            <small>Ekstensi yang diizinkan jpg,png. Max 2MB</small>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      <?php echo form_close(); ?>   
    </div>
  </div>
</div>

  <!-- General JS Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="<?= base_url('assets/') ?>assets/js/stisla.js"></script>

  <!-- JS Libraies -->
  <script src="<?= base_url('assets/') ?>node_modules/datatables/media/js/jquery.dataTables.min.js"></script>
  <script src="<?= base_url('assets/') ?>node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>

  <!-- Template JS File -->
  <script src="<?= base_url('assets/') ?>assets/js/scripts.js"></script>
  <script src="<?= base_url('assets/') ?>assets/js/custom.js"></script>

  <!-- Page Specific JS File -->
  <script src="<?= base_url('assets/') ?>assets/js/page/modules-datatables.js"></script>
  <script src="<?= base_url('assets/') ?>assets/js/page/forms-advanced-forms.js"></script>
    

</body>
</html>
