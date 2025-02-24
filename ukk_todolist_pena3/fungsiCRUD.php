<?php
include "function.php"; // Pastikan koneksi database sudah di-include

// ✅ 1. Fungsi Tambah Todo
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["tambahTodo"])) {
    if (!$con) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }

    // Sanitasi input
    $taskname = $con->real_escape_string(trim($_POST['taskname']));
    $status = $con->real_escape_string(trim($_POST['status']));
    $prioritas = $con->real_escape_string(trim($_POST['prioritas']));
    $tanggal = $con->real_escape_string(trim($_POST['tanggal']));

    // Simpan ke table todolist
    $sql = "INSERT INTO todolist (taskname, status, prioritas, tanggal) VALUES ('$taskname', '$status', '$prioritas', '$tanggal')";
    
    if ($con->query($sql) === TRUE) {
        header("Location: index.php?tambah_success=1");
        exit();
    } else {
        die("Error tambah: " . $con->error);
    }
}

// ✅ 2. Fungsi Edit Todo
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["editTodo"])) {
    if (!$con) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }

    $id = intval($_POST['id']); // Pastikan ID berupa angka
    $taskname = $con->real_escape_string(trim($_POST['taskname']));
    $status = $con->real_escape_string(trim($_POST['status']));
    $prioritas = $con->real_escape_string(trim($_POST['prioritas']));
    $tanggal = $con->real_escape_string(trim($_POST['tanggal']));

    // Query update
    $sql = "UPDATE todolist SET taskname='$taskname', status='$status', prioritas='$prioritas', tanggal='$tanggal' WHERE id=$id";

    if ($con->query($sql) === TRUE) {
        header("Location: index.php?edit_success=1");
        exit();
    } else {
        die("Error edit: " . $con->error);
    }
}


//fungsi hapus todolist
if(isset($_GET['hapus'])){
    $id = $_GET['hapus'];
    $query = mysqli_query($con,"DELETE  FROM todolist WHERE id='$id'");
    header("location: index.php");
}
?>
