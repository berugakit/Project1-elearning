<?php
include_once('koneksi.php');
$result = mysqli_query($mysql, "SELECT * FROM user");
?>

<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:index.php?pesan=belum_login");
	}
	?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $nama?></title>
</head>
<body>
<a href="aksi/logout.php">LOGOUT</a>
<h4>Selamat datang, <?php echo $_SESSION['username']; ?>! anda telah login.</h4>
    <a href=""></a>
    <table width='80%' border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>alamat</th>
            <th>nomor</th>
            <th>action</th>
        </tr>

        <?php
        $no = 1;
        while($user = mysqli_fetch_array($result)){?>
                    <tr>
                    <th><?= $no++ ;?></th>
                    <th><?= $user['nama'];?></th>
                    <th><?= $user['alamat'];?></th>
                    <th><?= $user['nomer_hp'];?></th>
                    <th><a href="">edit</a><a href="">delete</a></th>
                    </tr>
        <?php }?>
    
    
    
    </table>
</body>
</html>