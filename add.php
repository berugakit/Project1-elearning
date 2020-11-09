
<html>
<head>
    <title>Add Users</title>
</head>

<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>

    <form action="add.php" method="post" name="form1">
       
       <label for="">nama</label>
       <br>
       <input type="text" name="nama">
       <br>
       <label for="">alamat</label>
       <br>
       <input type="text" name="alamat">
       <br>
       <label for="">nomer hp</label>
       <br>
       <input type="text" name="nomer_hp">

       <br>
       <input type="submit" name="Submit" value="kirim data">
    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $nomer_hp = $_POST['nomer_hp'];
        // include database connection file
        include_once("koneksi.php");
        // Insert user data into table
        $result = mysqli_query($mysql, "INSERT INTO user(nama,alamat,nomer_hp) VALUES('$nama','$alamat','$nomer_hp')");
        // Show message when user added
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
</body>
</html>