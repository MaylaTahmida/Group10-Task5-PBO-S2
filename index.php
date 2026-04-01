<?php 
//menghubungkan file process.php untuk memproses data form
include "includes/process.php"; 
?>

<!DOCTYPE html>
<html>
<head>

<!-- judul halaman -->
    <title>Form Input</title>

    <!-- menghubungkan file css untuk styling -->
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<!-- container utama untuk membungkus form -->
<div class="container">
    <h2>Form Input</h2>

    <!-- form menggunakan method post -->
    <form method="POST" class="form">

        <!-- baris input firstname dan lastname -->
        <div class="row">
            <div class="input-group">
                <!-- input firstname -->
                <input type="text" name="firstname" required>
                <label>First Name</label>
            </div>

            <div class="input-group">
                <!-- input Lastname -->
                <input type="text" name="lastname" required>
                <label>Last Name</label>
            </div>
        </div>

        <!-- baris input nomor telepon -->
        <div class="row">
            <div class="input-group full">
                <input type="text" name="phone" required>
                <label>Phone Number</label>
            </div>
        </div>

        <!-- baris input alamat -->
        <div class="row">
            <div class="input-group full">
                <textarea name="address" required></textarea>
                <label>Address</label>
            </div>
        </div>

        <!-- tombol submit untuk mengirim data -->
        <button type="submit" class="btn">Submit</button>

        <!-- tombol reset untuk menghapus input -->
        <button type="reset" class="btn reset">Reset</button>

    </form>

    <!-- menampilkan hasil input dari php -->
    <div class="hasil">
        <?php echo $hasil; ?>
    </div>
</div>

</body>
</html>