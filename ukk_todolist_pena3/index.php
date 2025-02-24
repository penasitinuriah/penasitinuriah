
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Pastikan file yang di-include ada
if (!file_exists("function.php") || !file_exists("fungsiCRUD.php")) {
    die("Error: File yang diperlukan tidak ditemukan.");
}

// Sertakan file fungsi utama
include "function.php";
include "fungsiCRUD.php";
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TodoList App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
          rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
          crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <link rel="stylesheet" href="style.css">

</head>

<body>   
    <?php 
    if (file_exists("header.php")) {
        include "header.php"; 
    } else {
        echo "<p class='text-danger text-center'>Error: File header.php tidak ditemukan.</p>";
    }
    ?>
    
    <div class="container">
        <?php 
        if (file_exists("nav.php")) {
            include "nav.php"; 
        } else {
            echo "<p class='text-danger text-center'>Error: File nav.php tidak ditemukan.</p>";
        }

        if (file_exists("formAddTodo.php")) {
            include "formAddTodo.php"; 
        } else {
            echo "<p class='text-danger text-center'>Error: File formAddTodo.php tidak ditemukan.</p>";
        }
        ?>
        
        <div class="row">
            <!-- todolist -->
            <div class="col-md-8">
                <?php 
                if (file_exists("allTodo.php")) {
                    include "allTodo.php"; 
                } else {
                    echo "<p class='text-danger text-center'>Error: File allTodo.php tidak ditemukan.</p>";
                }
                ?>
            </div>
            
            <div class="col-md-8">
                <?php 
                if (file_exists("todobelumselesai.php")) {

                    include "todobelumselesai.php"; 
                } else {
                    echo "<p class='text-danger text-center'>Error: File todobelumselesai.php tidak ditemukan.</p>";
                }

                if (file_exists("todoselesai.php")) {
                    include "todoselesai.php"; 
                } else {
                    echo "<p class='text-danger text-center'>Error: File todoselesai.php tidak ditemukan.</p>";
                }
                ?>
        
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
            crossorigin="anonymous"></script>
</body>

</html>
