<?php include "includes/process.php"; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Input</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<div class="container">
    <h2>Form Input</h2>

    <form method="POST" class="form">

        <div class="row">
            <div class="input-group">
                <input type="text" name="firstname" required>
                <label>Firstname</label>
            </div>

            <div class="input-group">
                <input type="text" name="lastname" required>
                <label>Lastname</label>
            </div>
        </div>

        <div class="row">
            <div class="input-group full">
                <input type="text" name="phone" required>
                <label>Phone Number</label>
            </div>
        </div>

        <div class="row">
            <div class="input-group full">
                <textarea name="address" required></textarea>
                <label>Address</label>
            </div>
        </div>

        <button type="submit" class="btn">Submit</button>
        <button type="reset" class="btn reset">Reset</button>

    </form>

    <div class="hasil">
        <?php echo $hasil; ?>
    </div>
</div>

</body>
</html>