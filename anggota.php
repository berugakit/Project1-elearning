<?php include 'base.php' ?>


<?php startblock('conten') ?>

<?php
include_once('koneksi.php');
$result = mysqli_query($mysql, "SELECT * FROM user");
?>
  <!-- Page Heading -->
 

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Anggota LPTI</h6>
              <a  href="add.php" class="mt-3 btn btn-primary">Tambah Data</a>
            </div>
            <div class="card-body">
            
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                    <th>#</th>
                      <th>Nama</th>
                      <th>alamat</th>
                      <th>Nomor</th>
                    
                      <th>Aksi</th>
                    </tr>
                  </thead>
                 
                  <tbody>
                  <?php
        $no = 1;
        foreach($result as $user):?>
                    <tr>
                    <td><?= $no++ ;?></td>
                    <td><?= $user['nama'];?></td>
                    <td><?= $user['alamat'];?></td>
                    <td><?= $user['nomer_hp'];?></td>
                    <td><a  class="btn btn-primary" href="">edit</a><a class="btn btn-danger" href="">delete</a></td>
                    </tr>

        <?php endforeach;?>
    
                  </tbody>
                </table>
              </div>
            </div>
          </div>


          <?php endblock() ?>


            
  <?php startblock('js') ?>
  <!-- Page level plugins -->
  <script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="assets/js/demo/datatables-demo.js"></script>

<?php endblock(); ?>