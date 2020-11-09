

<?php include 'base.php' ?>
<?php startblock('conten') ?>    
          <!-- Content Row -->
          <div class="row">
            <div class="col-lg-12 mb-4">
              <!-- Illustrations -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Informasi akun</h6>
                </div>
                <div class="card-body">
                  <div class="text-center">
                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="assets/img/undraw_posting_photo.svg" alt="">
                  </div>
                  <h4 style="text-align: center;">Selamat datang, <?php echo $_SESSION['username']; ?>! anda telah login.</h4>
                </div>
              </div>
              <!-- Approach -->
            </div>
          </div>
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Anggota LPTI</h6>
              <a  href="add.php" class="mt-3 btn btn-primary">Tambah Data</a>
            </div>
            <div class="card-body">
            <?php
            include_once('koneksi.php');
            $result = mysqli_query($mysql, "SELECT * FROM proggram WHERE katagori='HTML'");
            ?>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                    <th>#</th>
                      <th>List</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                 $no = 1;
                  foreach($result as $user):?>
                    <tr>
                    <td><?= $no++ ;?></td>
                    <td><?= $user['Judul'];?></td>
                    <td><a  class="btn btn-primary" href="show.php?id=<?= $user['id_video']?>">BELAJAR</a></td>
                    </tr>
                  <?php endforeach;?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
<?php endblock() ?>