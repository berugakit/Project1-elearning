

<?php include 'base.php' ?>


<?php startblock('conten') ?>
<?php
            $id = $_GET['id'];
include_once('koneksi.php');
$result = mysqli_query($mysql, "SELECT * FROM proggram WHERE id_video=$id");

while($user_data = mysqli_fetch_array($result))
{
    $Judul = $user_data['Judul'];
    $link = $user_data['link_video'];
   
}
?>

            <style>
                .video-fluid {
            width: 100%;
            height: auto;
            }
            </style>
                    <!-- Content Row -->
                    <div class="row">
                        <div class="col-lg-12 mb-4">

                        <!-- Illustrations -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Informasi akun</h6>
                            </div>
                            <div class="card-body">
                            <!-- <div class="text-center">
                                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="assets/img/undraw_posting_photo.svg" alt="">
                            </div> -->
                            <h4 style="text-align: center;"><?= $Judul ?></h4>
                            <?php
                            $videolink = $link;
                            $ytarray=explode("/", $videolink);
                            $ytendstring=end($ytarray);
                            $ytendarray=explode("?v=", $ytendstring);
                            $ytendstring=end($ytendarray);
                            $ytendarray=explode("&", $ytendstring);
                            $ytcode=$ytendarray[0];
                        ?> 
                        <div class="embed-responsive embed-responsive-21by9">
            <iframe class="embed-responsive-item" src='https://www.youtube.com/embed/<?= $ytcode?>'></iframe>
            </div>
                
                </div>
              </div>

              <!-- Approach -->
           
            </div>
          </div>


         
<?php endblock() ?>