<?php 
    include("../connection.php");
    session_start();

    date_default_timezone_set("Asia/Jakarta"); //GMT +07

    $employee_id = $_SESSION['employee_id'];
    $tgl = date("Y-m-d");
    $clock_in = date("H:i:s");

    if(isset($_POST['absen'])) {
        //validasi absen, check absen
        $check_absensi = "SELECT tgl FROM attendances WHERE employee_id=$employee_id AND tgl='$tgl'";

        $check = $db->query($check_absensi);

        if($check->num_rows > 0) {
            header("location:index.php?message=anda sudah absen hari ini!");
        }else {
            $sql = "INSERT INTO attendances (id, employee_id, tgl, clock_in, clock_out) VALUES (NULL, '$employee_id', '$tgl', '$clock_in', NULL)";
    
            $result = $db->query($sql);
            if ($result === TRUE) {
                header("location:index.php?message=absen berhasil dilakukan");
            }else {
                header("location:index.php?message=absen gagal");
            }
        }
    }
?>