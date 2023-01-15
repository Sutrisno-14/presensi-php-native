<?php 
    session_start();

    //cek jika belum login, maka login dulu
    if(!isset($_SESSION['status']) || $_SESSION['status'] != "login") {
        header("location:../index.php?message=Silahkan login login terlebih dahulu");
    }
    if(isset($_POST['logout'])) {
        session_destroy();
        header("Location:../index.php?message=berhasil logout");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <div>
        <section>
            <h3>Hallo ... <?= $_SESSION['fullname']; ?></h3>
            <p>Status Pegawai : <?= $_SESSION['role']; ?></p>
            <br>
            
            <?php 
                if(isset($_GET['message'])) {
                    echo $_GET['message'];
                }
            ?>
            
            <!-- table absen -->
            <?php include("absensi.php"); ?>
            <br>
            <form action="" method="POST">
                <button type="submit" name="logout">Logout</button>
            </form>
        </section>
    </div>
</body>
</html>