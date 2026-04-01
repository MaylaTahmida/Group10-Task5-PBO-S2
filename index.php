<?php 
// Menghubungkan file process.php untuk memproses data form
include "includes/process.php"; 
?>

<!DOCTYPE html>
<html>
<head>
    <!-- Judul halaman -->
    <title>Form Input</title>

    <!-- Menghubungkan file CSS untuk styling -->
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<!-- Container utama untuk membungkus form -->
<div class="container">
    <h2>Form Input</h2>

    <!-- Form menggunakan method POST -->
    <form method="POST" class="form">

        <!-- Baris input firstname dan lastname -->
        <div class="row">
            <div class="input-group">
                <!-- Input Firstname -->
                <input type="text" name="firstname" required>
                <label>First Name</label>
            </div>

            <div class="input-group">
                <!-- Input Lastname -->
                <input type="text" name="lastname" required>
                <label>Last Name</label>
            </div>
        </div>

        <!-- Baris input nomor telepon -->
        <div class="row">
            <div class="input-group full">
                <!-- Input Phone Number -->
                <input type="text" name="phone" required>
                <label>Phone Number</label>
            </div>
        </div>

        <!-- Baris input alamat -->
        <div class="row">
            <div class="input-group full">
                <!-- Input Address -->
                <textarea name="address" required></textarea>
                <label>Address</label>
            </div>
        </div>

        <!-- Tombol submit untuk mengirim data -->
        <button type="submit" class="btn">Submit</button>

        <!-- Tombol reset untuk menghapus input -->
        <button type="reset" class="btn reset">Reset</button>

    </form>

    <!-- Menampilkan hasil input dari PHP -->
    <div class="hasil">
        <?php echo $hasil; ?>
    </div>
</div>

</body>
</html>