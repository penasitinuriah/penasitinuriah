<?php
include "function.php"; 

// Fungsi tambah todolist
if (isset($_POST["tambahTodo"])) {
    
    if (!$con) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }

    $taskname = $con->real_escape_string($_POST['taskname']);
    $status = $con->real_escape_string($_POST['status']);
    $prioritas = $con->real_escape_string($_POST['prioritas']);
    $tanggal = $con->real_escape_string($_POST['tanggal']);

    // Simpan ke table todolist
    $sql = "INSERT INTO todolist (taskname, status, prioritas, tanggal) VALUES ('$taskname', '$status', '$prioritas', '$tanggal')";
    $query = $con->query($sql);

    if ($query === true) {
        header("location: index.php");
        exit(); 
    } else {
        echo "
        <script>
            alert('Tambah Todolist Gagal: " . $con->error . "');
        </script>
        ";
    }
}

//fungsi Edit
if (isset($_POST["id"])) {
    $id = $_POST['id'];
    
    if (!$con) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }

    $taskname = $con->real_escape_string($_POST['taskname']);
    $status = $con->real_escape_string($_POST['status']);
    $prioritas = $con->real_escape_string($_POST['prioritas']);
    $tanggal = $con->real_escape_string($_POST['tanggal']);

    // Simpan ke table todolist
    $sql = "UPDATE todolist SET taskname='$taskname',status='$status',prioritas='$prioritas',tanggal='$tanggal' WHERE id='$id'";
    $query = $con->query($sql);

    if ($query === true) {
        header("location: index.php");
        exit(); 
    } else {
        echo "
        <script>
            alert('edit Todolist Gagal: " . $con->error . "');
        </script>
        ";
    }
}
//fungsi hapus todolist
if(isset($_GET['hapus'])){
    $id = $_GET['hapus'];
    $query = mysqli_query($con,"DELETE  FROM todolist WHERE id='$id'");
    header("location: index.php");
}
?>
