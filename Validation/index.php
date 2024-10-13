<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        session_start();

        $request = $_SESSION['request'] ?? [];
        unset($_SESSION['request']);

        $errors = [];
        if (isset($_SESSION['errors'])) {
            $errors = $_SESSION['errors'] ?? [];
            unset($_SESSION['errors']);
        }

        if (isset($_SESSION['success'])) {
            $success = $_SESSION['success'] ?? '';
            unset($_SESSION['success']);
        }

        if (isset($success) && !empty($success)) {
            echo '<p class="success">' . $success . '</p>';
        }

        else {
    ?>

    <form action="form.php" method="post">
        <div>
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" value="<?php echo $request['name'] ?? ''; ?>" required>
            
            <?php
                if (isset($errors['name'])) {
                    echo '<small class="error">' . $errors['name'] . '</small>';
                }
            ?>
        </div>
        <div>
            <label for="NIK">NIK</label>
            <input type="text" id="NIK" name="NIK" value="<?php echo $request['NIK'] ?? ''; ?>" required>

            <?php
                if (isset($errors['NIK'])) {
                    echo '<small class="error">' . $errors['NIK'] . '</small>';
                }
            ?>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="<?php echo $request['email'] ?? ''; ?>" required>

            <?php
                if (isset($errors['email'])) {
                    echo '<small class="error">' . $errors['email'] . '</small>';
                }
            ?>
        </div>
        <div>
            <label for="phone">Phone</label>
            <input type="text" id="phone" name="phone" value="<?php echo $request['phone'] ?? ''; ?>" required>

            <?php
                if (isset($errors['phone'])) {
                    echo '<small class="error">' . $errors['phone'] . '</small>';
                }
            ?>
        </div>

        <button type="submit">Submit</button>
    </form>

    <?php
        }
    ?>
</body>
</html>